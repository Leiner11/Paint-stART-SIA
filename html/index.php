<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Welcome to Paint stART</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** PHP code to check user log-in status ***** -->
  <?php
  session_start();
  if (isset($_SESSION["username"])) {
    $userID = $_SESSION['userID'];
    $userLoggedIn = $_SESSION['username'];
    //$userId = $_SESSION['userID']; //Uncomment if we want to show the UserID
    //$listItemName = ($userLoggedIn) ? 'My Account (ID: ' . $userId . ')' : 'Login'; //Uncomment if we want to show the UserID
    $listItemName = ($userLoggedIn) ? 'My Account' : 'Login';
    $listItemHref = ($userLoggedIn) ? './php/checkIf_userOrAdmin.php' : 'login.php';
  } else {
    $userLoggedIn = false;
    $listItemName = 'Login';
    $listItemHref = 'login.php';
  }
  ?>

  <script>
    function updateUserStatus() {
      var userStatusLi = document.getElementById('user_status');
      userStatusLi.innerHTML = '<a href="' + '<?php echo $listItemHref; ?>' + '">' + '<?php echo $listItemName; ?>' + '</a>';
    }
    window.onload = updateUserStatus;
  </script>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h1>PaintstART</h1>
            </a>
            <!-- ***** Serach Start ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Information</a></li>
              <li class="scroll-to-section"><a href="/PaintstART_Files/html/album-client/ClientPortfolio.php">Digital Arts</a></li>
              <li class="scroll-to-section"><a href="#events">Offered Pricing</a></li>
              <li class="scroll-to-section" id="user_status"><a href="/PaintstART_Files/html/login.php"></a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Introduction</span>
                <h2>Want to commission or request a customised digital art?</h2>
                <p>If you're interested, Just press the discord button down bellow and it will redirect you to a place where you can request a digital art from the artist.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Paint stART DISCORD</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Best Result</span>
                <h2>Get the best result of your requested digital art!</h2>
                <p>To get the best expected results of your requested digital art from the artist then leave a brief and precise explanation of it!</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Paint stART DISCORD</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Initiate</span>
                <h2>Time to stop being hesitant! Its time to let those limitless ideas come to life!</h2>
                <p>All of the ideas and imagination comming from your mind can be put in real life by designing and laying out in an digital art!</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Paint stART DISCORD</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>RESEARCH</h4>
              <p>"Researching about different kind of arts can give you many possible ideas that can pop in your mind."</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>APPLY KNOWLEDGE</h4>
              <p>"Not only by knowing the missing part about yourself but also improve you already have."</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>BE THE EXPERT</h4>
              <p>"Be the one who will provide the best ideas that can lead to the outcome that has ever been in this world of ART!"</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is Digital Art Commissioning?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Digital art is simply an art that is created by modern techology. Since it is created by modern technology, nowadays people do it as a job to create art from different ideas and people can make requests from artist in trade for money.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What kind of art are you passionate about?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  I can create an art that can suit you style and preferences, If you can provide a deatailed information about your desired digital art we will provide it to you at the most refined way we can think of!
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What are the potentials of digital arts today?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Digital Arts has a lot of potentials because we're already living in world of technology where we surf around the internet and see a bunch of arts displayed in the world of social media. In that sense Digital Art can be very effective when it comes to different strategies like business, entertainment and more!
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What do I need to have the perfect digital art?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  The only thing you need to have a perfect digital art is to help and provide us an exact ideas that will give us an idea of what's your want you want to be. Another thing is that having an open mind is a must because if you limit all the possibilities that can apply in the art then it will not be a perfect masterpiece! </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Are you INTERESTED?</h6>
            <h2>Come try us now and we'll give you the best art we can provide!</h2>
            <p>If you're still not sure about what art you want then why not try looking around my art works by clicking this button below! What are you waiting for let's dive into the world of ART!</p>
            <div class="main-button">
              <a href="#">Commission Now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Want to request your own art?</h6>
            <h2>Featured Arts</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Fantasy</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">2D Digital Art</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">IRL Digital Art</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="/PaintstART_Files/html/requestPages/RQ1.html"><img src="assets/images/Firefly1.png" alt=""></a>
              <span class="category">Dracotaur</span>
              <span class="price">
                <h6><em>$</em>80</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Half Dragon, Half Human</span>
              <h4>Firefly</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="/PaintstART_Files/html/requestPages/RQ2.html"><img src="assets/images/2d1.png" alt=""></a>
              <span class="category">Assassin</span>
              <span class="price">
                <h6><em>$</em>90</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Cosplay</span>
              <h4>Halloween Special</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="/PaintstART_Files/html/requestPages/RQ3.html"><img src="assets/images/Hurt1.png" alt=""></a>
              <span class="category">Emotional</span>
              <span class="price">
                <h6><em>$</em>55</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Personal Art</span>
              <h4>Cry</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="/PaintstART_Files/html/requestPages/RQ4.html"><img src="assets/images/Flower.png" alt=""></a>
              <span class="category">Enchanter</span>
              <span class="price">
                <h6><em>$</em>65</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Half Demon, Half Human</span>
              <h4>Flower</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="/PaintstART_Files/html/requestPages/RQ5.html"><img src="assets/images/Zakito.png" alt=""></a>
              <span class="category">Ganster</span>
              <span class="price">
                <h6><em>$</em>120</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Digital Art Ganster</span>
              <h4>Zakito</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="/PaintstART_Files/html/requestPages/RQ6.html"><img src="assets/images/three.png" alt=""></a>
              <span class="category">IRL Digital Art</span>
              <span class="price">
                <h6><em>$</em>100</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Unwind</span>
              <h4>Kirynn Art</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="169" data-speed="1000"></h2>
                  <p class="count-text ">Digital Arts Created</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1352" data-speed="1000"></h2>
                  <p class="count-text ">Hours of Work</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="72" data-speed="1000"></h2>
                  <p class="count-text ">Number of Customer Commissioned</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="4" data-speed="1000"></h2>
                  <p class="count-text ">Years Experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Ever since I made a request to the artist of this website, I made all of my socials display my digital art because its too good and I'm very satisfied with the outcome of the digital art that the artist produced!”</p>
              <div class="author">
                <img src="assets/images/Lucia.png" alt="">
                <span class="category">Lucianauwu101</span>
                <h4>Lucia</h4>
              </div>
            </div>
            <div class="item">
              <p>“I have been a fan of a vtuber called gawrgura and I really, really admire her a lot and since I want to support her I have commissioned an art about her and make it as a sticker to my personal desktop so it would look cute!”</p>
              <div class="author">
                <img src="assets/images/Tiff-san.png" alt="">
                <span class="category">Gaunagura1092</span>
                <h4>Gaunnagura</h4>
              </div>
            </div>
            <div class="item">
              <p>“Since I like dogs I requested a commission to the artist to have a dog that have a blend of sakura blossoms around his fur, it would be like a mystic dog. Every time I look at it, it reminds me of my dog back then. I hope he's living his life on the afterlife”</p>
              <div class="author">
                <img src="assets/images/Sakuradog.png" alt="">
                <span class="category">Inumakissun</span>
                <h4>Inumaki'sDoggu</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>Comments and feedbacks about us</h2>
            <p>So what are you waiting for? Try commission an art to us now and we'll provide you a top quality of outcome you could possibly see! And if you're already received an art in the past you can share it to your friends, we'll be appreciated <3< /p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Rate of the Artist</h6>
            <h2>PRICING OF DIGITAL ARTS</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Zerakiel.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Live 2D</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Detailed</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$130 ~ $190</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>15 - 30</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Nixxy.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Live 2D</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Simple or Half body</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$100 ~ $120</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>7 - 12</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Cy Quin.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Live 2D</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>New Outfit</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$80 ~ $110</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>5 - 10</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Tiffany.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Live 2D</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6> Extra expressions (x 3)</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$30</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>3 - 5</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Airin Hawnt winter.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Live 2D</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Experimental layers Live2D</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$90</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>+?</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Snake Live2d.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Live 2D</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Pet</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$35 - $50</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>5 - 11</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Rainyryn3.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Illustration</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Headshot or Bust</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$15</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>1</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/dudewholesome1.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Illustration</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Half or Full-Body</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$25</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>1 - 2</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Deni.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Illustration</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Design</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$30</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>1 - 4</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/Achiu1.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Commission Type</span>
                    <h4>Revisions</h4>
                  </li>
                  <li>
                    <span>Content:</span>
                    <h6>Design</h6>
                  </li>
                  <li>
                    <span>Price $:</span>
                    <h6>$5 - $10</h6>
                  </li>
                  <li>
                    <span>ETAT:</span>
                    <h6>+1</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 Paint stART. All rights reserved. &nbsp;&nbsp;&nbsp;Website made by Group 4 | J3S |</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>