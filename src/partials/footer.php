<?php

?>

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