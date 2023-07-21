@extends('layouts.header', ['title' => 'home', 'activeLink' => 'home'])
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <br><br><br><br>
                        <h2 data-aos="fade-down">Welcome to <span>UpConstruction</span></h2>
                        <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url({{ asset('assets') }}/img/hero-carousel/hero-carousel-1.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets') }}/img/hero-carousel/hero-carousel-2.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets') }}/img/hero-carousel/hero-carousel-3.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets') }}/img/hero-carousel/hero-carousel-4.jpg)"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets') }}/img/hero-carousel/hero-carousel-5.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">
            <div class="container">

                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Minus hic non reiciendis ea possimus at quia.</h3>
                            <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos
                                ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam
                                nisi possimus ut delectus dicta.
                            <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos.
                                Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <img src="{{ asset('assets') }}/img/features-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!-- End Quote Form -->

                </div>

            </div>
        </section><!-- End Get Started Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Modisit</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Praesenti</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Explica</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Nostrum</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Voluptatem dignissimos provident</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('assets') }}/img/features-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Neque exercitationem debitis</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores
                                        quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets') }}/img/features-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Voluptatibus commodi accusamu</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores
                                        quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets') }}/img/features-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Omnis fugiat ea explicabo sunt</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets') }}/img/features-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">

            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    @php
                        $services = App\Models\Service::limit(2)->get();
                    @endphp

                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="fa-solid fa-mountain-city"></i>
                                </div>
                                <h2>{{ $service->titre }}</h2>
                                <h3>{{ $service->sous_titre }}</h3>
                                <p>{{ $service->description }}</p>
                                <a href="{{ route('service-details', $service->id) }} "
                                    class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('assets') }}/img/alt-services.jpg);" data-aos="zoom-in"
                        data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
                            temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut
                                    deserunt minus aut eligendi omnis</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non
                                    aspernatur odit amet. Et eligendi</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->



        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                @php
                    $projet = App\Models\projet::all();
                    $services_type = App\Models\Service::pluck('type', 'id');
                @endphp
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    {{-- filter project start --}}
                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($services_type as $serviceId => $serviceType)
                            <li data-filter=".filter-{{ $serviceId }}">{{ $serviceType }}</li>
                        @endforeach
                    </ul>
                    <!-- End Projects Filters -->

                    {{-- Project item start --}}
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">



                        @foreach ($projet as $projet)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $projet->service_id }}"">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('storage/' . $projet->icone) }}" class="img-fluid" alt=""
                                        style="width: 400px; height: 200px">
                                    <div class="portfolio-info">
                                        <h4>{{ $projet->titre }}</h4>
                                        <p>{{ $projet->Sous_titre }}</p>
                                        <a href="{{ asset('storage/' . $projet->icone) }}" title="Remodeling 1"
                                            data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="{{ route('project-details', $projet->id) }}" title="More Details"
                                            class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Projects Item -->

                    </div>

                </div>

            </div>
        </section>
        <!-- End Our Projects Section -->




        {{-- teams start --}}
        @include('teams')

        {{-- teams end --}}

    </main><!-- End #main -->
    <!-- End Footer -->
    @include('layouts.footer')

    @include('scroll')
@endsection
