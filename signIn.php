<?php 
  include 'secret.php';
  
  function signInModalMeta () {
    return '
      <!-- Add the OAuth JS stuff for sign in button -->
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <meta name="google-signin-client_id" content="'.OAuthClientID.'">


      <!-- Add the js for showing and hiding the sign in box -->
      <script src="signIn.js"></script>

      <!-- Add the sign in stylesheets so that it will hide and show when necessary -->
      <link rel="stylesheet" href="Stylesheets/signIn.css">
    ';
  }
  
  function signInModalHTML () {
      return '
        <div class="signInModal" id="signInModalWrapper">
          <div class="signInModal" id="signInModalContent">
            <span id="closeButton" onclick="hideLogInModal()"><i class="material-icons">&#xE5CD;</i></span>
            <div id="signInLabel"> Sign In To Submit Announcements </div>
            <div class="g-signin2" data-onsuccess="onSignIn" id="OAuthBtn"></div>
          </div>
        </div>
      ';
    }
?>
