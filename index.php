 <!DOCTYPE html>
<?php
$isSignedIn=FALSE;
include 'header.php';
include 'footer.php';
include 'signIn.php';
?>

<html>
  <head>
    <?php
      headerMeta();
      footerMeta();
      if ($isSignedIn) {

      }
      else {
        signInModalMeta();
      }
     ?>
  </head>
  <body>
    <?php
      headerHTML(FALSE);
      if ($isSignedIn) {

      }
      else {
        signInModalHTML();
      }

   ?>
   <?php footerHTML(); ?>
  </body>
</html>
