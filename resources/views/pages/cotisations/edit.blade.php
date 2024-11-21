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
                            Modification de la cotisation N° : {{ $finds->id }}
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
                                <form action="{{ route('gestion_cotisations.update', [$finds->id]) }}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12">
                                            <label>Membre</label>
                                            <input type="text" class="form-control"
                                                value="{{ $finds->User->nom }} {{ $finds->User->prenom }}">
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
                                            <label>Montant</label>
                                            <input type="number" class="form-control" name="montant"
                                                value="{{ $finds->montant }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12">
                                            <label>Nbr de mois</label>
                                            <input type="number" class="form-control" name="nbr_mois"
                                                value="{{ $finds->nbr_mois }}">
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <label>Motif de cotisation</label>
                                            <input type="text" class="form-control" name="motif"
                                                value="{{ $finds->motif }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label>Autres information</label>
                                            <input type="text" class="form-control" name="autres_info"
                                                value="{{ $finds->autres_info }}">
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-success mr-2">Modifier</button>
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