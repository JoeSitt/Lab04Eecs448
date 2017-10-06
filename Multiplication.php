<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  $i=0;
  $Arr= array();
  for ($i=1; $i <101 ; $i++) {
    $Arr[$i]= $i;
    #echo Arr[i];
  }
  echo '<table style="width:100%" style="border: 1px solid black">';
  echo '<td >';
  echo '<td style="border: 1px solid black">';
  echo 0;
  echo '</th>';
  for ($j=1; $j <101 ; $j++) {
    echo '<td style="border: 1px solid black">';
    echo $Arr[$j];
    echo '</th>';
    #echo Arr[i];
  }
  echo '</tr>';
  for ($i=1; $i <101 ; $i++) {

    echo '<td>';
    echo '<td style="border: 1px solid black">';
    echo $Arr[$i];
    echo '</th>';
    for ($j=1; $j <101 ; $j++) {
      echo '<td style="border: 1px solid black">';
      $q= $Arr[$j]*$Arr[$i];
      echo $q;
      echo '</td>';
      #echo Arr[i];
    }
    echo '</tr>';
  }
 ?>
