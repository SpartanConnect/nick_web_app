 <!DOCTYPE html>
<?php
$isSignedIn=FALSE; //Just a var that I am using to test, will have to be replaced
include 'header.php'; //For the reusable header bar.
include 'footer.php'; //For the about contact archive footer, reusable.
?>

<html>
  <head>
    <?php
      headerMeta(FALSE); //Necessary for the header to work (and adds some nice font stuff). From header.php
      footerMeta(); //Does styling for the footer (hover, fonts, etc.) From footer.php
    ?>
  </head>
  <body>
    <?php
      headerHTML(FALSE); //Function from header.php Would do the logo and other nav buttons.

   ?>
   <!-- Put the rest of the home page html here. Pictures, etc. -->
   <?php footerHTML(); ?>
  </body>
</html>
