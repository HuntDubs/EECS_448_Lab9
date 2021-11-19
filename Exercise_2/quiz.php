<?php
  //access the global array called $_POST to get the values from the text fields
  $answer1 = $_POST["capital"];
  $answer2 = $_POST["today"];
  $answer3 = $_POST["metal"];
  $answer4 = $_POST["rapper"];
  $answer5 = $_POST["year"];

  echo "Which band released their first album in the 90's?<br>";
  echo "You Answered: " . $answer1 . "<br>";
  echo "Correct Answer: Slipknot<br>";
  echo "<br>";
  echo "Which of these bands still make music today(11/16/21)?<br>";
  echo "You Answered: " . $answer2 . "<br>";
  echo "Correct Answer: Korn<br>";
  echo "<br>";
  echo "Which of these bands are not considered 'nu metal'?<br>";
  echo "You Answered: " . $answer3 . "<br>";
  echo "Correct Answer: Nine Inch Nails<br>";
  echo "<br>";
  echo "Which of these bands have never collaborated with a rapper?<br>";
  echo "You Answered: " . $answer4 . "<br>";
  echo "Correct Answer: Grouplove<br>";
  echo "<br>";
  echo "Which band did not release an album in the year 2021?<br>";
  echo "You Answered: " . $answer5 . "<br>";
  echo "Correct Answer: Gus Dapperton<br>";
  echo "<br>";

  $score = 0;
  if($answer1 == "Slipknot"){  $score++; }
  if($answer2 == "Deftones"){  $score++; }
  if($answer3 == "Nine Inch Nails"){  $score++; }
  if($answer4 == "Grouplove"){  $score++; }
  if($answer5 == "Gus Dapperton"){  $score++; }
  $percent = ($score*20);

  echo "Score: " . $score . " out of 5<br>";
  echo "Percentage Correct: " . $percent . "%<br>";

?>
