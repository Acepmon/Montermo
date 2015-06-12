<?php 

function break_array($array, $page_size) {

  $arrays = array();
  $i = 0;

  foreach ($array as $index => $item) {
    if ($i++ % $page_size == 0) {
      $arrays[] = array();
      $current = & $arrays[count($arrays)-1];
    }
    $current[] = $item;
  }

  return $arrays; 
}

function getMonthText($monthNum) {
  switch($monthNum) {
    case 1: return "Jan";
    case 2: return "Feb";
    case 3: return "March";
    case 4: return "April";
    case 5: return "May";
    case 6: return "June";
    case 7: return "July";
    case 8: return "Aug";
    case 9: return "Sep";
    case 10: return "Oct";
    case 11: return "Nov";
    case 12: return "Dec";
  }
}

?>