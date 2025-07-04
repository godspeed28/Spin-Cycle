<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class=" d-flex flex-column bg-home" style="margin-top: 10px;">
    <?php $kata = "user123";
    // dd(password_hash($kata, PASSWORD_DEFAULT));
    ?>
    <div class="intro-home">DO YOUR LAUNDRY SMARTLY!</div>
    <p>Cucian Anda akan dikirim ke ahli pilihan Anda hanya dengan satu klik.</p>
    <a class="bg-info text-light p-3 fw-bold text-decoration-none" href="/Wash/">Order Now</a>
</div>
<br>
<hr class="text-info w-50 mx-auto">

<div class="container d-xl-flex text-center mt-5 mb-5">

    <div class="container position-relative"><img class="img-fluid-custom" height="450" width="600" src="/img/washing-machine.jpg" alt="">
        <p class="bg-info d-none d-xl-block position-absolute z-2 fw-bold text-light " style="width: 140px;
    height: 140px;
    padding: 0px;
    margin-top:-160px;
    margin-left:495px;
    border-radius: 140px;"><span style="font-size: 50px;">2</span><br>years of experience</p>
    </div>
    <div class="container text-start">
        <b class="text-info">[2 Years of Experience]</b>
        <p class="intro-home">We are Passionate About Laundry</p>
        <p>Kami adalah profesional dalam bisnis laundry dan dry cleaning, yang berarti kami selalu mengikuti perkembangan teknologi, metode pembersihan, dan solusi terbaru untuk menangani noda atau kain halus. Selain itu, kami mempertahankan standar integritas bisnis tertinggi dengan mematuhi peraturan lokal dan nasional serta aturan keselamatan lingkungan. Kami bersemangat untuk mengubah cara anda berpikir tentang laundry!</p>

        <div class="container d-md-flex">
            <div class="container">
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill text-primary"></i> Eco-friendly cleaning processes</li>
                    <li><i class="bi bi-check-circle-fill text-primary"></i> Fast turnaround time</li>
                    <li><i class="bi bi-check-circle-fill text-primary"></i> Free pick-up and delivery service</li>
                    <li><i class="bi bi-check-circle-fill text-primary"></i> Best Quality</li>
                </ul>
            </div>

            <hr class="text-info d-md-none">

            <div class="d-none d-md-block" style="margin-top:20px; width: 2px; height: 135px; background-color: #ccc;"></div>
            <div class="container card-1 text-center mt-4"><i class="phone bg-light rounded-circle p-3 bi bi-telephone-fill text-info"></i>
                <p class="text-secondary mt-1">Call for Quality Service</p>
                <a href="https://wa.me/<?= $phone ?>" class="text-decoration-none text-dark underline-hover fw-bold" target="_blank"><?= $tel ?></a>
            </div>
        </div>
        <hr class="text-info d-md-none">

    </div>
</div>
<style>
    .flex-fill+.flex-fill {
        border-left: 1px solid rgba(0, 0, 0, 0.1);
    }
</style>


<div class="container text-dark text-center" style="max-width: 900px;">
    <div class="d-md-flex">
        <div class="underline-hover flex-fill bg-light p-2 align-items-center">
            <div class="me-3 mt-2">
                <i class="bi bi-clock fs-1 text-info"></i>
            </div>
            <br>
            <div>
                <h5>Save Time</h5>
                <p>Tidak ada lagi waktu terbuang dalam perjalanan ke tempat anda, fokuslah pada hal yang penting sementara kami mengurus sisanya.</p>
            </div>
        </div>

        <div class="underline-hover flex-fill bg-light p-2 align-items-center">
            <div class="me-3 mt-2">
                <i class="bi bi-wallet2 fs-1 text-info"></i>
            </div>
            <br>
            <div>
                <h5>Pay Online in Seconds</h5>
                <p>Kelola akun dan penagihan anda secara daring dari telepon pintar atau komputer Anda.</p>
            </div>
        </div>

        <div class="underline-hover flex-fill bg-light p-2 align-items-center">
            <div class="me-3 mt-2">
                <i class="fas fa-leaf fs-1 mt-3 text-info"></i>
            </div>
            <br>
            <div>
                <h5>Eco-Friendly</h5>
                <p>Kami menggunakan pelarut bebas <abbr title="Pelarut bebas PERC (Perchloroethylene) adalah jenis pelarut yang tidak mengandung senyawa perchloroethylene (tetrachloroethylene), yaitu bahan kimia yang sering digunakan dalam dry cleaning atau pencucian kering.">perc</abbr> yang aman dan bersih, sehingga Anda dan Bumi dapat terlihat baik.</p>
            </div>
        </div>
    </div>
</div>
<hr class="text-info w-50 mx-auto">
<div class="container mt-5">
    <p class="text-center"><b class="text-info">[Our Services]</b>
    </p>
    <style>
        @media (max-width: 768px) {
            .three-cards {
                flex-direction: column;
                align-items: center;
            }

            .three-cards .card {
                /* flex: 1 1 0; */
                max-width: 100% !important;
            }


        }
    </style>
    <p class="intro-home text-center">Dry Cleaning & Laundry</p>
    <section class="py-1 mt-1">
        <div class="container">
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-md-4 mb-3">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/washing.png" class="mx-auto mt-5" alt="washing" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Regular Wash & Fold</h5>
                                        <p class="card-text">Cuci dan lipat pakaian sehari-hari dengan proses higienis dan cepat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/dryclean-short-cycle.png" class="mx-auto mt-5" alt="dryclean-short-cycle" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Dry Cleaning</h5>
                                        <p class="card-text">Perawatan profesional untuk jas, gaun pesta, dan bahan khusus lainnya.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/laundry-bag.png" class="mx-auto mt-5" alt="laundry-bag" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Express Laundry</h5>
                                        <p class="card-text">Layanan cepat, pakaian bersih dan rapi dalam 4–6 jam saja.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 mb-3">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/iron.png" class="mx-auto mt-5" alt="ironing" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Ironing Only</h5>
                                        <p class="card-text">Setrika pakaian kamu biar makin rapi dan siap dipakai.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/laundry-bag.png" class="mx-auto mt-5" alt="laundry-bag" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Express Laundry</h5>
                                        <p class="card-text">Layanan cepat, pakaian bersih dan rapi dalam 4–6 jam saja.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/washing.png" class="mx-auto mt-5" alt="washing" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Regular Wash & Fold</h5>
                                        <p class="card-text">Cuci dan lipat pakaian sehari-hari dengan proses higienis dan cepat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 mb-3">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/laundry-bag.png" class="mx-auto mt-5" alt="laundry-bag" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Express Laundry</h5>
                                        <p class="card-text">Layanan cepat, pakaian bersih dan rapi dalam 4–6 jam saja.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/iron.png" class="mx-auto mt-5" alt="ironing" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Ironing Only</h5>
                                        <p class="card-text">Setrika pakaian kamu biar makin rapi dan siap dipakai.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/washing.png" class="mx-auto mt-5" alt="washing" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Regular Wash & Fold</h5>
                                        <p class="card-text">Cuci dan lipat pakaian sehari-hari dengan proses higienis dan cepat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 mb-3">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/dryclean-short-cycle.png" class="mx-auto mt-5" alt="dryclean-short-cycle" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Dry Cleaning</h5>
                                        <p class="card-text">Perawatan profesional untuk jas, gaun pesta, dan bahan khusus lainnya.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/washing.png" class="mx-auto mt-5" alt="washing" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Regular Wash & Fold</h5>
                                        <p class="card-text">Cuci dan lipat pakaian sehari-hari dengan proses higienis dan cepat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3 d-none d-md-block">
                                <div class="card rounded-0 p-3 h-100">
                                    <img width="50" height="50" src="https://img.icons8.com/ios/50/iron.png" class="mx-auto mt-5" alt="ironing" />
                                    <div class="card-body">
                                        <h5 class="card-title text">Ironing Only</h5>
                                        <p class="card-text">Setrika pakaian kamu biar makin rapi dan siap dipakai.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="customIndicators" class="text-center mt-3">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
            <span class="dot" data-slide="3"></span>
        </div>

    </section>
</div>

<hr class="text-info w-50 mx-auto">

<div class="container d-md-flex mt-5">
    <div class="container text-start mt-10px">
        <p><b class="text-info">Get Your Clothes Collected & Delivered</b></p>
        <p class="intro-home">How We Work</p>
        <p style="max-width: 500px;">
            Layanan kami didedikasikan untuk memudahkan hidup Anda dengan menyediakan layanan laundry antar-jemput. Singkirkan satu hal dari beban anda dan cobalah layanan cuci dan lipat di rumah kami yang mencakup layanan jemput dan antar. </p>
        <p style="max-width: 500px;">
            Kami telah bergerak dalam bisnis laundry selama 2 tahun dan ingin sekali bekerja sama dengan anda.
        </p>
        <br>
        <a class="bg-info text-light p-2 fw-bold text-decoration-none" href="/Wash">Get Service Now</a>
    </div>

    <div class="container d-md-flex mt-3 mtmin-130px">
        <div class="container"><img height="300" width="300" src="/img/laundry-service.png" alt=""></div>
        <div class="container mt-5 mt-1px">
            <h3>
                <p>We <span class="text-info">Clean</span> Your Clothes</p>
            </h3>
            <p>Fasilitas kami sangat baik, kami jamin Anda akan puas, kami memberikan jaminan kualitas pada semua jenis pakaian.</p>
        </div>
    </div>

</div>

<hr class="text-info w-50 mt-5 mx-auto">

<div class="container mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3960.2327909451096!2d110.4083611!3d-6.9818333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sid!4v1744366896748!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



<?= $this->endSection(); ?>