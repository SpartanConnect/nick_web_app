<?php
function headerMeta() {
  //Initialize variables for the meta and og meta.
  $title="Spartan Connect";
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,500" rel="stylesheet">

    <!-- Deal with other og metadata -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://connect.lchsspartans.net/">
    <meta property="og:image" content="Images/SpartanConnectLogo2.png">

    <!-- Deal with keywords and stuff for native html (hopefully for SEO) -->
    <meta name="keywords" content="La Cañada High School, LCHS, Spartan Connect">
    ';
}

function headerHTML(){
  echo '
    <div id="nav">
      <div id="nav_items">
        <!-- Add the nav links -->
        <ul>
          <li> <a href="index.php">Home</a> </li>
          <li> Second nav item' .
          /* I will have to add some if\'s here in order to handle sign-in specific nav links */
          '</ul>
        </div>
    </div>
  ';
}

?>
