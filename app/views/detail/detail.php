<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edutani</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/Index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    </head>
  <body>
  <!-- navbar -->
  <div class="banner">
      <div class="navbar">
        <img src="img/Logo_Edutani-removebg-preview.png" class="logo" />
        <ul>
          <li><a href="Home">Home</a></li>
          <li><a href="Edu">Edukasi</a></li>
          <li class="services" id="dropdown">
            <a href="#services"
              >Kategori <i class="fa-solid fa-caret-down"></i
            ></a>
            <ul class="toggle">
              <li><a href="tips.html"> Tips </a></li>
              <li><a href="kat.html"> Pertanian </a></li>
            </ul>
          </li>
          <li><a href="BarangList">Belanja</a></li>
          <li><a href="About">About</a></li>
        </ul>
      </div>
    </div>
    
    <?php foreach ($data['tutorials'] as $tutorial) { ?>
      <section>
          <h1><?php echo $tutorial['judul']; ?></h1>
      </section>

      <!-- Video Preview -->
      <section>
          <h2>Video Tutorial</h2>
          <!-- Tempatkan tautan video YouTube di bawah -->
          <iframe
              width="560"
              height="315"
              src="<?php echo $tutorial['link_youtube']; ?>"
              frameborder="0"
              allowfullscreen
          ></iframe>
      </section>

      <!-- Tujuan -->
      <section>
          <h2>Tujuan</h2>
          <p><?php echo $tutorial['tujuan']; ?></p>
      </section>

      <!-- Materi -->
      <section>
          <h2>Materi</h2>
          <p><?php echo $tutorial['materi']; ?></p>
      </section>

      <!-- Langkah-Langkah -->
      <section>
          <h2>Langkah-Langkah</h2>
          <p><?php echo $tutorial['langkah_langkah']; ?></p>
      </section>
    <?php } ?>

    <!-- Komentar -->
    <section class="vid-describe">
      <h2>Komentar</h2>
      <form action="Detail" method="post">
        <div class="add-comment">
            <img src="asset/img/Jack.png" alt="" />
            <input type="text" placeholder="Write Comments..." name="commentInput" id="commentInput" />
            <button type="submit" name="submitkomentar"  id="submitComment">Submit</button>
        </div>
      </form>
      <!-- Looping untuk menampilkan komentar -->
        
            <?php foreach ($data['komentar'] as $komentar) : ?>
              <div class="old-comment">
                <img src="<?php echo $komentar['foto_profil']; ?>" alt="Profile Picture" />
                <div>
                    <h3><?php echo $komentar['name']; ?><span><?php echo $komentar['waktu_komentar']; ?></span></h3>
                    <p><?php echo $komentar['isi_komentar']; ?></p>
                </div>
                </div>
            <?php endforeach; ?>
        <!-- Akhir Looping untuk menampilkan komentar -->
      </div>
    </section>

    <!-- Marketplace -->
    <section>
      <h2>Rekomendasi Produk</h2>
      <ul id="marketplace-list">
        <li class="marketplace-item">
          <img
            src="asset/img/erwan-hesry-1q75BReKpms-unsplash.jpg"
            alt="Item 2"
          />
          <br />
          <a href="Index.html"><button>Lihat Produk</button></a>
        </li>
        <li class="marketplace-item">
          <img
            src="asset/img/alok-shenoy-5xYvAlKjxWY-unsplash.jpg"
            alt="Item 2"
          />
          <br />
          <a href="Index.html"><button>Lihat Produk</button></a>
        </li>
      </ul>
    </section>

    <!-- Rekomendasi Blog -->
    <section>
      <h2>Rekomendasi Blog Lain</h2>
      <div class="scroll">
        <ul>
          <li><img src="asset/img/AdobeStock_119263043.jpeg" alt="" /></li>
          <li>
            <img
              src="asset/img/etienne-girardet-_Fp3YZ7lt-Y-unsplash.jpg"
              alt=""
            />
          </li>
          <li>
            <img src="asset/img/vince-veras-sYaK3SlGwEw-unsplash.jpg" alt="" />
          </li>
          <li>
            <img src="asset/img/jodie-righos-qPHHt-JTf5s-unsplash.jpg" alt="" />
          </li>
          <li>
            <img
              src="asset/img/jason-edwards-SH5AC4ATqZQ-unsplash.jpg"
              alt=""
            />
          </li>
          <li>
            <img src="asset/img/alok-shenoy-5xYvAlKjxWY-unsplash.jpg" alt="" />
          </li>
          <li>
            <img src="asset/img/pexels-quang-nguyen-vinh-2165688.jpg" alt="" />
          </li>
          <li>
            <img src="asset/img/erwan-hesry-1q75BReKpms-unsplash.jpg" alt="" />
          </li>
        </ul>
      </div>
    </section>
  </body>
  <script src="<?= BASEURL; ?>/js/script.js"></script>
</html>
