@extends('layouts.master')

@section('content')
    <header class="page-header page-header-dark"
        style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-5">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            {{ $finds->nom }} {{ $finds->prenom }}
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
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Photo de Profile</div>
                    <div class="card-body">
                        <!-- Profile picture image-->
                        <div class="d-flex justify-content-center">
                            @if ($finds->photo == '')
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset('asset/assets/img/demo/user-placeholder.svg') }}" alt="logo user" />
                            @else
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset('storage') . '/' . $finds->photo }}" alt="logo user" />
                            @endif
                        </div>
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4 text-center">JPG ou PNG pas plus de 5 MB</div>
                        <!-- Profile picture upload button-->
                    </div>
                </div>
                <!-- Form Group (email address)-->
                <div class="d-flex mt-3">
                    @if (Auth::user()->role == 'Admin')
                        <a href="{{ url('delete_user/' . $finds->id) }}" class="btn btn-danger m-1">Supprimer membre</a>
                        <button class="btn btn-primary m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#formBackdroprole">Changer le role</button>
                    @endif
                </div>
                <div class="d-flex mt-3">
                    @if (Auth::user()->role == 'Admin')
                        <a href="" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#formBackdropcotis">Ajouter une cotisation</a>
                    @endif
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detail du membre</div>
                    <div class="card-body">
                        <form action="{{ route('gestion_membres.update', [$finds->id]) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <!-- Form Row-->
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="nom" value="{{ $finds->nom }}">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" name="prenom" value="{{ $finds->prenom }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Prénom 2 (facultatif)</label>
                                    <input type="text" class="form-control" name="prenom2" value="{{ $finds->prenom2 }}">
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
                                    <input type="text" class="form-control" name="pere" value="{{ $finds->pere }}">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Mère</label>
                                    <input type="text" class="form-control" name="mere" value="{{ $finds->mere }}">
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
                                    <input type="text" class="form-control" name="conjoint"
                                        value="{{ $finds->conjoint }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Téléphone WhatSapp</label>
                                    <input type="text" class="form-control" name="telephone"
                                        value="{{ $finds->telephone }}">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $finds->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Date naissance</label>
                                    <input type="date" class="form-control" name="date_naiss"
                                        value="{{ $finds->date_naiss }}">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Statut (professionel)</label>
                                    <input type="text" class="form-control" name="statut"
                                        value="{{ $finds->statut }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" name="pays"
                                        value="{{ $finds->pays }}">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Ville</label>
                                    <input type="text" class="form-control" name="ville"
                                        value="{{ $finds->ville }}">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Quartier</label>
                                    <input type="text" class="form-control" name="quartier"
                                        value="{{ $finds->quartier }}">
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
                                    <input type="number" class="form-control" name="montant"
                                        value="{{ $finds->montant }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal password -->
    <div class="modal fade" id="formBackdroprole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Changer le role du membre
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form method="POST" action="{{ url('change_role/' . $finds->id) }}">
                            @csrf
                            <div class="p-2 m-1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label>Role</label>
                                            <select class="form-control" name="role">
                                                <option value="Admin">Admin</option>
                                                <option value="Membre">Membre</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-success">Changer</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal password -->
    <div class="modal fade" id="formBackdropcotis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ajouter une cotisation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{ route('gestion_cotisations.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Membre</label>
                                    <input type="text" value="{{ $finds->telephone }}" class="form-control" readonly>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Année</label>
                                    <select name="annees_id" class="form-control">
                                        @foreach ($annees as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Période</label>
                                    <select name="periode" class="form-control">
                                        <option value="">Selectionner</option>
                                        <option value="Janvier">Janvier</option>
                                        <option value="Fevrier">Fevrier</option>
                                        <option value="Mars">Mars</option>
                                        <option value="Avril">Avril</option>
                                        <option value="Mai">Mai</option>
                                        <option value="Juin">Juin</option>
                                        <option value="Juillet">Juillet</option>
                                        <option value="Aout">Aout</option>
                                        <option value="Semptembre">Semptembre</option>
                                        <option value="Octobre">Octobre</option>
                                        <option value="Novembre">Novembre</option>
                                        <option value="Decembre">Decembre</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Nbr de mois</label>
                                    <input type="number" class="form-control" name="nbr_mois" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <label>Montant</label>
                                    <input type="number" class="form-control" name="montant" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Autres information</label>
                                    <input type="text" class="form-control" name="autres_info">
                                </div>
                            </div>
                            <input type="text" class="form-control" name="type" value="mensuelle" hidden>
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
@endsection
