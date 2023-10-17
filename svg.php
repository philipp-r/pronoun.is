<?php
header('Content-Type: image/svg+xml');

// Badge
if(
    !empty($_GET['subjPronoun']) && preg_match("/^[a-zA-Z]+$/", $_GET['subjPronoun']) &&
    !empty($_GET['objPronoun']) && preg_match("/^[a-zA-Z]+$/", $_GET['objPronoun'])
) {
  //select language
  if( !empty($_GET['lang']) && $_GET['lang'] == "DE" ) { $badgeLeftText = "Pronomen"; }
  else { $badgeLeftText = "pronouns"; }

  //select color
  if( !empty($_GET['color']) && preg_match("/^[a-zA-Z0-9]+$/", $_GET['color']) ) { $badgeColor = $_GET['color']; }
  else { $badgeColor = "blue"; }

  // build pronouns
  $badgeRightText = $_GET['subjPronoun']."%2F".$_GET['objPronoun'];

  // Badge
  echo file_get_contents("https://img.shields.io/badge/".$badgeLeftText."-".$badgeRightText."-".$badgeColor);
}

// error
else {
  echo file_get_contents("https://img.shields.io/badge/invalid%20content-red");
}
