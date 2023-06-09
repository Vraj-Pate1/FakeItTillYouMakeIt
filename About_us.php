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
  <section style="margin:20px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h2 class="about_txt">How We Started</h2>
          <p class="about_txt">
            The idea for our business,
            which offers rental luxury homes, cars, and clothing to those who dream of a millionaire lifestyle,
            came about from a deep understanding of the human desire for experiences and the pursuit of happiness.
            Our founders were inspired by a mutual friend who expressed their disappointment at not being able to afford
            the
            lifestyle they desired. This sparked
            the idea of creating a business that would allow people to live out their dreams through rental services,
            without the long-term commitment or financial burden of ownership.
          </p>
          <p class="about_txt">With this concept in mind, our founders worked tirelessly to build relationships with
            luxury property owners, car dealerships, and fashion designers to provide our clients with the best and most
            exclusive offerings.
            The idea was to create a one-stop-shop for those who wanted to experience luxury,
            and our founder was passionate about making this a reality.
          </p>
          <p class="about_txt">
            Our company has since grown and expanded, but our mission remains the same:
            to provide an elevated experience for our clients and allow them to live their aspirations through our
            rental
            services. We strive to constantly innovate and offer new and
            exciting experiences to keep our clients coming back for more.
          </p>
          <p class="about_txt">
            Today, our business is a leader in the luxury rental industry,
            providing clients with access to the finest homes, cars, and clothing in the world.
            Our commitment to providing exceptional service and creating unforgettable experiences sets us apart from
            the
            competition and has made us the go-to choice
            for those looking to live out their millionaire dreams.
          </p>
        </div>
        <div class="col-md-6">
          <div class="imgcenter">
            <img src="images/logo.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="margin:20px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="imgcenter">
            <img src="images/How we start.jpg" height="350">
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="about_txt"> What we Offer</h2>
          <h3 class="about_txt"> Homes</h3>
          <p class="about_txt">Our housing options consist of beautiful,
            spacious and fully furnished homes that are located in the most sought-after neighborhoods
            and are equipped with the latest technology and amenities.
            The homes are ideal for individuals who are looking for a
            temporary place to stay during their travels or for those who want to experience
            a luxurious lifestyle without committing to a long-term lease.
          </p>
          <h3 class="about_txt">Vehicles</h3>
          <p class="about_txt">In addition to housing, Fake it Till You Make it also offers a wide range of luxury
            vehicles,
            including sports cars, SUVs, and high-end sedans.
            These vehicles are perfect for those who want to make a statement and enjoy
            the thrill of driving a luxurious car.
          </p>
          <h3 class="about_txt">Clothing</h3>
          <p class="about_txt">Our luxury clothing rental service is perfect for those who want to dress to impress without breaking the bank. Whether it's for a special occasion or just for everyday wear, our rental options allow you to indulge in luxury fashion without the commitment of purchasing a pricey item.
          </p>

        </div>
      </div>
    </div>
    <section style="margin:20px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <h2 class="about_txt"> Meet Our Founders</h2>
          </div>
        </div>
      </div>
      <div class="person">
        <div class="person-header">
          <img src="images/Vraj.jpeg" height="300" alt="Vraj">
          <h1 class="person-name">Vraj Patel</h1>
          <p class="person-job">Founder</p>
        </div>
        <div class="person-introduction">
          <div class="row">
            <div class="col-md-6">
              <h3>Bio </h3>
              <p>Vraj is a natural leader. Under his guidance,
                the company has grown to offer a diverse range of homes,
                exotic vehicles, and designer clothing, each of which has been carefully curated to meet the highest
                standards of quality and luxury. He is known for his innovative approach to business and his relentless
                pursuit of excellence,
                which has earned the company a reputation for delivering only the best in luxury rentals.</p>
            </div>
            <div class="col-md-6">
              <h3>Follow Vraj On</h3>
              <h4>Instagram</h4>
              <a class="btn btn-warning" href="https://instagram.com/17vraj?igshid=YmMyMTA2M2Y=" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                  height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg> 17Vraj</a>
              <h4>FaceBook</h4>
              <a class="btn btn-warning" href="https://www.facebook.com/people/Vraj-Patel/pfbid02Kb9YgNjbrmisyfPFJTJ3ugrPbbjSWT3vySmR3yRANyrbCgeWwykDb242e8LFJX66l/?mibextid=LQQJ4d" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg> Vraj Patel</a>

            </div>
          </div>
        </div>
      </div>
      <div class="person">
        <div class="person-header">
          <img src="images/Harsh.jpeg" height="399" alt="Harsh">
          <h1 class="person-name">Harsh Patel</h1>
          <p class="person-job">Co-Founder</p>
        </div>
        <div class="person-introduction">
          <div class="row">
            <div class="col-md-6">
              <h3>Bio</h3>
              <p>Harsh is known for his friendly and approachable demeanor,
                which has helped him to establish strong relationships with clients and business partners alike.
                Whether he's working with high-end property owners, premium vehicle manufacturers, or top fashion designers,
                Harsh always goes the extra mile to ensure that his clients receive the very best in luxury rentals.</p>
            </div>
            <div class="col-md-6">
              <h3>Follow Harsh On</h3>
              <h4>Instagram</h4>
              <a class="btn btn-warning" href="https://instagram.com/xxharshpatelxx?igshid=YmMyMTA2M2Y=" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                  height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg> xxharshpatelxx </a>
              <h4>FaceBook</h4>
              <a class="btn btn-warning" href="https://www.facebook.com/people/Harsh-Patel/pfbid09GgHpDKufRztYowxbubqcqQHiAhpdnh2QuWhoaFU98gddHk61tZx1rc3wntVpFtGl/?mibextid=LQQJ4d" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg> Harsh Patel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="person">
        <div class="person-header">
          <img src="images/Jack.png" height="300" alt="Jack">
          <h1 class="person-name">Jack Finney</h1>
          <p class="person-job">Co-Founder</p>
        </div>
        <div class="person-introduction">
          <div class="row">
            <div class="col-md-6">
              <h3>Bio</h3>
              <p>Jack Finney is a
                true marketing wizard who has a deep understanding of what
                drives customer engagement and loyalty. Through his visionary approach,
                his unwavering commitment to excellence, and his exceptional marketing skills,
                Jack has helped to create a company that delivers the ultimate in luxury experiences
                to its clients.</p>
            </div>
            <div class="col-md-6">
              <h3>Follow Jack On</h3>
              <h4>Instagram</h4>
              <a class="btn btn-warning" href="https://instagram.com/jack_r_finney?igshid=YmMyMTA2M2Y=" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                  height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg> jack_r_finney</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
  include 'footer.php'
  ?>

</body>

</html>