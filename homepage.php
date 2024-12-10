<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="homepagestyle.css" />
    <title>Vigan | Philippines</title>
  </head>
  <body>
            <div id="bookform" class="bookform">
              <div class="container" id="signup">
              <i class="ri-arrow-go-back-fill" id="backbtn" onclick="bookformhide()"></i>
                <h1 class="form-title">Book now!</h1>
                <form method="post">
                  <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fName" id="fName"  disabled>
                    <label for="fname">
                      <?php 
                        if(isset($_SESSION['email'])){
                      $email=$_SESSION['email'];
                      $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['firstName'];
                       }
                      }
                  ?>
            </label>
                  </div>
                  <div class="input-group">
                      <i class="fas fa-user"></i>
                      <input type="text" name="lName" id="lName"  disabled>
                      <label for="lName">
                          <?php 
                            if(isset($_SESSION['email'])){
                          $email=$_SESSION['email'];
                          $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                          while($row=mysqli_fetch_array($query)){
                              echo $row['lastName'];
                          }
                        } 
            ?>
            </label>
                  </div>
                  <div class="input-group">
                      <i class="fas fa-envelope"></i>
                      <input type="email" name="email" id="email" disabled>
                      <label for="email">
                       <?php 
                          if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                        while($row=mysqli_fetch_array($query)){
                            echo $row['email'];
                        }
                      }
                      ?>
            </label>
                  </div>
                  <div class="input-group">
                    <i class="ri-map-pin-2-fill"></i>
                    <select name="hotel" class="hotels">
                      <option value="Hotel1">Hotel1</option>
                      <option value="Hotel2">Hotel2</option>
                      <option value="Hotel3">Hotel3</option>
                      <option value="Hotel4">Hotel4</option>
                      <option value="Hotel5">Hotel5</option>
                    </select>
                  </div>
                  <div class="input-group">
                    <i class="ri-calendar-2-fill"></i>
                    <input class="date" type="date" id="birthday" name="birthday" required>
                  </div>
                <input type="submit" class="btn" value="Book now" name="booknow" onclick="alert('Thank you for Booking, We will send you an update on your gmail! Note: We will diregard your booking if you did not fill every field.');">
                </form>
              </div>
          </div>
    <video id="home"class="backgroundvid" autoplay muted loop>
        <source src="assets/EP9A3_910_Homescreen.mp4"/>
    </video>
    <nav id="nav">
      <div class="nav__logo">
        <img class="viganlogo"src="assets/viganlogo.png">
        <a href="#">Vigan</a></div>
      <ul class="nav__links">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#">Services</a></li>
        <li class="link"><a href="#">Contacts</a></li> 
      </ul>
      <div onclick="window.location.href='firstpage.php';" >
      <button class="username">
              <span><?php 
                if(isset($_SESSION['email'])){
              $email=$_SESSION['email'];
              $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
              while($row=mysqli_fetch_array($query)){
                  echo $row['firstName'].' '.$row['lastName'];
              }
            }
            ?></span>
      </button>
      </div>
    </nav>
    <header>
      <div class="section__container">
        <div class="header__content">
          <h1>Vigan</h1>
          <p>
            Discover Vigan City in Ilocos Sur, a UNESCO World Heritage site and one of the New7Wonders Cities. Find out the best time to go, top tourist spots and activities you shouldn’t miss, must-try food, best hotels to stay in, and how to plan your itinerary with this guide.
          </p>
          <button onclick="bookbtn()">Book now</button>
          <div id="journey"></div>
        </div>
      </div>
    </header>
    <section class="journey__container">
      <div class="section__container">
        <h2 class="section__title">Start Your Journey</h2>
        <p class="section__subtitle">One of the oldest towns in the Philippines, Vigan is a Spanish Colonial fairy tale of dark-wood mansions, cobblestone streets and clattering kalesa (horse-drawn carriages). In fact, it is the finest surviving example of a Spanish Colonial town in Asia and a Unesco World Heritage site.</p>
        <div class="journey__grid">
          <div class="country__card">
            <div class="overlay">
                <span>Baluarte details</span>
            </div>
            <img src="assets/country-1.jpg"/>
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Baluarte</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Hidden Garden details</span>
            </div>
            <img src="assets/country-2.jpg"  />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Hidden Garden</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Plaza Salcedo details</span>
            </div>
            <img src="assets/country-3.jpg"  />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Plaza Salcedo</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Syquia details</span>
            </div>
            <img src="assets/country-4.jpg"  />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Syquia</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Cathedral details</span>
            </div>
            <img src="assets/country-5.jpg"  />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Cathedral</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Crisologo details</span>
            </div>
            <img src="assets/country-6.jpg" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Crisologo</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Bantay Tower details</span>
            </div>
            <img src="assets/country-6.jpg" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Bantay Tower</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Plaza Burgos details</span>
            </div>
            <img src="assets/country-6.jpg" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Plaza Burgos</span>
            </div>
          </div>
          <div class="country__card">
            <div class="overlay">
                <span>Isa pang details</span>
            </div>
            <img src="assets/country-6.jpg" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Isa pa</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="banner__container">
      <div class="section__container">
        <div class="banner__content">
          <h2>Brief synthesis</h2>
          <p>
            Vigan is the most intact example in Asia of a planned Spanish colonial town, established in the 16th century. Its architecture reflects the coming together of cultural elements from elsewhere in the Philippines and from China with those of Europe and Mexico to create a unique culture and townscape without parallels anywhere in East and South-East Asia. An important trading post before the colonial era, Vigan is located at the river delta of Abra River, along the northwestern coastline of the main island of Luzon, in the Province of Ilocos Sur, Philippine Archipelago. The total area of the inscribed property is 17.25 hectares. The traditional Hispanic checkerboard street plan opens up into two adjacent plazas. The Plaza Salcedo is the longer arm of an L-shaped open space, with the Plaza Burgos as the shorter. The two plazas are dominated by the St. Paul’s Cathedral, the Archbishop’s Palace, the City Hall and the Provincial Capitol Building . The urban plan of the town closely conforms with the Renaissance grid plan specified in the Ley de la Indias for all new towns in the Spanish Empire. There is, however, a noticeable difference between Vigan and contemporary Spanish colonial towns in Latin America in the Historic Core (known as the Mestizo district), where the Latin tradition is tempered by strong Chinese, Ilocano, and Filipino influences. As its name implies, this district was settled by affluent families of mixed Chinese-Ilocano origin. The area contains the historic footprint of the entire town and consists of a total of 233historic buildings tightly strung along a grid of 25 streets.
            <br><br>
            The two storey structures are built of brick and wood, with a steeply pitched roof reminiscent of traditional Chinese architecture. The exterior walls of the upper storey are enclosed by window panels of kapis shells framed in wood which can be slid back for better ventilation. Most of the existing buildings were probably built in the mid 18th to late 19th centuries. Due to the economic decline of Vigan as an economic center after the World War II, only a few of the historic buildings had internal reorganization for alternative use. The Chinese merchants and traders conducted their business from shops, offices and storerooms on the ground floors of their houses, with the living quarters above. In addition to the domestic and commercial architecture, Vigan possesses a number of significant public buildings, which also show multi-cultural influences.
            <br><br>
            Vigan is unique for having preserved much of its Hispanic colonial character, particularly its grid street pattern and historic urban lay out. Its significance also lies on how the different architectural influences are blended to create a homogenous townscape.
            <br><br>
            Criterion (ii): Vigan represents a unique fusion of Asian building design and construction with European colonial architecture and planning.
            <br><br>
            Criterion (iv): Vigan is an exceptionally intact and well-preserved example of a European trading town in East and South-East Asia.
            <br><br>
            Integrity
            <br><br>
            All elements necessary to express the values of the property are included within the property. This ensures the representation of its significance as a well planned and well preserved Hispanic colonial town. At present, the salient features of most of the ancestral Vigan houses are conserved, although a few houses remain in deteriorating condition due to neglect of their absentee owners.
            <br><br>
            Authenticity
            <br><br>
            Vigan has maintained its authenticity in its grid street pattern, historic urban lay out and use of open spaces. The historic buildings have maintained their traditional uses for commerce at the lower floors and as residence for the owners on the upper floors. However, very few houses remain untouched. Changes introduced to the betterconserved houses have been to the interior: subdividing the large living quarters into smaller apartments, and adjusting of ground floor to provide spaces to let out for commercial use. After having been completely altered to allow new uses, many structures have lost their authenticity. A few structures have been abandoned, neglected, and left to decay. The original building materials such as bricks, wood, kapis shells and lime for mortar and plaster were all obtained from surrounding areas.. The lack of traditional building materials such as wood and lime for plaster and mortar has resulted in the use of modern materials such as cement and galvanized iron sheets for roofing. The awareness on the need to preserve authenticity has dramatically increased since the site was inscribed. Conservation practices that have developed organically over the last three centuries are now being re-introduced, making use of a considerable reserve of traditional building crafts that have survived”.
            <br><br>
            More about Vigan: <a href="https://whc.unesco.org/en/list/502/" target="_blank">https://whc.unesco.org/en/list/502/</a>
          </p>
          <button class="seetours"><a href="#journey">See Tours</a></button>
        </div>
      </div>
    </section>

    <section class="display__container">
      <div class="section__container">
        <h2 class="section__title">Why Choose Us</h2>
        <p class="section__subtitle">
          The gladdest moment in human life, is a departure into unknown lands.
        </p>
        <div class="display__grid">
          <div class="display__card grid-1">
            <img src="assets/grid-1.jpg"  />
          </div>
          <div class="display__card">
            <i class="ri-earth-line"></i>
            <h4>Passionate Travel</h4>
            <p>Fuel your passion for adventure and discover new horizons</p>
          </div>
          <div class="display__card">
            <img src="assets/grid-2.jpg"  />
          </div>
          <div class="display__card">
            <img src="assets/grid-3.jpg"  />
          </div>
          <div class="display__card">
            <i class="ri-road-map-line"></i>
            <h4>Beautiful Places</h4>
            <p>Uncover the world's most breathtakingly beautiful places</p>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="section__container">
        <h4>Vigan</h4>
        <div class="social__icons">
          <span><i class="ri-facebook-fill"></i></span>
          <span><i class="ri-twitter-fill"></i></span>
          <span><i class="ri-instagram-line"></i></span>
          <span><i class="ri-linkedin-fill"></i></span>
        </div>
        <p>
          Travel makes one modest. You see what a tiny place you occupy in the
          world.
        </p>
      </div>
    </footer>

    <script src="homepagescript.js"></script>
  </body>
</html>
