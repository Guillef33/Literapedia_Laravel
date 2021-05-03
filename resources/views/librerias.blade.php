@extends('layouts.app') <!-- Extendes del archivo app.blade.php -->

{{-- con @section y @yield podemos incluir o no codigo --}}
{{-- Otro modo es con @stack y @push, mas avanzado --}}

@section('css')

<link rel="stylesheet" href="estilosdePrueba.css">

@endsection

@section('content') <!-- Traes esta porcion de codigo que esta en el yield -->

<!-- Aca quisiera que vaya el navbar de la home -->

<!-- Aca deberia ir tambien un sign out
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
-->

        <section id="autores-section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <h2 class="col-lg-10 title"><span style="text-decoration: underline;">El lugar ideal</span> para comprar tu proximo libro</h2>
                </div>

                <!-- Buscador tomado de https://www.bootdey.com/snippets/view/General-Search-Results#css, falta agregar el css-->
                <div class="row">
                    <div class="col-lg-12 card-margin mt-5 mb-5">
                        <div class="card search-form">
                            <div class="card-body p-0">
                                <form id="search-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row no-gutters">
                                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Barrio</option>
                                                        <option>Palermo</option>
                                                        <option>Villa Crespo</option>
                                                        <option>Belgrano</option>
                                                        <option>Barrio Norte</option>
                                                        <option>Recoleta</option>
                                                        <option>San Telmo</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                                    <input type="text" placeholder="Busca la libreria mas cercana a tu casa..." class="form-control" id="search" name="search">
                                                </div>
                                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                                    <button type="submit" class="btn btn-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="/images/ateneo.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">El ateneo</h5>
                        <p class="card-text">Escritor urbano de la decada del 20 y 30. Vivio la transformacion de Buenos Aires y la narro de manera dramatica. </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/autores/roberto-arlt" class="btn btn-outline mt-1 mb-3">Conocer mas</a>
                        <a href="/libros/roberto-arlt" class="btn btn-secondary mt-1 mb-3">Ver Libros</a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="/images/de-avila.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">De Avila</h5>
                        <p class="card-text">La figura femenina mas importante de las letras argentinas. Dirigio revistas, escribio cuentos y novelas y potencio como nadie el sector dandole alcance internacional. </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/autores/victoria-ocampo" class="btn btn-outline mt-1 mb-3">Conocer mas</a>
                        <a href="/libros/victoria-ocampo" class="btn btn-secondary mt-1 mb-3">Ver Libros</a>


                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="/images/guadalquivir.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Guadalquivir</h5>
                        <p class="card-text">El escritor mas grande que dio el pais. Un sonador de las letras que se dedico a ampliar las realidades de todos. Cultivo el genero fantastico.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/autores/jorge-luis-borges" class="btn btn-outline mt-1 mb-3">Conocer mas</a>
                        <a href="/libros/jorge-luis-borges" class="btn btn-secondary mt-1 mb-3">Ver Libros</a>


                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

@section('scripts') <!-- Si necesito incluir un script particular solo para esta pagina lo agregamos aca -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


@endsection
