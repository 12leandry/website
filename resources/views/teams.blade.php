 <!-- ======= Teams Section ======= -->
 <section id="team" class="team section-bg">
     <div class="container-fluid" data-aos="fade-up">

         <div class="section-header " style="margin-top: -5rem">
             <h2>Équipes</h2>
             <p>Découvrez notre équipe audacieuse chez Test SARL, prête à transformer chaque défi en opportunité.
                 Nous repoussons les limites, créons l'extraordinaire et redéfinissons l'avenir avec détermination.
                 Joignez-vous à nous pour une aventure où l'audace règne en maître</p>
         </div>
         <div class="row gy-5">
             @php
                 $teams = App\Models\team::all();
             @endphp

             <div class="slides-4 swiper">
                 <div class="swiper-wrapper ">
                     @foreach ($teams as $team)
                         <div class="swiper-slide ">
                             <div class="team-wrap  mb-5 mx-auto">
                                 <div class="  card mb-5 d-block" style="height: 300px; width: 250px">
                                     <img src="{{ asset('storage/' . $team->image) }}"
                                         class="rounded-circle mx-auto d-block   mt-3  mb-3         
                                             "
                                         alt="" style=" height: 150px; width: 150px">

                                     <h6 class="text-center ">{{ $team->noms }} <span>{{ $team->prenoms }}</span></h6>
                                     <p class="text-center text-secondary ">{{ $team->poste }}</p>
                                     <div>
                                         <ul class=" list-inline text-center">
                                            <li class="list-inline-item">
                                                <a href="{{ $team->facebook }}" target="_blank"><i class="bi bi-facebook" style="color: #3b5998"></i></a>
                                            </li>
                                             <li class="list-inline-item">
                                                 <a href="{{ $team->twitter }}" target="_blank"><i
                                                         class="bi bi-twitter" style="color: #1DA1F2"></i></a>
                                             </li>
                                             <li class="list-inline-item">
                                                 <a href="{{ $team->linkedin }}"
                                                     target="_blank"><i class="bi bi-linkedin"
                                                         style="color: #0e76a8"></i></a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                     <!-- End testimonial item -->
                 </div>
                 <div class="swiper-pagination " style="margin-top: 275px;"></div>

             </div>
             <div class="text-center">
                 <h4><a href="{{ route('Contact') }}" class="stretched-link"></a></h4>
                 <a href="{{ route('Contact') }}" class="btn btn-lg  btn-success text-white "> <i
                         class="bi bi-whatsapp"></i> Contactez-Nous </a>
             </div>

         </div>

     </div>
 </section>
 <!-- End Teams Section -->
