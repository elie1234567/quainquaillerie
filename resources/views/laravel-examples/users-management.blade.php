<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
            <div class="pt-7 pb-6 bg-cover" style="background-image: url('../assets/img/header-orange-purple.jpg'); background-position: bottom;"></div>
            <script src="js/jquery-3.4.1.min.js"></script>
            <!-- Inclure jQuery -->
               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Inclure Bootstrap JS après jQuery -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-2EEG/6jmNc/zlYUU4CkxqJwUJfJ4Kbt7WdZlC2nJCGe2pfqKNSfi68kxxkVY8+s" crossorigin="anonymous"></script>
               <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet" crossorigin="anonymous">
            <title>Liste des clients</title>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 id="ewa" style="text-align: center;">🤷‍♂️ Liste des clients</h1>
                        <br>
                        <!-- <a type="button" href="/ajouter" name="addetudiant" id="addetudiant" class="btn btn-primary btn-lg btn-block">ajouter membre</a> -->
                        <br><br>

                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>
                            </div>
                        <?php endif; ?>

                        <form action="{{ route('rechercher') }}" method="POST">
                            <?php echo csrf_field(); ?> 
                            <div class="col">
                                <input name="textRecherche" id="textRecherche" class="form-control" type="text" placeholder="Rechercher...">
                            </div>
                            <br>
                            <div class="col">
                                <input type="submit" class="btn btn-success" name="rechercher" value="Rechercher">
                            </div>
                        </form>
                        <br>

                        <table id="lek" class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>🔑 ID</th>
                                    <th>👳‍♀️ Nom</th>
                                    <th>📄 Email</th>
                                    <th>📳 Phone</th>
                                    <th>Adresse</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->phone); ?></td>
                                        <td><?php echo e($user->location); ?></td>
                                        <td>
                                            <button type="button" 
                                                    class="btn btn-success btn-edit"
                                                    data-id="<?php echo e($user->id); ?>"
                                                    data-name="<?php echo e($user->name); ?>"
                                                    data-email="<?php echo e($user->email); ?>"
                                                    data-phone="<?php echo e($user->phone); ?>"
                                                    data-location="<?php echo e($user->location); ?>">
                                                Modifier
                                            </button>
                                            <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editUserForm" action="{{ route('users.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModalLabel">Modifier utilisateur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="userId">
                        <div class="form-group">
                            <label for="userName">Nom</label>
                            <input type="text" class="form-control" id="userName" name="name">
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control" id="userEmail" name="email">
                        </div>
                        <div class="form-group">
                            <label for="userPhone">Phone</label>
                            <input type="text" class="form-control" id="userPhone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="userLocation">Adresse</label>
                            <input type="text" class="form-control" id="userLocation" name="location">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const editButtons = document.querySelectorAll('.btn-edit');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');
                const userName = this.getAttribute('data-name');
                const userEmail = this.getAttribute('data-email');
                const userPhone = this.getAttribute('data-phone');
                const userLocation = this.getAttribute('data-location');

                document.getElementById('userId').value = userId;
                document.getElementById('userName').value = userName;
                document.getElementById('userEmail').value = userEmail;
                document.getElementById('userPhone').value = userPhone;
                document.getElementById('userLocation').value = userLocation;

                $('#editUserModal').modal('show');
            });
        });
    });
    </script>
</x-app-layout>
