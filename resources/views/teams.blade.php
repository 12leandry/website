 <!-- ======= Teams Section ======= -->
 <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Teams</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem
                uia reprehenderit sunt deleniti</p>
        </div>
        <div class="row gy-5">
            @php
                $teams = App\Models\team::all();
            @endphp

            <div class="slides-2 swiper">
                <div class="swiper-wrapper">
                    @foreach ($teams as $team)
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-4 member postion-relative" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="member-img ">
                                    <img src="{{ asset('storage/' . $team->image) }}" class="img-fluid"
                                        alt="" style=" height: 200px;">
                                    {{-- <div class="social">
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div> --}}
                                </div>
                                <div class="member-info text-center">
                                    <h4>{{ $team->noms }}</h4>
                                    <span>{{ $team->poste }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>
</section>
<!-- End Teams Section -->