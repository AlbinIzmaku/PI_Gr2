<!DOCTYPE html>
<html>

<head>
  <title>Destination</title>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="https://kit.fontawesome.com/0a786c01b2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/destination.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,500&family=Indie+Flower&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php
  require_once 'header.php';
  ?>

  <div class="foto8">
    <canvas id="canvas"></canvas>
    <script src="js/canvas.js"></script>
    <div class="text1">
      <h1>Destination</h1>
      <p>You don't need magic to disappear, all you need is a Destination!</p>
    </div>
  </div>

  <!--Places-->
  <section id="place">
    <div class="contenth2">
      <p>Some of the most beautiful places in the world we recommend you to visit:</p>
    </div>
    <div class="canada">
      <p>Canada</p>
    </div>
    <div class="contenth3">
      <div class="places">
        <h1>Banff National Park, Canada</h1>
        <div class="contenth-desc">
          <div class="contenth-text">
            <p>The glacial lakes in Canada's first national park have some of the
              bluest water you've ever seen. Even if you're not particularly
              outdoorsy, you can still admire the views from one of the cozy and
              luxurious lakeside lodges throughout the park.</p>
          </div>
        </div>
        <table class="Njetabel">
          <tr>
            <th>ENTRY - Daily</th>
            <th> </th>
          </tr>
          <tr>
            <td>Adults - 18 to 64 years of age</td>
            <td>$10.00</td>
          </tr>
          <tr>
            <td>Seniors - 65 years of age or over</td>
            <td>$8.40</td>
          </tr>
          <tr>
            <td>A Youth - 6 to 17 years of age</td>
            <td>FREE</td>
          </tr>
          <tr>
            <td>Family/Group - up to seven people arriving in a single vehicle in
              a national park</td>
            <td>$20.00</td>
          </tr>
          <tr>
            <td>Commercial Group, per person</td>
            <td>$8.40</td>
          </tr>
        </table>
        <button id="btnHide">hide</button>
        <button id="btnShow">show</button>
      </div>
      <div class="contenth-img">
        <img src="images/canada.jpg">
      </div>
      <script type="text/javascript">
      $(document).ready(function() {
        $("#btnHide").click(function() {

          $(".contenth-text").hide(); //fsheh elementin h2\ 
          $(".Njetabel").hide();
        });
        $("#btnShow").click(function() {
          $(".contenth-text").show(); //shfaqe heading h2
          $(".Njetabel").show();
        });

      });
      </script>
    </div>
  </section>

  <!--Places2-->

  <section id="place2">
    <div class="contenth4">
      <p>French Polynesia</p>
    </div>
    <div class="contenth5">
      <div class="places2">
        <h1>Bora Bora, French Polynesia</h1>
        <div class="contenth2-desc">
          <div class="contenth2-text">
            <p>With turquoise lagoons, coral reefs and overwater bungalows, this
              small island in the South Pacific is basically heaven on Earth. As
              there are no crowds of tourists, or sky rise hotels, Bora Bora
              remains an unspoiled paradise with clean water and pristine
              beaches. In fact, French Polynesia is one of the purest places
              on the planet.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>The cheapest trip to Bora Bora, French Polynesia is about $245 per
              person per day for travelers willing to take standby flights, deal with
              inconvenience, and otherwise limit travel expenses. About 0% of
              rentals are available in the $0 to $100 range for an entire place, and
              vacation rentals can be booked for as low as $120 per night.</td>
          </tr>
        </table>
      </div>
      <div class="contenth2-img">
        <img src="images/borabora.jpg">
      </div>
    </div>
  </section>

  <!--Places3-->

  <section id="place3">
    <div class="contenth6">
      <p>Norway</p>
    </div>
    <div class="contenth7">
      <div class="places3">
        <h1>Bergen, Norway</h1>
        <div class="contenth3-desc">
          <div class="contenth3-text">
            <p>From stunning fjords to massive glaciers and mountains, Norway
              is packed to the brim with gorgeous, untouched nature waiting to
              be explored. Thanks to its extreme northern location, it is one of
              the last remaining wildernesses in Europe. For many, this rugged
              country remains a mystery – where the midnight sun shines
              endlessly in summer and the stunning Aurora Borealis dances in
              the sky during the long, polar winter nights. Besides being one of
              the coolest country to visit in Europe, it also has some of the
              best winter adventure activities on offer.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>There are several budget carriers flying to Norway, including
              Norwegian that sometimes offers transatlantic tickets for 200-300
              EUR each way. Flights from European destinations to Norway usually
              cost around 100-250 EUR round-trip.</td>
          </tr>
        </table>
      </div>
      <div class="contenth3-img">
        <img src="images/norway.jpg">
      </div>
    </div>
  </section>

  <!--Places4-->

  <section id="place4">
    <div class="contenth8">
      <p>France</p>
    </div>
    <div class="contenth9">
      <div class="places4">
        <h1>Paris, France</h1>
        <div class="contenth4-desc">
          <div class="contenth4-text">
            <p>The French capital is one of the most romantic cities in Europe
              and one of the world's most visited cities. There are endless
              reasons to visit Paris repeatedly: it is a beautiful and cultural
              city, very walkable, with great sights, and it has been a source of
              inspiration for many writers, artists, and filmmakers.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>You should plan to spend around €162 ($197) per day on your
              vacation in Paris, which is the average daily price based on the
              expenses of other visitors. Past travelers have spent, on average, €29
              ($36) on meals for one day and €16 ($20) on local transportation.
              Also, the average hotel price in Paris for a couple is €207 ($251). A
              vacation to Paris for one week usually costs around €1,136 for one
              person. So, a trip to Paris for two people costs around €2,273 for
              one week.</td>
          </tr>
        </table>
      </div>
      <div class="contenth4-img">
        <img src="images/paris.jpg">
      </div>
    </div>
  </section>

  <!--Places5-->

  <section id="place5">
    <div class="contenth10">
      <p>Iceland</p>
    </div>
    <div class="contenth11">
      <div class="places5">
        <h1>Blue Lagoon, Iceland</h1>
        <div class="contenth5-desc">
          <div class="contenth5-text">
            <p>The Blue Lagoon is one of the most popular tourist attractions
              in Iceland. The steamy milky blue water against the black lava
              rock landscape creates an otherworldly setting like no other.
              Sitting in the hot waters of the geothermal spa can be a truly
              intoxicating and relaxing experience.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>ENTRY - Daily</th>
            <th> </th>
          </tr>
          <tr>
            <td>Transport to the Blue Lagoon from airport</td>
            <td>$20</td>
          </tr>
          <tr>
            <td>Entrance and use of the cream</td>
            <td>€45 or $51</td>
          </tr>
          <tr>
            <td>Entrance, use of cream, towel, a drink, and special face
              mask</td>
            <td>€60 or $67,5</td>
          </tr>
          <tr>
            <td>All of the above, plus bathrobe, slippers and more</td>
            <td>€75 or $84</td>
          </tr>
          <tr>
            <td>All of the above, plus set of skin products, lounge access
              and more</td>
            <td>€400 or $450</td>
          </tr>
          <tr>
            <td>Determine what is being massaged in the water</td>
            <td>€75 or $84</td>
          </tr>
          <tr>
            <td>Massage with scrub and wrap</td>
            <td>€230 or $260</td>
          </tr>
          <tr>
            <td>Learn about history, free cocktail and chemistry test</td>
            <td>€15 or $17</td>
          </tr>
        </table>
      </div>
      <div class="contenth5-img">
        <img src="images/iceland.jpg">
      </div>
    </div>
  </section>

  <!--Places6-->

  <section id="place6">
    <div class="contenth12">
      <p>United Arab Emirates</p>
    </div>
    <div class="contenth13">
      <div class="places6">
        <h1>Dubai, United Arab Emirates</h1>
        <div class="contenth6-desc">
          <div class="contenth6-text">
            <p>Dubai is a city full of ambition from mega malls to some of the
              tallest buildings and the largest artificial islands in the world.
              Visitors will feel safe and secure while exploring the area at any
              given the time of day. Ultimately, although Dubai is considered
              as a safe travel destination, it is still imperative to be cautious
              of yourself, your belongings and the surroundings.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>You should plan to spend around $198 per day on your vacation in
              Dubai, which is the average daily price based on the expenses of
              other visitors. Past travelers have spent, on average, $45 on meals
              for one day and $10 on local transportation. Also, the average hotel
              price in Dubai for a couple is $272. So, a trip to Dubai for two
              people for one week costs on average $2,778.</td>
          </tr>
        </table>
      </div>
      <div class="contenth6-img">
        <img src="images/dubai.jpg">
      </div>
    </div>
  </section>

  <!--Places7-->

  <section id="place7">
    <div class="contenth14">
      <p>China</p>
    </div>
    <div class="contenth15">
      <div class="places7">
        <h1>Shanghai, China</h1>
        <div class="contenth7-desc">
          <div class="contenth7-text">
            <p>Shanghai is China's biggest and most prosperous city. It is one
              of China's greatest economic and cultural centers, therefore it is
              popularly seen as the birthplace of everything considered
              modern in China. Shanghai is a tourist destination famous for
              historical landmarks as well as modern, ever-expanding skylines.
              You will never get bored in this dynamic metropolis.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>You should plan to spend around $102 per day on your vacation in
              Shanghai, which is the average daily price based on the expenses of
              other visitors. Past travelers have spent, on average, $19 on meals for
              one day and $3.43 on local transportation. Also, the average hotel price
              in Shanghai for a couple is $143. So, a trip to Shanghai for two people
              for one week costs on average $1,425.</td>
          </tr>
        </table>
      </div>
      <div class="contenth7-img">
        <img src="images/shanghai.jpg">
      </div>
    </div>
  </section>

  <!--Places8-->

  <section id="place8">
    <div class="contenth16">
      <p>United States of America</p>
    </div>
    <div class="contenth17">
      <div class="places8">
        <h1>New York, USA</h1>
        <div class="contenth8-desc">
          <div class="contenth8-text">
            <p>As one of the world’s leading metropolises for art, fashion, food
              and theater, New York is a city every traveler should visit. The
              culture, traditions, and natural beauty of New York make it a
              great state.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>You should plan to spend around $239 per day on your vacation in
              New York City, which is the average daily price based on the expenses
              of other visitors. Past travelers have spent, on average, $38 on meals
              for one day and $40 on local transportation. Also, the average hotel
              price in New York City for a couple is $275. So, a trip to New York
              City for two people for one week costs on average $3,351.</td>
          </tr>
        </table>
      </div>
      <div class="contenth8-img">
        <img src="images/newyork.jpg">
      </div>
    </div>
  </section>

  <!--Places9-->

  <section id="place9">
    <div class="contenth18">
      <p>Turkey</p>
    </div>
    <div class="contenth19">
      <div class="places9">
        <h1>Pamukkale, Turkey</h1>
        <div class="contenth9-desc">
          <div class="contenth9-text">
            <p>Pamukkale is famous for its white terraces made of travertine,
              a sedimentary rock deposited by water from the seventeen
              naturally occurring hot springs in the area. The water that
              emerges from these springs is supersaturated with calcium
              carbonate. When it reaches the surface, carbon dioxide de-
              gasses from the water, depositing the calcium carbonate as a
              soft gel which eventually crystallizes into travertine.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>You should plan to spend around $11 per day on your vacation in
              Pamukkale, which is the average daily price based on the expenses of
              other visitors. Past travelers have spent, on average, $3.16 on meals
              for one day and $0.77 on local transportation. Also, the average hotel
              price in Pamukkale for a couple is $10. So, a trip to Pamukkale for
              two people for one week costs on average $149.</td>
          </tr>
        </table>
      </div>
      <div class="contenth9-img">
        <img src="images/pamukkale.jpg">
      </div>
    </div>
  </section>

  <!--Places10-->

  <section id="place10">
    <div class="contenth20">
      <p>Greece</p>
    </div>
    <div class="contenth21">
      <div class="places10">
        <h1>Santorini, Greece</h1>
        <div class="contenth10-desc">
          <div class="contenth10-text">
            <p>Surrounded by turquoise water, the Island is cluttered with
              multi-colored cliffs, hot-headed volcanoes, and acres of sun-
              toasted sand. Adding to the marvels of nature are the ancient
              relics, delectable cuisine, and adrenaline-pumping activities―all of
              which make your trip unforgettable.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>You should plan to spend around €109 ($132) per day on your
              vacation in Santorini, which is the average daily price based on the
              expenses of other visitors. Past travelers have spent, on average,
              €33 ($41) on meals for one day and €14 ($17) on local transportation.
              Also, the average hotel price in Santorini for a couple is €109 ($133).
              So, a trip to Santorini for two people for one week costs on average
              €1,524 ($1,849).</td>
          </tr>
        </table>
      </div>
      <div class="contenth10-img">
        <img src="images/santorini.jpg">
      </div>
    </div>
  </section>

  <!--Places11-->

  <section id="place11">
    <div class="contenth22">
      <p>Maldives</p>
    </div>
    <div class="contenth23">
      <div class="places11">
        <h1>Islands of the Maldives</h1>
        <div class="contenth11-desc">
          <div class="contenth11-text">
            <p>Maldives is well known for its crystalline waters with beautiful
              shades of blue, swaying palm trees, and sparkling white sand
              under the limitless blue skies. With good weather throughout
              most of the year, Maldives makes a great choice for an idyllic
              beach getaway. It is the ultimate dream of luxury and tranquility.</p>
          </div>
        </div>
        <table>
          <tr>
            <th>PRICE</th>
          </tr>
          <tr>
            <td>You should plan to spend around $60 per day on your vacation in the
              Maldives, which is the average daily price based on the expenses of
              other visitors. Past travelers have spent, on average, $13 on meals for
              one day and $7.10 on local transportation. Also, the average hotel price
              in the Maldives for a couple is $84. So, a trip to the Maldives for two
              people for one week costs on average $838.</td>
          </tr>
        </table>
      </div>
      <div class="contenth11-img">
        <img src="images/maldives.jpg">
      </div>
    </div>
  </section>

  <!--Contact Section-->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">CONTACT FOR MORE RECOMMENDATIONS:</h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="images/phone.png" /> </div>
          <div class="contact-info">
            <h1>Phone:</h1>
            <h2>+383 44 111 222</h2>
            <h2>+383 44 111 222</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="images/email.png" /> </div>
          <div class="contact-info">
            <h1>Email:</h1>
            <h2>albinizmaku2@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="images/address.png" /> </div>
          <div class="contact-info">
            <h1>Address:</h1>
            <h2>Prishtinë, Kosovë</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Contact Section-->

  <?php 
  require_once 'footer.php';
  ?>

  <script src="js/index.js"></script>

</body>

</html>
