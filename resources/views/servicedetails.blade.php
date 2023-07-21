@extends('layouts.header', ['title' => 'Services', 'activeLink' => ' '])

@section('content')
    <main id="main">


        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('assets')}}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
                <br><br><br>
                <h2>A propos de nos service </h2>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Voluptates expedita voluptatum esse dolorum temporibus nulla, fuga modi quasi ducimus,
                    quo tenetur, accusamus reprehenderit neque nihil libero ut officiis? Accusantium, quas?
                </p>
                <p class="text-white">Si vous etes interesse pas un projet ou un service</p>
                <a href="{{ route('Contact') }}" class="btn btn-lg  btn-primary text-white bi bi-telephone-inbound">Contactez Nous </a>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Service Details Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="services-list">
                            <a href="#" class="active">Remodeling</a>
                            <a href="#">Construction</a>
                            <a href="#">Product Management</a>
                            <a href="#">Repairs</a>
                            <a href="#">Design</a>
                        </div>

                        <h4>Enim qui eos rerum in delectus</h4>
                        <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non
                            occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi
                            rerum.</p>
                    </div>

                    <div class="col-lg-8">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h3>
                            {{ $service->titre }}
                        </h3>
                        <p>
                            {{ $service->sous_titre }}
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt
                                    voluptatibus.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                        </ul>
                        <p>
                            Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi
                            optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                        </p>
                        <p>
                            {{ $service->description }}
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
                    <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
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
                                            <img src="{{ asset('storage/' . $projet->icones->first()->path) }}" class="img-fluid" alt="Project Image" style="width: 400px; height: 400px">
                                        @else
                                        <img src="https://placehold.co/600x400" class="img-fluid" alt="Placeholder Image" style="width: 400px; height: 400px">
                                        @endif
                                            
                                        
                                        <div class="portfolio-info">
                                            <h4>{{ $projet->titre }}</h4>
                                            <p>{{ $projet->Sous_titre }}</p>
                                            @if ($projet->icones->first())
                                            <a href="{{ asset('storage/' . $projet->icones->first()->path) }}" title="Remodeling 1"
                                                data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                                    class="bi bi-zoom-in"></i></a>
                                            @else
                                            <a href="https://placehold.co/600x400" title="Remodeling 1"
                                                data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                                    class="bi bi-zoom-in"></i></a>
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
