<?php 
$countries = ["ブラジル", "日本", "スペイン"];
foreach ($countries as $num => $countryName) {
  $num += 1;
  echo $num . "番目:" . $countryName . "が入っています". "\n";
}