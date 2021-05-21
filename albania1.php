   <html>

   <head>
     <title> Albania</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/albanian1.css">
     <script src="https://kit.fontawesome.com/0a786c01b2.js" crossorigin="anonymous"></script>
     <script type="text/javascript" src="js/home.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">

     <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">

   </head>

   <body>

     <?php
     require_once 'header.php';
     ?>
     <div class="main">
       <div class="content1">
         <h1>Let's discover Albania</h1>
       </div>

     </div>

     <article>
       <section>
         <h2 style="background-color:lightgray;text-align: center;">
           Top 4 reasons to visit <b>Albania</b>
         </h2>

         <ol class="lista">
           <li>Very cheap</li>
           <li>Beautiful beaches</li>
           <li>Amazing bars and restaurants</li>
           <li>Great weather in Summer</li>

         </ol>


       </section>

       <section>
         <h2 style="text-align: center; background-color:lightgray;">
           Why to visit Albania
           <div class="textcolumn">
         </h2>

         <p id="albania"> Albania is bounded by Montenegro to the northwest,
           Kosovo to the northeast, North Macedonia to the east, Greece to the southeast and south,
           and the Adriatic and Ionian seas to the west and southwest, respectively. Albania’s immediate western
           neighbour, Italy, lies some 50 miles (80 km) across the Adriatic Sea. Albania has a length of about 210 miles
           (340 km) and a width of about 95 miles (150 km).
           If there is a destination that everyone should visit at least once in his or her lifetime,
           it is Albania.
           This small country is one of the last hidden gems of Europe and totally worth a look.
           From the cliffside views of the sea to the charming coastal hamlets, from the vibrant
           capital city Tirana to the stunning mountainous landscapes, visiting Albania will be an experience you'll
           never regret.
         </p>
         </div>

       </section>



       <div class="slider">
         <div class="slides">
           <!--radio button start-->
           <input type="radio" name="radio-btn" id="radio1">
           <input type="radio" name="radio-btn" id="radio2">
           <input type="radio" name="radio-btn" id="radio3">
           <input type="radio" name="radio-btn" id="radio4">
           <!--radio button end-->
           <!--slide images start-->
           <div class="slide first">
             <img src="images/firstpic.jpg" alt="first picture">

           </div>
           <div class="slide">
             <img src="images/secondpic.jpg" alt="second picture">

           </div>
           <div class="slide">
             <img src="images/thirdpic.jpg" alt="third picture">

           </div>
           <div class="slide">
             <img src="images/4thpic.jpg" alt="fourth picture">

           </div>
           <!--automatic navigation start-->
           <div class="navigation-auto">
             <div class="auto-btn1"></div>
             <div class="auto-btn2"></div>
             <div class="auto-btn3"></div>
             <div class="auto-btn4"></div>

           </div>
           <!--automatic navigation end-->
         </div>
         <!--manual navigation start-->
         <div class="navigation-manual">
           <label for="radio1" class="manual-btn"></label>
           <label for="radio2" class="manual-btn"></label>
           <label for="radio3" class="manual-btn"></label>
           <label for="radio4" class="manual-btn"></label>


         </div>
         <!--manual navigation end-->

       </div>
       <!--image slider end-->
       <script type="text/javascript">
       var counter = 1;
       setInterval(function() {
         document.getElementById('radio' + counter).checked = true;
         counter++;
         if (counter > 4) {
           counter = 1;

         }
       }, 5000);
       </script>
       <h2 style="text-align: center; background-color: lightgray;">Best places to visit in Albania</h2>
       <br>
       <section>
         <div class="list">

           <ul>
             <li>
               <b>Best places for Summer holidays: </b>
             </li>

             <li>
               <div id="gradient1">

                 <ul>

                   <li>Dhërmi </li>
                   <li>Himara</li>
                   <li>Saranda</li>
                   <li>Ksamil</li>
                   <li>Vlora</li>
                   <li> Shengjin</li>
                   <li> Durres </li>

                 </ul>
               </div>
               <br>
             </li>
             <li>
               <b> Best historical places to visit in Albania</b>
               <div id="gradient2">
                 <ul>
                   <li> "Rozafa Castle"- Shkoder</li>
                   <li> "Kruja Castle" - Kruje</li>
                   <li>"Lekuresi Castle"- Saranda</li>
                   <li>"Durres Amphitheatre"-Durres</li>
                   <li>"Apollonia Archaeological Park" Pojan</li>

                 </ul>
               </div>
               <br>
             </li>
             <li>
               <b>Best places to visit in Winter in Albania</b>
               <div id="gradient3">
                 <ul>
                   <li>Voskopoje</li>
                   <li>Razma</li>
                   <li>Vermosh</li>
                   <li>Dajti</li>
                 </ul>

               </div>

             </li>
           </ul>
         </div>
         <br>
         <h2
           style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align: center;background-color:lightgray">
           Places for Summer holidays in Albania</h2>
         <div class="cities">
           <div class="upper">
             <div>
               <img src="images/SARANDA.jpg">
               <h2>Saranda</h2>
               <p>The city is known for its blue deep waters of the Mediterranean.</p>
               <h4>$250.00 </h4>
             </div>
             <div>
               <img src="images/DURRES.jpg">
               <h2>Durres</h2>
               <p> Durresi is the second most populous city of the Republic of Albania and the capital of the eponymous
                 county and municipality.</p>
               <h4>$150.00 </h4>
             </div>
             <div>
               <img src="images/KSAMILI.jpg">
               <h2>Ksamil</h2>
               <p>Ksamil is a village and a former municipality in the riviera of Southern Albania, and part of Butrint
                 National Park</p>
               <h4>$300.00 </h4>
             </div>
           </div>
           <div class="upper">
             <div>
               <img src="images/VLORE.jpg">
               <h2 id="Vlore">Vlore</h2>
               <p>Vlore lies in the southwestern coastal region of Albania, and the northern part the Ionian Sea.</p>
               <h4>$345.00 </h4>
             </div>
             <div>
               <img src="images/pogradec.jpg">
               <h2>Pogradec</h2>
               <p>The city of Pogradec was built on the southwestern shores of Lake Ohrid and is one of the most notable
                 cities of Albania</p>
               <h4>$100.00 </h4>
             </div>
             <div>
               <img src="images/SHENGJIN.jpg">
               <h2>Shengjin</h2>
               <p>Shëngjin is a coastal town and a former municipality in Lezhë County, northwestern Albania. </p>
               <h4>$150.00 </h4>
             </div>
           </div>
         </div>

       </section>


     </article>
     <br>

     <h2 style="text-align: center;background-color: lightgray;">Historical places to visit in Albania</h2>

     <div class="last">

       <div class="left">
         <div class="last3">
           <img src="images/Kruje-Castle.jpg">
           <div>
             <h3> Kruje Castle</h3>
             <p>Kruje played important parts in history of Albania in different times.
               Kruje castle is the most interesting and main attraction of this town.
               This castle played an important role when a series of sieges took place from middle
               of to late 15th century by Skanderbeg, a rebellious Ottoman against Ottoman
               empire in Albania.<br>
               <a href="pdf/Kruja.pdf" target="_blank">Tap to see more </a>
             </p>
           </div>
         </div>
         <div class="last3">
           <img src="images/Berat-Castle.jpg">
           <div>
             <h3>Berat Castle</h3>
             <p>Berat castle overlooking the city is the most impressive attraction.
               This is an ancient castle that can be dated back to Roman time.
               But the present structure belongs to 13th century AD.
               You can see ruins of mosques, churches inside the castle.
               there is museum inside that can be visited also. Berat town is a UNESCO site of the country.
               <br>
               <a href="pdf/Berat.pdf" target="_blank">Tap to see more </a>

             </p>

           </div>
         </div>
         <div class="last3">
           <img src="images/The-Durres-Amphitheater.jpg">
           <div>
             <h3 id="Durres">The Durres Amphitheater</h3>
             <p>If you want to conclude your historic tour of Albania then you can do this visiting the world famous
               Durres amphitheater in the city of Durres.
               This amphitheater is said to be one of the largest amphitheaters built by the Romans in Europe.
               It is also said that this is the largest in Balkan region.
               Historians say that it was built during the rule of emperor Trajan in 2nd century AD.
               <br>
               <a href="pdf/Durres.pdf" target="_blank">Tap to see more </a>

             </p>
           </div>
         </div>
       </div>


     </div>

     </section>
     <div class="seasons">
       <p>Albania is a city you can visit in every time of the year.
         You can click below to see the views in every season and the temperatures
         that are there!
       </p>
       <a class="button" href="seasons.php" target="_blank">Click here</a>

     </div>

     <article>
       <div class="box">
         <span style="--i:1;"><img src="images/Skanderbeg-Square-Tirana.jpg"></span>
         <span style="--i:2;"><img src="images/pic2.jpg"></span>
         <span style="--i:3;"><img src="images/pic3.jpg"></span>
         <span style="--i:4;"><img src="images/pic4.jpg"></span>
         <span style="--i:5;"><img src="images/pic5.jpg"></span>
         <span style="--i:6;"><img src="images/pic6.jpg"></span>
         <span style="--i:7;"><img src="images/pic7.jpg"></span>
         <span style="--i:8;"><img src="images/pic8.jpg"></span>






       </div>
     </article>
     <?php 
     require_once 'footer.php';
     ?>
     <script src="js/index.js"></script>

   </body>

   </html>
