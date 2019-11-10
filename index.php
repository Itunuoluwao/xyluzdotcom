<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <title>What I do</title>
</head>
<body>
  <header>
      <div class="wrapper">
    <div class="header">
      <h2>xyluz.com</h2>
    </div>
    <div class="menu-div">
      <a class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
    </div>
    </div>
  </header>

  <nav class="links">
    <ul >
      <li><a class="tablinks" href="javascript:void(0)" id="defaultOpen" onclick="switchPage(event, 'index')">What I do</a></li>
      <li><a class="tablinks" href="javascript:void(0)" onclick="switchPage(event, 'education')">Education</a></li>
      <li><a class="tablinks" href="javascript:void(0)" onclick="switchPage(event, 'work')">Work</a></li>
      <li><a class="tablinks" href="javascript:void(0)" onclick="switchPage(event, 'interest')">Interests</a></li>
      <li><a class="tablinks" href="javascript:void(0)" onclick="switchPage(event, 'contact')">Contact</a></li>
    </ul>
  </nav>

  <main class="pager">
    <div id="index" class="pageContent container">
      <div class="intro">
        <div class="intro-text">
          <div class="">
            <h2>Hi! I'm Seyi Onifade</h2>
          </div>
          <div class="">
            <p>I'm a developer from Lagos, Nigeria.</p>
            <p>I develop products using Javascript and PHP.</p>
          </div>
        </div>
        <div class="intro-icons">
          <div>
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
          <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>          </div>
        </div>
      </div>

      <div class="arrow-down">
        <div>
          <a href="#"><i class="fa fa-angle-up wow rotateInDownleft" aria-hidden="true"></i></a>
        </div>
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'education')" class=""><i class="fa fa-angle-down " aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div id="education" class="pageContent container">
      <div class="intro">
        <div class="intro-text wow fadeIn">
          <div>
            <h2>Education</h2>
          </div>
          <div>
            <strong><p class="big-txt">Lautech Ogbomoso - (SLT) Physics Electronics.</p></strong>
            <p class="small-txt">Second Class Upper - 2013</p>
          </div>
          <div>
            <strong><p>HNG Internship 1.0 - Track</p></strong>
            <p class="small-txt">Finalist - Year</p>
          </div>
        </div>
        <div class="intro-icons">
          <div>
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
          <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>          </div>
        </div>
      </div>

      <div class="arrow-down">
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'index')"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </div>
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'work')"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div id="work" class="pageContent container">
      <div class="intro">
        <div class="intro-text">
          <div>
            <h2>Work</h2>
          </div>
          <div>
            <strong><p class="big-txt">CEO - HNG Tech</p></strong>
            <p class="small-txt">2019</p>
          </div>
          <div>
            <strong><p>Creator - <span class="bent">Staybusy.ng</span></p></strong>
            <p class="small-txt">Finalist - Year</p>
          </div>
        </div>
        <div class="intro-icons">
          <div>
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
          <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>          </div>
        </div>
      </div>

      <div class="arrow-down">
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'education')"> <i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </div>
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'interest')"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div id="interest" class="pageContent container">
      <div class="intro">
        <div class="intro-text">
          <div>
            <h2>Interests</h2>
          </div>
          <div class="interest">
            <p>I’m currently fascinated by IoT (meaning the Internet of things) especially relating to Python and Hardware programming</p>
          </div>
        </div>
        <div class="intro-icons">
          <div>
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
          <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>          </div>
        </div>
      </div>

      <div class="arrow-down">
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'work')"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </div>
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'contact')"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div id="contact" class="container pageContent">
      <div class="intro">
        <div class="intro-text">
          <div>
            <h2>Contact</h2>
          </div>
          <div>
            <p>Feel free to reach me anywhere:</p>
          </div>
          <div class="social-media">
            <div>
              <p><span><i class="fa fa-twitter" aria-hidden="true"></i></span>  &nbsp;  @xyluz</p>
            </div>
            <div>
              <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span>  &nbsp;  seyi@hng.tech</p>
            </div>
            <div>
              <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span>  &nbsp;  seyi@staybusy.ng</p>
            </div>
          </div>
        </div>
        <!-- <div class="intro-icons">
          <div>
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
          <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
        </div> -->
      </div>

      <div class="arrow-down">
        <div>
          <a href="javascript:void(0)" onclick="switchPage(event, 'interest')"> <i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </div>
        <div>
          <a href="javascript:void(0)"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

  </main>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  <script>
      new WOW().init();

      function switchPage(evt, page) {
          // Declare all variables
          var i, pageContent, tablinks;

          // Get all elements with class="tabcontent" and hide them
          pageContent = document.getElementsByClassName("pageContent");
          for (i = 0; i < pageContent.length; i++) {
              pageContent[i].style.display = "none";
          }

          // Get all elements with class="tablinks" and remove the class "active"
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }

          // Show the current tab, and add an "active" class to the button that opened the tab
          document.getElementById(page).style.display = "block";
          evt.currentTarget.className += " active";
      }

      document.getElementById("defaultOpen").click();
</script>

<script src="script.js"></script>

</body>

<style>



  .pageContent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    animation: bounceInUp 1s; /* Fading effect takes 1 second */

  }


  nav ul li .active {
    color: #fff;
    background-color: #4A4C59;
    padding: 0.5rem;
  }

</style>
</html>
