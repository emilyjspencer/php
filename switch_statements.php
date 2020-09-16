<?php


function whatDoesBmiMean($bmi){
  switch ($bmi){
    
    case $bmi < 18.5:  
      echo "underweight";
      break;
    case $bmi > 18.5 && $bmi < 24.9:  
      echo "normal";
      break;
    case $bmi > 25 && bmi < 29.9:  
      echo "overweight";
      break; 
    case $bmi > 30;
      echo "obese";
      break;
    default: 
      echo "invalid";
  }
}

whatDoesBmiMean(15);
echo "\n\n";
whatDoesBmiMean(29);
echo "\n\n";
whatDoesBmiMean(38);
echo "\n\n";
whatDoesBmiMean(20);
whatDoesBmiMean(-1);