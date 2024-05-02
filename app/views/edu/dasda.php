
<html>
  <head>
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
          <li><a href="Index.html">Home</a></li>
          <li><a href="Index.html">Edukasi</a></li>
          <li class="services" id="dropdown">
            <a href="#services"
              >Kategori <i class="fa-solid fa-caret-down"></i
            ></a>
            <ul class="toggle">
              <li><a href="tips.html"> Tips </a></li>
              <li><a href="kat.html"> Tutorial </a></li>
            </ul>
          </li>
          <li><a href="#">Belanja</a></li>
          <li><a href="About US.html">Login</a></li>
        </ul>
      </div>
    </div>

    <!-- blog section -->
    <div class="container">
      <h1 class="heading">Our Education</h1>
      <div class="box-container">
        <?php $idToPass = ''; //variable menyimpan edu yang ditekan
        foreach ($data['eduData'] as $row) { ?>
            <div class="box">
                <div class="image">
                    <img src="<?php echo $row['gambar']; ?>" alt="" />
                </div>
                <div class="content">
                    <h3><?php echo $row['judul']; ?></h3>
                    <p><?php echo $row['keterangan_singkat']; ?></p>
                    <form action="Edu" method="post">
                    <input type="hidden" name="idToPass" value="<?php echo $row['id']; ?>">
                    <button name="edudetail" class="btn">watch more</button>
                    </form>
                    <div class="icons">
                        <span><i class="fas fa-tag"></i> <?php echo $row['kategori']; ?></span>
                        <span><i class="fas fa-user"></i> by admin</span>
                    </div>
                </div>
            </div>
        <?php } ?>

        
      </div> 
      <!-- <div id="load-more">load more</div>
    </div>  -->
  </body>
  <!-- <script src="<?= BASEURL; ?>/js/script.js"></script>-->
</html> 
