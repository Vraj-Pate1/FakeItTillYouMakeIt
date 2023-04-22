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
  <h1 class="text-center text-white">Clothing</h1>
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card border-warning mb-3 card h-100">
          <img src="images/Jeremy Fragrence.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">White Versace Suit</h5>
            <p class="card-text">Rental Price (Per Day): $63.97</p>
            <p class="card-text">This white suit speaks style and fashion. Guarateed to turn heads at any event this
              high-end Versace suit commands respect and attention, worn by many celeberties, such as the fragrance king
              himself, Jeremy Fragrance.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop19">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop19" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">White Versace Suit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $63.97<br>Insurance (Per Day): $10<br>Total (Per Day): $73.97</p>
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
          <img src="images/whitedress.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Dior Dream Asymmetric Long Dress</h5>
            <p class="card-text">Rental Price (Per Day): $57.56</p>
            <p class="card-text">Part of the Dior Dream capusule collection, this beautiful white silk dress brings out
              the elegance in any one who wears it, allowing the silhouette to stand out as the wearer radiates a look
              of fashion and sophistication.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop20">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop20" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Dior Dream Asymmetric Long Dress</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $57.56<br>Insurance (Per Day): $10<br>Total (Per Day): $67.56</p>
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
          <img class="card-img-top" src="images/suit.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Black Perennial Napoli Suit</h5>
            <p class="card-text">Rental Price (Per Day): $56.67</p>
            <p class="card-text">The Napoli Suit comes in a sleek, timeless black color that exudes sophistication and
              elegance. It's perfect for a wedding, business meeting, or any formal occasion that requires a touch of
              class. Crafted from the finest quality materials, this suit is designed to stand the test of time,
              ensuring you always look sharp and put-together, no matter the occasion.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop21">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Black Perennial Napoli Suit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $56.67<br>Insurance (Per Day): $10<br>Total (Per Day): $66.67</p>
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
          <img src="images/gucci-yard-Belted-Silk-Dress.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Green Gucci Yard Belted Silk Dress</h5>
            <p class="card-text">Rental Price (Per Day): $72.99</p>
            <p class="card-text">Introducing the stunning Green Gucci Yard Belted Silk Dress, the perfect choice for any
              woman who wants to make a statement at their next special event. This exquisite dress features a gorgeous
              emerald green hue, crafted from luxurious, high-quality silk that drapes beautifully over the body.
              Renting the Green Gucci Yard Belted Silk Dress allows you to indulge in luxury fashion without breaking
              the bank. Whether you're attending a high-end event or just want to elevate your everyday style, this
              dress is sure to turn heads and make you feel like a true fashion icon.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop22">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop22" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Green Gucci Yard Belted Silk Dress</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $72.99<br>Insurance (Per Day): $10<br>Total (Per Day): $82.99</p>
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
          <img src="images/Stella McCartney Cerulean Blue Dress.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Stella McCartney Cerulean Blue Dress</h5>
            <p class="card-text">Rental Price (Per Day): $47.59</p>
            <p class="card-text">The Stella McCartney Cerulean Blue Dress is a must-have for anyone looking for a truly
              stunning and unforgettable formal gown. Its timeless design and exquisite craftsmanship make it a true
              work of art that is sure to impress anyone who sees it. The dress features a beautiful cerulean blue color
              that is both vibrant and eye-catching. The fabric is soft and flowing, with a subtle sheen that catches
              the light and adds to the dress's overall allure.

            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop23">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop23" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Stella McCartney Cerulean Blue Dress
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $47.59<br>Insurance (Per Day): $10<br>Total (Per Day): $57.59</p>
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
          <img src="images/Lemon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">A Little Bit of Lemon, Lemon Dress</h5>
            <p class="card-text">Rental Price (Per Day): $25.79</p>
            <p class="card-text">This cream-colored dress is a stunning piece that exudes sophistication and elegance.
              The dress features a beautiful printed pattern of lemons placed perfectly on the fabric, creating a
              visually appealing look that is perfect for any occasion. The lemon pattern is inspired by the
              collaboration with the company named "A Little Bit of Lemon," making this dress a unique and exclusive
              piece. Renting this dress for a special occasion is a great way to stand out and make a statement, while
              also supporting a collaboration with a great company that believes in adding a little bit of zest to life.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop24">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop24" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">A Little Bit of Lemon, Lemon Dress</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $25.79<br>Insurance (Per Day): $10<br>Total (Per Day): $35.79</p>
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
        <img src="images/supreme+hypebeast.jpg" alt="...">
        <div class="card-body">
          <h5 class="card-title">Supreme Hype Beast Outfit</h5>
          <p class="card-text">Rental Price (Per Day): $87.29</p>
          <p class="card-text">This supreme outfit is a perfect combination of style and comfort that will make you
            stand out from the crowd. The outfit features a classic pair of blue jeans that are designed to provide a
            comfortable fit and a sleek, stylish look. The outfit also includes a striking red Supreme sweatshirt that
            is made from premium quality cotton. The sweatshirt features the iconic Supreme logo in white lettering on
            the chest, which adds a touch of exclusivity and style to the outfit. This Supreme outfit is the perfect
            choice for any occasion, whether you're looking to make a fashion statement or simply want to stay
            comfortable while out and about.
          </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop25">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop25" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Supreme Hype Beast Outfit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $87.29<br>Insurance (Per Day): $10<br>Total (Per Day): $97.29</p>
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
        <img src="images/Fur.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Maximilian Mink Fur Coat</h5>
          <p class="card-text">Rental Price (Per Day): $45.87</p>
          <p class="card-text">The Maximilian Brown Mink Fur Coat is the epitome of luxury and sophistication. Crafted
            from the finest quality mink fur, this coat is incredibly soft to the touch, and boasts a rich, deep brown
            hue that exudes warmth and elegance. The coat features a classic collar and full-length sleeves, providing
            ample coverage against the cold winter weather. It is lined with sumptuous silk, ensuring that the wearer
            stays warm and comfortable while wearing it. Overall, the Maximilian Brown Mink Fur Coat is a luxurious and
            timeless piece that will last for many years to come. It is the perfect investment for anyone looking to add
            a touch of glamour and sophistication to their winter wardrobe.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop26">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop26" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Maximilian Mink Fur Coat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $45.87<br>Insurance (Per Day): $10<br>Total (Per Day): $55.87.</p>
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
        <img src="images/VASTRAMAYpinkblazer.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vastramay Pink Blazer</h5>
          <p class="card-text">Rental Price (Per Day): $69.72</p>
          <p class="card-text">Crafted with high-quality materials, this blazer features a soft pink hue that adds a
            touch of playful charm to any outfit. The slim fit cut enhances your silhouette, while the notch lapel and
            two-button closure provide a classic and timeless look. This blazer is designed for men who want to stand
            out in a crowd with a bold and sophisticated style.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop27">
              Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop27" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Vastramay Pink Blazer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <p> Rental Price (Per Day): $69.71<br>Insurance (Per Day): $10<br>Total (Per Day): $79.71</p>
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