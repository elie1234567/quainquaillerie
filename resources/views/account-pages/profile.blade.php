<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
            <div class="pt-7 pb-6 bg-cover" style="background-image: url('../assets/img/header-orange-purple.jpg'); background-position: bottom;"></div>
            <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet" crossorigin="anonymous">
            <title>Liste des users</title>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 id="ewa" style="text-align: center;">🤷‍♂️ Liste des fournisseurs</h1>
                        <br>
                        <!-- <a type="button" href="" name="addetudiant" id="addetudiant" class="btn btn-primary btn-lg btn-block">ajouter membre</a> -->

                        <br><br>
                            <table id="lek" class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>🔑 ID</th>
                                        <th>👳‍♀️ Nom</th>
                                        <th>📄email</th>
                                        <th>📳phone</th>
                                        <th>adresse</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fournisseurs as $fournisseur)
                                        <tr> 
                                            <td>{{ $fournisseur->id }}</td>
                                            <td>{{ $fournisseur->nom }}</td>
                                            <td>{{ $fournisseur->email }}</td>
                                            <td>{{ $fournisseur->telephone }}</td>
                                            <td>{{ $fournisseur->adresse }}</td>
                                            <td>
                                                <a href="/updateetudiant/{{ $fournisseur->id }}" class="btn btn-success">voir produit de fournisseur</a>
                                                <!-- <form action="{{ route('pro', $fournisseur->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Supprimer</button>
                                                </form> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- <form action="etudiant/rechercher" method="POST">
                            @csrf
                            <div class="col">
                                <input name="textRecherche" id="textRecherche" class="form-control" type="text" placeholder="Rechercher...">
                            </div>
                            <br>
                            <div class="col">
                                <input type="submit" class="btn btn-success" name="rechercher" value="Rechercher">
                            </div>
                        </form> -->
                        <br>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>
</x-app-layout>
