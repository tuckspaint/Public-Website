<?php

$answers = array($_POST["q1"],$_POST["q2"],$_POST["q3"],$_POST["q4"],$_POST["q5"]);
$solutions = array("Mary Shelley","Italian","The Apollo","$0.48","John McGraw");
$correct = 0;
for ($i = 0; $i < 5; $i++) {
	if  ($solutions[$i] == $answers[$i])
		$correct++;
}
$score = ($correct/5)*100;
echo "Question 1: The father of an English Gothic novelist was originally born in a town whose name is believed to mean 'on the back of the (River) Ouse' in its original use. Who was that Gothic novelist?<br>";
echo "&nbsp&nbsp&nbsp&nbspYou answered: " . $answers[0] . "<br>";
echo "&nbsp&nbsp&nbsp&nbspCorrect answer: Mary Shelley<br>";
echo "Question 2: A company that originally sold handmade playing cards in the late 1800s is working on the production of a film which controversially stars a member of the cast of the 2013 movie Delivery Man. What is the nationality of the character this performer is going to play?<br>";
echo "&nbsp&nbsp&nbsp&nbspYou answered: " . $answers[1] . "<br>";
echo "&nbsp&nbsp&nbsp&nbspCorrect answer: Italian<br>";
echo "Question 3: The individual that is thought to have created a music genre that uses the same extended chords as a sub-genre of another genre from which a popular anime derives part of its name references which American theatre in the title to one of his most popular albums?<br>";
echo "&nbsp&nbsp&nbsp&nbspYou answered: " . $answers[2] . "<br>";
echo "&nbsp&nbsp&nbsp&nbspCorrect answer: The Apollo<br>";
echo "Question 4: A brand of soft drinks which sold its products for a small price between 1886 to 1959 first advertised the drink in a newspaper on the East Cost of the United States. Adjusted for inflation, how much would this soft drink cost compared to its cost in 1959?<br>";
echo "&nbsp&nbsp&nbsp&nbspYou answered: " . $answers[3] . "<br>";
echo "&nbsp&nbsp&nbsp&nbspCorrect answer: $0.48<br>";
echo "Question 5: The act of causing vehicular incidents and fleeing the scene is punishable by up to 3 year of imprisonment in a certain special administrative region of a country in the Eastern Hemisphere. Which athlete is known for perfecting the sports technique that shares the name of this crime?<br>";
echo "&nbsp&nbsp&nbsp&nbspYou answered: " . $answers[4] . "<br>";
echo "&nbsp&nbsp&nbsp&nbspCorrect answer: John McGraw<br>";
echo "<br>You answered " . $correct . "/5 questions correctly!<br>";
echo "Your total score: " . $score . "%<br>";
?>
