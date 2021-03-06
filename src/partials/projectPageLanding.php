<?php

?>

<div class="downArrow downArrow-project" id="downArrow"><a href="#projMeta"><i class="fas fa-chevron-down"></i></a></div>
<div id="projLanding"> <!--___________ Proj Landing ____________-->
  <div class="row">
    <div class="col-50">
      <div class="landingText">
        <h1><?php echo $project->getName() ?></h1>
        <p><?php if (isset($description)) echo $description ?></p>
        <br>
        <div class="projectCallToAction">
        <?php 
          if (isset($primaryLink)) echo '<a href="'.$primaryLink.'" target="_blank">'.$primaryLinkText.'</a>';
          if (isset($secondaryLink)) echo '<a href="'.$secondaryLink.'" target="_blank">'.$secondaryLinkText.'</a>';
        ?>
        </div>
      </div> 
    </div>
    <div class="col-50">
      <img src="assets/img/<?php echo $project->getSlug() ?>.jpg" class="imgBG <?php if (isset($alt)) echo "alt" ?>">
      <img src="assets/img/<?php echo $project->getSlug() ?>.jpg">
    </div>
  </div>
</div>