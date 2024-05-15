        @extends('layouts.main')
        @section('title', 'Legendary Motorsport')
        @section ('content')
    <section id="contente">
            <div class="container">
                <!-- Botões de filtrar -->
                <div class="row row-cols-2 row-cols-sm-5 g-2">
                    <div class="col">
                        <button type="button" class="btn btn-danger w-100 px-2 rounded-1">EM DESTAQUE</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger w-100 px-2 rounded-1">2 PORTAS</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger w-100 px-2 rounded-1">4 PORTAS</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger w-100 px-2 rounded-1">MOTOS</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger w-100 px-2 rounded-1">ESPECIAL</button>
                    </div>
                </div>
            </div>
            <!-- Seção dos aunúncios -->
            <div class="container text-center">
                <div class="row row-cols-1 row-cols-md-3 py-2">
                    <div class="col">
                        <div class="card text-end rounded-0" style="width:26 rem;">
                            <img src="https://place-hold.it/300x200" class="card-img-top" alt="...">
                            <div class="card-body rounded-0">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text text-start">Esto é um anúncios lkmijopi</p>
                                    </div>
                                    <div class="col">
                                        <a href="/details_car" class="btn btn-danger">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-end rounded-0" style="width:26 rem;">
                            <img src="https://place-hold.it/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/details_car" class="btn btn-danger btn-lg">Go somewhere</a>
                                <p class="card-text float-start">Esto é um anúncios lkmijopi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-end rounded-0" style="width:26 rem;">
                            <img src="https://place-hold.it/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/details_car" class="btn btn-danger btn-lg">Go somewhere</a>
                                <p class="card-text float-start">Esto é um anúncios lkmijopi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
                    <div class="col">
                        <div class="card text-end rounded-0" style="width:26 rem;">
                            <img src="https://place-hold.it/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/details_car" class="btn btn-danger btn-lg">Go somewhere</a>
                                <p class="card-text float-start">Esto é um anúncios lkmijopi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-end rounded-0" style="width:26 rem;">
                            <img src="https://place-hold.it/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/details_car" class="btn btn-danger btn-lg">Go somewhere</a>
                                <p class="card-text float-start">Esto é um anúncios lkmijopi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="card text-end rounded-0" style="width:26 rem;">
                            <img src="https://place-hold.it/300x200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/details_car" class="btn btn-danger btn-lg">Go somewhere</a>
                                <p class="card-text float-start">Esto é um anúncios lkmijopi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
            @endsection