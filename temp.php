<!--

temp.html
_________

© EdouardMortec 2018 - http://www.edouardmortec.com

-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="keywords" content="abstract, abstract art, abstraction, art, code, code art, computer, computerart, contemporary art, creative coding, ai, deep learning, digital art, edouard mortec, mortec, modern art, pharmakon, photography, scapegoat, visual art">
  <meta name="description" content="Edouard Mortec">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="src/img/favicon_32.ico" />

  <title><?php 
  $mortec = 'E D V A R D M O R T E C';
  $mortec = str_shuffle($mortec);
  echo $mortec  ;
  ?>
</title>


<style>

  @font-face {
    font-family: 'Orator Std';
    src: url('src/fonts/OratorStd.eot');
    src: url('src/fonts/OratorStd.eot?#iefix') format('embedded-opentype'),
    url('src/fonts/OratorStd.woff2') format('woff2'),
    url('src/fonts/OratorStd.woff') format('woff'),
    url('src/fonts/OratorStd.ttf') format('truetype'),
    url('src/fonts/OratorStd.svg#OratorStd') format('svg');
    font-weight: normal;
    font-style: normal;
  }

body, html {
    height: 100%;
    margin: 0;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.bg {

    background-image: url(<?php

        srand(floor(time() / (60*60*24)));
        
        $pictures = glob('src/temp/*.jpg');
        $endArray = count( $pictures )-1;
        $index = random_int ( 0 , $endArray );

        $title = "Title";
        $caption = "Caption";
        $keywords = "none";
        $year = "2018";
        $artPath = $pictures[$index];

        $size = getimagesize( $artPath, $info);

        if(isset($info['APP13'])){
            $iptc = iptcparse($info['APP13']);
            $title = $iptc["2#005"];
            $caption = $iptc["2#120"];
            $keywords = $iptc["2#025"];
            $copy = $iptc["2#116"];
        }

        $_ENV["TITLE"] = $title[0];
        $_ENV["CAPTION"] = $caption[0];
        $_ENV["KEYWORDS"] = $keywords[0];
        $_ENV["COPY"] = $copy[0];

        echo $artPath;
        ?>);

    /* Full height */
    height: 100%;
    width: auto;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0;
}

.caption {
    position: fixed;
    display: block;
    padding: 0px;
    margin: 0px;
    height: 2vh;
    right: 7vh;
    bottom: 13vh;
    font-family: "Orator Std", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 0.95em;
    text-decoration: none;
    text-align: right;
    line-height: 0px;
    color: white;
    opacity: 1;
    z-index: 1; 

}

@-webkit-keyframes messageIntro {
  0% {  opacity: 1;}
  30% {   opacity: 1;}
  100% {  opacity: 0;}
}

@-moz-keyframes messageIntro {
  0% {   opacity: 1;}
  30% {   opacity: 1;}
  100% {   opacity: 0;}
}

@-ms-keyframes messageIntro {
  0% {  opacity: 1;}
  30% {  opacity: 1;}
  100% {  opacity: 0;}
}

@-o-keyframes messageIntro {
  0% {   opacity: 1;}
  30% {  opacity: 1;}
  100% {  opacity: 0;}
}

@keyframes messageIntro {
  0% {   opacity: 1;}
  30% {   opacity: 1;}
  100% {  opacity: 0;}
}

.message {
    position: fixed;
    width: 100vw;
    height: 100vh;
    margin: auto;
    top:0vh;
    font-family: "Orator Std", Arial, sans-serif;
    font-size: 1.6em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-rendering: optimizeLegibility; 
    text-decoration: none;
    text-align: center;
    vertical-align: middle;
    line-height: 100vh; 
    color: black;
    background-color: white;
    z-index: 2;


    -webkit-animation-name: messageIntro;
    -webkit-animation-duration: 10s;
    -webkit-animation-timing-function: ease-out;
    -webkit-animation-direction: normal;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: messageIntro;
    -moz-animation-duration: 10s;
    -moz-animation-timing-function: ease-out;
    -moz-animation-direction: normal;
    -moz-animation-fill-mode: forwards;

    -ms-animation-name: messageIntro;
    -ms-animation-duration: 10s;
    -ms-animation-timing-function: ease-out;
    -ms-animation-direction: normal;
    -ms-animation-fill-mode: forwards;

    -o-animation-name: messageIntro;
    -o-animation-duration: 10s;
    -o-animation-timing-function: ease-out;
    -o-animation-direction: normal;
    -o-animation-fill-mode: forwards;

    animation-name: messageIntro;
    animation-duration: 10s;
    animation-timing-function: ease-out;
    animation-direction: normal;
    animation-fill-mode: forwards;
}

@media ( orientation: portrait ) { 

    .caption{
        font-size:  0.8em;
    }


    .message{
        font-size:  1.3em;
    }

}



</style>
</head>
<body>

    <div class="bg" name="Magick"></div>
    <span class="message", font-size=1em >under construction</span>
    <span class="caption"> <p><?php echo strtolower( $_ENV["CAPTION"]) ?></p></br><p>"<?php echo strtolower( $_ENV["TITLE"] ) ?>" <?php echo strtolower( $_ENV["COPY"] ) ?></p></span>

</body>
</html>
