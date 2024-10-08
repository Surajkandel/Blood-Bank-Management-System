<?php include('config/constants.php'); ?>

<html>

<head>
  <title>
    Blood bank management system - Home page
  </title>
  <link rel="stylesheet" href="index.css">
</head>

<body>

  <!-- menu section starts -->
  <div class="menu">
    <div class="logo">
      <h1>BBMS</h1>
    </div>
    <div class="wrapper">
      <ul>
        <li> <a href="<?php echo SITEURL; ?>">Home</a></li>
        <li> <a href="<?php echo SITEURL; ?>signup.php">Sign up</a></li>
        <li> <a href="<?php echo SITEURL; ?>login.php">Log in</a></li>
        <li> <a href="<?php echo SITEURL; ?>notice.php">Notice</a></li>
        

      </ul>
    </div>
  </div>



  <!-- menu section ends -->

  <!-- main content section starts -->
  <div class="main-content">
    <div class="upper">

      <div class="image">
        <img src="photos/bbb.png" alt="">
      </div>
      <div class="heading">
        BLOOD BANK MANAGEMENT SYSTEM
      </div>
    </div>
    <div class="text">


      <div class="lower">
        <p> Blood is a life so, <br> <span id="element"></span></p>

      </div>
    </div>
  </div>
  <div class="user-count">
    <div class="total-user">
      <p>
        132 <br>
        Registered users
      </p>

    </div>
    <div class="blood-collected">
      <p>
        579 <br>
        Blood units collected
      </p>

    </div>
  </div>
  <div class="about">
    <h1>About</h1>
    <p>
      "Blood Bank Management System" is a Web App solution designed to efficiently
      manage the operations of a blood bank. It aims to organize the process of blood donation,
      storage, and distribution while ensuring optimal record management and improved
      accessibility for patients in need. The system incorporates features such as donor
      registration, blood typing, screening for blood requests, and expiration dates. With its
      user-friendly interface, the Blood Bank Management System provides an effective tool
      for enhancing the overall efficiency and effectiveness of blood bank operations.
      <br><br>
    </p>
  </div>
  <div class="blood-learn">
    <table class="table">
      <tbody>
        <tr>
          <th colspan="3">Compatible Blood Type Donors</th>
        </tr>
        <tr>
          <td><b>Blood Type</b></td>
          <td><b>Donate Blood To</b></td>
          <td><b>Receive Blood From</b></td>
        </tr>
        <tr>
          <td><b>A+</b></td>
          <td>A+, AB+</td>
          <td>A+, A-, O+, O-</td>
        </tr>
        <tr>
          <td><b>O+</b></td>
          <td>O+, A+, B+, AB+</td>
          <td>O+, O-</td>
        </tr>
        <tr>
          <td><b>B+</b></td>
          <td>B+, AB+</td>
          <td>B+, B-, O+, O-</td>
        </tr>
        <tr>
          <td><b>AB+</b></td>
          <td>AB+</td>
          <td>Everyone</td>
        </tr>
        <tr>
          <td><b>A-</b></td>
          <td>A+, A-, AB+, AB-</td>
          <td>A-, O-</td>
        </tr>
        <tr>
          <td><b>O-</b></td>
          <td>Everyone</td>
          <td>O-</td>
        </tr>
        <tr>
          <td><b>B-</b></td>
          <td>B+ B- AB+ AB-</td>
          <td>B- O-</td>
        </tr>
        <tr>
          <td><b>AB-</b></td>
          <td>AB+, AB-</td>
          <td>AB-, A-, B-, O-</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="social">
    <ul>
      <li><a href="https://www.facebook.com/suraj.kandel.1213"><img src="logo/facebook.png" alt=""></a></li>
      <li><a href="#"><img src="logo/instagram.png" alt=""></a></li>
      <li><a href="#"><img src="logo/twitter.png" alt=""></a></li>
    </ul>

  </div>


  <!-- main content section ends -->

  <!-- footer section starts -->
  <div class="footer">
    <div class="wrapper">
      <p class="text-center">2023 © ALL RIGHT RESERVED</p>
    </div>
  </div>




  <!-- footer section ends -->



  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <!-- Setup and start animation! -->
  <script>
    var typed = new Typed('#element', {
      strings: ['Donate Blood', ' Save Blood'],
      typeSpeed: 50,
    });
  </script>
</body>

</html>
