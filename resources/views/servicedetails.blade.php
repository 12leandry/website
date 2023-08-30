@extends('layouts.header', ['title' => 'Services', 'activeLink' => ' '])

@section('content')
    <main id="main">


        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
                <br><br><br>
                <h2>A propos de nos service </h2>
                <p class="text-white">Explorez nos travaux dans l'électricité,
                    la climatisation, la plomberie, le montage
                    d'ascenseurs, la soudure et l'électricité industrielle.
                    Chaque projet illustre notre engagement envers
                    l'excellence et l'innovation.
                </p>
                <p class="text-white">Si vous etes interesse pas un projet ou un service</p>
                <a data-aos="fade-up" data-aos-delay="200" href="{{ route('Contact') }}"
                    class="btn btn-lg  btn-success text-white "> <i class="bi bi-whatsapp"></i> Contactez Nous</a>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Service Details Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <img src="{{ asset('storage/' . $service->icone) }}" class="img-fluid" alt="Serice Image">
                    </div>

                    <div class="col-lg-6">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h3>
                            {{ $service->titre }}
                        </h3>
                        <p>
                            {{ $service->sous_titre }}
                        </p>
                        <p>
                            {{ $service->description }}
                        </p>
                        <p>
                            {{ $service->description_2 }}
                        </p>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Service Details Section -->

        <!-- ======= START SECTION  PROJET  ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
                <div class=" section-header">
                    <h2>Nos projets</h2>
                    <p>Plongez dans un monde d'innovation, d'expertise et
                        de réussites concrètes. Laissez-vous inspirer par
                        nos réalisations qui vont au-delà des attentes.
                        Explorez comment nous transformons les idées en
                        réalisations éblouissantes. Votre prochain projet
                        pourrait être notre prochaine fierté !
                    </p>
                </div>

            </div>
            <section id="projects" class="projects">
                <div class="container" data-aos="fade-up">

                    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                        data-portfolio-sort="original-order">


                        {{-- Project item start --}}
                        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($service->projets as $projet)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $projet->service_id }}">
                                    <div class="portfolio-content h-100">
                                        @if ($projet->icones->first())
                                            <img src="{{ asset('storage/' . $projet->icones->first()->path) }}"
                                                class="img-fluid" alt="Project Image" style="width: 400px; height: 400px">
                                        @else
                                            <img src="https://placehold.co/600x400" class="img-fluid"
                                                alt="Placeholder Image" style="width: 400px; height: 400px">
                                        @endif


                                        <div class="portfolio-info">
                                            <h4>{{ $projet->titre }}</h4>
                                            <p>{{ $projet->Sous_titre }}</p>
                                            @if ($projet->icones->first())
                                                <a href="{{ asset('storage/' . $projet->icones->first()->path) }}"
                                                    title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            @else
                                                <a href="https://placehold.co/600x400" title="Remodeling 1"
                                                    data-gallery="portfolio-gallery-remodeling"
                                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            @endif
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

            </div>
        </section>
        <!-- ======= END SECTION PROJET ======= -->

        {{-- collaborateur  start --}}

        @include('teams')

        {{-- collaborateur end --}}

    </main>
    <!-- End #main -->
    @include('layouts.footer')
    @include('scroll')
@endsection
