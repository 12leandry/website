@extends('layouts.header', ['title' => 'About', 'activeLink' => 'A-Propos'])


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
                <br><br><br>
                <h2>A propos de nous </h2>
                <div>
                    <p class="text-white">Chez Test SARL, nous transformons chaque projet avec expertise, innovation et
                        engagement.
                        De l'électricité à la plomberie, nous tissons des solutions qui changent la donne.
                        Joignez-vous à nous pour redéfinir le succès, un projet à la fois.
                    </p>
                </div>
                <p class="text-white">Si vous etes interesse pas un projet ou un service</p>
                <a data-aos="fade-up" data-aos-delay="200" href="{{ route('Contact') }}"
                    class="btn btn-lg  btn-success text-white "> <i class="bi bi-whatsapp"></i> Contactez Nous</a>
            </div>

        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img" style="background-image: url({{ asset('assets') }}/img/about.jpg);">
                    </div>

                    <div class="col-lg-7">
                        <h2> "Conception et Réalisation"</h2>
                        <div class="our-story">
                            <h4>Est 1988</h4>
                            <h3>Our Story</h3>
                            <p>Fondée en 2015 par le jeune Camerounais Kodjeu Kemeze Charles, notre entreprise a débuté en
                                tant qu'établissement individuel. Avec une vision ambitieuse et une passion pour
                                l'électricité générale, nous avons tracé nos premiers pas. En 2018, marquant une étape
                                majeure, nous avons évolué vers le statut de SARL, élargissant notre portée et notre
                                ambition.

                                Ce qui a commencé avec une expertise en électricité générale s'est transformé en une gamme
                                complète de services, allant de la climatisation à la plomberie, en passant par le montage
                                d'ascenseurs, la soudure et l'électricité industrielle. Notre dévouement à l'excellence et à
                                l'innovation nous a propulsés vers de nouveaux horizons.
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('assets') }}/img/testsarl-innovation.jpg);" data-aos="zoom-in"
                        data-aos-delay="100"></div>

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
                            <i class="bi bi-telephone-inbound flex-shrink-0"></i>
                            <div>
                                <h4><a href="{{ route('Contact') }}" class="stretched-link"></a></h4>
                                <a href="{{ route('Contact') }}"
                                    class="btn btn-lg  btn-primary text-white mx-auto ">Contactez Nous </a>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->

        <!-- ======= Alt Services Section 2 ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Nous concrétisons vos projets avec une expertise inégalée, en respectant les normes
                            les plus élevées.</h3>
                        {{-- <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste
                            magni sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p> --}}

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                {{-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> --}}
                                <p>"De la conception à la réalisation, notre équipe chez Test SARL se passionne pour
                                    les projets de réseaux et de télécoms. Nous nous investissons pleinement dans chaque
                                    étape pour créer des solutions robustes et performantes. En commençant par une
                                    planification minutieuse, nous élaborons des schémas innovants qui répondent à vos
                                    besoins spécifiques. Notre expertise en câblage structuré, en installation d'équipements
                                    et en optimisation du réseau garantit une exécution impeccable. Nous nous efforçons
                                    d'assurer la fiabilité, la sécurité et la connectivité fluide de chaque réseau que nous
                                    construisons. Faire équipe avec nous signifie transformer vos idées en une réalité de
                                    pointe, où chaque ligne
                                    de code et chaque câble contribuent à un réseau télécom solide et performant."</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone-inbound flex-shrink-0"></i>
                            <div>
                                <h4><a href="{{ route('Contact') }}" class="stretched-link"></a></h4>
                                <a href="{{ route('Contact') }}"
                                    class="btn btn-lg  btn-primary text-white mx-auto ">Contactez Nous </a>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>

                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('assets') }}/img/testsarl-reseau.jpg);" data-aos="zoom-in"
                        data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->

        <!-- ======= Our Team Section ======= -->
        @include('teams')
        <!-- End Our Team Section -->

        <!-- ======= Testimonials Section ======= -->
        @include('testimonial')
        <!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- End Footer -->

    @include('scroll')
@endsection
