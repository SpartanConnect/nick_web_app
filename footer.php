<?php 
  function footerHTML() {
    echo '
      <div id=footerContainer>
        <div id=footerContent>
          Made my the Spartan Connect team with help from LCUSD.
          <br>
          <a class="footerLink" href="about.php">About</a> &vert;
          <a href="contact.php" class="footerLink"> Contact </a> &vert;
          <a href="archive.php" class="footerLink"> Archive </a>
        </div>
      </div>
    ';
  }

  function footerMeta () {
    echo '
      <!-- Add footer stylesheet linking -->
      <link rel="stylesheet" href="Stylesheets/footer.css">
    ';
  }
 ?>
