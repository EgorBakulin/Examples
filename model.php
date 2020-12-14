<?php

//get all available parts
$dir_names = scandir('./parts');

$new_dir_names = array();
foreach ($dir_names as $dir) {
  if (scandir("./parts/$dir") && false === strpos($dir, '.')) {
    array_push($new_dir_names, $dir);
  }
}
$dir_names = $new_dir_names;

//get current part
if (key_exists('part', $_GET) &&
    in_array($_GET['part'], $dir_names) && $_GET['part'] != 'form') {
  $part = $_GET['part'];
}
else {
  $part = 'form';
}

// fill view components
$part_dir = "./parts/$part/";
$part_index = "$part_dir$part.php";
$part_style = $part_dir . 'css/style.css';
