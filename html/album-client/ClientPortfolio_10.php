<?php include './php/portfolio_upload.php'; ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.118.2" />
  <title>Digital Art Portfolio</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>

  <header data-bs-theme="dark">
    <div class="collapse text-bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4>About</h4>
            <p class="text-body-secondary">
              Here are all of the arts that the artist made. Hope you
              appreciate it and you are welcome anytime to request an art to
              me! If you're thinking of requesting an art to me then you
              should think of your desired art first then you can communicate
              with me so that we can make your future art the best thing that
              you could ever see! So what are you waiting for? Come join the
              world of ART!
            </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4>Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="../index.php" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
          <strong>Paint stART</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Curse360 Portfolio - Illustration - Portrait Style</h1>
          <p class="lead text-body-secondary">
            A wide variety of limitless imagination pour into one art where it
            expresses freely and have different kind of effect and impact
            towards unto one person.
          </p>
          <p>
            <a href="/PaintstART_Files/html/checkout/checkout.php" class="btn btn-primary my-2">Request a Commission</a>
            <a href="/PaintstART_Files/html/index.php" class="btn btn-secondary my-2">Back to Homepage</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <!-- CARD 82 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage82" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText82">
                  <span id="cardTextContent82"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form82">
                  <input type="hidden" name="cardIdentifier" value="82">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput82" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(82)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 83 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage83" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText83">
                  <span id="cardTextContent83"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form83">
                  <input type="hidden" name="cardIdentifier" value="83">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput83" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(83)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 84 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage84" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText84">
                  <span id="cardTextContent84"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form84">
                  <input type="hidden" name="cardIdentifier" value="84">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput84" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(84)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 85 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage85" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText85">
                  <span id="cardTextContent85"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form85">
                  <input type="hidden" name="cardIdentifier" value="85">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput85" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(85)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 86 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage86" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText86">
                  <span id="cardTextContent86"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form86">
                  <input type="hidden" name="cardIdentifier" value="86">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput86" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(86)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 87 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage87" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText87">
                  <span id="cardTextContent87"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form87">
                  <input type="hidden" name="cardIdentifier" value="87">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput87" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(87)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 88 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage88" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText88">
                  <span id="cardTextContent88"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form88">
                  <input type="hidden" name="cardIdentifier" value="88">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput88" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(88)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 89 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage89" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText89">
                  <span id="cardTextContent89"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form89">
                  <input type="hidden" name="cardIdentifier" value="89">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput89" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(89)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 90 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage90" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 100%; height: 100%;">
              <div class="card-body">
                <p class="card-text" id="cardText90">
                  <span id="cardTextContent90"></span>
                </p>
                <form method="POST" action="" enctype="multipart/form-data" id="form90">
                  <input type="hidden" name="cardIdentifier" value="90">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput90" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(90)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio.php">1</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_3.php">3</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_4.php">4</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_5.php">5</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_6.php">6</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_7.php">7</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_8.php">8</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_9.php">9</a></li>
              <li class="page-item"><a class="page-link" href="./ClientPortfolio_10.php">10</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-body-secondary py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Copyright © 2023 Paint stART. All rights reserved.</p>
      <p class="mb-0">
        New to Digital Art? <a href="../index.php">Visit the homepage</a> and
        see for youself what we can offer you!
      </p>
    </div>
  </footer>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    var recentlyUploadedImage = {
      '82': '<?php echo isset($recentlyUploadedImage['82']) ? $recentlyUploadedImage['82'] : ''; ?>',
      '83': '<?php echo isset($recentlyUploadedImage['83']) ? $recentlyUploadedImage['83'] : ''; ?>',
      '84': '<?php echo isset($recentlyUploadedImage['84']) ? $recentlyUploadedImage['84'] : ''; ?>',
      '85': '<?php echo isset($recentlyUploadedImage['85']) ? $recentlyUploadedImage['85'] : ''; ?>',
      '86': '<?php echo isset($recentlyUploadedImage['86']) ? $recentlyUploadedImage['86'] : ''; ?>',
      '87': '<?php echo isset($recentlyUploadedImage['87']) ? $recentlyUploadedImage['87'] : ''; ?>',
      '88': '<?php echo isset($recentlyUploadedImage['88']) ? $recentlyUploadedImage['88'] : ''; ?>',
      '89': '<?php echo isset($recentlyUploadedImage['89']) ? $recentlyUploadedImage['89'] : ''; ?>',
      '90': '<?php echo isset($recentlyUploadedImage['90']) ? $recentlyUploadedImage['90'] : ''; ?>'
    };

    function updateImageSrc(cardIdentifier) {
      var imageElement = document.getElementById('portfolioImage' + cardIdentifier);
      var fileInput = document.getElementById('imageInput' + cardIdentifier);
      var fileInputLabel = document.getElementById('fileLabel' + cardIdentifier);

      console.log('Updating image source for card ' + cardIdentifier);

      if (recentlyUploadedImage[cardIdentifier] !== '') {
        // Construct the full path
        var imagePath = "../album-image/" + recentlyUploadedImage[cardIdentifier];
        imageElement.src = imagePath;

      } else {
        console.log('No image path available');
      }
    }

    window.onload = function() {
      // Update images on page load
      for (let i = 82; i <= 90; i++) {
        updateImageSrc(i.toString());
        console.log(recentlyUploadedImage);
      }

    };
  </script>

  <?php
  // Code for displaying the card_text from the portfolio_images DB
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require_once("../Config.php");

  for ($cardNumber = 82; $cardNumber <= 90; $cardNumber++) {
    $sql = "SELECT card_text FROM portfolio_images WHERE card_identifier = $cardNumber";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      $row = mysqli_fetch_assoc($result);

      // Check if $row is not null and the 'card_text' key is set
      if ($row && array_key_exists('card_text', $row)) {
        $cardText = $row['card_text'];

        // Check if card_text is NULL
        if ($cardText === NULL) {
          //echo "Warning: 'card_text' is NULL for card $cardNumber<br>";
        } else {
          // Inject the card_text into the corresponding span element
          echo "<script>document.getElementById('cardTextContent$cardNumber').innerText = '$cardText';</script>";
        }
      } else {
        //echo "Warning: 'card_text' not found for card $cardNumber<br>";
      }
    } else {
      echo "Error fetching card_text: " . mysqli_error($conn) . "<br>";
    }
  }
  mysqli_close($conn);
  ?>

</body>

</html>