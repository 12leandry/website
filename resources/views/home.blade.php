@extends('layouts.header', ['title' => 'home', 'activeLink' => 'home'])
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info ">
            <div class="container" style="margin-top: 200px">
                <div class="col">
                    <div class="row mb-5">
                        <div class="col-lg-6">
                            <h2 data-aos="fade-down" class="text-light">Bienvenue chez Test SARL <span>Votre partenaire
                                    de confiance !</span>
                                </h1>
                        </div>
                        <div class="col-lg-6">
                            <p data-aos="fade-up" class="fw-5">Chez Test SARL, nous nous engageons à vous offrir bien plus
                                qu'un simple
                                service. Nous sommes une équipe passionnée et expérimentée, prête à relever tous les défis
                                pour
                                rendre vos projets une réalité réussie. Que vous soyez une entreprise cherchant à renforcer
                                la
                                sécurité de vos locaux, un particulier désirant protéger votre maison et vos proches, ou
                                encore
                                un professionnel à la recherche de solutions BTP de qualité, nous sommes là pour vous
                                accompagner à chaque étape.</p>
                            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url({{ asset('assets') }}/img/hero-carousel/hero-carousel-1.jpg)"></div>
            <div class="carousel-item" style="background-image: url({{ asset('assets') }}/img/carosel.jpg)"></div>
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
        <section id="get-started" class="get-started section-bg" style="margin-bottom: -100px">
            <div class="container">

                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content ">
                            <h3>Électricité et Plomberie : L'Alliance Parfaite du Confort et de la Fiabilité !.
                            </h3>
                            <p>Bienvenue dans notre section Électricité et Plomberie ! Notre équipe dévouée d'électriciens
                                qualifiés et de plombiers expérimentés vous propose des solutions complètes pour vos
                                installations électriques et sanitaires. Que ce soit pour des projets résidentiels,
                                commerciaux ou industriels, nous assurons une expertise de haute qualité, du design à la
                                maintenance. Sécurité, satisfaction client et respect des délais sont au cœur de notre
                                démarche. Avec des solutions sur mesure et un service professionnel, nous rendons vos
                                projets une réalité réussie. Pour une expérience fluide et sans tracas, contactez-nous
                                aujourd'hui et découvrez comment nous pouvons transformer votre environnement en
                                mieux, dès maintenant.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <img src="{{ asset('assets') }}/img/accueilgetstarted.jpg" alt="" class="img-fluid"
                                style="height: 480px; width: 480px">
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
                            <h4>Architecture</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Electricité</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>BTP</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Reseaux et Telecom</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Architecture Innovante et Inspirante !</h3>
                                <h4 class="fst-italic">
                                    Créez Votre Futur Avec Notre Équipe d'Experts !
                                </h4>
                                <p>
                                    Notre équipe passionnée d'architectes experts crée des espaces uniques qui reflètent vos
                                    aspirations. Que vous souhaitiez construire, rénover ou développer un projet, nous
                                    sommes là pour donner vie à vos idées architecturales. En associant innovation et
                                    inspiration, nous concevons des designs sur mesure qui allient esthétique et durabilité.
                                    Que vous préfériez une architecture contemporaine, classique ou écologique, nous
                                    traduisons vos rêves en réalité concrète. Découvrez une collaboration stimulante et
                                    gratifiante avec notre équipe spécialisée en architecture. Contactez-nous dès
                                    aujourd'hui pour créer un futur inspirant et repousser les limites de la
                                    créativité architecturale
                                </p>

                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('assets') }}/img/testsarl_architure_cameroun.jpg" alt=""
                                    class="img-fluid" title="Test Sarl Architure Cameroun">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Électricité sur Mesure !</h3>
                                <h4 class="fst-italic">
                                    Des Experts À Votre Service Pour Tous Vos Besoins
                                </h4>
                                <p>
                                    Notre équipe d'experts répond à tous vos besoins en installations, réparations et
                                    améliorations électriques. Que vous soyez une entreprise, un particulier ou une
                                    organisation, nous vous offrons des solutions sur mesure avec professionnalisme et souci
                                    du détail. Notre connaissance des normes garantit sécurité et conformité. Nous proposons
                                    également les technologies les plus avancées pour optimiser votre efficacité énergétique
                                    et réduire vos coûts. Faites confiance à notre expertise inégalée. Contactez-nous pour
                                    découvrir comment améliorer votre confort et sécurité avec nos solutions
                                    électriques sur mesure.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets') }}/img/electricite.jpg" alt="" class="img-fluid"
                                    style="width: 400px; height: 400px;">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>BTP Excellence ! </h3>
                                <h4 class="fst-italic">Des Réalisations Solides et Durables Pour Vos Projets !</h4>
                                <p>
                                    Projet Résidentiel, commercial, 
                                    ou infrastructures publiques, nous vous accompagnons à
                                    chaque étape avec des matériaux 
                                    de qualité et un souci du détail. Notre expertise
                                    technique nous permet de relever 
                                    les défis les plus complexes avec succès. Votre
                                    satisfaction est notre priorité, c'est pourquoi nous concevons des
                                     solutions sur mesure
                                    qui répondent pleinement à vos attentes. 
                                    Faites confiance à BTP Excellence pour des
                                    réalisations d'excellence. Contactez-nous 
                                    dès aujourd'hui pour transformer vos rêves de
                                    construction en réalité.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets') }}/img/btp.jpg" alt="" class="img-fluid"
                                    style="width: 400px; height: 400px;">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Connectivité Sans Faille</h3>
                                <h4 class="fst-italic">
                                    Votre Partenaire de Confiance en Réseaux et Télécoms.
                                </h4>

                                <p>
                                    Notre équipe d'experts en réseaux et télécommunications est déterminée à fournir une
                                    communication fluide et efficace pour votre entreprise. Des connexions rapides et
                                    stables vous assurent un accès rapide à l'information et une collaboration optimale.

                                    Nous concevons des solutions adaptées à vos besoins spécifiques en travaillant
                                    étroitement avec vous. Notre approche sur mesure garantit des résultats qui répondent à
                                    vos attentes.

                                    Boostez votre communication et l'efficacité de votre entreprise avec Réseaux et Télécoms
                                    Excellence. Découvrez nos services à la pointe de la technologie dès maintenant
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets') }}/img/telecom.jpg" alt="" class="img-fluid"
                                    style="width: 400px; height: 400px;">
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
                        $services = App\Models\Service::limit(6)->get();
                    @endphp

                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                            <div class="service-item  position-relative">
                                {{-- <div class="icon"> --}}
                                <img src="{{ asset('storage/' . $service->icone) }}" class="img-fluid image_table"
                                    alt="Serice Image">
                                {{-- </div> --}}
                                <h2>{{ $service->titre }}</h2>
                                <h3>{{ $service->sous_titre }}</h3>
                                <p></p>
                                {{-- <p>{{ $service->description }}</p> --}}
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
                        style="background-image: url({{ asset('assets') }}/img/testsarl-innovation.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Collaborer avec Test, c'est confier l'avenir de vos projets à une équipe passionnée et dynamique
                        </h3>
                        <p>Chez Test SARL, nous nous engageons à façonner un avenir réussi pour vos projets grâce à notre
                            dévouement et notre professionnalisme. Ensemble, nous croyons en la
                            puissance de la créativité et de la collaboration pour concrétiser vos aspirations.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Polyvalence Inspirante</a></h4>
                                <p>Test SARL propose une variété de services, de l'électricité à la climatisation, offrant
                                    aux employés la chance
                                    de s'impliquer dans des projets diversifiés et d'élargir leurs compétences</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Innovation en Action</a></h4>
                                <p>En adoptant des solutions novatrices, l'entreprise crée un environnement
                                    captivant où les employés peuvent contribuer à façonner l'avenir de l'industrie.
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Collaboration Valorisante</a></h4>
                                <p>Avec une culture axée sur la collaboration, chaque membre de l'équipe a la possibilité
                                    d'apporter des idées et de contribuer activement,
                                    créant ainsi une atmosphère gratifiante et influente.s</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-whatsapp flex-shrink-0 text-success"></i>
                            <div>
                                <h4><a href="{{ route('Contact') }}" class="stretched-link"></a></h4>
                                <a href="{{ route('Contact') }}"
                                    class="btn btn-lg  btn-success text-white mx-auto ">Contactez-Nous </a>
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




        {{-- teams start --}}
        @include('teams')

        {{-- teams end --}}

    </main><!-- End #main -->
    <!-- End Footer -->
    @include('layouts.footer')

    @include('scroll')
@endsection

<style>
    img.image_table {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        margin-right: 13px;
    }
</style>
