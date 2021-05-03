@extends('layouts.app') <!-- Extendes del archivo app.blade.php -->

{{-- con @section y @yield podemos incluir o no codigo --}}
{{-- Otro modo es con @stack y @push, mas avanzado --}}

@section('css')

<link rel="stylesheet" href="estilosdePrueba.css">

@endsection

@section('content')

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
                <div class="row justify-content-center text-center mb-5">
                    <h2 class="col-lg-10 title">Los <span style="text-decoration: underline;">Libros</span> mas reconocidos</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row info-row">
                            <div class="col-lg-12 col-sm-12">
                                <p class="text">La literatura argentina, es decir, el conjunto de obras literarias producidas por escritores de la Argentina, es una de las más prolíficas, relevantes e influyentes del idioma castellano y ocupa un lugar destacado dentro de la literatura en español y de la literatura universal. <br><br>

                                 </p>
                            </div>
                        </div>
                    </div>

                </div>
                                <!-- Buscador tomado de https://www.bootdey.com/snippets/view/General-Search-Results#css, falta agregar el css-->
                                <div class="row">
                                    <div class="col-lg-12 card-margin mb-5">
                                        <div class="card search-form">
                                            <div class="card-body p-0">
                                                <form id="search-form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row no-gutters">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                        <option>Genero</option>
                                                                        <option>Fantastico</option>
                                                                        <option>Realista</option>
                                                                        <option>Ensayo</option>
                                                                        <option>Contemporaneo</option>
                                                                        <option>Historico</option>
                                                                        <option>Terror</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                                                    <input type="text" placeholder="Busca tu autor favorito o elegi por genero..." class="form-control" id="search" name="search">
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
                        <img class="card-img-top" src="/images/los-lanzallamas.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Los lanzallamas</h5>
                        <p class="card-text">Roberto Arlt</p>
                        <a href="/autores" class="btn btn-outline mt-1 mb-3">Conocer mas</a>
                        <a href="/librerias" class="btn btn-secondary mt-1 mb-3">Comprar</a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="/images/la-laguna-nenufares-victoria-ocampo-cover.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">La Laguna de los Nenufares</h5>
                        <p class="card-text">Victoria Ocampo</p>
                        <a href="/autores" class="btn btn-outline mt-1 mb-3">Conocer mas</a>
                        <a href="/librerias" class="btn btn-secondary mt-1 mb-3">Comprar</a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="/images/ficciones.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Ficciones</h5>
                        <p class="card-text">Jorge Luis Borges</p>
                        <a href="/autores" class="btn btn-outline mt-1 mb-3">Conocer mas</a>
                        <a href="/librerias" class="btn btn-secondary mt-1 mb-3">Comprar</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Repitio un footer -->

@endsection
