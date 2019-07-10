<?php
$urls = array('https://www.homelessperiodproject.org/',"https://www.helpingwomenperiod.org/","https://isupportthegirls.org/"); //specify array of possible URLs
$rand = rand(0,count($urls)-1); //get random number between 0 and array length
$location = $urls[$rand]; //get random item from array
header ('HTTP/1.1 302 Found'); //send header
header ('Location: '.$location);
?>
