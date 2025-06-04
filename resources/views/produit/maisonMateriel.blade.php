<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                        <div class="full-background" style="background-image: url('../assets/img/img-3.jpg')"></div>
                        <div class="card-body text-start p-4 w-100">
                            <h3 class="text-white mb-2">les produits en bonne qualité 🔥</h3>
                            <p class="mb-4 font-weight-semibold">
                                Produit pour  électrique.
                            </p>
                            <button type="button" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="d-block me-2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.61036 4.52196C6.34186 4.34296 5.99664 4.32627 5.71212 4.47854C5.42761 4.63081 5.25 4.92731 5.25 5.25V8.75C5.25 9.0727 5.42761 9.36924 5.71212 9.52149C5.99664 9.67374 6.34186 9.65703 6.61036 9.47809L9.23536 7.72809C9.47879 7.56577 9.625 7.2926 9.625 7C9.625 6.70744 9.47879 6.43424 9.23536 6.27196L6.61036 4.52196Z" />
                                    </svg>
                                </span>
                                <span class="btn-inner--text">Watch more</span>
                            </button>
                            <img src="../assets/img/3d-cube.png" alt="3d-cube" class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <h1 id="ewa" style="text-align: center;"> 🏪matériels pour la maison🏪</h1>
                <br><br><br>
                <form action="" method="POST">
                    @csrf
                    <div class="col">
                        <input name="textRechercheee" id="textRechercheee" class="form-control" type="text" placeholder="Rechercher...">
                    </div>
                    <br>
                    <div class="col">
                        <input type="submit" class="btn btn-success" name="rechercher" value="Rechercher">
                    </div>
                </form>
                <div class="card-deck">
                    @foreach ($maison as $value)
                    <div class="card" id="el">
                        <img class="card-img-top" style="height: 290px; width: 290px;" src="data:image/jpeg;base64,{{ base64_encode($value->imagem) }}" alt="Image maison">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->articlem }}</h5>
                            <p class="card-text">Quantité: {{ $value->quantitem }}</p>
                            <p class="card-text">Prix: {{ $value->prixem }}</p>
                            <button type="button" 
                                        class="btn btn-success btn-edit"
                                         data-id="<?php echo e($value->idm); ?>"
                                         data-name="<?php echo e($value->articlem); ?>"
                                         data-email="<?php echo e($value->quantitem); ?>"
                                        data-phone="<?php echo e($value->prixem); ?>"
                                        data-location="<?php echo e($value->imagem); ?>">
                                        commande
                            </button>
                            <a href="#" class="btn btn-danger">Annuler</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

      <!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="editUserForm" action="{{ route('storeMaison') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">tongasoa ianao client - {{ Auth::user()->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idproduit">Id produit</label>
                        <input type="text" class="form-control" id="idproduit" name="id">
                    </div> 
                    <div class="form-group">
                        <label for="Nomproduit">Nom de produit</label>
                        <input type="text" class="form-control" id="Nomproduit" name="name">
                    </div>
                    <div class="form-group">
                        <label for="quantiteP">Quantité</label>
                        <input type="number" name="quantiteP" id="quantiteP" class="form-control" value="{{ old('quantiteP') }}">
                        @if ($errors->has('quantiteP'))
                            <span class="text-danger">{{ $errors->first('quantiteP') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="prixP">Prix de produit</label>
                        <input type="text" class="form-control" id="prixP" name="prixP">
                    </div>
                    <div class="form-group">
                        <label for="date">date de commande</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="Idclient">Id client</label>
                        <input type="text" class="form-control" id="Idclient" name="client" value="{{ Auth::user()->id }}">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">commander</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CSS et JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<link href="{{ asset('elie/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-2EEG/6jmNc/zlYUU4CkxqJwUJfJ4Kbt7WdZlC2nJCGe2pfqKNSfi68kxxkVY8+s" crossorigin="anonymous"></script>

<!-- Styles CSS -->
<style>
    #el {
        border: 1px solid white;
        padding: 10px;
        margin: 10px;
        float: left;
        position: relative;
        margin-top: 200px;
        border-radius: 5px;
        cursor: pointer;
        color: black;
        transition: transform 0.3s ease;
        border-color: black;
        border-style: double;
        border-radius: 35px;
        border: 10px solid rgb(2, 10, 52);
    }

    body {
        background-image: url('{{ asset('imag/bg.jpg') }}');
        position: relative;
        background-repeat: no-repeat;
        background-size: 100%;
        font-size: 25px;
        text-decoration: double;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const editButtons = document.querySelectorAll('.btn-edit');
    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            const a = this.getAttribute('data-id');
            const b = this.getAttribute('data-name');
            const c = this.getAttribute('data-email');
            const d = this.getAttribute('data-phone');
            document.getElementById('idproduit').value = a;
            document.getElementById('Nomproduit').value = b;
            document.getElementById('quantiteP').value = c;
            document.getElementById('prixP').value = d;
//            


            $('#editUserModal').modal('show');
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('editUserForm').addEventListener('submit', function(event) {
            var quantitee = parseInt(document.getElementById('quantiteP').value);
            if (quantitee <= 0) {
                event.preventDefault();
                alert('Le produit est indisponible.');
            }
        });
    });
    
</script>

</x-app-layout>
