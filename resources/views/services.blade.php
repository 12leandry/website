@extends('layouts.header', ['title' => 'Services', 'activeLink' => 'Services'])

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
                <br><br><br>
                <h2>A propos de nos service </h2>
                <p class="text-white">Explorez nos services variés, de l'électricité générale à la climatisation, la
                    plomberie, le montage d'ascenseurs, la soudure et l'électricité industrielle. Notre équipe compétente
                    répond à vos besoins, petits ou grands, avec des solutions durables et innovantes
                </p>
                <p class="text-white">Si vous etes interesse pas un projet ou un service</p>
                <a data-aos="fade-up" data-aos-delay="200" href="{{ route('Contact') }}"
                    class="btn btn-lg  btn-success text-white "> <i class="bi bi-whatsapp"></i> Contactez Nous</a>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">

            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    @php
                        $services = App\Models\Service::all();
                    @endphp

                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                            <div class="service-item  position-relative">
                                {{-- <div class="icon"> --}}
                                <img src="{{ asset('storage/' . $service->icone) }}" class="img-fluid image_table"
                                    alt="Serice Image">
                                {{-- <i class="fa-solid fa-mountain-city"></i> --}}
                                {{-- </div> --}}
                                <h2>{{ $service->titre }}</h2>
                                <h3>{{ Illuminate\Support\Str::limit($service->sous_titre, 15, '...') }}</h3>
                                <p>{{ Illuminate\Support\Str::limit($service->description, 35, '...') }}</p>
                                {{-- <p>{{ $service->description }}</p> --}}
                                <a href="{{ route('service-details', $service->id) }} " class="readmore stretched-link">Lire
                                    plus <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Servie Cards Section ======= -->
        <section id="services-cards" class="services-cards">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <h3>ELECTRICITE</h3>
                        <p>Nous réalisons des installations électriques résidentielles pour les nouvelles constructions, les
                            rénovations ou les extensions de maisons, d'appartements ou de complexes résidentiels. </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Maintenance électrique</span></li>
                            <li><i class="bi bi-check2"></i> <span>Service de câblage structuré</span></li>
                            <li><i class="bi bi-check2"></i> <span> Installation de systèmes d'éclairage</span></li>
                            <li><i class="bi bi-check2"></i> <span> Service de mise à niveau énergétique</span></li>
                            <li><i class="bi bi-check2"></i> <span> Service de câblage structuré </span></li>
                        </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <h3>RÉSEAUX ET DE TÉLÉCOM</h3>
                        <p>Notre service de réseaux et de télécommunications au Cameroun fournir les offres suivantes : </p>

                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Installation de réseaux informatiques</span></li>
                            <li><i class="bi bi-check2"></i> <span>Déploiement de systèmes de télécommunications</span></li>
                            <li><i class="bi bi-check2"></i> <span>Maintenance des réseaux et télécommunications</span></li>
                            <li><i class="bi bi-check2"></i> <span>Service de sécurité des réseaux </span></li>
                            <li><i class="bi bi-check2"></i> <span>Intégration des systèmes de réseaux et de
                                    télécommunications</span></li>
                        </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <h3>BTP</h3>
                        <p> En tant qu'entreprise de BTP (Bâtiment et Travaux Publics) au Cameroun, nous pouvons fournir les
                            services suivants</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Service de construction résidentielle et
                                    commerciale</span></li>
                            <li><i class="bi bi-check2"></i> <span>Service de rénovation et de réhabilitation</span></li>
                            <li><i class="bi bi-check2"></i> <span>Service de génie civil</span></li>
                            <li><i class="bi bi-check2"></i> <span>Service de construction industrielle</span></li>
                            <li><i class="bi bi-check2"></i> <span>Service de gestion de projet</span></li>
                        </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <h3>FROID ET CLIMATISATION</h3>
                        <p>En tant qu'entreprise offrant des services d'électricité de bâtiment et industrielle, ainsi que
                            des services de froid et climatisation au Cameroun, nous pouvons fournir les services suivants :
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Installation de systèmes de climatisation</span></li>
                            <li><i class="bi bi-check2"></i> <span>Maintenance et entretien des systèmes de
                                    climatisation</span></li>
                            <li><i class="bi bi-check2"></i> <span>Service de réfrigération commerciale</span></li>
                            <li><i class="bi bi-check2"></i> <span>Dépannage et réparation des équipements de froid et
                                    climatisation</span></li>
                            <li><i class="bi bi-check2"></i> <span>Conseils en efficacité énergétique</span></li>
                        </ul>
                    </div><!-- End feature item-->

                </div>

            </div>
        </section><!-- End Servie Cards Section -->

        <!-- ======= Alt Services Section 2 ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Travaux d’électricité courant fort et faible, Climatisation VRV :</h3>
                        <p>Nous avons réalisé avec succès des travaux d'électricité courant fort et faible ainsi que
                            l'installation de climatisation VRV à l'ART (Agence de Régulation des Télécommunications) avec
                            un engagement inébranlable envers la qualité et l'efficacité..</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Mise à la terre</a></h4>
                                <p>Sécurité par la mise à la terre : Nous veillons à votre sécurité en
                                    réalisant des systèmes de mise à la terre fiables et conformes aux normes. Votre
                                    protection est notre priorité</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Passage des gaines et gaine VRV </a></h4>
                                <p>Flux efficace avec le passage des gaines et gaines VRV : Notre expertise
                                    garantit un agencement précis des gaines et des solutions VRV pour une circulation
                                    optimale de l'air, créant un environnement confortable et efficace.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Sellage des boitiers, boite de dérivation et
                                        coffret </a></h4>
                                <p>Intégrité et sécurité grâce au sellage des boîtiers, boîtes de dérivation et coffrets :
                                    Nous assurons une protection maximale en scellant méticuleusement ces
                                    éléments essentiels pour garantir un fonctionnement fiable et sécurisé</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Passage des câbles</a></h4>
                                <p>Connexions fluides avec le passage des câbles : Notre expertise garantit une disposition
                                    soignée des câbles pour des connexions fluides et une performance optimale, soutenant
                                    ainsi vos projets en toute fiabilité</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>

                    <div class="col-lg-6 img-bg" style="background-image: url({{ asset('assets') }}/img/art-testsarl.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('assets') }}/img/solaire-testsarl.jpg);" data-aos="zoom-in"
                        data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Révolution solaire pour un gouverneur</h3>
                        <p>nous avons été honoré de réaliser avec succès l'installation de panneaux solaires chez un
                            gouverneur au Cameroun. Notre engagement envers l'efficacité énergétique a contribué à apporter
                            des solutions durables à un haut fonctionnaire, propulsant ainsi la transition vers une énergie
                            propre et renouvelable.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Réalisation des études pour la pose des
                                        panneaux</a></h4>
                                <p>Études stratégiques pour une installation réussie : Test SARL se démarque par la
                                    réalisation minutieuse d'études pour la pose de panneaux solaires. Notre expertise
                                    garantit une planification précise pour une transition efficace vers l'énergie solaire
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Raccordement de l’onduleur et des batteries
                                    </a></h4>
                                <p>nous avons assurer le raccordement expert de l'onduleur et des batteries. Notre
                                    savoir-faire garantit une intégration sans faille pour optimiser l'efficacité et la
                                    performance de votre système solaire.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Installation des panneaux</a>
                                </h4>
                                <p>Notre équipe excelle dans l'installation professionnelle des panneaux solaires. Nous
                                    transformons la lumière du soleil en énergie durable, créant ainsi un avenir plus vert
                                    et plus économique.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Pose du coffret d’alimentation et câblage</a>
                                </h4>
                                <p>Assure une pose experte du coffret d'alimentation et un câblage soigné. Notre engagement envers la sécurité et la performance garantit une distribution électrique fiable et efficacei</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->



        {{-- collaborateur  start --}}

        @include('teams')

        {{-- collaborateur end --}}

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem
                        uia reprehenderit sunt deleniti</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('assets') }}/img/testsarl-chopchop.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Antoine Landry Lemogo</h3>
                                    <h4>Client</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        L'équipe de Test SARL a résolu nos problèmes électriques de manière efficace. Leur
                                        expertise en électricité générale a illuminé notre espace. Bravo pour leur
                                        professionnalisme
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('assets') }}/img/testsarl-art.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Professeur Philémon ZOO ZAME</h3>
                                    <h4>Directeur général ART CAMEROUN</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Nous avons fait confiance à Test SARL pour l'installation de notre système de
                                        climatisation. Le résultat est incroyable. Une température parfaite, été comme
                                        hiver. Merci pour le confort !
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-3.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Les plombiers de Test SARL ont réglé nos problèmes de plomberie rapidement et
                                        efficacement. Leur savoir-faire nous a épargné des ennuis. Nous les
                                        recommandons vivement !
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-4.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        L'équipe de Test SARL a réalisé l'installation de notre ascenseur avec précision.
                                        Leur attention aux détails et leur sécurité renforcée nous ont laissé ravis. Notre
                                        immeuble est maintenant plus accessible que jamais.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-5.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Nous avons fait appel à Test SARL pour des travaux d'électricité industrielle
                                        complexes. Leur expertise et leur dévouement ont été impressionnants. Leurs
                                        solutions ont grandement amélioré notre processus de production.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination" style="margin-bottom: -10rem; margin-top: -10rem"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->


    @include('layouts.footer')


    <!-- End Footer -->

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
