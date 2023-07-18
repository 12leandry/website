 <!-- =======sECTION  nos collaborateurs  ======= -->
 <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">



        <div class=" section-header">
            <h2>Nos collaborateurs</h2>
            <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
        </div>
        <div class="row gy-5">
            @php
                $teams = App\Models\team::all();
            @endphp

            @foreach ($teams as $team)
                <div class="col-xl-3 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="{{ asset('storage/' . $team->image) }}" class="img-fluid" alt=""
                                style="width: 250px; height: 250px">
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">{{ $team->noms }}</h3>
                            <h3 class="post-title">{{ $team->prenoms }}</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <hr>
                                    <i class="bi bi-person"></i> <span class="ps-2">{{ $team->poste }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End post item -->
            @endforeach

        </div>

    </div>
</section>
<!-- Fin de  Section de collaborateur -->