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
                    Liste des années de cotisation
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
                                    <th scope="col">Code</th>
                                    <th scope="col">Libelle</th>
                                    <th scope="col">Statut</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collection as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->libelle }}</td>
                                        <td>{{ $item->statut }}</td>
                                        <td class="d-flex justify-content-center">
                                            <form method="POST" action="{{ url('ouverte_statut/' . $item->id) }}">
                                                @csrf
                                                <button class="dropdown-item" type="submit">
                                                    Ouvrir
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ url('fermer_statut/' . $item->id) }}">
                                                @csrf
                                                <button class="dropdown-item" type="submit">
                                                    Fermer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
