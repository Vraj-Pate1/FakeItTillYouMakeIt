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
  <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

<body>
<?php
  $conn;
  ?>


  <?php
  include 'header.php'
  ?>
  <div class="container-fluid">
  <br>
    <div class="row">
      <h1 class="text-center text-white"> Help center</h1>
    </div>
    <br>
  </div>
  <div class="help1">
    <br>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-center">
          <h3 class="text-white">Terms and Conditions</h3>

          
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
            Terms and Conditions
          </button>
        </div>
        
        <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="fullscreenModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="height: 100vh; padding: 0;">
                <h1>Terms and Conditions</h1>
                <p>Welcome to Fake It Till You Make It. These terms and conditions outline the rules and regulations for
                  the use of our services.</p>

                <h2>1. General</h2>
                <p>By accessing our services, you agree to be bound by these terms and conditions. If you disagree with
                  any part of these terms and conditions, you may not use our services.</p>

                <h2>2. Rental Services</h2>
                <p>Our rental services include luxurious homes, vehicles, and clothing items. You agree to the following
                  terms when using our rental services:</p>
                <ul>
                  <li>Items must be returned in the same condition as they were rented.</li>
                  <li>You are responsible for any damage or loss of rental items during the rental period.</li>
                  <li>Any late returns will result in additional fees.</li>
                  <li>We reserve the right to refuse rental services to anyone for any reason.</li>
                </ul>

                <h2>3. Payment</h2>
                <p>We accept various forms of payment for our services, including credit card, debit card, checks. You
                  agree to pay all fees and charges associated with the use of our services in a timely
                  manner.</p>

                <h2>4. Privacy Policy</h2>
                <p>By using our Services, you consent to our collection and use of your data.
                </p>
                <h2>5. Intellectual Property</h2>
                <p>The content on our website, including text, images, and logos, are the intellectual property of Fake
                  It Till You Make It and are protected by applicable copyright and trademark laws. You may not use our
                  content without our express written consent.</p>

                <h2>6. Disclaimer of Warranties</h2>
                <p>Our services are provided "as is" and "as available" without any warranties of any kind, express or
                  implied. We do not guarantee that our services will be uninterrupted or error-free.</p>

                <h2>7. Limitation of Liability</h2>
                <p>In no event shall Fake It Till You Make It be liable for any indirect, incidental, special, or
                  consequential damages arising out of or in connection with the use of our services.</p>

                <h2>8. Governing Law</h2>
                <p>These terms and conditions shall be governed by and construed in accordance with the laws of [insert
                  state/country]. Any disputes arising out of or in connection with these terms and conditions shall be
                  resolved through arbitration in [insert city].</p>

                <h2>9. Changes to Terms and Conditions</h2>
                <p>We reserve the right to modify these terms and conditions at any time. By using our services after
                  any changes to these terms and conditions, you agree to be bound by the modified terms and conditions.
                </p>

                <h2>10. Contact Us</h2>
                <p>If you have any questions about these terms and conditions or our services, please contact us at
                  fitymiUS@bmail.com or gives u a call at +1(800)-117-1234</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <h3 class="text-white text-center">Pricing</h3>
          <p class="text-white">At Fake It Till You Make It, we offer a range of luxurious rental homes, vehicles, and
            clothing items at
            different prices. Please note that all items have a different rental price, and in addition to that, there
            is also an insurance fee. For our homes, there is an additional $100 insurance fee, for our vehicles, there
            is an additional $50 insurance fee, and for our clothing items, there is an additional $10 insurance fee.
            The insurance amount is charged daily for the duration of the rental along with the rental price of the item
            itself. We strive to provide our customers with the best possible service and aim to be transparent with our
            pricing.</p>
        </div>
        <div class="col-md-4 ">
          <div class="container-fluid">
            <h3 class="text-white">Available in the following US States:</h3>
            <ul class="text-white">
              <li>Tennessee</li>
              <li>California</li>
              <li>New York</li>
              <li>Colorado</li>
              <li>Utah</li>
              <li>Georgia</li>
              <li>Florida</li>
              <li>Nevada</li>
              <li>Washington</li>
            </ul>
            <p class="text-white">Note: We are constantly expanding and hope to offer our services in more states in the
              future.</p>

          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

  </div>
  <div class="help2">
  <br>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-white">
          <h3 class="text-center">Frequently Asked Questions</h3>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  "What if I didn't rent a home, how would I recive my vehicle and clothing?"
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">At Fake It Till You Make It, we understand the importance of convenience
                  and flexibility for our customers. That's why we offer delivery of our rental vehicles and clothing
                  items to the location of your choice. If you have rented one of our luxurious rental homes, your
                  vehicle or clothing item will be delivered directly to your rental home for your convenience. If you
                  have not rented a home from us, no worries - simply provide us with an address, and we will deliver
                  your vehicle or clothing item right to you. We strive to make the rental process as easy and
                  stress-free as possible for our customers.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  What is the maximum lease for rentable items?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">The maximum lease time each of our items is approximately two weeks. Allowing our customers to have plently of time on their hands to wear our luxury clothing, drive our high end vehicles, and stay in our fabulous homes. </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  What is your refund policy?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">We follow a non-refundable policy, no matter what. This is in order to insure our assets are fully taken care for and to cover expenses transporting our products to the customer.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 text-white">
           <h3 class="text-center">Contact Us</h3>
           <p>Send E-Mail</p>
          <form class="contact-form form-control" action="contactform.php" method="post" >
            <div class="row">
            <input type="text" name= "name" placeholder="First and Last Name">
            </div>
            <div class="row">
            <input type="text" name="email" placeholder="Your e-mail">
            </div>
            <div class="row">
            <input type="text" name="subject" placeholder="Subject">
            </div>
            <div class="row">
            <textarea name= "message" placeholder="Message"></textarea>
           <button class="btn btn-warning" type="submit" name="submit">SEND MAIL</button>
            </div>
          </form> 
        <div class="text-center text-md-left">
        </div>
        <div class="status"></div>
    </div>
</div>

</section>
         <div class="container py-4">
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