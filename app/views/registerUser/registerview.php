<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.118.2" />
    <title>Register</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />

    <link
      href="<?= BASEURL; ?>/librs/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- font awesome -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/librs/font/css/all.min.css" />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="/docs/5.3/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180"
    />
    <link
      rel="icon"
      href="/docs/5.3/assets/img/favicons/favicon-32x32.png"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="/docs/5.3/assets/img/favicons/favicon-16x16.png"
      sizes="16x16"
      type="image/png"
    />
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json" />
    <link
      rel="mask-icon"
      href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg"
      color="#712cf9"
    />
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#712cf9" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/logreg.css" />
  </head>
  <body style="background: url(img/track.jpg);
    min-height: 10rem;
    overflow-x: hidden;
    overflow-y: hidden;
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path
          d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
        />
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
        />
        <path
          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
        />
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
          d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
        />
      </symbol>
    </svg>

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-success">
      <div class="container">
        <a class="navbar-brand text-bg-success" href="#">EST</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a
                class="nav-link active text-bg-success"
                aria-current="page"
                href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle text-bg-success"
                id="dropdown-1"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Manage</a
              >
              <div class="dropdown-menu bg" aria-labelledby="dropdown-1">
                <a
                  href="admin-category.html"
                  class="dropdown-item text-success"
                  >Kategori</a
                >
                <a href="admin-produk.html" class="dropdown-item text-success"
                  >Produk</a
                >
                <a href="admin-order.html" class="dropdown-item text-success"
                  >Order</a
                >
                <a href="admin-user.html" class="dropdown-item text-success"
                  >Pengguna</a
                >
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="cart.html" class="nav-link text-bg-success"
                ><i class="fas fa-shopping-cart"></i> Cart (0)</a
              >
            </li>
            <li class="nav-item">
              <a href="login.html" class="nav-link text-bg-success">Login</a>
            </li>
            <li class="nav-item">
              <a href="register.html" class="nav-link text-bg-success"
                >Register</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle text-bg-success"
                id="dropdown-2"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Admin</a
              >
              <div class="dropdown-menu" aria-labelledby="dropdown-2">
                <a href="profil.html" class="dropdown-item text-success"
                  >Profile</a
                >
                <a href="orders.html" class="dropdown-item text-success"
                  >Orders</a
                >
                <a href="#" class="dropdown-item text-success">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container conten2">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card">
            <div class="card-header text-bg-success">Register</div>
            <div class="card-body">
            <form  method="post" action="Register">
              <div class="form-group">
                <label for="name" class="mb-1">Nama</label>
                <input id="name" name="name" type="text" class="form-control" required autofocus />
                <div class="error"></div>
              </div>

              <div class="form-group mt-3">
                <label for="email" class="mb-1">Email</label>
                <input id="email" type="email" name="email" class="form-control" required />
                <div class="error"></div>
              </div>

              <div class="form-group mt-3">
                <label for="password" class="mb-1">Password</label>
                <input id="password" type="password" name="password" class="form-control" required />
                <div class="error"></div>
              </div>

              <div class="form-group mt-3">
                <label for="password2" class="mb-1">Konfirmasi Password</label>
                <input id="password2" type="password" name="password2" class="form-control" required />
                <div class="error"></div>
              </div>
              <button type="submit" name="register" class="btn btn-success mt-md-3">Submit</button>
            </form> 

            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="<?= BASEURL; ?>/librs/jquery/jquery-3.7.1.min.js"></script>
    <script src="<?= BASEURL; ?>/librs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/js/app.js"></script>
  </body>
</html>
