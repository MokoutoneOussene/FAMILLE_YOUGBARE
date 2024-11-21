@extends('layouts.master')

@section('content')
    <header class="page-header page-header-dark pb-10"
        style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-5">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Formulaire d'ajout d'un membre
                        </h1>
                        <div class="page-header-subtitle mt-5">
                            <a class="btn btn-light" href="{{ route('dashboard') }}">
                                Retour
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-lg-12">
                <!-- Tabbed dashboard card example-->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Tabbed dashboard card example-->
                                <form action="{{ route('gestion_membres.store') }}" method="POST">
                                    @csrf
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
                                            <input type="text" class="form-control" name="pere" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <label>Mère</label>
                                            <input type="text" class="form-control" name="mere" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12">
                                            <label>Situation matrimoniale</label>
                                            <select class="form-control" name="situation" required>
                                                <option value="Célibataire">Célibataire</option>
                                                <option value="Marie (e)">Marie (e)</option>
                                                <option value="Divorce (e)">Divorce (e)</option>
                                                <option value="Veuf (ve)">Veuf (ve)</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <label>Conjoint (e)</label>
                                            <input type="text" class="form-control" name="conjoint" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12">
                                            <label>Téléphone WhatSapp</label>
                                            <input type="text" class="form-control" name="telephone" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12">
                                            <label>Date naissance</label>
                                            <input type="date" class="form-control" name="date_naiss" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <label>Statut (professionel)</label>
                                            <input type="text" class="form-control" name="statut" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-3 col-md-12">
                                            <label>Quartier</label>
                                            <input type="text" class="form-control" name="quartier" required>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <label>Pays</label>
                                            <input type="text" class="form-control" name="pays" required>
                                        </div>
                                        <div class="col-lg-3 col-md-12 mt-5">
                                            <div class="mb-3">
                                                <label class="container">Cotisation ?
                                                    <input type="checkbox" name="cautisation"
                                                        value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12">
                                            <label>Montant</label>
                                            <input type="number" class="form-control" name="montant">
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-success mr-2">Enregistrer</button>
                                        <button type="reset" class="btn btn-danger">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
