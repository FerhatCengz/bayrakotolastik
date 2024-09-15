<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Bayrak Oto Lastik - Türkiye Genelinde Güvenilir Lastik Hizmetleri</title>
    <meta name="description"
        content="Türkiye genelinde lastik satışı, tamiri ve bakımı hizmetleri. Bayrak Oto Lastik ile kaliteli hizmet ve uygun fiyatlarla aracınızı güvende tutun!">
    <meta name="keywords"
        content="oto lastik, lastik satışı, lastik tamiri, balans ayarı, lastik bakımı, akü değişimi, Türkiye lastikçiler, online lastik satışı">
    <meta name="robots" content="index, follow">
    <meta name="web_author" content="Bayrak Oto Lastik">
    <meta name="author" content="Bayrak Oto Lastik">
    <meta name="publisher" content="Bayrak Oto Lastik">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bayrakotolastik.com/">
    <meta property="og:title" content="Bayrak Oto Lastik - Türkiye Genelinde Güvenilir Lastik Hizmetleri">
    <meta property="og:description"
        content="Türkiye genelinde lastik satışı, tamiri ve bakımı hizmetleri. Bayrak Oto Lastik ile kaliteli hizmet ve uygun fiyatlarla aracınızı güvende tutun!">
    <meta property="og:image" content="https://bayrakotolastik.com/../assets/img/social-share.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://bayrakotolastik.com/">
    <meta name="twitter:title" content="Bayrak Oto Lastik - Türkiye Genelinde Güvenilir Lastik Hizmetleri">
    <meta name="twitter:description"
        content="Türkiye genelinde lastik satışı, tamiri ve bakımı hizmetleri. Bayrak Oto Lastik ile kaliteli hizmet ve uygun fiyatlarla aracınızı güvende tutun!">
    <meta name="twitter:image" content="https://bayrakotolastik.com/../assets/img/twitter-share.jpg">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>


<body>

    <!-- ======= Header ======= -->
    <?php include 'layout/header.php'; ?>



    <main id="main">



        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">
            <div id="app" class="container">
                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Aracınıza en uygun lastiği bulun</h3>
                            <b>Telefon: +905426575124</b><br>
                            <b>E-posta: bayrakotolastik@gmail.com</b>
                        </div>
                    </div>


                    <div class="col-lg-5" data-aos="fade">
                        <form action="forms/quote.php" method="post" class="php-email-form">

                            <div class="row gy-3">
                                <div class="col-md-12 text-center">
                                    <a href="./urunler">
                                        Tüm Ürünleri Görmek İçin Tıklayınız!
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input
                                            checked
                                            v-model="ebat"
                                            class="form-check-input" type="radio" value="lastik" name="wizard" id="flexCheckLastik">
                                        <label class="m-1" for="flexCheckLastik">
                                            Lastik Ebatı
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input
                                            v-model="ebat"
                                            class="form-check-input" type="radio" value="arac" name="wizard" id="flexCheckArac">
                                        <label class="m-1" for="flexCheckArac">
                                            Araç Modeli
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- lastik ebatına göre -->
                            <div
                                v-show="ebat == 'lastik'"
                                class="row gy-3">

                                <label for="mevsim">Mevsim</label>
                                <div class="col-md-12">
                                    <select name="mevsim" class="form-control">
                                        <option value="">Mevsim Seçiniz</option>
                                        <option value="1">Yaz</option>
                                        <option value="2">Kış</option>
                                        <option value="3">4 Mevsim</option>
                                    </select>
                                </div>

                                <label for="kesit">Kesit Genişliği</label>
                                <div class="col-md-12">
                                    <select name="kesit" class="form-control">
                                        <option value="">Kesit Seçiniz</option>
                                        <option value="1">30</option>
                                        <option value="2">35</option>
                                        <option value="3">40</option>
                                        <option value="4">45</option>
                                        <option value="5">50</option>
                                        <option value="6">55</option>
                                        <option value="7">60</option>
                                        <option value="8">65</option>
                                        <option value="9">70</option>
                                        <option value="10">75</option>
                                        <option value="11">80</option>
                                        <option value="12">85</option>
                                    </select>

                                </div>

                                <label for="Kesit Oranı">Kesit Oranı</label>
                                <div class="col-md-12">
                                    <select name="kesit_orani" class="form-control">
                                        <option value="">Kesit Oranı Seçiniz</option>
                                        <option value="1">30</option>
                                        <option value="2">35</option>
                                        <option value="3">40</option>
                                        <option value="4">45</option>
                                        <option value="5">50</option>
                                        <option value="6">55</option>
                                        <option value="7">60</option>
                                        <option value="8">65</option>
                                        <option value="9">70</option>
                                        <option value="10">75</option>
                                        <option value="11">80</option>
                                        <option value="12">85</option>
                                    </select>
                                </div>

                                <label for="Jant Çapı">Jant Çapı</label>
                                <div class="col-md-12">
                                    <select name="jant_cap" class="form-control">
                                        <option value="">Jant Çapı Seçiniz</option>
                                        <option value="1">13</option>
                                        <option value="2">14</option>
                                        <option value="3">15</option>
                                        <option value="4">16</option>
                                        <option value="5">17</option>
                                        <option value="6">18</option>
                                        <option value="7">19</option>
                                        <option value="8">20</option>
                                        <option value="9">21</option>
                                        <option value="10">22</option>
                                        <option value="11">23</option>
                                        <option value="12">24</option>
                                    </select>
                                </div>
                            </div>

                            <!-- araca göre -->
                            <div v-show="ebat != 'lastik'" class="row gy-3">

                                <label for="marka">Marka</label>
                                <div class="col-md-12">
                                    <select name="marka" class="form-control">
                                        <option value="">Marka Seçiniz</option>
                                        <option value="1">Audi</option>
                                        <option value="2">BMW</option>
                                        <option value="3">Chevrolet</option>
                                        <option value="4">Citroen</option>
                                        <option value="5">Dacia</option>
                                        <option value="6">Fiat</option>
                                        <option value="7">Ford</option>
                                        <option value="8">Honda</option>
                                        <option value="9">Hyundai</option>
                                        <option value="10">Kia</option>
                                        <option value="11">Mazda</option>
                                        <option value="12">Mercedes</option>
                                        <option value="13">Mitsubishi</option>
                                        <option value="14">Nissan</option>
                                        <option value="15">Opel</option>
                                        <option value="16">Peugeot</option>
                                        <option value="17">Renault</option>
                                        <option value="18">Seat</option>
                                        <option value="19">Skoda</option>
                                        <option value="20">Suzuki</option>
                                        <option value="21">Toyota</option>
                                        <option value="22">Volkswagen</option>
                                        <option value="23">Volvo</option>
                                    </select>
                                </div>

                                <label for="model">Model</label>
                                <div class="col-md-12">
                                    <select name="model" class="form-control">
                                        <option value="">Model Seçiniz</option>
                                        <option value="1">A1</option>
                                        <option value="2">A3</option>
                                        <option value="3">A4</option>
                                        <option value="4">A5</option>
                                        <option value="5">A6</option>
                                        <option value="6">A7</option>
                                        <option value="7">A8</option>
                                        <option value="8">Q2</option>
                                        <option value="9">Q3</option>
                                        <option value="10">Q5</option>
                                        <option value="11">Q7</option>
                                        <option value="12">Q8</option>
                                        <option value="13">TT</option>
                                        <option value="14">X1</option>
                                        <option value="15">X2</option>
                                        <option value="16">X3</option>
                                        <option value="17">X4</option>
                                        <option value="18">X5</option>
                                        <option value="19">X6</option>
                                        <option value="20">X7</option>
                                        <option value="21">Z4</option>
                                        <option value="22">Cruze</option>
                                        <option value="23">Spark</option>
                                        <option value="24">Aveo</option>
                                        <option value="25">Captiva</option>
                                        <option value="26">Trax</option>
                                        <option value="27">C-Elysee</option>
                                        <option value="28">C3</option>
                                        <option value="29">C4</option>
                                        <option value="30">C5</option>
                                        <option value="31">C6</option>
                                        <option value="32">C4 Picasso</option>
                                        <option value="33">C4 Cactus</option>
                                        <option value="34">Duster</option>
                                        <option value="35">Sandero</option>
                                        <option value="36">Logan</option>
                                        <option value="37">Lodgy</option>
                                        <option value="38">Dokker</option>

                                    </select>

                                </div>

                                <label for="yil">Yıl</label>
                                <div class="col-md-12">
                                    <select name="yil" class="form-control">
                                        <option value="">Yıl Seçiniz</option>
                                        <option value="1">2022</option>
                                        <option value="2">2021</option>
                                        <option value="3">2020</option>
                                        <option value="4">2019</option>
                                        <option value="5">2018</option>
                                        <option value="6">2017</option>
                                        <option value="7">2016</option>
                                        <option value="8">2015</option>
                                        <option value="9">2014</option>
                                        <option value="10">2013</option>
                                        <option value="11">2012</option>
                                        <option value="12">2011</option>
                                        <option value="13">2010</option>
                                        <option value="14">2009</option>
                                        <option value="15">2008</option>
                                        <option value="16">2007</option>
                                        <option value="17">2006</option>
                                        <option value="18">2005</option>
                                        <option value="19">2004</option>
                                        <option value="20">2003</option>
                                        <option value="21">2002</option>
                                        <option value="22">2001</option>
                                        <option value="23">2000</option>
                                        <option value="24">1999</option>
                                        <option value="25">1998</option>
                                        <option value="26">1997</option>
                                        <option value="27">1996</option>
                                        <option value="28">1995</option>
                                        <option value="29">1994</option>
                                        <option value="30">1993</option>
                                        <option value="31">1992</option>
                                        <option value="32">1991</option>
                                        <option value="33">1990</option>
                                        <option value="34">1989</option>
                                        <option value="35">1988</option>
                                        <option value="36">1987</option>
                                        <option value="37">1986</option>
                                        <option value="38">1985</option>

                                    </select>
                                </div>

                                <label for="version">Versiyon</label>
                                <div class="col-md-12">
                                    <select name="version" class="form-control">
                                        <option value="">Versiyon Seçiniz</option>
                                        <option value="1">1.6 TDI</option>
                                        <option value="2">1.6 TDI DSG</option>
                                        <option value="3">1.6 TDI SCR</option>
                                        <option value="4">1.6 TDI SCR DSG</option>
                                        <option value="5">1.6 TDI SCR 4x4</option>
                                        <option value="6">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="7">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="8">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="9">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="10">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="11">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="12">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="13">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="14">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="15">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="16">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="17">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="18">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="19">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="20">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="21">1.6 TDI SCR 4x4 DSG</option>
                                        <option value="22">1.6 TDI SCR 4x4 DSG</option>
                                    </select>
                                </div>

                                <label for="lastik">Lastik Ebatı</label>
                                <div class="col-md-12">
                                    <select name="lastik" class="form-control">
                                        <option value="">Lastik Ebatı Seçiniz</option>
                                        <option value="1">195/65 R15</option>
                                        <option value="2">205/55 R16</option>
                                        <option value="3">225/45 R17</option>
                                        <option value="4">225/40 R18</option>
                                        <option value="5">235/55 R19</option>
                                        <option value="6">245/45 R20</option>
                                        <option value="7">255/40 R21</option>
                                        <option value="8">265/35 R22</option>
                                        <option value="9">275/30 R23</option>
                                        <option value="10">285/25 R24</option>
                                    </select>
                                </div>







                            </div>


                            <div class="col-md-12 text-center mt-5 mb-5">
                                <button type="submit" class="w-100">
                                    Görüntüle
                                </button>
                                <button type="submit" class="w-100 mt-2"
                                    style="background-color: white;color:black;">
                                    Sıfırla
                                </button>
                            </div>

                        </form>
                    </div><!-- End Quote Form -->


                    </form>
                </div>

            </div>

            </div>
        </section><!-- End Get Started Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'layout/footer.php'; ?>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="../assets/js/main.js"></script>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



    <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {
                    ebat: "lastik"
                }
            }
        }).mount('#app')
    </script>
</body>

</html>