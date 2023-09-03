<?php
// include 'dbcontroller.php';
require_once('dbcontroller.php');
$db = new dbController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

     <!-- AOS  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
   <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <title>PBO</title>
</head>

<body>

    <!-- Navbar -->
    <div class="fixed-top bg-light" style="height: 64px;" data-aos="fade-down" data-aos-duration="1000">
        <nav class="navbar container navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand text-dark" href="#">SMKN 40 JAKARTA</a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kelas">Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jurusan">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#guru">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#siswa">Siswa</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <hr style="position: relative; bottom: 10px;">
    </div>
    <!-- Akhir Navbar -->

    <!-- kelas -->
    <div class="container" id="kelas">
        <button title="Back To Top" class="btnScrollToTop bg-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg>
        </button>
        <h1 class="text-center text-center mb-5 mt-70">Kelas</h1>
        <div class="row text-center justify-content-center">

            <?php
            $sql = "select * from t_kelas";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

                <div class="card-all col-md-4 col-xl-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
                    <div class="card" style="width: 18rem;">
                        <img src="img/kelas/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Kelas">
                        <div class="card-body">
                            <h5 class="card-title text-dark">

                                <?php echo $value['f_nama']; ?>

                            </h5>
                        </div>
                    </div>
                </div>

            <?php
            endforeach
            ?>
        </div>
    </div>
    <!--kelas end-->

    <!--jurusan-->

    <div class="container" id="jurusan">
        <h1 class="text-center text-center mb-5 mt-3">Jurusan</h1>
        <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out"  data-aos-anchor-placement="top-center">

            <?php
            $sql = "select * from t_jurusan";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

                <div class="card-all col-md-4 col-xl-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/jurusan/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Jurusan">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <?php echo $value['f_nama']; ?>
                            </h5>
                            <p class="card-text" style="font-size: 14px;">
                                <?php echo $value['f_deskripsi']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            endforeach
            ?>
        </div>
        <!--jurusan end-->

        <!--guru-->
        <div class="container" id="guru">
            <h1 class="text-center text-center mb-5 mt-3">Guru</h1>
            <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out"  data-aos-anchor-placement="top-center">

                <?php
                $sql = "select * from t_guru";
                $row = $db->getALL($sql);
                foreach ($row as $value) :
                ?>

                    <div class="card-all col-md-4 col-xl-6 mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/guru/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Guru">
                            <div class="card-body">
                                <h5 class="card-title text-dark">

                                    <?php echo $value['f_nama']; ?>

                                </h5>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach
                ?>
            </div>
        <!--guru end-->


        <!--siswa-->
            <div class="container" id="siswa">
                <h1 class="text-center text-center mb-5 mt-3">Siswa</h1>
                <div class="row text-center justify-content-center">

                    <?php
                    // Menggunakan PDO untuk menghubungkan ke database
                    $db = new PDO("mysql:host=localhost;dbname=sekolah", "root", "");

                    // Kueri SQL dengan JOIN untuk mengambil data siswa, nama kelas, dan nama jurusan
                    $sql = "SELECT t_siswa.f_nama, t_kelas.f_nama AS f_idkelas, t_jurusan.f_nama AS f_idjurusan
                        FROM t_siswa
                        INNER JOIN t_kelas ON t_siswa.f_idkelas = t_kelas.f_idkelas
                        INNER JOIN t_jurusan ON t_siswa.f_idjurusan = t_jurusan.f_idjurusan";

                    $result = $db->query($sql);

                    foreach ($result as $row) :
                    ?>

                        <div class="card-all col-md-4 col-xl-6 mb-5" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card" style="width: 18rem;">
                                <img src="img/siswa/<?php echo $row['f_nama']; ?>.jpg" class="card-img-top" alt="Siswa">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">
                                        <?php echo $row['f_nama']; ?>
                                    </h5>
                                    <span>Kelas: <?php echo $row['f_idkelas']; ?></span>
                                    <p>Jurusan: <?php echo $row['f_idjurusan']; ?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--siswa end-->

    <!-- footer-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D9D9D9" fill-opacity="1" d="M0,288L40,261.3C80,235,160,181,240,138.7C320,96,400,64,480,80C560,96,640,160,720,170.7C800,181,880,139,960,144C1040,149,1120,203,1200,197.3C1280,192,1360,128,1400,96L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

    <footer class="text-dark text-center mt-25" style="background: #D9D9D9;">
        <p>
        <i class="bi bi-suit-heart-fill"></i>
            <a href="https://www.instagram.com/desyii16/" target="_blank" class="text-dark fw-bold">desydes</a>
            CopyRight
        </p>
    </footer>
    <!--footer end-->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const btnScrollToTop = document.querySelector(".btnScrollToTop");

        btnScrollToTop.addEventListener("click", function() {
            window.scrollTo(0, 0);
        });
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                btnScrollToTop.classList.add("active");
            } else {
                btnScrollToTop.classList.remove("active");
            }
        })
        AOS.init();
    </script>

</body>
</html>