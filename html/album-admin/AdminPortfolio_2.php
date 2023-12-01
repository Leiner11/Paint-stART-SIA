<?php include './php/portfolio_upload.php'; ?>

<script>
  function toggleEditText(cardId) {

    // Get the elements by their IDs
    var cardText = document.getElementById('cardText' + cardId);
    var editCardText = document.getElementById('editCardText' + cardId);

    // Toggle visibility of text and input field
    if (cardText.style.display === 'none' || cardText.style.display === '') {
      cardText.style.display = 'block';
      editCardText.style.display = 'none';
    } else {
      cardText.style.display = 'none';
      editCardText.style.display = 'block';

      // Copy the current text to the input field for editing
      editCardText.value = cardText.innerText;

      // Set focus on the input field for a better user experience
      editCardText.focus();
    }
  }
</script>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>Digital Art Portfolio</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
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
            <p class="text-body-secondary">Here are all of the arts that the artist made. Hope you appreciate it and you are welcome anytime to request an art to me! If you're thinking of requesting an art to me then you should think of your desired art first then you can communicate with me so that we can make your future art the best thing that you could ever see! So what are you waiting for? Come join the world of ART!</p>
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
          <p class="lead text-body-secondary">A wide variety of limitless imagination pour into one art where it expresses freely and have different kind of effect and impact towards unto one person.</p>
          <p>
            <a href="/PaintstART_Files/html/index.php" class="btn btn-secondary my-2">Back to Homepage</a>
          </p>
        </div>
      </div>
    </section>


    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <!-- CARD 10 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage10" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText10">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>
                <input type="text" class="form-control" id="editCardText10" style="display: none;">
                <form method="POST" action="" enctype="multipart/form-data" id="form10">
                  <input type="hidden" name="cardIdentifier" value="10">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton10" onclick="toggleEditText(10)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput10').click();">
                          <span id="fileLabel10">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput10" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(10)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('10')" id="deleteButton10">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 11 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage11" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText11">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText11" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form11">
                  <input type="hidden" name="cardIdentifier" value="11">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton11" onclick="toggleEditText(11)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput11').click();">
                          <span id="fileLabel11">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput11" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(11)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('11')" id="deleteButton11">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- CARD 12 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage12" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText12">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText12" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form12">
                  <input type="hidden" name="cardIdentifier" value="12">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton12" onclick="toggleEditText(12)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput12').click();">
                          <span id="fileLabel12">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput12" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(12)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('12')" id="deleteButton12">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 13 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage13" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText13">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText13" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form13">
                  <input type="hidden" name="cardIdentifier" value="13">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton13" onclick="toggleEditText(13)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput13').click();">
                          <span id="fileLabel13">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput13" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(13)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('13')" id="deleteButton13">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- CARD 14 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage14" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText14">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText14" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form14">
                  <input type="hidden" name="cardIdentifier" value="14">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton14" onclick="toggleEditText(14)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput14').click();">
                          <span id="fileLabel14">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput14" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(14)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('14')" id="deleteButton14">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 15 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage15" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText15">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText15" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form15">
                  <input type="hidden" name="cardIdentifier" value="15">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton15" onclick="toggleEditText(15)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput15').click();">
                          <span id="fileLabel15">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput15" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(15)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('15')" id="deleteButton15">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Repeat the pattern for CARD 16 to CARD 18 -->

          <!-- CARD 16 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage16" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText16">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText16" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form16">
                  <input type="hidden" name="cardIdentifier" value="16">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton16" onclick="toggleEditText(16)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput16').click();">
                          <span id="fileLabel16">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput16" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(16)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('16')" id="deleteButton16">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 17 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage17" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText17">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText17" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form17">
                  <input type="hidden" name="cardIdentifier" value="17">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton17" onclick="toggleEditText(17)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput17').click();">
                          <span id="fileLabel17">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput17" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(17)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('17')" id="deleteButton17">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- CARD 18 -->
          <div class="col">
            <div class="card shadow-sm">
              <img id="portfolioImage18" src="../Images/noImage.png" alt="Image" class="mx-auto" style="width: 70%; height: 70%;">
              <div class="card-body">
                <p class="card-text" id="cardText18">Test: Astarion, your vampiric companion, hides a lot behind an effortless, if not cruel, charm. Despite his status as your rogue, he’s not exactly a subtle person - he can pile on the drama like no one else. </p>

                <input type="text" class="form-control" id="editCardText18" style="display: none;">

                <form method="POST" action="" enctype="multipart/form-data" id="form18">
                  <input type="hidden" name="cardIdentifier" value="18">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="editButton18" onclick="toggleEditText(18)">Edit Text</button>
                      <div class="image-file" style="position: relative; overflow: hidden; display: inline-block;">
                        <button type="button" name="uploadfile" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('imageInput18').click();">
                          <span id="fileLabel18">Select Image...</span>
                        </button>
                        <input type="file" class="image-file-input" name="uploadfile" id="imageInput18" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; " onchange="updateImageSrc(18)">
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-secondary" name="upload">Upload</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="deleteImage('18')" id="deleteButton18">Delete</button>
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
              <li class="page-item"><a class="page-link" href="./AdminPortfolio.php">1</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_3.php">3</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_4.php">4</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_5.php">5</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_6.php">6</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_7.php">7</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_8.php">8</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_9.php">9</a></li>
              <li class="page-item"><a class="page-link" href="./AdminPortfolio_10.php">10</a></li>
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
      <p class="mb-0">New to Digital Art? <a href="../index.html">Visit the homepage</a> and see for youself what we can offer you!</p>
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
      '10': '<?php echo isset($recentlyUploadedImage['10']) ? $recentlyUploadedImage['10'] : ''; ?>',
      '11': '<?php echo isset($recentlyUploadedImage['11']) ? $recentlyUploadedImage['11'] : ''; ?>',
      '12': '<?php echo isset($recentlyUploadedImage['12']) ? $recentlyUploadedImage['12'] : ''; ?>',
      '13': '<?php echo isset($recentlyUploadedImage['13']) ? $recentlyUploadedImage['13'] : ''; ?>',
      '14': '<?php echo isset($recentlyUploadedImage['14']) ? $recentlyUploadedImage['14'] : ''; ?>',
      '15': '<?php echo isset($recentlyUploadedImage['15']) ? $recentlyUploadedImage['15'] : ''; ?>',
      '16': '<?php echo isset($recentlyUploadedImage['16']) ? $recentlyUploadedImage['16'] : ''; ?>',
      '17': '<?php echo isset($recentlyUploadedImage['17']) ? $recentlyUploadedImage['17'] : ''; ?>',
      '18': '<?php echo isset($recentlyUploadedImage['18']) ? $recentlyUploadedImage['18'] : ''; ?>'
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
        var truncatedFilename = truncateFilename(recentlyUploadedImage[cardIdentifier], 10); // Number can be replaced with desired max length
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
      for (let i = 10; i <= 18; i++) {
        updateImageSrc(i.toString());
        console.log(recentlyUploadedImage);
      }

      // Add an event listener to the Delete button for each card
      for (let i = 10; i <= 18; i++) {
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