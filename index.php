<?php

//Set cookie
setcookie("returningVisitor", "true", time()+365*24*60*60);

?>

<!DOCTYPE html>
<html lang="en">

<!-- #################################### HEAD ###################################### --> 
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WXGTTGWVKL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WXGTTGWVKL');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="I am a digital media designer with a strong interdisciplinary background, based in Vancouver, Canada. I design and program games, websites, and apps. Robert Michels Portfolio.">

  <title>Portfolio | Robert Michels</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- Load Font -->
  <!-- Load Icons -->
  <script src="https://kit.fontawesome.com/93c460f451.js" crossorigin="anonymous"></script>

  <!-- Load Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/icon/favicon-16x16.png">
  <link rel="manifest" href="/assets/icon/site.webmanifest">
  <link rel="mask-icon" href="/assets/icon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/assets/icon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="/assets/icon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <div id="MainGrid">
    <!-- ##################################### HEADER ###################################### -->
    <header>
      <nav>
        <ul>
          <li><a href="index.html"><i class="fas fa-home"></i></a></li>
          <li><div class="menuCont" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div></li>
        </ul>
        <div id="OverlayMenu">
          <ul>
            <a href="index.html"><li>Portfolio</li></a>
            <a href="index.html/#MyWork"><li>My Work</li></a>
            <a href="index.html/#About"><li>About</li></a>
            <a href="index.html/#Contact"><li>Contact</li></a>
          </ul>
        </div>
      </nav>
    </header>

    <!-- #################################### CONTENT ###################################### -->
    <main id="Content">
      <a href="#MyWork"><i class="fas fa-chevron-down"></i></a>
      <canvas id="threeModel"></canvas>
      <div id="landingArea">
        <div class="row">
          <div class="col-50" id="landingText">
            <p>Hi, I'm Robert Michels.<br>I <sp id="textDesign">design</sp> and <sp id="textProgram">program</sp><br><span
       class="txt-rotate"
       data-period="2000"
       data-rotate='[ "mobile apps.", "websites.", "games.", "VR experiences."]'>digital media.</span></p>
          </div>
        </div>
      </div>

      <?php

        //check if filter set
        if(isset($_GET['filter']))
        {

            // Filter is set
            echo "filter is set";
            echo "<br>";

            $filter = $_GET['filter'];
            echo $filter;

            echo "<br>";

            switch ($filter) {
              case 'front-end':
                  echo "switch: front-end";
                  break;
              case 'vr':
                  echo "switch: vr";
                  break;
              case 'game-dev':
                  echo "switch: game-dev";
                  break;
              default:
                  echo "Error: faulty URL";
                  break;
            }
        }

      ?>


      <section class="sectionMedia" id="MyWork">
        <div class="projRow">
          <div class="projPanel">
            <a href="amae.html">
              <img src="assets/img/Amae.jpg">
              <div class="projJScontainer">
                <h2 class="projLabel">Amae</h2>
                <h3 class="projMeta">UX / UI Design</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="projRow">
          <div class="projPanel">
            <a href="cyberview.html">
              <img src="assets/img/Cyberview.jpg">
              <div class="projJScontainer">
                <h2 class="projLabel">Cyberview</h2>
                <h3 class="projMeta">2D Game</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="projRow">
          <div class="projPanel">
            <a href="risingWaters.html">
              <img src="assets/img/RisingWaters.jpg">
              <div class="projJScontainer">
                <h2 class="projLabel">Rising Waters</h2>
                <h3 class="projMeta">VR Experience</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="projRow">
          <div class="projPanel">
            <a href="chromakey.html">
              <img src="assets/img/Chromakey.jpg">
              <div class="projJScontainer">
                <h2 class="projLabel">Chromakey &<br>Color Matching</h2>
                <h3 class="projMeta">Java App</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="projRow">
          <div class="projPanel">
            <a href="harbingersofdeath.html">
              <img src="assets/img/HarbingersOfDeath.jpg">
              <div class="projJScontainer">
                <h2 class="projLabel">Harbingers Of Death</h2>
                <h3 class="projMeta">Full-stack Website (LAMP)</h3>
              </div>
            </a>
          </div>
        </div>
      </section>

      <section class="sectionText">
        <h1 id="About">About Me</h1>
        <p>I am a digital media designer hailing from Stuttgart, Germany and Vancouver, Canada. I attended Simon Fraser University, where I earned my Bachelor’s Degree of Science, majoring in Interactive Arts & Technology.<br><br>With a strong interdisciplinary background, I am interested in the design and development of interactive systems - such as games and websites. My curiosity has allowed me to apply my skills and gain more experience with plenty of platforms. These include Unity and C# for the development of games for VR, phones and desktop. I also have experience with fullstack development of websites and apps, such as using the LAMP development stack.<br><br>I am currently looking for jobs. If you are interested, please shoot me a message!</p>
      </section>
      <section class="sectionText">
        <h2 id="Contact">Contact:</h2>
        <p>Etiam pulvinar eget ligula sit amet sollicitudin. Aliquam sed risus metus. Morbi dapibus tristique sapien luctus molestie. Phasellus sit amet molestie ipsum, id convallis dolor.</p>
      </section>

    </main>

    <!-- #################################### FOOTER ###################################### -->

    <footer>
      <h2>Interested?</h2>
      <div class="getInTouch">
        <h3>Get in touch with me &nbsp;&#8594;</h3>
        <ul class="icons">
          <a href="mailto: robert_michels@outlook.com" target="_blank" title="E-Mail"><li><i class="fas fa-at fa-2x"></i></li></a>
          <a href="https://linkedin.com/in/robert-michels" target="_blank" title="LinkedIn"><li><i class="fab fa-linkedin-in fa-2x"></i></li></a>
          <a href="https://github.com/robert-michels" target="_blank" title="GitHub"><li><i class="fab fa-github fa-2x"></i></li></a>
          <a href="https://play.google.com/store/apps/developer?id=Studio+RM" target="_blank" title="Google Play"><li><i class="fab fa-google-play fa-2x"></i></li></a>
          <a href="https://rmichels.itch.io/" target="_blank" ><li><i class="fab fa-itch-io fa-2x"title="Itch.io"></i></li></a>
          </ul>
      </div>
      
    </footer>
  </div>

  <?php if(!isset($_COOKIE["returningVisitor"])) : ?>

    <div id="tmpVisitorPopUp">
      <div>
        <h2>Hello There!</h2>
        <p>This website is in development &#38; is expected to be finished by Mid-February 2020.</p>
        <p>If you are a stranger who just happened to stumble upon this, feel free to explore, but be warned - things aren't quite done yet.</p>
        <p>If you would like to give me feedback, that would be much appreciated!</p>
        <div>
          <a href="https://forms.gle/kWRg97XYz8k5jd8u7" target="_blank" onclick="closePopUp()">Open survey in another tab &#8594;</a>
          <button onclick="closePopUp()">Close &#38; explore site &#8594;</button>
        </div>   
      </div>
    </div>
    <script>
    function closePopUp() {
      document.getElementById("tmpVisitorPopUp").style.display = "none";
    }
    </script>

  <?php endif; ?>

  <!--############### JavaScript Loading Section ###############-->
  <script type="x-shader/x-vertex" id="vertexshader">

      attribute float scale;

      void main() {

        vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );

        gl_PointSize = scale * ( 300.0 / - mvPosition.z );

        gl_Position = projectionMatrix * mvPosition;

      }

    </script>

    <script type="x-shader/x-fragment" id="fragmentshader">

      uniform vec3 color;

      void main() {

        if ( length( gl_PointCoord - vec2( 0.5, 0.5 ) ) > 0.475 ) discard;

        gl_FragColor = vec4( color, 1.0 );

      }

    </script>
    
  <script src="js/three/build/three.min.js"></script>
  <script src="js/three/examples/js/loaders/GLTFLoader.js"></script>
  <script src="js/tools.js"></script>
  <!--<script src="three/myThreeScript.js"></script>-->
  <!--<script src="three/skull.js"></script>-->

  <script src="js/three/waves.js"></script>
  <script src="js/three/landingModel.js"></script>

  <!--<script src="js/three/cursor.js"></script>-->

  <script src="js/menu.js"></script>
  <script src="js/textAnim.js"></script>
  <script src="js/projectTile.js"></script>


</body>

</html>