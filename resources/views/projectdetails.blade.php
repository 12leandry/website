@extends('layouts.header', ['title' => 'Services', 'activeLink' => ''])

@section('content')
    <main id="main"

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
                <br><br><br>
                <h2>A propos de nos projet </h2>
                <p class="text-white">Explorez nos travaux dans l'électricité,
                    la climatisation, la plomberie, le montage
                   d'ascenseurs, la soudure et l'électricité industrielle.
                    Chaque projet illustre notre engagement envers
                   l'excellence et l'innovation.
                </p>
                <a data-aos="fade-up" data-aos-delay="200" href="{{ route('Contact') }}"
                    class="btn btn-lg  btn-success text-white "> <i class="bi bi-whatsapp"></i> Contactez Nous</a>
                {{-- <a href="{{ route('Contact') }}"
                    class="btn btn-lg btn-outline-danger btn-primary text-white bi bi-whatsapp"> </a> --}}

                {{-- <p class="text-white">Si vous etes interesse pas un projet ou un service</p> --}}
            </div>
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
                                @foreach ($projet->icones as $icone)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $icone->path) }}" alt="Project Image">
                                    </div>
                                @endforeach
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
                <div class="col-lg-12 text-center mt-5">
                    <div class="portfolio-description">


                        <div class="testimonial-item text-cemter pb-3">
                            <p class="pb-3">
                                <span class="pb-3"> {{ $projet->description_paragraphe_1 }}</span>
                            </p>
                            <p class="pb-3">
                                <span class="pb-3">{{ $projet->description_paragraphe_2 }}</span>
                            </p>
                            <p class="pb-3">
                                <span class="pb-3">{{ $projet->description_paragraphe_3 }}</span>
                            </p>
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
