<?php
  
  include 'signIn.php';
  
  function headerMeta($isSignedIn) {
    //Adds all of the metadata for OG, normal meta, as well as CSS and JS for the header and some whole site stuff.
    
    //Initialize variables for the meta and og meta.
    $title='"Spartan Connect"';
    $description="A 21st Century Announcement App For La Ca&ntilde;ada High School";
    //echo back the meta tags and other title stuff that's the same on all pages.
    echo '
      <meta charset="UTF-16">

      <!-- Deal with titles, both in native HTML and og -->
      <title>Spartan Connect</title>
      <meta property="og:title" content='.$title.'>

      <!-- Deal with native and OG description stuff -->
      <meta property="og:description content='.$description.'>
      <meta name="description" content='.$description.'>

      <!-- Deal with stylesheet linking -->
      <link rel="stylesheet" href="Stylesheets/header.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet">'.
      
      ($isSignedIn?
        NULL//Add stylesheets and buttons for logged in users
        : signInModalMeta())
      .'<!-- Deal with other og metadata -->
      <meta property="og:type" content="website">
      <meta property="og:url" content="http://connect.lchsspartans.net/">
      <meta property="og:image" content="Images/SpartanConnectLogo2.png">

      <!-- Deal with keywords and stuff for native html (hopefully for SEO) -->
      <meta name="keywords" content="La Cañada High School, LCHS, Spartan Connect">

      <!-- Add header js script 
      <script src="header.js"></script> -->
    ';
  }

  function headerHTML ($isSignedIn) {
    // This has all of the  header stuff, including future nav buttons
    echo '
      <div id="nav">'.
        profileHTML($isSignedIn). //Adds the profile information, from the below function
      '</div>'.
      signInModalHTML();
    ;
  }

  function profileHTML ($isSignedIn) {
    //Adds either a profile pic and bells etc (not done yet) or a sign in button.
    if ($isSignedIn) {
      return '';
    }
    else {
      return '<button id="signInBtn" onclick="showLogInModal()">Sign In</button>'; //Not sure this is the best place to put this... Probably needs more oranization.
    }
  }
?>
