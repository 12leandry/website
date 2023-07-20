@extends('layouts.header', ['title' => 'Projects', 'activeLink' => 'Projets'])
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <br><br><br>
                <h2>Projets</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Projets</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

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

                        @php
                            $projet = App\Models\projet::all();
                        @endphp

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
