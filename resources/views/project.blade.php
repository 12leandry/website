@extends('layouts.header', ['title' => 'Projects', 'activeLink' => 'Projets'])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
                <br><br><br>
                <h2>Découvrez nos réalisations exceptionnelles </h2>
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

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                <div class=" section-header">
                    <h2>Nos Réalisations</h2>
                    <p>De l'électricité à la climatisation, la plomberie,
                        
                        le montage d'ascenseurs, la soudure et
                        l'électricité industrielle. Chaque réalisation reflète notre expertise et notre engagement envers
                        des solutions de qualité</p>
                </div>
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
                        @foreach ($projets as $projet)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $projet->service_id }}">
                            <div class="portfolio-content h-100">
                                @if ($projet->icones->first())
                                    <img src="{{ asset('storage/' . $projet->icones->first()->path) }}"
                                        class="img-fluid" alt="Project Image" style="width: 400px; height: 400px">
                                @else
                                    <img src="https://placehold.co/600x600" class="img-fluid" alt="Placeholder Image"
                                        style="width: 400px; height: 400px">
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
        <!-- End Our Projects Section -->

        {{-- collaborateur  start --}}

        @include('teams')

        {{-- collaborateur end --}}

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->

    @include('layouts.footer')

    <!-- End Footer -->

    @include('scroll')
@endsection
