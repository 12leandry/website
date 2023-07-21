@extends('layouts.header', ['title' => 'Services', 'activeLink' => ''])

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
                <br><br><br>
                <h2>A propos de nos projet </h2>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Voluptates expedita voluptatum esse dolorum temporibus nulla, fuga modi quasi ducimus,
                    quo tenetur, accusamus reprehenderit neque nihil libero ut officiis? Accusantium, quas?
                </p>
                <p class="text-white">Si vous etes interesse pas un projet ou un service</p>
            </div>
            <a href="{{ route('Contact') }}" class="btn btn-lg btn-outline-danger btn-primary text-white bi bi-telephone-inbound">Contactez Nous </a>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Projet Details Section ======= -->
        <section id="project-details" class="project-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-between gy-4 mt-4">
                    <h2>{{ $projet->titre }}</h2>
                    <p>
                        {{ $projet->sous_titre }}
                    </p>

                    <div class="position-relative h-30 col-lg-6">
                        <div class="slides-1 portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets') }}/img/projects/remodeling-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets') }}/img/projects/construction-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets') }}/img/projects/design-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets') }}/img/projects/repairs-1.jpg" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong> <span> {{ $projet->service->type }} </span></li>
                                <li><strong>Client</strong> <span>{{ $projet->client_name }}</span></li>
                                <li><strong>Project date</strong> <span>{{ $projet->projet_date }}</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 text-center">
                    <div class="portfolio-description">


                        <div class="testimonial-item text-cemter">
                            <p>
                                {{ $projet->description_paragraphe_1 }}
                            </p>
                            <p>
                                {{ $projet->description_paragraphe_2 }}
                            </p>
                            <p>
                                {{ $projet->description_paragraphe_3 }}
                            </p>
                            {{-- <div>
                                <img src="{{asset('assets')}}/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div> --}}
                        </div>
                    </div>
                </div>



            </div>
        </section><!-- End Projet Details Section -->

        {{-- collaborateur  start --}}

        @include('teams')

        {{-- collaborateur end --}}

    </main><!-- End #main -->

    @include('layouts.footer')
    @include('scroll')
@endsection
