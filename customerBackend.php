<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
 echo '<link rel="stylesheet" type="text/css" href="style.css">';
  $name = $_POST["name"];
  $email = $_POST["Email"];
  $sh = $_POST["sh"];
  $pass = $_POST["Password"];
  $i1 = $_POST["i1"];
  $i2 = $_POST["i2"];
  $i3 = $_POST["i3"];

  $totalcost=0;
  $cost=0;
  echo "Receipt:"."<br>";
  echo "Welcome $name"."<br>";
  echo "Email:$email"."<br>";
  echo "Password:$pass"."<br>";
  //echo "Name:$name"."<br>";
  $cost=1*$i1;
  $totalcost=$cost;
  echo '<table style="width:auto" style="border: 1px solid black">';
  echo '<th style="border: 1px solid black">';
  echo "Items";
  echo '</th>';
  echo '<th style="border: 1px solid black">';
  echo "Quantity";
  echo '</th>';
  echo '<th style="border: 1px solid black">';
  echo "Cost per item";
  echo '</th>';
  echo '<th style="border: 1px solid black">';
  echo "Cost";
  echo '</th>';
  echo '</tr>';
  //echo "You bought $i1 Totally working real nice Cars for $1 each totalling $cost"."<br>";

  echo '<td style="border: 1px solid black">';
  echo "Totally working real nice Car";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$i1";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$1";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$$cost";
  echo '</td>';
  echo '</tr>';



  $cost=.02*$i2;
  $totalcost=$cost+$totalcost;
  //echo "You bought $i2 pennies for $0.02 each totalling $cost"."<br>";
  echo '<td style="border: 1px solid black">';
  echo "Penny";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$i2";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$0.02";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$$cost";
  echo '</td>';
  echo '</tr>';


  $cost=70*$i3;
  $totalcost=$cost+$totalcost;
  //echo "You bought $i3 Tacos for $70 each totalling $cost"."<br>";
  echo '<td style="border: 1px solid black">';
  echo "Taco";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$i3";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$70";
  echo '</td>';

  echo '<td style="border: 1px solid black">';
  echo "$$cost";
  echo '</td>';
  echo '</tr>';


  if ($sh==1) {
    //echo "You selected overnight shipping for $50"."<br>";
    $cost=50;
    $totalcost=$totalcost+50;
    echo '<td colspan="2" style="border: 1px solid black">';
    echo "Overnight shipping";
    echo '</td>';

    echo '<td style="border: 1px solid black">';
    echo "$50";
    echo '</td>';

    echo '<td style="border: 1px solid black">';
    echo "$$cost";
    echo '</td>';
    echo '</tr>';
  }elseif ($sh==3) {
    //echo "You selected three day shipping for $5"."<br>";
    $cost=5;
    $totalcost=$totalcost+5;
    echo '<td colspan="2" style="border: 1px solid black">';
    echo "three dayshipping";
    echo '</td>';

    echo '<td style="border: 1px solid black">';
    echo "$5";
    echo '</td>';

    echo '<td style="border: 1px solid black">';
    echo "$$cost";
    echo '</td>';
    echo '</tr>';
  }else {
    //echo "You selected Free seven day shipping"."<br>";
    $cost=0;
    echo '<td colspan="2" style="border: 1px solid black">';
    echo "Free 7 day shipping";
    echo '</td>';

    echo '<td style="border: 1px solid black">';
    echo "$0";
    echo '</td>';

    echo '<td style="border: 1px solid black">';
    echo "$$cost";
    echo '</td>';
    echo '</tr>';
  }
  //echo "Total cost: $totalcost"."<br>";
  echo '<td colspan="3" style="border: 1px solid black">';
  echo "Total cost";
  echo '</td>';


  echo '<td style="border: 1px solid black">';
  echo "$$totalcost";
  echo '</td>';
  echo '</tr>';

?>
