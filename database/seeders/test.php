<?php

$file = __DIR__ . '/../../resources/csv/cities.csv';
// Loop through each row in the CSV file
while (($row = fgetcsv(fopen($file, 'r'))) !== false) {
  // Assuming the column order is 'code', 'province_code', 'name', 'lat', 'long'
  $provinceCode = $row[1] - 10; // Index 1 corresponds to 'province_code'
  $name = $row[2]; // Index 2 corresponds to 'name'
}
var_dump($provinceCode);
