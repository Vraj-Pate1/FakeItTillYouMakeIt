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
  <div class="modal-body">
    <div class="row">
      <div id="carouselExampleFade2" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/la 1.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/la 2.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/la 3.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
<div class="cards-list">
  
  <div class="card 1">
    <div class="card_image"> <img src="https://media.giphy.com/media/kc5RUQZqn5AOYMOaRo/giphy.gif?cid=ecf05e4752mso5hhgz7oprx3tr34hi0quzqa4taycs2l8ans&rid=giphy.gif&ct=g" /> </div>
    <div class="card_title">
      <p>Homes</p>
    </div>
  </div>
  
    <div class="card 2">
    <div class="card_image">
      <img src="https://media.giphy.com/media/8BkpFk2auZTYXqijRV/giphy.gif?cid=ecf05e4780p877um8x9fbh93bijdkm0yx20jpf1lwo5bla8v&rid=giphy.gif&ct=g" />
      </div>
    <div class="card_title">
      <p>Vehicles</p>
    </div>
  </div>
  
  <div class="card 3">
    <div class="card_image">
      <img src="https://media.giphy.com/media/qsKbw7Eisg2He/giphy.gif?cid=ecf05e47qv0bubc9q25oouadyuzr1kjii4o7c4b8ax2jxaqy&rid=giphy.gif&ct=g" />
    </div>
    <div class="card_title">
      <p>Clothing</p>
    </div>
  </div>
  </div> -->
  <!-- <div class="container-fluid">
    <div class="row align-items-start">
      <div class="col">
        <h1>Catalog</h1>
        <p>Browse through our wide selections of Homes, Vehicles and Clothing</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="card bg-dark text-white">
        <img class="card-img" src="https://drive.google.com/uc?export=view&id=1OkSqrReykBQkpmOiWIGEW-4D0gHn8--8"
          alt="Card image">
        <div class="card-img-overlay">
          <h5 class="card-title">Homes</h5>
          <p class="card-text">Are you Tired of living in your 1 bedroom apartment all by yourself with no one to keep
            you company? Well, youve come to the right place! For a
            affordable price you can rent one of our many large and spaceious luxury homes.
            these homes will make you very happy and attract many others to keep you compnay.
          </p>
          <a class="btn btn-dark" href="homes.html" role="button">Browse</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="card bg-dark text-white">
        <img class="card-img" src="https://drive.google.com/uc?export=view&id=1bHe3EZYBtwycs6iF4G3WGPGSMcbymU3b"
          alt="Card image">
        <div class="card-img-overlay">
          <h5 class="card-title">Vehicles</h5>
          <p class="card-text">"Owning" a supercar has never been more affordable.
            We offer a wide range of sports, super and hyper cars with rental prices ranging from $100 to a base
            model Honda Civic monthly payment.
          </p>
          <a class="btn btn-dark" href="Vehicle.html" role="button">Browse</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="card bg-dark text-white">
        <img class="card-img" src="https://drive.google.com/uc?export=view&id=1P3EtKULzAgfwq_hNBY0aQs3Bd_6RNbVt"
          alt="Card image">
        <div class="card-img-overlay">
          <h5 class="card-title">Clothing</h5>
          <p class="card-text">Every Rich person always has the finest clothing money can buy, and so should you.
            Ditch those sweatpants and T-shirts from Ross Dress for Less and put on some of the finest outfits from
            around the world.
          </p>
          <a class="btn btn-dark" href="clothing.html" role="button">Browse</a>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="container">
    <div class="row align-items-start">
      <div class="col">
        <h1>Catalog</h1>
        <p>Browse through our wide selections of Homes, Vehicles and Clothing</p>
      </div>
      <div class="container-fluid">
        <div class="card bg-dark text-white">
          <img class="card-img" src="https://drive.google.com/uc?export=view&id=1OkSqrReykBQkpmOiWIGEW-4D0gHn8--8"
            alt="Card image">
          <div class="card-img-overlay">
            <h5 class="card-title">Homes</h5>
            <p class="card-text">Are you Tired of living in your 1 bedroom apartment all by yourself with no one to keep
              you company? Well, youve come to the right place! For a
              affordable price you can rent one of our many large and spaceious luxury homes.
              these homes will make you very happy and attract many others to keep you compnay.
            </p>
            <a class="btn btn-dark" href="homes.html" role="button">Browse</a>
          </div>
        </div>
        <div class="container-fluid">
          <div class="card bg-dark text-white">
            <img class="card-img" src="https://drive.google.com/uc?export=view&id=1bHe3EZYBtwycs6iF4G3WGPGSMcbymU3b"
              alt="Card image">
            <div class="card-img-overlay">
              <h5 class="card-title">Vehicles</h5>
              <p class="card-text">"Owning" a supercar has never been more affordable.
                We offer a wide range of sports, super and hyper cars with rental prices ranging from $100 to a base
                model Honda Civic monthly payment.
              </p>
              <a class="btn btn-dark" href="Vehicle.html" role="button">Browse</a>
            </div>
          </div>
        </div>
      </div> -->
</body>

</html>