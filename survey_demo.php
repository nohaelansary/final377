<!DOCTYPE html>
<html>
<head>
  <style>
      div {
          margin: auto;
          border: 1px solid gray;
          padding: 8px;
      }
      h1 {
          text-align: center;
          text-transform: uppercase;
          color: #4CAF50;
      }
      p {
          text-indent: 50px;
          text-align: justify;
          letter-spacing: 3px;
      }
      a {
          text-decoration: none;
          color: #008CBA;
      }
  </style>
</head>
<body>
  <div class="container">
    <form action='result.php' method='POST'>
       <div id="social" class="survey">
         <h3>Social</h3>
         <p>How much do you agree with the statements below:</p>
         <strong>Question 1. I love working with others </strong><br>
         <?php setupBoxes("q1"); ?>

		     <br>
         <br>

        <strong>Question 2. I have strong communication skills </strong><br>
        <?php setupBoxes("q2"); ?>

        <br>
        <br>

        <strong>Question 3. I have leadership skills</strong><br>
        <?php setupBoxes("q3"); ?>

        <br>
        <br>

        <strong>Question 4. I like to take charge </strong><br>
        <?php setupBoxes("q4"); ?>

        <br>
        <br>

        <strong>Question 5. I would rather just be told what to do by someone else </strong><br>
        <?php setupBoxes("q5"); ?>

        <br>
        <br>
        </div>

        <div id="Technical" class="survey">

        <h3>Technical</h3>
        <p> How would you rate the following skills: </p>

        <strong>Question 6. Im a very organized person </strong><br>
        <?php setupBoxes("q6"); ?>

        <br>
        <br>

        <strong>Question 7. I am good at solving problems </strong><br>
        <?php setupBoxes("q7"); ?>

        <br>
        <br>

        <strong>Question 8. I enjoy working with computers </strong><br>
        <?php setupBoxes("q8"); ?>

        <br>
        <br>

        <strong>Question 9. I am interested in IT business-related subjects and news</strong><br>
        <?php setupBoxes("q9"); ?>

        <br>
        <br>

        <strong>Question 10. I love learning new languages </strong><br>
        <?php setupBoxes("q10"); ?>

        <br>
        <br>
        </div>

        <div id="Management" class="survey">
        <h3>Management</h3>
        <p>Select the option that best respresents yourself:</p>
        <strong>Question 11. How good are your writing skills? </strong><br>
        <?php setupBoxes("q11"); ?>

    <br>
		<br>

        <strong>Question 12. Are you considered a leader around your office? </strong><br>
        <?php setupBoxes("q12"); ?>

    <br>
	  <br>

        <strong>Question 13. How comfortable are you in dealing with other departments outside of your team? </strong><br>
        <?php setupBoxes("q13"); ?>

    <br>
		<br>

        <strong>Question 14. How good are you at constructing outlines of a project? </strong><br>
        <?php setupBoxes("q14"); ?>

		<br>
    <br>

        <strong>Question 15. How much do you care about other's opinions? </strong><br>
        <?php setupBoxes("q15"); ?>

    <br>
    <br>
  </div>

        <div id="Information Researcher" class="survey">
        <h3> Information Researcher</h3>
        <p>How Strongly do you feel about the following classes:</p>
        <strong>Question 16. INST311: How good are you at constructing outlines? </strong><br>
        <?php setupBoxes("q16"); ?>

        <br>
        <br>

        <strong>Question 17. INST335 : Teams and Organizations </strong><br>
        <?php setupBoxes("q17"); ?>

        <br>
        <br>

        <strong>Question 18. INST352 : Information User Needs and Assessment </strong><br>
        <?php setupBoxes("q18"); ?>

        <br>
        <br>

        <strong>Question 19. INST354 : Decision-Making for Information Science </strong><br>
        <?php setupBoxes("q19"); ?>

        <br>
        <br>

        <strong>Question 20. INST466 : Technology, Culture, and Society  Syllabus Repository </strong><br>
        <?php setupBoxes("q20"); ?>
        <br>
        <br>
        <input type="submit"><br>
        </form>
        </div>
</div>
</body>
</html>

<?php
  function setupBoxes($name) {
    for($i = 1; $i<=5; $i++){
      $description = "";
      if ($i == 1){
        $description = "Very Weak";
      }else if ($i == 2){
        $description = "Weak";
      }else if ($i ==3){
        $description = "Neutral";
      }else if ($i == 4){
        $description = "Strong";
      }else{
        $description = "Very Strong";
      }
      echo "<input type='radio' required='required' name='$name' id = '$name-$i' value='$i'>$description";
    }
  }

?>
