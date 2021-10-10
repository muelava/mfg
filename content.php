<link rel="stylesheet" href="assets/css/style.css">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!-- owlcarousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
$nav = $_POST["nav"];

?>

<?php if ($nav == "Wholesale") : ?>
    <section class="container mb-5">
        <div class="d-flex justify-content-start align-items-center subheading mt-4 mb-3">
            <div class="col childshub">
                <h5 class="ps-3 my-2">Mau Jualan Autolaris?</h4>
            </div>
        </div>

        <main class="row p-4 pb-0 bg-primary shadow-sm justify-content-around align-items-center back1">
            <div class="col-md-4 text-light">
                <h1 class="fw-bold mb-0" style="text-shadow: 0px 0px 10px black; font-size:8em">MFG</h1>
                <h3 style="text-shadow: 2px 2px 5px black;letter-spacing: 10px;">WHOLESALE</h3>
                <h6 class="fw-bold ms-5 mt-3">JAWABANNYA!</h6>
            </div>
            <div class="col-md-5">
                <img src="assets/img/hero3.png" class="img-fluid" alt="">
            </div>
            <span class=" py-3 d-flex align-items-center justify-content-around bar-bottom">
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-success fw-bold">
                    <i class="fab fa-whatsapp fa-2x me-2"></i><span class=" rounded px-2 text-dark fw-bold">082123456</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-danger fw-bold">
                    <i class="fab fa-instagram fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.wholesale</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-danger fw-bold">
                    <i class="fab fa-tiktok fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.wholesale</span>
                </a>
            </span>
        </main>
    </section>
<?php elseif ($nav == "Campus") : ?>
    <section class="container mb-5">
        <div class="d-flex justify-content-start align-items-center subheading mt-4 mb-3">
            <div class="col childshub">
                <h5 class="ps-3 my-2">Bingung Cari Tambahan Ilmu?</h4>
            </div>
        </div>
        <main class="row p-4 pb-0 bg-primary shadow-sm justify-content-around align-items-center back1">
            <div class="col-md-4 text-light text-center">
                <h1 class="fw-bold" style="text-shadow: 0px 0px 10px black; font-size:8em">MFG</h1>
                <h3 style="text-shadow: 2px 2px 5px black;letter-spacing: 10px;">CAMPUS</h3>
                <h6 class="fw-bold fst-italic">AJAAA...</h6>
            </div>
            <div class="col-md-5">
                <img src="assets/img/hero2.png" class="img-fluid" alt="">
            </div>
            <span class=" py-3 d-flex align-items-center justify-content-around bar-bottom">
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-primary fw-bold">
                    <i class="fab fa-youtube fa-2x me-2"></i><span class=" rounded px-2 text-dark fw-bold">My Fashion Grosir</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-primary fw-bold">
                    <i class="fab fa-instagram fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-primary fw-bold">
                    <i class="fab fa-tiktok fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
            </span>
        </main>

    </section>
<?php elseif ($nav == "Textile") : ?>
    <section class="container mb-5">
        <div class="d-flex justify-content-start align-items-center subheading mt-4 mb-3">
            <div class="col childshub">
                <h5 class="ps-3 my-2">Cari Bahan Berkualitas?</h4>
            </div>
        </div>

        <main class="row p-4 pb-0 bg-primary shadow-sm justify-content-around align-items-center back3">
            <div class="col-md-4 text-light">
                <h1 class="fw-bold" style="text-shadow: 0px 0px 10px black; font-size:8em">MFG</h1>
                <h3 style="text-shadow: 2px 2px 5px black;letter-spacing: 10px;">TEXTILE</h3>
                <h5 class="fw-bold fst-italic">AJAAA...</h5>
            </div>
            <div class="col-md-5">
                <img src="assets/img/hero2.png" class="img-fluid" alt="">
            </div>
            <span class=" py-3 d-flex align-items-center justify-content-around bar-bottom">
                <a href="#" class="d-flex align-items-center text-decoration-none shadow fw-bold" style="color: #9b0d52;">
                    <i class="fab fa-youtube fa-2x me-2"></i><span class=" rounded px-2 text-dark fw-bold">My Fashion Grosir</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow fw-bold" style="color: #9b0d52;">
                    <i class="fab fa-instagram fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow fw-bold" style="color: #9b0d52;">
                    <i class="fab fa-tiktok fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
            </span>
        </main>
    </section>
<?php elseif ($nav == "Custom") : ?>
    <section class="container mb-5">
        <div class="d-flex justify-content-start align-items-center subheading mt-4 mb-3">
            <div class="col childshub">
                <h5 class="ps-3 my-2">Butuh Spesialis Desain?</h4>
            </div>
        </div>

        <main class="row p-4 pb-0 bg-primary shadow-sm justify-content-around align-items-center back4">
            <div class="col-md-4 text-light text-center">
                <h1 class="fw-bold" style="text-shadow: 0px 0px 10px black; font-size:8em">MFG</h1>
                <h3 style="text-shadow: 2px 2px 5px black;letter-spacing: 10px;">CUSTOM</h3>
                <span class="badge bg-light text-warning shadow-sm" style="font-size: 1em;">Coming Soon</span>
            </div>
            <div class="col-md-5">
                <img src="assets/img/hero2.png" class="img-fluid" alt="">
            </div>
            <span class=" py-3 d-flex align-items-center justify-content-around bar-bottom">
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-warning fw-bold">
                    <i class="fab fa-whatsapp fa-2x me-2"></i><span class=" rounded px-2 text-dark fw-bold">08123123</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-warning fw-bold">
                    <i class="fab fa-instagram fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-warning fw-bold">
                    <i class="fab fa-tiktok fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
            </span>
        </main>
    </section>
<?php elseif ($nav == "Dropship") : ?>
    <section class="container mb-5">
        <div class="d-flex justify-content-start align-items-center subheading mt-4 mb-3">
            <div class="col childshub">
                <h5 class="ps-3 my-2">Mau Bisnis Modal Minim?</h4>
            </div>
        </div>

        <main class="row p-4 pb-0 bg-primary shadow-sm justify-content-around align-items-center back2">
            <div class="col-md-4 text-light">
                <h5 class="fw-bold fst-italic">MFG DROPSHIP AJA!</h5>
                <h1 class="fw-bold" style="text-shadow: 0px 0px 10px black; font-size:8em">MFG</h1>
                <h3 style="text-shadow: 2px 2px 5px black;letter-spacing: 10px;">DROPSHIP</h3>
            </div>
            <div class="col-md-5">
                <img src="assets/img/hero2.png" class="img-fluid" alt="">
            </div>
            <span class=" py-3 d-flex align-items-center justify-content-around bar-bottom">
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-success fw-bold">
                    <i class="fab fa-whatsapp fa-2x me-2"></i><span class=" rounded px-2 text-dark fw-bold">08123123</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-danger fw-bold">
                    <i class="fab fa-instagram fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none shadow text-danger fw-bold">
                    <i class="fab fa-tiktok fa-2x me-2"></i><span class="rounded px-2 text-dark fw-bold">mfg.dropship</span>
                </a>
            </span>
        </main>

    </section>

<?php endif; ?>

<div class="d-flex justify-content-start align-items-center subheading mt-4 mb-3">
    <div class="col childshub">
        <h5 class="ps-3 my-2"><?= $nav; ?></h4>
    </div>
</div>
<div class="owl-carousel owl-theme">
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?palazo-pocket" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">Best Palazo Pocket.</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?hailey-oneset" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">Hailey Oneset</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?dress" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">Snow Dress</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?blazer" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">Blazer</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?jeans" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">Jeans</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?hoodie" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">Hoodie</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?boot" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">Boot</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
    <a href="#" class="item text-center btn produk my-4 p-0">
        <div></div>
        <img src="https://source.unsplash.com/900x1300/?t-shirt" class="img-fluid shadow-sm" height="100%" alt="">
        <span>
            <p class="text-center my-1">T-Shirt</p>
            <p class="fw-bold text-primary text-center">Rp 69,999</p>
        </span>
    </a>
</div>



<!-- Optional JavaScript; choose one of the two! -->
<script src="assets/js/script.js"></script>


<!-- owlcarousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>