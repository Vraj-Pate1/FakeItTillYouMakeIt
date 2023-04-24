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
  <h1 class="text-center text-white">Vehicles</h1>
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card border-warning mb-3 card h-100">
          <img src="images/AMG BlkSRS.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">2021 Mercedes-AMG GT Black Series</h5>
            <p class="card-text">Class: Super</p>
            <p class="card-text">Rental Price (Per Day): $300.57</p>
            <p class="card-text">Equiped with a roaring German V8, this car is sure to turn some heads.
              The AMG GT Black Series is perfect for Track days and as a status symbol.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">2021 Mercedes-AMG GT Black Series</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade10" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/amgback.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/AMGINSIDE.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade10"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade10"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <div class="row">

                        <p> Rental Price (Per Day): $300.75<br>Insurance (Per Day): $50<br>Total (Per Day): $350.75</p>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Rent</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-warning mb-3 card h-100">
          <img src="images/Urus.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">2023 Lamborghini WR-Blue Series</h5>
            <p class="card-text">Class: SUV</p>
            <p class="card-text">Rental Price (Per Day): $250.99</p>
            <p class="card-text"> A Lamborghini for 5. The Urus comes equipped with a twin-turbo V8
              packed with power and fun. Hauling your friends around has never been so stylish.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">2023 Lamborghini WR-Blue Series</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade11" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/LAback.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/LAinside.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade11"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade11"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $250.99<br>Insurance (Per Day): $50<br>Total (Per Day): $300.99</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3 card h-100">
            <img src="images/Real Lemon Car.jfif.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lemon Mobile</h5>
              <p class="card-text">Class: Lemon</p>
              <p class="card-text">Rental Price (Per Day): 69.69</p>
              <p class="card-text">A Little Bit of Lemon is good for everyone. Equiped with a 1500 Horse power Lemon
                Engine which runs on lemonade, this car is no joke.
                You may ask yourself,"why would anyone drive a lemon?" or "Is this even practical?"
                And our answer to that is: It doesn't need be practical or make sense, Its a lemon car!
              </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
                Learn More
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Lemon Mobile</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div id="carouselExampleFade12" class="carousel slide carousel-fade">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/LEback.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="images/LEinside.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade12"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade12"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $69.69<br>Insurance (Per Day): $50<br>Total (Per Day): $119.69</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3 card h-100">
            <img src="images/Maybach.png" class="card-img-top" alt="nothing">
            <div class="card-body">
              <h5 class="card-title">2023 Mercedes Maybach S Class</h5>
              <p class="card-text">Class: Luxury Sedan</p>
              <p class="card-text">Rental Price (Per Day): $299.99 ($336.44 with optional driver)</p>
              <p class="card-text">The S Class is the ultimate way to ride around town in comfort and style. Equipped
                with
                all the features mercedes offers
                there will never be a dull moment in this car. Make your experience even better with an optional driver.
              </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop13">
                Learn More
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">2023 Mercedes Maybach S Class</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div id="carouselExampleFade13" class="carousel slide carousel-fade">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/mayback.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="images/Maybachintnew.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade13"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade13"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $299.99<br>Insurance (Per Day): $50<br>Total (Per Day): $349.99 ($386.44 with optional driver)</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3 card h-100">
            <img src="images/Ford GT.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">2017 Ford GT</h5>
              <p class="card-text">Class: Super</p>
              <p class="card-text">Rental Price (Per Day): $287.29</p>
              <p class="card-text">Equipped with a EcoBoost V6, the 2017 Ford Gt keeps the legacy of the Gt going. 
                The Gt is a exclusive vehicle for individuals Ford selects. Driving the Gt is both an honor and a great experience.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
                Learn More
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">2017 Ford GT</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div id="carouselExampleFade14" class="carousel slide carousel-fade">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/GTBAck.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="images/GTInside.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade14"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade14"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $287.29<br>Insurance (Per Day): $50<br>Total (Per Day): $337.29</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3 card h-100">
            <img src="images/f350.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">2009 Ford F-350 Platinum Extended Cab Dully Edition 6.4 L V8 Diesel (White)</h5>
              <p class="card-text">Class: Hyper</p>
              <p class="card-text">Rental Price (Per Day): $81.65</p>
              <p class="card-text">Built Ford Tough. The F-350 is the fastest, and most luxurious vehicle on the planet. The
                F-350 is the most powerful there is,
                made for a powerful individual.
              </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop15">
                Learn More
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop15" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">2009 Ford F-350 Platinum Extended Cab Dully Edition 6.4 L V8 Diesel (White)</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div id="carouselExampleFade15" class="carousel slide carousel-fade">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/FOback.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="images/FOInside.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade15"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade15"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $81.65<br>Insurance (Per Day): $50<br>Total (Per Day): $131.65</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3 card h-100">
            <img src="images/Century 1994.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">1994 Toyota Century</h5>
              <p class="card-text">Class: Luxury Sedan</p>
              <p class="card-text">Rental Price (Per Day): $ 420.69 ($457.14 with optional driver)</p>
              <p class="card-text">The Japanese Rolls Royce. A one of a kind car. Although old, the Century is still one
                of the most beautiful cars
                designed by Toyota. The Century was trully ahead of its time in 1994, introducing many fueatures
                which are found in modern day Rolls Royces. Truly unique car for a unique individual.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop16">
                Learn More
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop16" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">1994 Toyota Century</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div id="carouselExampleFade16" class="carousel slide carousel-fade">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/toback.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="images/TOinside.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade16"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade16"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $420.69 ($457.14 with optional driver)<br>Insurance (Per Day): $50<br>Total (Per Day): $470.69 ($507.14 with optional driver)</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3 card h-100">
            <img src="images/Phantom.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">2022 Rolls-Royce Phantom</h5>
              <p class="card-text">Class: Luxury Sedan</p>
              <p class="card-text">Rental Price (Per Day): $420.69 ($457.14 with optional driver)</p>
              <p class="card-text">A true symbol of wealth, the Rolls Royce Phantom is a car for the elite.
                Sporting a large but perfect, beautiful exterior and a comfortable and spacions interior, the Phantom
                is the best car to go from point A to point B, in style of course. Equipped with a British V12, the
                Phantom really moves.
              </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop17">
                Learn More
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop17" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">2022 Rolls-Royce Phantom</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div id="carouselExampleFade17" class="carousel slide carousel-fade">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/roback.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="images/RRINSIDE.jpg" class="d-block w-100" alt="...">
                            </div>
                            
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade17"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade17"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $420.69 ($457.14 with optional driver)<br>Insurance (Per Day): $50<br>Total (Per Day): $470.69 ($507.14 with optional driver)</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3 card h-100">
            <img src="images/P1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">2013 McLaren P1</h5>
              <p class="card-text">Class: Super</p>
              <p class="card-text">Rental Price (Per Day): $432.13</p>
              <p class="card-text">Fitted with a twin-turbo V8 paired with a hybrid system, the P1 is an abosulte
                monster on the road. McLaren gave the P1 903 Brake Horse Power, capable of pushing the car to 217 mph.
                The P1 provides a huge rush of adrenaline to anyone sitting inside. For 2013, the P1 was way ahead of it
                time, using the
                hybrid technology to manifest such large amounts of power from the V8. Since 2013, the P1 has not aged a
                day, as it has a
                ageless deisgn that will turn heads everywhere you go.
              </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop18">
                Learn More
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop18" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel18">2013 McLaren P1</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div id="carouselExampleFade18" class="carousel slide carousel-fade">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/mcback.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="images/McLaren-P1-MSO-2015-interior.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade18"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade18"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <div class="row">

                          <p> Rental Price (Per Day): $432.13<br>Insurance (Per Day): $50<br>Total (Per Day): $482.13</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning">Rent</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  <br>
  <br>

    <?php
  include 'footer.php'
  ?>

</body>

</html>