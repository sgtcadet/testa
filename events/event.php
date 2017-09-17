<?php
//require 'assets/php/scripts/Connection.php';
        //echo "<h2>Test</h2>";
require_once 'assets/php/scripts/Event.php';
//$connect = new Connection();

/*
    * #Event == Conference
    * #Event has a ID, name,description,image,date,content??.
    * #Webinar Software : https://www.join.me/solutions/free-webinar-software
    */

//GET EVENT ID
$eventID = $_GET['eventId'];
//echo $eventID;
echo "Hello!!";
//CHECK IF EVENT ID IS IN DATABASE
$event = new Event();
$event->Select('*',$eventID);
//$event->Select();
//IF IT IS LOAD THE EVENT'S DATA

?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Sep 06 2017 18:54:33 GMT+0000 (UTC)  -->
<html data-wf-page="59a995095efed00001e012a7" data-wf-site="5999ac353f1ad60001ce484f">
<head>
  <meta charset="utf-8">
  <title>myNVML | Events</title>
  <meta content="Night Vision Media Limited Recent Events" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/nightvisionmedia.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({
  google: {
    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Oswald:200,300,400,500,600,700","Roboto:300,regular,500","Raleway:regular,italic,500,600","Raleway:200,300,regular"]
  }
});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
</script>
  <!-- <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"> -->
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="navigation-bar w-nav" data-animation="default" data-collapse="medium" data-duration="400" data-ix="fade-in-left-page-loads">
    <div class="w-container">
      <a class="brand-link w-nav-brand" href="../index.html">
        <h1 class="brand-text">Night <strong>vision</strong><br><strong>media</strong> limited</h1>
      </a>
      <nav class="events-menu navigation-menu w-nav-menu" role="navigation"><a class="navigation-link w-nav-link" href="#about-event">About</a><a class="navigation-link w-nav-link" href="#event-des">Event</a><a class="navigation-link w-nav-link" href="#speakers">Speakers</a><a class="navigation-link w-nav-link" href="#registration">Registration</a><a class="navigation-link w-nav-link" href="#schedule">Schedule</a></nav>
      <div class="hamburger-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="home-slider w-slider" data-animation="cross" data-autoplay="1" data-delay="5000" data-duration="1500" data-infinite="1">
    <div class="w-slider-mask">
      <div class="home-slide two w-slide">
        <div class="home-slide-overlay" id="Top-Section">
          <div class="home-slide-container w-container">
            <div class="flex-wrapper">
              <div class="_40-percent-column" data-ix="fade-in-left-page-loads-2">
                <h1 class="graduate-heading">graduate with honors</h1>
                <p class="paragraph-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor&nbsp;</p>
              </div>
            </div>
          </div>
          <div class="graduate-wrapper"><img data-ix="fade-in-bottom-scroll-in" sizes="(max-width: 991px) 100vw, 50vw" src="../images/graduate_girl.png" srcset="../images/graduate_girl-p-500.png 500w, ../images/graduate_girl.png 512w" width="676"></div>
        </div>
      </div>
      <div class="home-slide w-slide">
        <div class="home-slide-overlay">
          <div class="home-slide-container w-container">
            <div class="slider-text-block">
              <h2 class="home-slide-title" data-ix="fade-in-left-page-loads">watch abeeku series</h2>
              <h2 class="home-slide-title sub" data-ix="fade-in-left-page-loads-4">watch on the new caribbean media online <br>platform, direalwi.com.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="home-slide three w-slide">
        <div class="home-slide-overlay">
          <div class="home-slide-container w-container">
            <div class="slider-text-block">
              <h2 class="home-slide-title" data-ix="fade-in-left-page-loads-2">Inspired DESIGNERS</h2>
              <h2 class="home-slide-title sub" data-ix="fade-in-left-page-loads-3">with extra-ordinary talent</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-arrow-left w-slider-arrow-left">
      <div class="w-icon-slider-left"></div>
    </div>
    <div class="slide-arrow-right w-slider-arrow-right">
      <div class="w-icon-slider-right"></div>
    </div>
    <div class="slide-nav w-round w-slider-nav"></div>
  </div>
  <div class="centered event-hero hero-section" id="Top"></div>
  <div class="section" id="about-event">
    <div class="w-container wrapper">
      <div class="w-row">
        <div class="w-col w-col-6 w-col-stack">
          <div class="wrapper">
            <h3 class="event-page-headings">About us</h3>
            <p class="event-paragraphs">
            <?php echo $event->getEventAbout();?>
            <!--
            Night Vision Media Ltd. specializes in creativity. &nbsp;We evolved from being a graphic design firm, to a company that can provide a creative solution for all of our clients. &nbsp;Currently our services have been broken down into three (3) categories: Animation; Education; and Marketing.
            -->
            </p><img sizes="(max-width: 479px) 92vw, (max-width: 767px) 77vw, (max-width: 991px) 482px, 42vw" src="images/new_statesman_events.jpg" srcset="../images/new_statesman_events-p-500.jpeg 500w, ../images/new_statesman_events-p-1080.jpeg 1080w, ../images/new_statesman_events-p-1600.jpeg 1600w, ../images/new_statesman_events.jpg 1920w" width="482"></div>
        </div>
        <div class="w-col w-col-6 w-col-stack">
          <div class="wrapper">
            <h3 class="event-page-headings">what is our goal?</h3>
            <p class="event-paragraphs">
            <?php echo $event->getEventGoalDescription();?>
            <!--
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus&nbsp;
            -->
            </p>
            <ul class="unordered">
              <?php 

                  for($var = 0; $var < $event->getGoalInstance()->numGoals; $var++ )
                  {
               ?>
               <li class="list-item"><?php echo $event->getGoalInstance()->getGoals($var); ?></li>
              <!--
              <li class="list-item">Learn from the best Asian Social Media Experts &amp; Case Studies</li>
              <li class="list-item">Have dedicated 2-to-1 meetings with the experts</li>
              <li class="list-item">Reach more consumers for less by learning new digital media skills</li>
              <li class="list-item">Save money when spending in online advertising</li>
              -->
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="event-info section" id="event-des">
    <div class="w-container">
      <h2 class="event-title">
      <!-- All Is Ready For Our Annual Event! -->
       <?php echo $event->getEventTitle() .":". $event->getEventId();?>
      </h2>
      <div class="subtitle">
      <?php echo $event->getEventDateTime() . " / " . $event->getEventLocation();?>
      <!--
      Sed egestas, ante et vulputate volutpat, eros pede semp est vitae luctus&nbsp; -->
      </div>
      <div class="subtitle">
      <?php echo "First &amp; " . $event->getEventSubTitle();?>
      <!-- metus libero eu augue da idest lectus. -->
      </div>
      <div class="author-block w-clearfix"><img class="author-image" sizes="(max-width: 479px) 27vw, 59px" src="../images/Kevin-Jackson.jpg" srcset="../images/Kevin-Jackson-p-500.jpeg 500w, ../images/Kevin-Jackson-p-800.jpeg 800w, ../images/Kevin-Jackson.jpg 960w" width="59">
        <div class="text">By</div>
        <div class="author-name">Kevin Jackson</div>
        <div class="date">September 6, 2017</div>
      </div>
      <div class="intro-video w-embed w-video" style="padding-top: 56.17021276595745%;"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2F3-iCDOYkfms%3Ffeature%3Doembed&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D3-iCDOYkfms&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2F3-iCDOYkfms%2Fhqdefault.jpg&key=c4e54deccf4d4ec997a64902e9a30300&type=text%2Fhtml&schema=youtube" scrolling="no" frameborder="0" allowfullscreen=""></iframe></div>
      <div class="intro">
        <h3 class="intro-title">introduction</h3>
        <p class="intro-text">Etiam tristique, metus pretium rutrum elementum, risus tortor euismod urna, ac porta felis felis vel dui in bibendum justo vel pellentesque accumsan. Ut ultrices porta nisi, a euismod dui viverra a. Aenean finibus velit non viverra tincidunt.&nbsp;<br><br>Cras pulvinar ultricies vehicula. Cras et nulla id lorem vulputate pulvinar eget non neque. Proin feugiat justo vitae euismod fringilla. In a nunc commodo, elementum metus a, aliquam metus. Nulla porttitor malesuada urna non convallis. Duis luctus fermentum ex elementum egestas. Donec lobortis lectus ut nisi ultricies, in scelerisque ante egestas. Maecenas quis ipsum nunc. Donec pulvinar tortor nec neque pellentesque ullamcorper bibendum eu orci.</p>
      </div>
      <div class="intro">
        <h3 class="intro-title">what will we talk about?</h3>
      </div>
      <div class="features-row w-row">
        <div class="features-col w-col w-col-4 w-col-small-4">
          <div class="feature-wrapper w-clearfix"><img class="feature-icon-left" src="../images/security-on-1.png">
            <div class="list-item-title">This is some text&nbsp;</div>
            <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim</p>
          </div>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <div class="feature-wrapper w-clearfix"><img class="feature-icon-left" src="../images/security-on-1.png">
            <div class="list-item-title">This is some text&nbsp;</div>
            <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim</p>
          </div>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <div class="feature-wrapper w-clearfix"><img class="feature-icon-left" src="../images/security-on-1.png">
            <div class="list-item-title">This is some text&nbsp;</div>
            <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim</p>
          </div>
        </div>
      </div>
      <div class="features-row w-row">
        <div class="features-col w-col w-col-4 w-col-small-4">
          <div class="feature-wrapper w-clearfix"><img class="feature-icon-left" src="../images/security-on-1.png">
            <div class="list-item-title">This is some text&nbsp;</div>
            <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim</p>
          </div>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <div class="feature-wrapper w-clearfix"><img class="feature-icon-left" src="../images/security-on-1.png">
            <div class="list-item-title">This is some text&nbsp;</div>
            <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim</p>
          </div>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <div class="feature-wrapper w-clearfix"><img class="feature-icon-left" src="../images/security-on-1.png">
            <div class="list-item-title">This is some text&nbsp;</div>
            <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section speakers" id="speakers">
    <div class="w-container">
      <h3 class="speaker-heading">Speaker(s)</h3>
      <div class="section-divider-line speakers-line"></div>
      <div class="speaker-row w-row">
      <?php 
             for($var = 0; $var < $event->getSpeakerInstance()->numSpeakers; $var++)
            {

            
            ?>
        <div class="w-col w-col-4">
          <div class="div-block">
            <img class="speaker-image" sizes="(max-width: 479px) 87vw, (max-width: 767px) 290px, (max-width: 991px) 229.328125px, 290px" src="../images/Kevin-Jackson.jpg" srcset="../images/Kevin-Jackson-p-500.jpeg 500w, ../images/Kevin-Jackson-p-800.jpeg 800w, ../images/Kevin-Jackson.jpg 960w" width="290">
              <h3 class="speaker-name">
              <?php echo $event->getSpeakerInstance()->getFirstName($var) ." ". $event->getSpeakerInstance()->getLastName($var)?>
              <!-- kevin jackson -->
              </h3>
              <h4 class="speaker-title">
              <?php
                           echo $event->getSpeakerInstance()->getOccupation($var) ." at ". $event->getSpeakerInstance()->getCompany($var)
              ?>
              <!--Animation Manager and Vetting Officer -->
              </h4><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-06-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-02-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-18-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-09-white.svg"></a>
          </div>
        </div>
      <?php } ?>

        <!--
        <div class="w-col w-col-4">
          <div class="div-block"><img class="speaker-image" src="../images/chevonnesewhyteATnightvisionmedia.jpg" width="290">
            <h3 class="speaker-name">Chevvy</h3>
            <h4 class="speaker-title">Marketing, Managing, and Creative Director</h4><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-06-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-02-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-18-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-09-white.svg"></a></div>
        </div>
        <div class="w-col w-col-4">
          <div class="div-block"><img class="speaker-image" src="../images/Adrian-Whyte.jpg" width="290">
            <h3 class="speaker-name">Adrian Whyte</h3>
            <h4 class="speaker-title">Education &amp; Financial Director</h4><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-06-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-02-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-18-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-09-white.svg"></a></div>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="div-block"><img class="speaker-image" src="../images/speaker-1.jpg" width="290">
            <h3 class="speaker-name">devani mccarthy</h3>
            <h4 class="speaker-title">Designer &amp; developer</h4><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-06-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-02-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-18-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-09-white.svg"></a></div>
        </div>
        <div class="w-col w-col-4">
          <div class="div-block"><img class="speaker-image" src="../images/speaker-3.jpg" width="290">
            <h3 class="speaker-name">howard grant</h3>
            <h4 class="speaker-title">Developer</h4><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-06-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-02-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-18-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-09-white.svg"></a></div>
        </div>
        <div class="w-col w-col-4">
          <div class="div-block"><img class="speaker-image" src="../images/speaker-5.jpg" width="290">
            <h3 class="speaker-name">mourice mallcum</h3>
            <h4 class="speaker-title">Animator</h4><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-06-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-02-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-18-white.svg"></a><a class="social-links w-inline-block" href="#"><img class="social-images" src="../images/social-09-white.svg"></a></div>
        </div>
        -->
      </div>
      
    </div>
  </div>
  <div class="section" id="registration">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="centered section-heading">REGISTRATION &amp; PRICING</h2>
        <div class="center section-subheading">Choose a package and get started right away : -)</div>
      </div>
      <div class="form-wrapper w-form">
        <!--<form class="form" data-name="Registration Form" id="wf-form-Registration-Form" name="wf-form-Registration-Form">-->

        <form class="form" action="#" data-name="Registration Form" id="registration-form" name="wf-form-Registration-Form">
          <div class="col-md-12" id="registration-msg" style="display:none;">
              <div class="alert"></div>
          </div>
          <input class="form-field w-input" data-name="Registration First Name" id="firstname" maxlength="256" name="firstname" placeholder="Enter first name..." required="required" type="text">

          <input class="form-field w-input" data-name="Registration Last Name" id="lastname" maxlength="256" name="lastname" placeholder="Enter last name..." required="required" type="text">

          <input class="form-field w-input" data-name="Registration Email" id="email" maxlength="256" name="email" placeholder="Enter your email..." required="required" type="email">

          <input class="form-field w-input" data-name="Number" id="cell" maxlength="256" name="cell" placeholder="Enter your number..." required="required" type="text">

          <input type="hidden"class="form-field w-input" id="event" name="event" value="<?php echo $eventID?>">

          <select class="form-field w-select" id="package" name="package" required="required">
            <option readonly>Choose a package...</option>
            <option>Free (US $0.00)</option>
            <option>Limited Personal Use (US $25.00)</option>
            <option>CXC Student (US $45.00)</option>
            <option>Unlimited Personal Use (US 200.00)</option>
          </select>
          <!--
          <select class="form-field w-select" id="field" name="field" required="required">
            <option value="">Choose a package...</option>
            <option value="First">Free (US $0.00)</option>
            <option value="Second">Limited Personal Use (US $25.00)</option>
            <option value="Third">CXC Student (US $45.00)</option>
            <option value="Another Choice">Unlimited Personal Use (US 200.00)</option>
          </select>
          -->
          <input class="button full-width w-button" id="submit" data-wait="Please wait..." type="submit" value="Register">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form :(</p>
        </div>
      </div>
    </div>
  </div>
  <div class="schedule section" id="schedule">
    <div class="w-container">
      <h3 class="speaker-heading">Event Schedule</h3>
      <div class="w-row">

      <?php

        for( $var = 0; $var < $event->getScheduleInstance()->numSchedules; $var++)
        {

      

      ?>
        <div class="w-col w-col-4">
          <div class="event-schedule-fill">
            <div class="event-schedule-fill outline">
              <div class="event-schedule-time">
              <!--9:00 am -->
              <?php echo $event->getScheduleInstance()->getFrom($var);?>
              </div>
              <div class="dash event-schedule-time">-</div>
              <div class="event-schedule-time">
              <?php echo $event->getScheduleInstance()->getTo($var);?>
              <!-- 10:00 am -->
              </div>
              <h3 class="event-layout">
              <!-- WELCOME AND INTRO -->
              <?php echo $event->getScheduleInstance()->getActivity($var);?>
              </h3>
              <h4 class="event-layout location">
                <!-- <strong>VTDI</strong> Gordon town, kingston -->
                <strong>
                <?php 
                  //echo $event->getScheduleInstance()->getSpeakerName($var); 
                  echo  $event->getScheduleInstance()->getSpeakerFirstName($var) . " " . $event->getScheduleInstance()->getSpeakerLastName($var); 
                  ?></strong>
              </h4>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
        <!--
        <div class="w-col w-col-4">
          <div class="event-schedule-fill">
            <div class="event-schedule-fill outline">
              <div class="event-schedule-time">9:00 am</div>
              <div class="dash event-schedule-time">-</div>
              <div class="event-schedule-time">10:00 am</div>
              <h3 class="event-layout">WELCOME AND INTRO</h3>
              <h4 class="event-layout location"><strong>VTDI</strong> Gordon town, kingston</h4>
            </div>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="event-schedule-fill">
            <div class="event-schedule-fill outline">
              <div class="event-schedule-time">10:00 am</div>
              <div class="dash event-schedule-time">-</div>
              <div class="event-schedule-time">10:40 am</div>
              <h3 class="event-layout">tips and shares</h3>
              <h4 class="event-layout location"><strong>VTDI</strong> Gordon town, kingston</h4>
            </div>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="event-schedule-fill">
            <div class="event-schedule-fill outline">
              <div class="event-schedule-time">10:40 am</div>
              <div class="dash event-schedule-time">-</div>
              <div class="event-schedule-time">12:00 am</div>
              <h3 class="event-layout">view from the top</h3>
              <h4 class="event-layout location"><strong>VTDI</strong> Gordon town, kingston</h4>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="w-widget w-widget-map" data-disable-scroll="1" data-widget-latlng="37.77493,-122.419416" data-widget-style="roadmap" data-widget-zoom="12" id="event-location"></div>
  <div class="footer">
    <div class="w-container">
      <div class="w-row">
        <div class="spc w-col w-col-4">
          <h5 class="heading">night vision media<br>limited</h5>
          <p>Night Vision Media Ltd. specializes in creativity. We evolved from being a graphic design firm, to a company that can provide a creative solution for all of our clients. Currently our services have been broken down into three (3) categories: Animation; Education; and Marketing.</p><img class="logo" src="../images/Logo-icon.png"></div>
        <div class="spc w-col w-col-4">
          <h5 class="heading-2">contact info</h5><a class="footer-link" href="#">2A Fairway AvenueKingston 6, Jamaica</a><a class="footer-link" href="#">+1 876 7927107, +1 876 8736635</a><a class="footer-link" href="#">contact@nightvisionmedia.com</a></div>
        <div class="w-col w-col-4">
          <h5 class="heading-3">social</h5>
          <div class="footer-link-wrapper w-clearfix"><img class="info-icon" src="../images/social-18.svg" width="20"><a class="footer-link with-icon" href="http://@myNVML" target="_blank">Twitter</a></div>
          <div class="footer-link-wrapper w-clearfix"><img class="info-icon" src="../images/social-03.svg" width="20"><a class="footer-link with-icon" href="https://www.facebook.com/myNVML" target="_blank">Facebook</a></div>
          <div class="footer-link-wrapper w-clearfix"><img class="info-icon" src="../images/social-11.svg" width="20"><a class="footer-link with-icon" href="#">Pinterest</a></div>
          <div class="footer-link-wrapper w-clearfix"><img class="info-icon" src="../images/social-06.svg" width="20"><a class="footer-link with-icon" href="#">Google</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="center footer">
    <div class="w-container">
      <div class="footer-text">Copyright nightvisionmediaIimited. Made in Webflow.</div>
    </div>
  </div>
  <div class="event-top top" data-ix="fade-in-bottom-scroll-in"><a class="w-inline-block" href="#Top-Section"><img class="top-arrow" height="27" src="../images/social-34-white.svg" width="27"></a></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>