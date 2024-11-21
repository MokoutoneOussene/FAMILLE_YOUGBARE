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
                    Liste des dépenses
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
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Année</th>
                                    <th scope="col">Période</th>
                                    <th scope="col">Motif</th>
                                    <th scope="col">Montant</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collection as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->Annee->libelle }}</td>
                                        <td>{{ $item->periode }}</td>
                                        <td>{{ $item->motif }}</td>
                                        <td>{{ $item->montant }}</td>
                                        <td class="text-center d-flex">
                                            <a href="{{ route('gestion_depenses.edit', [$item->id]) }}">
                                                <i class="me-2 text-green" data-feather="edit"></i>
                                            </a>
                                            <a href="{{ url('delete_depense/' . $item->id) }}" class="text-danger ml-3">
                                                X
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-lg-9 col-md-6 p-3" style="background: rgb(50, 49, 49)">
                                <h4 class="text-light"><strong>TOTAL</strong></h4>
                            </div>
                            <div class="col-lg-3 col-md-6 p-3 bg-danger">
                                <h4 class="text-light"><strong>{{$total}} FCFA</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
