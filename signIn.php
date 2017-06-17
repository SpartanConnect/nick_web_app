<?php 
  function signInModalMeta () {
    echo '
      <!-- Add the OAuth JS stuff for sign in button -->
      <script src="https://apis.google.com/js/platform.js" async defer></script>

      <!-- Add the js for showing and hiding the sign in box -->
      <script src="signIn.js"></script>

      <!-- Add the sign in stylesheets so that it will hide and show when necessary -->
      <link rel="stylesheet" href="Stylesheets\signIn.css">
    ';
  }
  
  function signInModalHTML () {
      echo '
        <div class="signInModal" id="signInModalWrapper">
          <div class="signInModal" id="signInModalContent">
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
          </div>
        </div>
      ';
    }
?>
