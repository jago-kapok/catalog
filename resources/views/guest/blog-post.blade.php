@extends('guest.layout')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container mt-5">
            <ol class="p-0">
                <li><a href="{{ route('landing') }}">Beranda</a></li>
                <li>Blog Post</li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <h2 class="mb-0" style="color: #37517e">{{ $post->judul }}</h2>
                    <small class="fst-italic">Diposting pada {{ $post->created_at }} oleh Admin</small>
                    <div class="mb-3">
                        <span class="badge text-bg-secondary">Masakan</span>
                        <span class="badge text-bg-secondary">Nusantara</span>
                        <span class="badge text-bg-secondary">{{ $post->kategori->nama }}</span>
                    </div>

                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset('arsha/assets/img/portfolio/masakan1.jpeg') }}" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('arsha/assets/img/portfolio/masakan2.jpeg') }}" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('arsha/assets/img/portfolio/masakan3.jpeg') }}" alt="" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <p align="justify" class="mt-3">
                        {!! nl2br($post->deskripsi) !!}
                    </p>
                </div>

                <div class="col-lg-4">
                    <div class="card portfolio-info shadow">
                        <h3>Kategori</h3>
                        <ul>
                            @foreach ($kategori as $row)
                            <li>
                                <i class="ri-check-double-line"></i> <strong>{{ $row->nama }}</strong>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card portfolio-info shadow mt-4">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis
                            eos dolorem eos itaque inventore commodi
                            labore quia quia. Exercitationem repudiandae
                            officiis neque suscipit non officia eaque
                            itaque enim. Voluptatem officia accusantium
                            nesciunt est omnis tempora consectetur
                            dignissimos. Sequi nulla at esse enim cum
                            deserunt eius.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main>
@endsection