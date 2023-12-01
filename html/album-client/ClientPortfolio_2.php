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
        <a href="#" class="navbar-brand d-flex align-items-center">
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
          <h1 class="fw-light">Curse360 Portfolio - Illustration</h1>
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

          <!-- CARD 1 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage1" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form1">
                  <input type="hidden" name="cardIdentifier" value="1">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput1" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(1)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage2" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form2">
                  <input type="hidden" name="cardIdentifier" value="2">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput2" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;" onchange="updateImageSrc(2)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage3" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form3">
                  <input type="hidden" name="cardIdentifier" value="3">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput3" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;" onchange="updateImageSrc(3)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage4" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form4">
                  <input type="hidden" name="cardIdentifier" value="4">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput4" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(4)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 5 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage5" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form5">
                  <input type="hidden" name="cardIdentifier" value="5">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput5" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;" onchange="updateImageSrc(5)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 6 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage6" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form6">
                  <input type="hidden" name="cardIdentifier" value="6">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput6" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;" onchange="updateImageSrc(6)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 7 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage7" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form7">
                  <input type="hidden" name="cardIdentifier" value="7">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput7" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(7)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 8 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage8" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form8">
                  <input type="hidden" name="cardIdentifier" value="8">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput8" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;" onchange="updateImageSrc(8)">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 9 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage9" src="" alt="Image">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <form method="POST" action="" enctype="multipart/form-data" id="form3">
                  <input type="hidden" name="cardIdentifier" value="9">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput9" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;" onchange="updateImageSrc(9)">
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
    function deleteImage(cardIdentifier) {

      // Create a form and submit it to trigger the delete action
      var form = document.createElement('form');
      form.method = 'POST';
      form.action = ''; // Set the appropriate action

      var input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'cardIdentifier';
      input.value = cardIdentifier;

      form.appendChild(input);

      // Add a hidden input to specify the delete action
      var deleteInput = document.createElement('input');
      deleteInput.type = 'hidden';
      deleteInput.name = 'delete';
      deleteInput.value = 'delete';
      form.appendChild(deleteInput);

      document.body.appendChild(form);

      // Submit the form
      form.submit();
    }

    var recentlyUploadedImage = {
      '1': '<?php echo isset($recentlyUploadedImage['1']) ? $recentlyUploadedImage['1'] : ''; ?>',
      '2': '<?php echo isset($recentlyUploadedImage['2']) ? $recentlyUploadedImage['2'] : ''; ?>',
      '3': '<?php echo isset($recentlyUploadedImage['3']) ? $recentlyUploadedImage['3'] : ''; ?>',
      '4': '<?php echo isset($recentlyUploadedImage['4']) ? $recentlyUploadedImage['4'] : ''; ?>',
      '5': '<?php echo isset($recentlyUploadedImage['5']) ? $recentlyUploadedImage['5'] : ''; ?>',
      '6': '<?php echo isset($recentlyUploadedImage['6']) ? $recentlyUploadedImage['6'] : ''; ?>',
      '7': '<?php echo isset($recentlyUploadedImage['7']) ? $recentlyUploadedImage['7'] : ''; ?>',
      '8': '<?php echo isset($recentlyUploadedImage['8']) ? $recentlyUploadedImage['8'] : ''; ?>',
      '9': '<?php echo isset($recentlyUploadedImage['9']) ? $recentlyUploadedImage['9'] : ''; ?>'
    };

    function truncateFilename(filename, maxLength) {
      console.log('Original Filename:', filename);
      if (filename.length > maxLength) {
        return filename.substring(0, maxLength - 3) + '...';
      }
      return filename;
    }

    function updateImageSrc(cardIdentifier) {
      var imageElement = document.getElementById('portfolioImage' + cardIdentifier);
      var fileInput = document.getElementById('imageInput' + cardIdentifier);
      var fileInputLabel = document.getElementById('fileLabel' + cardIdentifier);

      console.log('Updating image source for card ' + cardIdentifier);

      if (recentlyUploadedImage[cardIdentifier] !== '') {
        // Construct the full path
        var imagePath = "../album-image/" + recentlyUploadedImage[cardIdentifier];
        imageElement.src = imagePath;

        // Truncate the filename and set it as alt text
        var truncatedFilename = truncateFilename(recentlyUploadedImage[cardIdentifier], 10); // Replace 20 with your desired max length
        imageElement.alt = truncatedFilename;

        // Check if a new file is selected and update the label
        if (fileInput.value) {
          fileInputLabel.innerText = truncatedFilename;
        }
      } else {
        console.log('No image path available');
      }
      console.log('Truncated filename:', truncatedFilename);
    }

    function updateImageSrcAfterUpload(cardIdentifier, imagePath) {
      recentlyUploadedImage[cardIdentifier] = imagePath;
      updateImageSrc(cardIdentifier);
    }

    window.onload = function() {
      // Update images on page load
      for (let i = 1; i <= 9; i++) {
        updateImageSrc(i.toString());
        console.log(recentlyUploadedImage);
      }
      // Add an event listener to the Delete button for each card
      for (let i = 1; i <= 9; i++) {
        const deleteButton = document.getElementById('deleteButton' + i);
        if (deleteButton) {
          deleteButton.addEventListener('click', function() {
            const cardIdentifier = i.toString();
            deleteImage(cardIdentifier);
          });
        }
      }

      function deleteImage(cardIdentifier) {
        // Make an AJAX request to the server to delete the image
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './php/deleteImage.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response, you can update the UI accordingly
            console.log(xhr.responseText);
            // Optionally, you can refresh the page or update the UI after deletion
            updateImageSrc(cardIdentifier);
          }
        };
        xhr.send('cardIdentifier=' + cardIdentifier);
      }
    };
  </script>
</body>
</html>