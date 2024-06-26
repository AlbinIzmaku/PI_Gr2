<!DOCTYPE html>
<html>

<head>
  <title>Tours</title>
  <link rel="stylesheet" href="css/tour.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

  <style>
  .pie {
    width: 300px;
    /* background: #282e34; */
    border-radius: 50%;
    margin-left: -10%;
    background-image: url(deti2.jpg);
  }

  .pie circle {
    fill: none;
    stroke-width: 32;
    animation: rotate 1.5s ease-in;
    /* margin-left: 90%; */
  }
  </style>
</head>

<body>
  <?php 
  require_once 'header.php';
  ?>


  <div class="main">

    <div class="contenth1">

      <h4>Take memories, leave footprints</h4>
    </div>
  </div>

  <div class="stylelist">

    <div class="stylediv1">
      <b>Still dreaming of Korea </b>
      <ol id="gradient1">
        <li>Seoul</li>
        <li>Busan</li>
        <li>Incheon</li>
        <li>Seoraksan National Park</li>
        <li>Daegu</li>
        <li>Yeouido</li>
        <li>Jeju Island</li>
        <li>Bukchon Hanok Village</li>
      </ol>
    </div>

    <div class="stylediv2">
      <b>Let's take a tour to Turkey</b>
      <ol id="gradient2">
        <li>Cappadocia</li>
        <li>Pamukkale</li>
        <li>Oludeniz</li>
        <li>Antalya</li>
        <li>Istanbul</li>
        <li>Alacati</li>
        <li>Alanya</li>
        <li>Trabzon</li>
      </ol>
    </div>

    <div class="stylediv3">
      <b>New Zealand is calling you</b>
      <ol id="gradient3">
        <li>Aoraki Mount</li>
        <li>Waitomo Glowworm Caves</li>
        <li>Queenstown</li>
        <li>Lake Tekapo</li>
        <li>Coromandel</li>
        <li>Rakiura</li>
        <li>Lake Pukaki</li>
        <li>Piha </li>
      </ol>
    </div>
  </div><br />
  <br>

  <section class="travel">
    <h1>Let's travel together</h1>

    <div class="travel1-img">
      <img src="images/korea1.jpg">
      <img src="images/korea2.jpg">
      <img src="images/korea3.jpg">
    </div>
    <div class="travel1-details">
      <h4>Korea </h4>
      <p>
        South Korea is an extraordinary country filled with beautiful beaches, thriving cities, ancient temples,
        remarkable natural scenery and most importantly, friendly people with ancient history.Seoul is an incredible
        city, brimming with mouth-watering food,
        exciting attractions and unforgettable shopping spots. The number of things to do, see and eat in Seoul are
        endless, and unique experiences await you on every corner. If you’re heading to Seoul for the first time, you
        are in for a one-of-a-kind
        adventure. Over the centuries, Koreans have created a fascinating and rich food culture made up of meat dishes,
        stews, soups, noodle dishes, seafood and many vegetable side dishes. Visit South Korea and you should spend an
        entire day roaming
        street markets sampling your way through this concert of flavors. Korea also has a lot of beautiful islands, the
        most popular and largest one being Jeju Island. Jeju Island is one of Korea’s most visited destinations thanks
        to its exceptional
        natural wonders and breathtaking beaches. </p>
    </div>

    <div class="travel1-img">
      <img src="images/turkey-alacati.jpg">
      <img src="images/turkey-food.jpg">
      <img src="images/turkey-istanbul.jpg">
    </div>
    <div class="travel1-details">
      <h4>Turkey </h4>
      <p>
        Turkey It’s a fascinating country with a rich history and culture.Crystal clear waters, tall mountains, the
        ruins of ancient empires, small idyllic villages, huge cosmopolitan cities—Turkey’s many facets are what make it
        so unique and why it has continued
        to attract visitors. Every region in Turkey has its own kitchen culture, including distinct ingredients and
        their resulting recipes. As such, Turkish cuisine is much more than tasty kebab and baklava, including fresh
        seafood and meze,
        a whole world of desserts, huge breakfast spreads,and much more.The hamam experience has become synonymous with
        Turkey and is a favorite among many visitors.Bodrum, Antalya, Izmir, and Fethiye have some of the most beautiful
        beaches in
        Turkey, with a spectrum that includes everything from secluded coves to exciting beach parties. With so much
        history to its name, Turkey also has a lot of fantastic museums that actively preserve findings from the many
        archaeological sites
        all around the country.
      </p>
    </div>

    <div class="travel1-img">
      <img src="images/nzsummer.jpg">
      <img src="images/nzfood.jpg">
      <img src="images/nzwinter.jpg">
      <div class="travel1-details">
        <h4>New Zealand </h4>
        <p>
          New Zealand is the most naturally beautiful and safest country in the world.New Zealand is famous for its
          beautiful scenery — from scenic surf beaches, attractive native forests and snow covered volcanoes in the
          North Island to the great Southern Alps,
          braided rivers and deep fjords in the South IslandSnow often arrives in the South Island between June and
          September, as well as in some of the North Island’s more mountainous areas, attracting skiers from far and
          wide. The spring and
          fall months herald milder weather and fewer visitors, but this is still a very pleasant time to visit.
          Temperatures normally sit in the fifties and sixties.With more than 14,000 kilometres of coastline, New
          Zealand is home to some
          amazing seafood. One of the most famous seafood spots is Kaikoura. In Maori, the word ‘Kai’ means food and
          ‘Koura’ means crayfish – so it’s not hard to guess what Kaikoura is famous for!Best enjoyed while sitting on a
          New Zealand beach
          on a balmy summer evening, fish and chips is a Kiwi favourite.
        </p>
      </div>
  </section>

  <div class="SVG"><br>
    <div style="height:200px;margin-left:20%;margin-bottom:10%;">
      <div style="float:left;">
        <svg viewBox="0 0 64 64" class="pie">
          <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 48.3 100; stroke: rgb(105, 155, 156);"></circle>
          <circle r="25%" cx="50%" cy="50%"
            style="stroke-dasharray: 20.32 100; stroke:rgb(189, 186, 186); stroke-dashoffset: -48.3; animation-delay: 0.29s;">
          </circle>
          <circle r="25%" cx="50%" cy="50%"
            style="stroke-dasharray: 33.38 100; stroke: rgb(167, 132, 132); stroke-dashoffset: -67.5; animation-delay: 0.29s;">
          </circle>
        </svg>
      </div>

      <div style="float:left;margin-top:8%;margin-left:5%;">
        <span style="color:black;font-weight:bold;margin-left:-5%;font-size:19px;">Foreign visitors mostly come
          to:</span><br>
        <br>
        <svg width="10" height="10">
          <circle cx="5" cy="5" r="5" fill=" rgb(105, 155, 156)" /><span
            style="color:black;font-weight:bold;margin-left:3spx; margin-top: 5%;">Turkey</span>
        </svg><br>

        <svg width="10" height="10">
          <circle cx="5" cy="5" r="5" fill=" rgb(167, 132, 132)" /><span
            style="color:black;font-weight:bold;margin-left:3px;">New Zealand</span>
        </svg><br>
        <svg width="10" height="10">
          <circle cx="5" cy="5" r="5" fill="rgb(189, 186, 186)" /><span
            style="color:black;font-weight:bold;margin-left:3px;">Korea</span>
        </svg>

      </div>
    </div>
  </div>

  <div class="divi33">
    <table border="1" cellpadding="2">
      <tr id="thead">
        <th>Place name</th>
        <th>Description</th>
        <th>Info</th>
        <th>Watch</th>
      </tr>
      <tr>
        <th>Seoul</th>
        <td>
          <pre>
 A vibrant culture and society that will keep you busy in every season,
 a delicious culinary tradition and beautiful natural landscapes
 are only some of the reasons that will make you want to travel 
 to Seoul, one of the best places to visit in Korea.
 Seoul is for the serious foodies and is far from just kimchi and 
 bibimbap,although there are several different kinds of each.
 If you’re a party-goer, or a night owl, Seoul is your kind of city.
                </pre>
        </td>
        <td>
          <pre><i>
Accommodation: From 133&euro;
Price of beer: 2&euro;
Average cost of dinner : 5&euro;
Cost of activities: 
A boat trip starts from 8.50&euro;
N Seoul Tower Ticket Combos from 5.76 &euro;
      </i></pre>
        </td>
        <td>
          <video id="video1" controls>
            <source src="images/Seoul.mp4" type="video/mp4" />
          </video>
        </td>
      </tr>
      <tr>
        <th>Busan</th>
        <td>
          <pre>
 Busan is known for its beaches, hot springs,nature reserves and events 
 such as the city's renowned international film festival held each fall.
 The best time to visit Busan is during May,June,July and also in September. 
 Busan’s food scene is well worth exploring-local specialities 
 abound and lively markets offer a glimpse into daily life and 
 a chance to try some magnificent street food. 
       </pre>
        </td>
        <td>
          <pre><i>
Accommodation: From 70&euro;
Price of soju: 2.30&euro;-3&euro;
Average cost of dinner for two: 16&euro;
Cost of activities: 
Busan Air Cruise Cable Car:10.62&euro;
Busan SEA LIFE 13.20&euro;
           </i></pre>
        </td>
        <td>
          <video id="video1" controls>
            <source src="images/Busan.mp4" type="video/mp4" />
          </video>
        </td>
      </tr>
      <tr>
        <th>Istanbul</th>
        <td>
          <pre>
 Istanbul is a wonderful city for snacking, and instead of wasting 
 precious sightseeing time on long sit-down lunches, visitors are 
 advised to hand over a couple of coins for a grilled fish sandwich
 from the boats bobbing near the bridge. 
 Despite the city’s age,thankfully many remains still exist in Istanbul.
 In Istanbul,you can find the best Turkish foods that have delicious tastes.
  </pre>
        </td>
        <td>
          <pre><i>
Accommodation: From 70&euro;
Price of turkish tea:0.14&euro;
Average cost of dinner:6&euro;
Cost of activities:
Hagia Sophia Tour:7.20&euro;
Aquarium Istanbul:20.54&euro;
</i></pre>
        </td>
        <td>
          <video id="video1" controls>
            <source src="images/Istanbul.mp4" type="video/mp4" />
          </video>
        </td>
      </tr>
      <tr>
        <th>Cappadocia</th>
        <td>
          <pre>
 Cappadocia is a surrealistic landscape that you will have 
 never witnessed before in your lifetime.There are so many 
 fascinating things to see in Cappadocia.The main 'must-see' 
 attractions are the two large open-air museums and the best
 of the underground cities.During this one-of-a-kind hot air 
 balloon ride and day tour combo trip, you'll enjoy stunning panoramas.
           </pre>
        </td>
        <td>
          <pre><i>
Accommodation: From 60&euro;
Price of turkish coffee: 1&euro;
Average cost of dinner for two: 11&euro;
Cost of activities: 
Cappadocia Hot Air Balloon:143.89&euro;
Red North Tour:38.91&euro;
</i></pre>
        </td>
        <td>
          <video id="video1" controls>
            <source src="images/Cappadocia.mp4" type="video/mp4" />
          </video>
        </td>
      </tr>
      <tr>
        <th>Queenstown</th>
        <td>
          <pre>
 Queenstown is known for its commerce-oriented tourism, especially
 adventure and ski tourism.The drive from Queenstown to Glenorchy
 is a wonderful experience with some awesome sights.
 Queenstown is filled with amazing restaurants, bars and cafes 
 serving delicious food.The town and surrounding area is Nirvana 
 for anyone interested in getting the adrenalin racing.You can
 indulge in sky diving,zipline riding, and even the famous luge.
           </pre>
        </td>

        <td rowspan="2">
          <pre><i>
Accommodation: From 150&euro;
Price of flat white: 3.70&euro;
Average cost of dinner: 13.97&euro;
Cost of activities:
Nevis Catapult:41.08&euro;
Big Sky Stargazing:78&euro;
             </i></pre>
        </td>
        <td>
          <video id="video1" width="328" controls>
            <source src="images/Queenstown.mp4" type="video/mp4" />
          </video>
        </td>
      </tr>
      <tr>
        <th>Aoraki Mount</th>
        <td>
          <pre>
 Mount Cook is home of the highest mountains and the longest glaciers.
 It is alpine in the purest sense-with skyscraping peaks,glaciers and 
 permanent snow fields, all set under a star-studded sky.Best way to
 see the lake and the surrounding area is by hiking up to Mt John,which 
 is the little mountain on the leftern shoreside. Famous for its dramatic 
 natural beauty and holding deep spiritual significance for the Ngāi Tahu iwi, 
 the park is home to New Zealand's tallest mountain and longest glacier.
           </pre>
        </td>
        <td>
          <video id="video1" width="328" controls>
            <source src="images/AorakiMount.mp4" type="video/mp4" />
          </video>
        </td>
      </tr>
    </table>
  </div>



  <div class="slide">

  </div>


  <?php
  require_once 'footer.php'; 
  ?>

  <script src="js/index.js"></script>
</body>

</html>
