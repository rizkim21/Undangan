<?php
$koneksi = mysqli_connect("localhost", "root", "", "andi&ina");
?>

<!DOCTYPE html>
<html lang="en">
<!-- Heading -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Andi & Ina Wedding</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Montserrat:wght@100;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="ctdwn/simplyCountdown.theme.default.css" />
  <script src="ctdwn/simplyCountdown.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
</head>

<body>
  <!-- Halaman Depan -->

  <section id="prime" class="prime w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
    <main>
      <h4>Kepada Bapak/Ibu/Saudara/i,</h4>
      <h1>Andi & Ina</h1>
      <p>Resepsi Pernikahan dalam :</p>
      <div class="simply-countdown"></div>
      <a href="#home" class="btn btn-lg mt-4" onclick="enableScroll()">Lihat Undangan</a>
    </main>
  </section>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">Andi&Ina</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Andi&Ina</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link" href="#info">Info</a>
            <a class="nav-link" href="#story">Story</a>
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#reservation">Reservation</a>
            <a class="nav-link" href="#gift">Gift</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Pasangan -->

  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Acara Pernikah</h2>
          <h3>
            Diselenggarakan Pada 30 Desember 2023 di Amuntai, Kalimantan
            Selatan
          </h3>
          <p>
            Oleh karena itu, dengan segala hormat, kami bermaksud untuk
            mengundang Bapak/Ibu, Saudara/i, untuk hadir pada acara pernikahan
            kami.
          </p>
        </div>
      </div>
      <div class="row couple">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end">
              <h3>Andi</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Necessitatibus, eveniet. Quia alias reiciendis rem ad illo,
                consectetur nihil rerum? Est, aliquam dolorem totam expedita
                et ipsa in corporis voluptate corrupti!
              </p>
              <p>
                Putra dari Bpk <br />
                dan <br />
                Ibu
              </p>
            </div>
            <div class="col-4">
              <img src="img/profile-icon-design-free-vector.jpg" alt="cowo" class="img-responsive rounded-circle" />
            </div>
          </div>
        </div>
        <span class="heart">
          <i class="bi bi-heart-fill"></i>
        </span>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-4">
              <img src="img/profile-icon-design-free-vector.jpg" alt="cowo" class="img-responsive rounded-circle" />
            </div>
            <div class="col-8">
              <h3>Ina</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Necessitatibus, eveniet. Quia alias reiciendis rem ad illo,
                consectetur nihil rerum? Est, aliquam dolorem totam expedita
                et ipsa in corporis voluptate corrupti!
              </p>
              <p>
                Putri dari Bpk <br />
                dan <br />
                Ibu
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Informasi Undangan -->

  <section id="info" class="info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Informasi Acara</h2>
          <p class="alamat">
            Alamat : Gedung ... <br />
            Jalan ...
          </p>
          <a href="https://maps.app.goo.gl/A71tz2Y2qu14TJYN6" target="_blank" class="btn btn-light btn-sm my-3">Lihat Peta</a>
          <p class="description">Diharapakan untuk tidak salah alamat</p>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-5 col-10">
          <div class="card text-center text-bg-light mb-4">
            <div class="card-header">Akad Nikah</div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-clock d-block"></i>
                  <span>08.00 - 10.00</span>
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span>Minggu 31 Desember 2023</span>
                </div>
              </div>
            </div>
            <div class="card-footer">Saat acara akad diharapkan kondusif</div>
          </div>
        </div>
        <div class="col-md-5 col-10">
          <div class="card text-center text-bg-light">
            <div class="card-header">Resepsi</div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-clock d-block"></i>
                  <span>10.00 - Selesai</span>
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span>Minggu 31 Desember 2023</span>
                </div>
              </div>
            </div>
            <div class="card-footer">Saat acara akad diharapkan kondusif</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span> Bagaimana Kami Bertemu </span>
          <h2>Cerita Kami</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora,
            doloribus!
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li>
              <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300)"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama Bertemu</h3>
                  <span>1 Januari 2017</span>
                </div>
                <div class="timeline-body">
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Cumque sed aspernatur tempora. Ipsam, quae quaerat?
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300)"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pendekatan</h3>
                  <span>30 Maret 2017</span>
                </div>
                <div class="timeline-body">
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Cumque sed aspernatur tempora. Ipsam, quae quaerat?
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300)"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Serius</h3>
                  <span>7 Oktober 2018</span>
                </div>
                <div class="timeline-body">
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Cumque sed aspernatur tempora. Ipsam, quae quaerat?
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Memori Kami</span>
          <h2>Galeri Foto</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora,
            doloribus!
          </p>
        </div>
      </div>
      <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
        <div class="col mt-3">
          <a href="https://picsum.photos/id/202/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="example-gallery">
            <img src="https://picsum.photos/id/202/300/400" alt="Andi & Ina 1" class="img-fluid w-100 rounded" />
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/201/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="example-gallery">
            <img src="https://picsum.photos/id/201/300/400" alt="Andi & Ina 2" class="img-fluid w-100 rounded" />
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/200/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="example-gallery">
            <img src="https://picsum.photos/id/200/300/400" alt="Andi & Ina 3" class="img-fluid w-100 rounded" />
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Kehadiran -->
  <section id="reservation" class="reservation">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Konfirmasi Kehadiran</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora,
            doloribus!
          </p>
        </div>
      </div>
      <form class="row align-items-center justify-content-center" action="rsvp.php" method="post">
        <div class="col-12 mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" />
        </div>
        <div class="col-12 mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
        </div>
        <div class="col-12 mb-3">
          <label for="status" class="form-label">Konfirmasi</label>
          <select id="status" name="status" class="form-select">
            <option selected>Pilih salah satu</option>
            <option value="Hadir">Hadir</option>
            <option value="Tidak Hadir">Tidak Hadir</option>
          </select>
        </div>
        <div class="col-1" style="margin-top: 35px">
          <button class="btn btn-primary" type="submit" name="submit" value="submit">
            Kirim
          </button>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10 p-5">
            <table class="hadir">
              <?php $sql = "SELECT * FROM rsvp";
              $query = mysqli_query($koneksi, $sql);
              while ($row = mysqli_fetch_array($query)) {
                echo "
                <tr>
              <tr>
              <td>$row[nama]</td>
              <td>";
                if ($row['status'] == "Hadir") {
                  echo "<img src='img/centang.png' width='2%' height='2%'/>";
                } else {
                  echo "<img src='img/ />'";
                }
                echo "</td>
              </tr>
              <td>$row[pesan]</td>
              </tr>";
              }
              ?>
            </table>
          </div>
        </div>
      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  <script>
    simplyCountdown(".simply-countdown", {
      year: 2023, // required
      month: 12, // required
      day: 30, // required
      hours: 8, // Default is 0 [0-23] integer
      words: {
        //words displayed into the countdown
        days: {
          singular: "Hari",
          plural: "Hari"
        },
        hours: {
          singular: "Jam",
          plural: "Jam"
        },
        minutes: {
          singular: "Menit",
          plural: "Menit"
        },
        seconds: {
          singular: "Detik",
          plural: "Detik"
        },
      },
    });
  </script>

  <script>
    const stickyTop = document.querySelector(".sticky-top");
    const offcanvas = document.querySelector(".offcanvas");

    offcanvas.addEventListener("show.bs.offcanvas", function() {
      stickyTop.style.overflow = "visible";
    });

    offcanvas.addEventListener("hidden.bs.offcanvas", function() {
      stickyTop.style.overflow = "hidden";
    });
  </script>

  <script>
    const rootElement = document.querySelector(":root");

    function disableScroll() {
      const scrollTop =
        window.pageYOffset || document.documentElement.scrollTop;
      const scrollLeft =
        window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function() {
        window.scrollTo(scrollTop, scrollLeft);
      };

      rootElement.style.scrollBehavior = "auto";
    }

    function enableScroll() {
      window.onscroll = function() {};
      rootElement.style.scrollBehavior = "smooth";
      localStorage.setItem("opened", "true");
    }
    if (!localStorage.getItem("opened")) {
      disableScroll();
    }
  </script>

  <!-- <script>
      window.addEventListener("load", function () {
        const form = document.getElementById("rsvp-form");
        form.addEventListener("submit", function (e) {
          e.preventDefault();
          const data = new FormData(form);
          const action = e.target.action;
          fetch(action, {
            method: "POST",
            body: data,
          }).then(() => {
            alert("Data Tersimpan");
          });
        });
      }); -->
  </script>
</body>

</html>