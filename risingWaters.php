<?php

require "src/Partial.php";

// start session so that we can store logged in cookie
// session_start();

Partial::build('header');

?>

<a href="#"><i class="fas fa-chevron-down"></i></a>
<div id="projLanding"> <!--___________ Proj Landing ____________-->
  <div class="row">
    <div class="col-50">
      <div class="landingText">
        <h1>Rising Waters</h1>
        <p>A VR project for the Oculus Go, that tackles the topic of climate change. Set in the future, the user gets to explore the city of Richmond, B.C., in the aftermath of a flood caused by rising sea levels.</p>
        <br>
        <a href="https://www.youtube.com/watch?v=mFMDWg2QdYU" target="_blank">View Project Video  &#8594;</a>
      </div> 
    </div>
    <div class="col-50">
      <img src="assets/img/RisingWaters.jpg" class="imgBG">
      <img src="assets/img/RisingWaters.jpg">
    </div>
  </div>
</div>

<div id="projMeta"> <!--___________ Proj Meta ____________-->
  <div class="projMetaItem">
    <h2>Type</h2>
    <p>VR Experience</p>
  </div>
  <div class="projMetaItem">
    <h2>Year</h2>
    <p>2019</p>
  </div>
  <div class="projMetaItem">
    <h2>Roles</h2>
    <ul>
      <li>Unity / C# Developer</li>
      <li>3D Modelling</li>
    </ul>
  </div>
  <div class="projMetaItem">
    <h2>Team</h2>    
    <ul>
      <li>Ricky Lalli</li>
      <li>Jonathan Lee</li>
      <li>Robert Michels</li>
      <li>Elene Wanner</li>
    </ul>
  </div>
</div>


<div id="projContent"> <!--___________ Proj Content ____________-->

  <!----- Content / Text ----->
  <section class="sectionText">
    <h2>Placeholder Content</h2>
    <p>This area is currently in development.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis lacinia eros, id scelerisque tortor finibus nec. Etiam ut rhoncus dui, vitae mollis mi. Nulla elementum volutpat erat, scelerisque porttitor nisi consectetur ut. Vivamus fermentum nunc eget tortor vehicula aliquet. Sed tristique pharetra quam vitae mollis. Aliquam sed feugiat mauris. Suspendisse pulvinar diam et ligula lacinia vestibulum. Aenean lacinia diam nec eros egestas, quis fermentum magna vehicula. Praesent consectetur, risus et dictum convallis, leo odio placerat elit, egestas vestibulum eros sem quis ligula. In hac habitasse platea dictumst.</p>
    <h2>Placeholder Process</h2>
    <p>Pellentesque rhoncus vestibulum est non pharetra. Praesent auctor arcu ac eleifend dignissim. Integer et egestas nisi. Aenean eu urna gravida, lobortis metus et, cursus enim. Etiam ac sem quis sem aliquet dignissim. Etiam sapien ex, maximus a sem sed, dignissim aliquet arcu. Donec porta placerat velit, non sollicitudin dui euismod a. Sed quis lorem venenatis, ultricies augue id, gravida mi. Mauris sed pellentesque est, et commodo felis.</p>
    <p>Proin molestie a mi vel laoreet. Praesent sed commodo mauris, at malesuada leo. Nullam condimentum fermentum sem. Nullam enim libero, mattis in neque nec, consectetur dictum sem. Sed porta venenatis diam, ut maximus dui tristique rhoncus.</p>
  </section>

  
</div>



<?php

  Partial::build('footer');

?>