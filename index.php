<?php
include_once 'includes/dbh.inc.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
<body>
  <?php
  $conn;
  ?>
  
  <?php
  include 'header.php'
  ?>
  <section class="indexbkgrnd">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="text_1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
          <h1 style="background-color:rgba(0, 0, 0, 0);color:black;">Fake it Till You Make it</h1>
          <p style="background-color:rgba(0, 0, 0, 0);color:rgb(0, 0, 0);"> Est. 2023
          </p>

        </div>
      </div>
    </div>
  </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </section>
  <div class="index1">
  <div class="indextxt">
    <br>
    <br>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
           <h3 class="text-center">What We Offer</h3>
          <p>Fake it Till You Make it offers
            luxury home, car, and clothing rentals to help people live out their millionaire dreams.
            Our goal is to provide an elevated experience and let our clients
            live their aspirations through our rental services.</p>
            <div class="btn-group">
            <a href="About_us.php" class="btn btn-warning">Learn More</a>
            <a href="contact.php" class="btn btn-warning">Help Center</a>
          </div>
        </div>
        <div class="col-md-8">
          <h3 class="text-center">Customer Reviews</h3>

          <section id="review" class="review-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="section-heading text-center">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <div class="single-review card">
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Excellent service &amp; support!!</h4>
                                <div class="review-text">
                                    <p>I rented out a Lamborghini Urus out for the weekend to show my friend. The car came very clean but it had a few chips in the spoiler. They refunded me part of my money and the support helped me during my whole process. I will definitely rent with them again.</p>
                                </div>
                                <div class="quot-icon">
                                    <img class="avatar-md" src="#" alt="">
                                </div>
                            </div>
                            <div class="reviewer media bg-gray p-4">
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-1.png" alt="">
                                </div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Josh cox</h5>
                                    <h6 class="text-secondary fw-6">Rented on January 3 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <div class="single-review card">
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Nice work! Keep it up</h4>
                                <div class="review-text">
                                    <p>I wanted to host a party in Los Angles and the prices of house on airbnb were over 1000 but then I found this website that rents out mansions for very cheap. The house came with a free bottle of champagne and it was very cleaned. I will definitely tell my friend to rent from this place.  </p>
                                </div>
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <div class="reviewer media bg-gray p-4">
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-2.png" alt="">
                                </div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Champ Nguion</h5>
                                    <h6 class="text-secondary fw-6">Rented on Febuary 22 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-review card">
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Excellent!</h4>
                                <div class="review-text">
                                    <p>I wanted to rent out a supreme hypebeast outfit for the gram. The outfit came in a nice Louis Vuitton duffle bag. The outfit came in perfect condtion and they give me a 25 percent of coupon for one of there luxery vehicles. It really fooled my follwers that I was rich and will defintly order with them again.</p>
                                </div>
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <div class="reviewer media bg-gray p-4">
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-3.png" alt="">
                                </div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Johnny Sins</h5>
                                    <h6 class="text-secondary fw-6">Rented on March 15 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  <br>
    <br>

  <?php
  include 'footer.php'
  ?>

</body>


</html>