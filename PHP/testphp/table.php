<?php

$students = array(array('Name' => "sid",
                  'Age' => 32,
                  'Weight' => 65),
                  array('Name' => "revor",
                        'Age' => 31,
                        'Weight' => 87),
                  array('Name' => "nomad",
                        'Age' => 34,
                        'Weight' => 78));

// echo $students[0]['Name'].' ';echo $students[0]['Age'].' ';echo $students[0]['Weight'].'<br>';
// echo $students[1]['Name'].' ';echo $students[1]['Age'].' ';echo $students[1]['Weight'].'<br>';
// echo $students[2]['Name'].' ';echo $students[2]['Age'].' ';echo $students[2]['Weight'].'<br>';

foreach ($students as $stud => $innerarr) {
  // echo $innerarr;
  foreach ($innerarr as $item) {
    echo $item.' ';
  }
  echo "<br>";
}


 ?>
