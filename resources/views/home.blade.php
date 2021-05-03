@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">{{ __('Tu escritorio literario') }}</div>
                <div>
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" data-toggle="tab" href="#feed-tab">Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile-tab">Mi Perfil</a> <!-- ruta absoluta -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#favorites-tab">Favoritos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings-tab">Configuracion</a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="feed-tab" role="tabpanel">
                            <h4>Bienvenido, {{ auth()->user()->name }} </h4>
                            <p>Bienvenido a la mejor encicopledia donde podras conocer autores y leer gratis las mejores obras</p>
                            <a href="http://127.0.0.1:8000/autores" class="btn btn-primary mt-1 mb-3">Quiero conocer autores</a>
                        </div>
                        <div class="tab-pane fade show" id="profile-tab" role="tabpanel">
                            <h4>Bienvenido, HOLA COMO ESTAS </h4>
                            <p>Perfil a la mejor encicopledia donde podras conocer autores y leer gratis las mejores obras</p>
                            <a href="http://127.0.0.1:8000/autores" class="btn btn-primary mt-1 mb-3">Quiero conocer autores</a>
                        </div>
                        <div class="tab-pane fade show" id="favorites-tab" role="tabpanel">
                            <h4>Bienvenido,  </h4>
                            <p>Favorites a la mejor encicopledia donde podras conocer autores y leer gratis las mejores obras</p>
                            <a href="http://127.0.0.1:8000/autores" class="btn btn-primary mt-1 mb-3">Quiero conocer autores</a>
                        </div>
                        <div class="tab-pane fade show" id="settings-tab" role="tabpanel">
                            <h4>, {{ auth()->user()->name }} </h4>
                            <p>Configuracion a la mejor encicopledia donde podras conocer autores y leer gratis las mejores obras</p>
                            <a href="http://127.0.0.1:8000/autores" class="btn btn-primary mt-1 mb-3">Quiero conocer autores</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>




</div>
@endsection
