@extends('layouts.header', ['title' => 'contact', 'activeLink' => 'Contact'])
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets') }}/img/contact2.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <br><br><br>
                <h2>Contact</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Nos coordonnées</h3>
                            <p>Yaounde , Cameroon</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Envoyer un courriel</h3>
                            <p>support@testsarl.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Contactez-nous</h3>
                            <p>(+237) 697-95-34-21</p>
                            <p>(+237) 699-63-80-16</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <!-- Google map -->
                    <div class="col-lg-6 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3980.649764953946!2d11.533119473403845!3d3.885033148191747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwNTMnMDYuMSJOIDExwrAzMicwOC41IkU!5e0!3m2!1sen!2scm!4v1689686554845!5m2!1sen!2scm"frameborder="0"
                            style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                    <!-- End Google Maps -->
                    <div class="col-lg-6">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                        @endif
                        <form action="{{ route('send.contact.email') }}" method="post" role="form" >
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Votre nom" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Votre Email" required>
                                </div>
                                <div>
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">----Selectionner un service ----</option>
                                        @foreach ($services_type as $serviceId => $serviceType)
                                            <option value="{{ $serviceType }}">{{ $serviceType }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    {{-- <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div> --}}
                                </div>
                                <div class="text-center"><button type="submit" class="btn btn-danger">Send Message</button></div>
                            </div>
                        </form>
                    </div>
                </div><!-- End Contact Form -->

            </div>

            </div>
        </section>
        <!-- End Contact Section -->
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
