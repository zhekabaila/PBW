<?php
//StartSession
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: page10A.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Shafnanda Aulia Kamal (32)
    222212878 - 2KS4  -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMIKU READER</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="validasiForm.js"></script>
    <link rel="stylesheet" href="./library/swiper-bundle.min.css" />
    <link rel="stylesheet" href="StyleKu.css?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <div>
            <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                <a href="#" class="invisible-button">Logout</a>
                <h1 style="display: flex; align-items: center; gap: 12px;">
                    <img src="./icon.png" alt="" style="width: 80px; height: 80px;">
                    <span style="font-family: Irish Grover;">
                        KOMIKU READER
                    </span>
                </h1>
                <a href="page10B.php" class="visible-button">Logout</a>
            </div>
            <button type="button" id="burger-menu" style="padding: 0; background-color: transparent;">
                <img src="./HiMenu.svg" alt="" style="width: 26px;">
            </button>
            <button type="button" id="close-menu" style="display: none; padding: 0; background-color: transparent;">
                <img src=" ./HiOutlineX.svg" alt="" style="width: 26px;">
            </button>
        </div>
        <nav id="mainNav">
            <ul>
                <li><a href="Komiku.php" class="active-menu">Beranda</a></li>
                <li><a href="page09A.php">Daftar Komik</a></li>
                <li><a href="page09B.php">Daftar Peminjam</a></li>
                <li><a href="page09D.php">Tambah Peminjam</a></li>
                <li><a href="page09C.php">Tambah Komik</a></li>
                <li class="large-only"><a href="page10B.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main class="beranda-main">
        <section id="latest-update">
            <h2 style="font-size: 24px; font-weight: 700; color: white; margin-bottom: 24px;">Komik Terbaru</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/hai-miiko-35-edisi-khusus-bonus-cardholder');" style="cursor: pointer;">
                            <img src="./img/Komik_Miiko.jpg" alt="Miiko" />
                            <p style="color: grey">Miiko</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/naruto-01');" style="cursor: pointer;">
                            <img src="./img/Komik_Naruto.jpg" alt="Naruto">
                            <p style="color: grey">Naruto</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/detektif-conan-98');" style="cursor: pointer;">
                            <img src="./img/Komik_Konan.jpg" alt="Detective Conan">
                            <p style="color: grey">Detective Conan</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/si-juki-komik-strip');" style="cursor: pointer;">
                            <img src="./img/Komik_Sijuki.jpeg" alt="Si Juki">
                            <p style="color: grey">Si Juki</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/doraemon-10-edisi-baru');" style="cursor: pointer;">
                            <img src="./img/Komik_Doraemon.jpg" alt="Doraemon">
                            <p style="color: grey">Doraemon</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/hai-miiko-35-edisi-khusus-bonus-cardholder');" style="cursor: pointer;">
                            <img src="./img/Komik_Miiko.jpg" alt="Miiko" />
                            <p style="color: grey">Miiko</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/naruto-01');" style="cursor: pointer;">
                            <img src="./img/Komik_Naruto.jpg" alt="Naruto">
                            <p style="color: grey">Naruto</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/detektif-conan-98');" style="cursor: pointer;">
                            <img src="./img/Komik_Konan.jpg" alt="Detective Conan">
                            <p style="color: grey">Detective Conan</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/si-juki-komik-strip');" style="cursor: pointer;">
                            <img src="./img/Komik_Sijuki.jpeg" alt="Si Juki">
                            <p style="color: grey">Si Juki</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/doraemon-10-edisi-baru');" style="cursor: pointer;">
                            <img src="./img/Komik_Doraemon.jpg" alt="Doraemon">
                            <p style="color: grey">Doraemon</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/si-juki-komik-strip');" style="cursor: pointer;">
                            <img src="./img/Komik_Sijuki.jpeg" alt="Si Juki">
                            <p style="color: grey">Si Juki</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/doraemon-10-edisi-baru');" style="cursor: pointer;">
                            <img src="./img/Komik_Doraemon.jpg" alt="Doraemon">
                            <p style="color: grey">Doraemon</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <section id="popular" style="margin-top: 80px;">
            <h2 style="font-size: 24px; font-weight: 700; color: white; margin-bottom: 24px;">Komik Terpopuler</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/hai-miiko-35-edisi-khusus-bonus-cardholder');" style="cursor: pointer;">
                            <img src="./img/Komik_Miiko.jpg" alt="Miiko" />
                            <p style="color: grey">Miiko</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/naruto-01');" style="cursor: pointer;">
                            <img src="./img/Komik_Naruto.jpg" alt="Naruto">
                            <p style="color: grey">Naruto</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/detektif-conan-98');" style="cursor: pointer;">
                            <img src="./img/Komik_Konan.jpg" alt="Detective Conan">
                            <p style="color: grey">Detective Conan</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/si-juki-komik-strip');" style="cursor: pointer;">
                            <img src="./img/Komik_Sijuki.jpeg" alt="Si Juki">
                            <p style="color: grey">Si Juki</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/doraemon-10-edisi-baru');" style="cursor: pointer;">
                            <img src="./img/Komik_Doraemon.jpg" alt="Doraemon">
                            <p style="color: grey">Doraemon</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/hai-miiko-35-edisi-khusus-bonus-cardholder');" style="cursor: pointer;">
                            <img src="./img/Komik_Miiko.jpg" alt="Miiko" />
                            <p style="color: grey">Miiko</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/naruto-01');" style="cursor: pointer;">
                            <img src="./img/Komik_Naruto.jpg" alt="Naruto">
                            <p style="color: grey">Naruto</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/detektif-conan-98');" style="cursor: pointer;">
                            <img src="./img/Komik_Konan.jpg" alt="Detective Conan">
                            <p style="color: grey">Detective Conan</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/si-juki-komik-strip');" style="cursor: pointer;">
                            <img src="./img/Komik_Sijuki.jpeg" alt="Si Juki">
                            <p style="color: grey">Si Juki</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/doraemon-10-edisi-baru');" style="cursor: pointer;">
                            <img src="./img/Komik_Doraemon.jpg" alt="Doraemon">
                            <p style="color: grey">Doraemon</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/si-juki-komik-strip');" style="cursor: pointer;">
                            <img src="./img/Komik_Sijuki.jpeg" alt="Si Juki">
                            <p style="color: grey">Si Juki</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="openInNewTab('https://www.gramedia.com/products/doraemon-10-edisi-baru');" style="cursor: pointer;">
                            <img src="./img/Komik_Doraemon.jpg" alt="Doraemon">
                            <p style="color: grey">Doraemon</p>
                            <div class="stars">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
    </main>

    <footer>
        <p style="color: white;">Copyright &copy; 2024 Politeknik Statistika STIS</p>
        <p style="color: white;">Created by Shafnanda Aulia Kamal (222212878@stis.ac.id)</p>
    </footer>
    <script src="./navbarMenu.js"></script>
    <script>
        function openInNewTab(url) {
            var win = window.open(url, '_blank');
            win.focus();
        }
    </script>
    <script src="./library/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper", {
            slidesPerView: 'auto',
            loop: true,
            grabCursor: true,
            spaceBetween: 30,
            autoplay: {
                delay: 4500,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>