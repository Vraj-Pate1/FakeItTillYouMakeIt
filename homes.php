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
  include 'header.php'
  ?>
  <div class="container-fluid">

  </div>
  <h1 class="text-white">Homes</h1>
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card border-warning mb-3 card h-100">
          <img src="images/Tennessee.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">47 Branch Creek Dr, Jackson TN</h5>
            <p class="card-text">Rental Price (Per Day): $349.59</p>
            <p class="card-text">4 bed and 3 bath</p>
            <p class="card-text">A great house in a great neighborhood. This home is perfect for some one
              that wants to live as a wealthy home owner but doesn't want the glitz and glamor of a mansion.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">47 Branch Creek Dr, Jackson TN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <p> <a href="contact.html">Terms and Condition</a></p>
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
          <img src="images/Mapleton.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">594 S Mapleton Dr, Los Angeles, CA</h5>
            <p class="card-text">Rental Price (Per Day): $759.25</p>
            <p class="card-text">14 bed and 27 bath</p>
            <p class="card-text">Featuring a Tennis court, pool, beauty salon and library; you'll never
              be dissapointed in this home. Such a large home with so many features is deserving of a soon to be
              wealthy person such as yourself.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
              Learn More
            </button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">594 S Mapleton Dr, Los Angeles, CA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <p> Rental Price (Per Day): $759.25<br>Insurance (Per Day): $100<br>Total (Per Day): $859.25</p>
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
        <div class="card border-warning mb-3 card border-warning mb-3 card h-100">
          <img src="images/NYC.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">217 W, New York, NY 10019</h5>
            <p class="card-text">Rental Price (Per Day): $600.69</p>
            <p class="card-text">7 bed and 11 bath</p>
            <p class="card-text">Located on Billionaires Row, this large and glamourous penthouse
              overlooks much of Manhattan. The Pentouse comes with everything you need and more, including a
              pool, private elevator, media room, and gym.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">217 W, New York, NY 10019</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade3" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/newyork 1.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/newyork 2.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/newyork 3.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <div class="row">
                        <p> Rental Price (Per Day): $600.69<br>Insurance (Per Day): $100<br>Total (Per Day): $700.69</p>
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
          <img src="images/Colorado.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">4001 E Quincy Avenue, Cherry Hills Village, CO 80113</h5>
            <p class="card-text">Rental Price (Per Day): $548.99</p>
            <p class="card-text">5 bed 8 bath</p>
            <p class="card-text"> Just outside of Denver is this beautiful, quite, and large home.
              A perfect location for a millionaire to relax, outside of the busy, bustling, loud city.
              Some features of the home include a pool, spa, gorgeous
              Backyard, and a yoga room.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">4001 E Quincy Avenue, Cherry Hills Village, CO
                      80113</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade4" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/co 1.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/co  2.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/co 3.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade4"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade4"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <div class="row">

                        <p> Rental Price (Per Day): $548.99<br>Insurance (Per Day): $100<br>Total (Per Day): $648.99</p>
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
          <img src="images/Utah.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">7948 Red Tail Ct, Heber City, UT 84060</h5>
            <p class="card-text">Rental Price (Per Day): $496.99</p>
            <p class="card-text">6 bed 8 bath</p>
            <p class="card-text"> Surrounded by the beatuiful state of Utah, This home
              is the perfect place for a millionaire's mountain getaway. While the house offers
              feautres such as a heated pool, patio, sauna, and hot tub, the home is also located very close
              to Deer Valley Ski Resort, so you can go skiing.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">7948 Red Tail Ct, Heber City, UT 84060</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade5" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/white 1.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/white 2.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/white 3.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade5"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade5"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <div class="row">

                        <p> Rental Price (Per Day): $496.99<br>Insurance (Per Day): $100<br>Total (Per Day): $596.99</p>
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
          <img src="images/Georgia.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">1150 W Garmon Rd, Sandy Springs, GA 30327</h5>
            <p class="card-text">Rental Price (Per Day): $569.32</p>
            <p class="card-text">6 bed 14 bath</p>
            <p class="card-text">This Georgia home, located just outside of Atlanta,
              offers many features such as a pool, wine cellar, and even a separate
              guest house on the same property. </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">1150 W Garmon Rd, Sandy Springs, GA 30327</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade6" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/atl 1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/atl 2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/atl 3.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade6"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade6"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <p> Rental Price (Per Day): $569.32<br>Insurance (Per Day): $100<br>Total (Per Day): $669.32</p>
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
          <img src="images/Florida.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">1005 NE Doubloon Dr, Stuart, FL 34996</h5>
            <p class="card-text">Rental Price (Per Day): $792.59</p>
            <p class="card-text">4 bed and 8 bath</p>
            <p class="card-text">Located Near the livley city of Miami, This Beach house
              provides beautiful views and access to the private beach, which can be all yours.
              This beach house features a game room, spa, gym, and home office for all your
              "real" multi-million dollar bussiness managing needs.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">1005 NE Doubloon Dr, Stuart, FL 34996</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade7" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/flo 1.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/flo 2.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/flo 3.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade7"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade7"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <p> Rental Price (Per Day): $792.59<br>Insurance (Per Day): $100<br>Total (Per Day): $892.59</p>
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
          <img src="images/Nevada.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">91 Hawk Ridge Dr, Las Vegas, NV 89135
            </h5>
            <p class="card-text">Rental Price (Per Day): $666.99</p>
            <p class="card-text">5 Bed 8 Bath</p>
            <p class="card-text">Located on the outskirts of Fabulous Las Vegas Nevada, this home is perfect for
              partying in day and night. This home is loaded with features such as a bar, wine room, patio, and pool.
              With so many features in one place, there will never be a dull moment in your Las Vegas party.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">91 Hawk Ridge Dr, Las Vegas, NV 89135</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade8" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/vegas 1.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/vegas 2.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/vegas 3.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade8"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade8"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <p> Rental Price (Per Day): $666.99<br>Insurance (Per Day): $100<br>Total (Per Day): $766.99</p>
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
          <img src="images/washington.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">1625 Federal Avenue E, Seattle, WA
              98102</h5>
            <p class="card-text">Rental Price (Per Day): $643.26</p>
            <p class="card-text">5 Bed 10 Bath</p>
            <p class="card-text">A beautiful Seattle home with a Pool and Hot Tub, Spa, Tennis Court and Wine Cellar.
              This home is a great living space with lots of activites and entertainment, all in one area. A perfect
              place
              to live, while enjoying a luxurious and comfortable life. </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">1625 Federal Avenue E, Seattle, WA
                      98102</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div id="carouselExampleFade9" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/seattle 1.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/seattle 2.webp" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/seattle 3.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade9"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade9"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <p> Rental Price (Per Day): $643.26<br>Insurance (Per Day): $100<br>Total (Per Day): $743.26</p>
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
  <?php
  include 'footer.php'
  ?>

  <!-- <div class="container">
  <div class="row">
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://drive.google.com/uc?export=view&id=1G_6RQIrTsLeXpUHipDQ_tZ7u70-D1Vrp"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">47 Branch Creek Dr, Jackson TN</h5>
          <p class="card-text">Rental Price (Per Day): $349.59</p>
          <p class="card-text">4 bed and 3 bath</p>
          <p class="card-text">A great house in a great neighborhood. This home is perfect for some one
            that wants to live as a wealthy home owner but doesn't want the glitz and glamor of a mansion.
          </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=1BwqQgcMLhbgVnIupJrnoyB1pPKd5o7Kj"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">594 S Mapleton Dr, Los Angeles, CA</h5>
          <p class="card-text">Rental Price (Per Day): $759.25</p>
          <p class="card-text">14 bed and 27 bath</p>
          <p class="card-text">Featuring a Tennis court, pool, beauty salon and library; you'll never
            be dissapointed in this home. Such a large home with so many features is deserving of a soon to be
            wealthy person such as yourself.
          </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=1vYHCqsjEirIL2pEfUDequUGbK72Cwlzq"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">217 W, New York, NY 10019</h5>
          <p class="card-text">Rental Price (Per Day): $600.69</p>
          <p class="card-text">7 bed and 11 bath</p>
          <p class="card-text">Located on Billionaires Row, this large and glamourous penthouse
            overlooks much of Manhattan. The Pentouse comes with everything you need and more, including a
            pool, private elevator, media room, and gym.
          </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=1iLZ5y4x5aHTRvzkIdugQD8Ryj7biwg8r"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">4001 E Quincy Avenue, Cherry Hills Village, CO 80113</h5>
          <p class="card-text">Rental Price (Per Day): $548.99</p>
          <p class="card-text"> Just outside of Denver is this beautiful, quite, and large home.
            A perfect location for a millionaire to relax, outside of the busy, bustling, loud city.
            Some features of the home include a pool, spa, gorgeous
            Backyard, and a yoga room.
          </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=1UIyUXtD1oJjiAtixplInh5NlinZEXod8"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">7948 Red Tail Ct, Heber City, UT 84060</h5>
          <p class="card-text">Rental Price (Per Day): $496.99</p>
          <p class="card-text">6 bed 8 bath</p>
          <p class="card-text"> Surrounded by the beatuiful state of Utah, This home
            is the perfect place for a millionaire's mountain getaway. While the house offers
            feautres such as a heated pool, patio, sauna, and hot tub, the home is also located very close 
            to Deer Valley Ski Resort, so you can go skiing.
          </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=1bgkrqzyig95ZPU1U81yDdeS1ESx_sYEE"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">1150 W Garmon Rd, Sandy Springs, GA 30327</h5>
          <p class="card-text">This Georgia home, located just outside of Atlanta, offers many features such as a pool, wine cellar, and even a separate guest house on the same property. </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=18wnZ421Y0n27-iMiQKpIZt01LinpgI2x"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">1005 NE Doubloon Dr, Stuart, FL 34996</h5>
          <p class="card-text">Rental Price (Per Day): 792.59</p>
          <p class="card-text">4 bed and 8 bath</p>
          <p class="card-text">Located Near the livley city of Miami, This Beach house
            provides beautiful views and access to the private beach, which can be all yours.
            This beach house features a game room, spa, gym, and home office for all your
            "real" multi-million dollar bussiness managing needs.
          </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=1DenWFZfp4c8QPQcg2df9t_IFtRg79Lo9"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">91 Hawk Ridge Dr, Las Vegas, NV 89135
          </h5>
          <p class="card-text">Rental Price (Per Day): $666.99</p>
          <p class="card-text">Located on the outskirts of Fabulous Las Vegas Nevada, this home is perfect for partying in day and night. This home is loaded with features such as a bar, wine room, patio, and pool. With so many features in one place, there will never be a dull moment in your Las Vegas party.</p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
    <div class="col-sm-auto">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top"
          src="https://drive.google.com/uc?export=view&id=1e2enefKcXxMwwDPCUBt_hTSe7X6nAgkC"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">1625 Federal Avenue E, Seattle, WA
            98102</h5>
          <p class="card-text">Rental Price (Per Day): $643.26</p>
          <p>5 Bed 10 Bath</p>
          <p class="card-text">A beautiful Seattle home with a Pool and Hot Tub, Spa, Tennis Court and Wine Cellar.
            This home is a great living space with lots of activites and entertainment, all in one area. A perfect place
          to live, while enjoying a luxurious and comfortable life.  </p>
          <a href="#" class="btn btn-primary">Rent</a>
        </div>
      </div>
    </div>
  </div>
</div> -->
</body>