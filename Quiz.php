<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//require_once 'H:\google php stuff\google-api-php-client-2.2.0\vendor\autoload.php';
//$ composer require zendframework/zendframework
//$client = new Google_Client();
//$client->useApplicationDefaultCredentials();
//$client->addScope(Google_Service_Drive::DRIVE);
  $name = $_POST["name"];
  $q1 = $_POST["q1"];
  $q2 = $_POST["q2"];
  $q3 = $_POST["q3"];
  $q4 = $_POST["q4"];
  $q5 = $_POST["q5"];
  $correct=0;

  echo "Name: ".$name."<br>";
  echo "1. What is a horse?"."<br>";
  echo "You selected:   $q1 "."<br>";
  if ($q1=="How much you could eat") {
    echo "You got the right answer!";
    $correct=$correct+1;
  }else if ($q1=="Your mom.") {
    echo "Hey you leave her out of this. She is a nice lady.";
    echo "<br>"."Correct answer: How much you could eat ";
  }else{
    echo "Well someones an ignoramus.";
        echo "<br>"."Correct answer: How much you could eat ";
  }
echo "<br>";
  echo "2. Is this a question?"."<br>";
  echo "You selected:   $q2 "."<br>";
  if ($q2=="Yes?") {
    echo "Yes, yes it is. You got the right answer!";
    $correct=$correct+1;
  }else if ($q2=="How much you could eat") {
    echo "Dude that answer only works once.";
    echo "<br>"."Correct answer: Yes? ";
  }else{
    echo "Ok a question is a sentence worded or expressed so as to elicit information. *shakes head in pity*";
    echo "<br>"."Correct answer: Yes?";
  }
echo "<br>";
  echo "3. 2+2=?"."<br>";
  echo "You selected:   $q3 "."<br>";
  if ($q3=="4") {
    echo "Did you cheat and use a calculator?? Either way, You got the right answer";
    $correct=$correct+1;
  }else if ($q3=="four") {
    echo "ohhhh so close. The more correct answer was 4.";
  }else{
    echo "How are you even breathing? the correct answer was 4";
  }
echo "<br>";
  echo "4. Can you click an answer?"."<br>";
  echo "You selected:   $q4 "."<br>";
  if ($q4=="yes") {
    echo "You got the right answer, and proved your ingenuity in a dark time of human existance where lazyness has tried to take over.";
    $correct=$correct+1;
  }else if ($q4=="tooo lazy...") {
    echo "ohhhh so close. The only thing you had to do was move the mouse down one more answer... I understand your pain.";
    echo "<br>"."Correct answer: yes";
  }else if ($q4=="You cant tell me what to do!") {
    echo "True. but i dont have to give you a fake internet point either.";
    echo "<br>"."Correct answer: yes";
  }else{
    echo "How did you even get here if you cant click an answer?";
    echo "<br>"."Correct answer: yes...hopefuly,";
  }
echo "<br>";
  echo "What is the Airspeed velocity of an unladen swallow?"."<br>";
  echo "You selected:   $q5 "."<br>";
  if ($q5=="African or european?") {
    echo "You got the right answer, side note i dont know AHHHHHHHHHHHHHhhhhhhhhhhh........";
    $correct=$correct+1;
  }else if ($q5=="1.21 gigawatts") {
    echo "Wrong franchise marty.";
    echo "<br>"."Correct answer: African or european?";
  }else if ($q5=="42") {
    echo "That may be the answer to life, but not this.";
        echo "<br>"."Correct answer: African or european?";
  }else{
    echo "Someone doesnt understand internet memes.";
        echo "<br>"."Correct answer: African or european?";
  }
echo "<br>";
$score=0;
  echo "You answered   $correct out of 5 "."<br>";
  for ($i=0; !($i >$correct) ; $i++) {
    $score=$score+20;
  }
  echo "Your Score: $score% "."<br>";



  //$file=fopen("https://docs.google.com/document/d/12P7TezSzG5Bj1tMqEyj9WAr0nj5l5QpAS0MsaBWFlwA/edit?usp=sharing","a+") or exit("Unable to open file!");

   //fwrite($file,$_POST["name"]."\n");
   //fwrite($file,$correct."\n");
   //fwrite($file,"\n");


//fclose($file);
?>
