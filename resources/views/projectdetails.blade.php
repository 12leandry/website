@extends('layouts.header', ['title' => 'Services', 'activeLink' => ''])

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Project Details</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Project Details</li>
                </ol>

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
