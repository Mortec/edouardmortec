<!--

index.html
__________

© EdouardMortec 2018 - http://www.edouardmortec.com

-->

<!DOCTYPE html>
<html>

<!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* HEAD-->

<head>
  <meta charset="utf-8" />
  <meta name="keywords" content="abstract, abstract art, abstraction, art, code, code art, computer, computerart, contemporary art, creative coding, ai, deep learning, digital art, edouard mortec, mortec, modern art, pharmakon, photography, scapegoat, visual art">
  <meta name="description" content="Edouard Mortec">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="src/img/favicon_32.ico" />

  <!-- Adding fullpage.css is essential-->
  <link rel="stylesheet" type="text/css" href="src/code/fullpage.min.css"/><!-- jquery.fullPage.css -->

  <!--Load jQuery and fullpage tags -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="src/code/fullpage.min.js"></script><!-- jquery.fullPage.js -->

  <!--Custom script -->
  <script src='src/code/edvrdmrtc.js'></script>

  <!--We will overide some default styles here -->
  <link rel="stylesheet" type="text/css" href='src/code/edvrdmrtc.css'>



  <title><?php 
  $mortec = 'E D V A R D M O R T E C';
  $mortec = str_shuffle($mortec);
  echo $mortec;
  ?>
</title>

</head>


<!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* BODY-->

<body>

  <!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -*  ARROWS-->


  <div class="Arrows">&nbsp;&#183;&#8594;</br>&nbsp;&#8595;</div>

  <!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* NAV/TITLE/LOGO-->
<div class="navLeft"></div>
<div class="navRight"></div>

<nav>
  <div id="Title" class="unselectable"></div>
  <div alt="Edouard Mortec" id="Logo" title="Contact">
  </div>
</nav>



  <!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -*  FP-->
  <div id="fullpage">


    <?php include("src/code/sections.php"); ?>



    <div class="section" id="contact">
      <footer>


        <a href="Downloads/Edouard_Mortec_CV.pdf" id="cv" title="Curriculum Vitæ" target="_blank">curriculum vitae</a>
        <!-- <a href="Downloads/Edouard_Mortec_Portfolio.pdf" id="folio" title="Portfolio">full portfolio</a> -->
        <!-- <a href="https://www.facebook.com/mortec.edouard" id="fb" title="Facebook" target="_blank">facebook</a> -->
        <a href="https://www.instagram.com/edouardmortec" id="ig" title="Instagram" target="_blank">instagram</a>
        <span id="tp" title="Back to top">top</span>
        <span id="mss" title="Message">message</span>


        <div id="contactForm">  
          <form form method="post" action="src/code/contact.php" target="void">
            <input placeholder="email" type="email" name="email" id="Mail" required/>
            <input placeholder="subject" type="text" name="Subject" id="Subject" required/>
            <textarea placeholder="message" name="Message" id="Message"></textarea>
            <input class="formBtn" type="submit" value="send"/>
            <input class="formBtn" type="reset" value="reset"/>
            <input class="formBtn" type="reset" value="exit" id="contactExit"/>
          </form><br>
          <iframe name="void"></iframe>
        </div>


       </footer>

      <div id=Credits>Artworks, Logotype & Graphic Design &copy; Edouard Mortec 2008-<?php echo date("Y");?></div>

    </div>


<!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* END SECTIONS-->
</div>




<!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* END BODY-->


</body>


<!-- -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* -* END HTML-->

</html>
