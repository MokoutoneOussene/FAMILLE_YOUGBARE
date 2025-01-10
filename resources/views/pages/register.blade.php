<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    @yield('title')
    <title>Famille Yougbare</title>
    @yield('style')
    @include('partials.style')
</head>

<body>
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Basic login form-->
                <div class="card shadow-lg border-0 rounded-lg mt-4">
                    <div class="card-header d-flex justify-content-between">
                        <a href="{{ route('authentification') }}" class="btn btn-dark">Retour</a>
                        <h3 class="fw-light mt-3"><strong>DEVENEZ MEMBRE</strong></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gestion_membres.store') }}" method="POST">
                            @csrf
                            <input type="text" class="form-control" name="role" value="Membre" hidden>
                            <input type="text" class="form-control" name="active" value="0" hidden>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="nom" value="YOUGBARE" readonly>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" name="prenom" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Prénom 2 (facultatif)</label>
                                    <input type="text" class="form-control" name="prenom2">
                                </div>
                                <div class="col-lg-6 col-md-12" required>
                                    <label>Sexe</label>
                                    <select class="form-control" name="sexe">
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Père</label>
                                    <input type="text" class="form-control" name="pere">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Mère</label>
                                    <input type="text" class="form-control" name="mere">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Situation matrimoniale</label>
                                    <select class="form-control" name="situation">
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Marie (e)">Marie (e)</option>
                                        <option value="Divorce (e)">Divorce (e)</option>
                                        <option value="Veuf (ve)">Veuf (ve)</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Conjoint (e)</label>
                                    <input type="text" class="form-control" name="conjoint">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Téléphone WhatSapp</label>
                                    <input type="text" class="form-control" name="telephone" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Date naissance</label>
                                    <input type="date" class="form-control" name="date_naiss">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Statut (professionel)</label>
                                    <input type="text" class="form-control" name="statut">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" name="pays">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Ville</label>
                                    <input type="text" class="form-control" name="ville">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Quartier</label>
                                    <input type="text" class="form-control" name="quartier">
                                </div>
                                <div class="col-lg-6 col-md-12 mt-5">
                                    <div class="mb-3">
                                        <label class="container">Cotisation ?
                                            <input type="checkbox" name="cautisation" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <label>Montant</label>
                                    <input type="number" class="form-control" name="montant">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-success mr-2">Devenez membre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @include('partials.script')
</body>

</html>
