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

             <div class="slides-3 swiper">
                 <div class="swiper-wrapper">
                     @foreach ($teams as $team)
                         <div class="swiper-slide ">
                             <div class="team-wrap  mb-5 mx-auto">
                                 {{-- <div class="col-lg-4 col-md-4 member postion-relative" data-aos="fade-up" --}}
                                 {{-- data-aos-delay="100"> --}}
                                     <div class=" mx-auto ">
                                         <img src="{{ asset('storage/' . $team->image) }}"
                                             class="rounded-circle mx-auto d-block             
                                             " alt="" style=" height: 150px; width: 150px">

                                             <h4 class="text-center">{{ $team->noms }}</h4>
                                         <h4 class="text-center text-secondary fs-5 text-xl">{{ $team->poste }}</h4>
                                     </div>
                             </div>
                         </div>
                     @endforeach
                     <!-- End testimonial item -->
                 </div>
                 <div class="swiper-pagination " style="margin-top: 20px;"></div>

             </div>

         </div>

     </div>
 </section>
 <!-- End Teams Section -->
