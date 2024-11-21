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
                            Galerie des membres
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
                        @foreach ($collection as $item)
                            @if ($item->photo !== '')
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-12 mb-3">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset('storage') . '/' . $item->photo }}" class="card-img-top" alt="images">
                                            <div class="card-body">
                                              <h5 class="card-title">{{ $item->nom }} {{ $item->prenom }}</h5>
                                              <h4>{{ $item->pays }}</h4>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
