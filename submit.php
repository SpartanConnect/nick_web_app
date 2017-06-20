<?php 
  include 'header.php';
  include 'footer.php';

  $isAdmin=TRUE;
  $isLoggedIn=FALSE;
?>
<html>
  <head>
    <?php
      headerMeta($isLoggedIn);
      footerMeta();      
    ?>
    <!--Include the page specific CSS stylesheet -->
    <link rel="stylesheet" href="Stylesheets/submit.css">

    <script src="submit.js"></script>
  </head>
  <body>
    <?php headerHTML($isLoggedIn); ?>
    <div id=formContainer>
      Create Announcement
      <form method="post" action="create.php">
        <fieldset>
          <span class="fieldsetLegend">General</span> <br>
          Announcement Name: <br>
          <input type="text" name="name" required id=nameInput> <br>
          Announcement Description: <br>
          <textarea name="description" rows="8" cols="80" required></textarea> <br>
          Start Date: <br>
          <input name="startDate" type="date" required> <br>
          End Date: <br>
          <input name="endDate" type="date" required><br>
          <input type="checkbox" name="urgent" required>
          <?php 
            if ($isAdmin) {
              echo "Mark ";
            }
            else {
              echo "Request ";
            }
          ?>
          Urgent
        </fieldset>
        <fieldset>
          <span class="fieldsetLegend">Audience</span> <br>
          <div class="audienceColumn" id="middleAudienceColumn">
            <input type="checkbox" name="grade7" id="grade7">
            7th Grade <br>
            <input type="checkbox" name="grade8" id="grade8">
            8th Grade
          </div>
          <div class="audienceColumn" id="rightAudienceColumn">
            <input type="checkbox" name="grade9" id="grade9">
            9th Grade <br>
            <input type="checkbox" name="grade10" id="grade10">
            10th Grade <br>
            <input type="checkbox" name="grade11" id="grade11">
            11th Grade <br>
            <input type="checkbox" name="grade12" id="grade12">
            12th Grade <br>
          </div>
          <div class="audienceColumn" id="rightAudienceColumn">
            <button type="button" id="78Select" class="gradeButtons" onclick="check78()">Select 7-8</button> <br>
            <button type="button" id="912Select" class="gradeButtons" onclick="check912()">Select 9-12</button> <br>
            <button type="button" id="AllSelect" class="gradeButtons" onclick="checkAll()">Select All Grades</button> <br>
          </div>
        </fieldset>
        <input type="submit" value="Submit">
      </form>
    </div>
    <?php 
      footerHTML();
    ?>
  </body>
</html>
