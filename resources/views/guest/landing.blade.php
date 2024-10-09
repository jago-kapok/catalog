@extends('guest.layout')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Selamat datang di dapur Mamanin</h1>
                <h2 class="fs-5 mb-4">
                    Temukan beragam masakan lezat dan praktis yang siap
                    memanjakan lidah anda. Dari hidangan sehari-hari
                    hingga camilan spesial, kami hadir untuk
                    menginspirasi setiap momen memasak anda.
                </h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                            class="bi bi-play-circle"></i><span>Lihat Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('arsha/assets/img/hero_img.png') }}" class="img-fluid animated" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{
                                    asset(
                                        'arsha/assets/img/clients/client-1.png'
                                    )
                                }}" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{
                                    asset(
                                        'arsha/assets/img/clients/client-2.png'
                                    )
                                }}" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{
                                    asset(
                                        'arsha/assets/img/clients/client-3.png'
                                    )
                                }}" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{
                                    asset(
                                        'arsha/assets/img/clients/client-4.png'
                                    )
                                }}" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{
                                    asset(
                                        'arsha/assets/img/clients/client-5.png'
                                    )
                                }}" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{
                                    asset(
                                        'arsha/assets/img/clients/client-6.png'
                                    )
                                }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Temukan beragam masakan lezat dan praktis yang
                        siap memanjakan lidah anda. Dari hidangan
                        sehari-hari hingga camilan spesial, kami hadir
                        untuk menginspirasi setiap momen memasak anda.
                    </p>
                    <ul>
                        <li>
                            <i class="ri-check-double-line"></i>
                            Inspirasi beragam resep masakan
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i> Tips
                            dan trik memasak
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i>
                            Komunitas pecinta masakan
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p align="justify">
                        Bergabunglah dengan komunitas pecinta masakan
                        dan eksplorasi berbagai tips, trik, dan teknik
                        yang membuat setiap sajian istimewa. Ayo, mulai
                        petualangan kuliner anda bersama kami!
                    </p>
                    <a href="#" class="btn-learn-more">Komunitas</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Ingin Berkonsultasi</h3>
                    <p>
                        Apabila anda ingin melakukan konsultasi seputar masakan dan kuliner, jangan sungkan untuk
                        menghubungi kami.
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Blog Post</h2>
                <p>
                    Temukan beragam masakan lezat dan praktis yang
                    siap memanjakan lidah anda. Dari hidangan
                    sehari-hari hingga camilan spesial, kami hadir
                    untuk menginspirasi setiap momen memasak anda.
                </p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                @foreach ($kategori as $row)
                    <li data-filter=".filter-{{ $row->id }}">{{ $row->nama }}</li>
                @endforeach
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($post as $row)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $row->kategori_id }}">
                        <div class="portfolio-img">
                            @if ($row->kategori_id == 1)
                                <img src="{{ asset('arsha/assets/img/portfolio/masakan1.jpeg') }}" class="img-fluid" alt="Masakan" />
                            @elseif ($row->kategori_id == 2)
                                <img src="{{ asset('arsha/assets/img/portfolio/masakan3.jpeg') }}" class="img-fluid" alt="Masakan" />
                            @else
                                <img src="{{ asset('arsha/assets/img/portfolio/masakan2.jpeg') }}" class="img-fluid" alt="Masakan" />
                            @endif
                        </div>
                        <div class="portfolio-info">
                            <h4>{{ $row->judul }}</h4>
                            <p>{{ $row->kategori->nama }}</p>
                            <a href="{{ asset('arsha/assets/img/portfolio/masakan'.$row->id.'.jpeg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="{{ $row->judul }}"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('/post').'/'.$row->id }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <p>

                </p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                        <div class="pic">
                            <img src="{{ asset('arsha/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                            <h4>Lukman Hakim S.</h4>
                            <span>Dinas Komunikasi & Informatika</span>
                            <p>
                                Explicabo voluptatem mollitia et
                                repellat qui dolorum quasi
                            </p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href="">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member d-flex align-items-start">
                        <div class="pic">
                            <img src="{{ asset('arsha/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                            <h4>Setya Saraswati F.</h4>
                            <span>Dinas Komunikasi & Informatika</span>
                            <p>
                                Aut maiores voluptates amet et quis
                                praesentium qui senda para
                            </p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href="">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="member d-flex align-items-start">
                        <div class="pic">
                            <img src="{{ asset('arsha/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                            <h4>Diki Andikiawan</h4>
                            <span>Dinas Komunikasi & Informatika</span>
                            <p>
                                Quisquam facilis cum velit laborum
                                corrupti fuga rerum quia
                            </p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href="">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member d-flex align-items-start">
                        <div class="pic">
                            <img src="{{ asset('arsha/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                            <h4>Muizza Ainur R.</h4>
                            <span>Dinas Komunikasi & Informatika</span>
                            <p>
                                Dolorum tempora officiis odit laborum
                                officiis et et accusamus
                            </p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href="">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kontak</h2>
            </div>

            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="
                                        border: 0;
                                        width: 100%;
                                        height: 290px;
                                    " allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->
@endsection