<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/Contact-us.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
    rel="stylesheet">
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/0a786c01b2.js" crossorigin="anonymous"></script>
  <title>Contact us</title>
</head>

<body>
  <?php 
  require 'header.php';
  ?>

  <section class="section-contactus">
    <div class="row">
      <h1>CONTACT US</h1>
    </div>
    <div class="row">
      <div class="column c-1-2">
        <div class="contact-box">
          <div>
            <ion-icon name="call-outline" class="icon"></ion-icon>
            <h2>By Phone</h2>
          </div>
          <div>
            <p class="contact-p">
              We offer our services from:<br>
              <span>(Monday to Saturday, 8 AM to 5PM)</span><br>
            </p>
          </div>
          <div>
            <p class="contact-p">Kosovo:</p>
            <ul>
              <li><em>+383 44 111 999</em></li>
              <li><em>+383 49 111 999</em></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="column c-1-2">
        <div class="contact-box">
          <div>
            <ion-icon name="mail-unread-outline" class="icon"></ion-icon>
            <h2>By Email</h2>
          </div>
          <div>
            <p class="contact-p">If you need help or you have questions<br>
              Just send us an E-mail<br>
              We will reply as soon as possible.
            </p>
          </div>
          <div class="arrow-btn">
            <a id="scroll-to-forum" class="btn-down" title="Click here to contact us"><i class="fa fa-angle-double-down"
                aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="pop-up-window">
      <div class="pop-up-content">
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
        <div class="column c-1-3 user-data">
          <div class="row profile-picture">
            <img src="images/iconfinder_user-alt_285645.png" class="user">
            <input type="file" id="file" required>
            <label for="file" id="Uploadbutton">Choose Photo</label>
          </div>
          <div class="line"></div>
        </div>
        <div class="user-input-form">
          <form method="post" id="join-form" action="#" autocomplete="off">
            <div class="join-form-btn1">
              <input type="text" name="name" id="join-name" required placeholder="Name">
            </div>
            <div class="join-form-btn">
              <input type="text" name="name" id="join-education" required placeholder="Education">
            </div>
            <div class="join-form-btn2 zero">
              <input type="text" name="birthday" id="join-birth" required placeholder="Birthday">
            </div>
            <div class="join-form-btn2">
              <input type="text" name="address" id="join-address" required placeholder="City, Street, Postal Code">
            </div>
            <div class="join-form-btn2 one">
              <input type="email" name="email" id="join-email" required placeholder="E-Mail">
            </div>
            <div class="join-form-btn2 two">
              <input type="text" name="number" id="join-phone" required placeholder="Phone Number">
            </div>
          </form>
        </div>
        <div class="column c-2-3 user-message">
          <div class="user-message-head">
            <h1>Motivation letter</h1>
          </div>
          <div class="user-message-body">
            <input type="date" name="date" id="date-picker" required>
            <h2 class="menager">Dear HIRING MENAGER:</h2>
            <textarea name="message" class="message" placeholder="Your message..." required></textarea>
          </div>
          <input type="submit" value="Submit!" id="submit-btn">
        </div>
      </div>
    </div>

  </section>

  <section class="section-forum section-forum-after">
    <?php 
    include 'Contactform.php';
    ?>
  </section>
  <section class="section-staff">
    <div class="row">
      <h1>We have the greatest staff</h1>
    </div>
    <div class="row">
      <div class="column c-1-3">
        <blockquote>
          Hello there, I'm an employe at HUG THE WORLD. I have joined this traveling agency last year and I love it
          here. I have been able to travel to so many places I have dreamed before.
          <cite><img src="images/s1.jpg" alt="Staff 1">Rinesa B.</cite>
        </blockquote>
      </div>
      <div class="column c-1-3">
        <blockquote>
          Hello there, I'm an employe at HUG THE WORLD. I have been employed in this agency for 2 years and I must say
          this is the best experience I've had working in an agency till now.
          <cite><img src="images/albini.jpg" alt="Staff 2">Albin I.</cite>
        </blockquote>
      </div>
    </div>
  </section>
  <?php 
  require_once 'footer.php';
  ?>
  <script>
  document.getElementById('join').addEventListener('click', function() {
    document.querySelector('.pop-up-window').style.display = 'flex';
    setInterval(function() {
      wait();
    }, 4000);
  })

  document.querySelector('.close-icon').addEventListener('click', function() {
    document.querySelector('.pop-up-window').style.display = 'none';

  })

  const imgDiv = document.querySelector('.profile-picture');
  const img = document.querySelector('.user');
  const file = document.querySelector('#file');
  const uploadButton = document.querySelector('#Uploadbutton');

  imgDiv.addEventListener('mouseenter', function() {
    uploadButton.style.display = 'block';
  });
  imgDiv.addEventListener('mouseleave', function() {
    uploadButton.style.display = 'none';
  });

  file.addEventListener('change', function() {
    const choosedImg = this.files[0];

    if (choosedImg) {
      const readImg = new FileReader();

      readImg.addEventListener('load', function() {
        img.setAttribute('src', readImg.result);
      });

      readImg.readAsDataURL(choosedImg);
    }
  });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/Contact-us.js"></script>
  <script src="js/index.js"></script>
  </script>
</body>

</html>
