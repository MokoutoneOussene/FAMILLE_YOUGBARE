@extends('layouts.master')

@section('content')
    @include('require.header')
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            @if (Auth::user()->role == 'Admin')
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-lg fw-bold">Formulaire d'ajout de membre</div>
                                    <div class="text-white-75 small">Veuillez renseignez vos informations sur le formulaire
                                        d'ajout de membres</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="users"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('gestion_membres.create') }}">Voir le
                                formulaire</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-lg fw-bold">Tableau de liste des membres</div>
                                <div class="text-white-75 small">Vous verrez la liste des membres sur le tableau</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="user"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('gestion_membres.index') }}">Voir la liste</a>
                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card lift h-100" style="background: linear-gradient(90deg, rgb(181, 233, 233) 0%, rgb(233, 85, 80) 100%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center text-center">
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-2">
                                        <h6 class="text-uppercase">TOTAL DES COTISATIONS</h6>
                                        <div class="text-muted small">
                                            <h1 class="text-primary mt-5" style="font-size: 20px; font-weight: bold;">{{ $total_cotisation }} FCFA</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-2">
                                        <h6 class="text-uppercase">TOTAL DES DEPENSES</h6>
                                        <div class="text-muted small">
                                            <h1 class="text-primary mt-5" style="font-size: 20px; font-weight: bold;">{{ $total_depense }} FCFA</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-2">
                                        <h6 class="text-uppercase">TOTAL EN CAISSE</h6>
                                        <div class="text-muted small">
                                            <h1 class="text-primary mt-5" style="font-size: 20px; font-weight: bold;">{{ $caisses }} FCFA</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
