<?php
$data = array(
    "A" => "Apple",
    "B" => "Banana",
    "C" => "Cherry"
);

echo "<pre>";
echo "---print_r---\n";
//echo "<br>";
// print_r($data);
$output = print_r($data, true);
echo $output;
// Array ( [A] => Apple [B] => Banana [C] => Cherry ) 
//echo "<br>";

echo "---var_dump---\n";
//echo "<br>";
$output = outputVarDump($data);
//var_dump($data);
echo $output;
// array(3) { ["A"]=> string(5) "Apple" ["B"]=> string(6) "Banana" ["C"]=> string(6) "Cherry" } 
//echo "<br>";

echo "---var_export---\n";
//echo "<br>";
//var_export($data);
$output = var_export($data, true);
echo $output;
// array ( 'A' => 'Apple', 'B' => 'Banana', 'C' => 'Cherry', )
echo "</pre>";

function outputVarDump($val) {
   ob_start();
   
   var_dump($val);
   
   $buff = ob_get_contents();
   ob_end_clean();
   
   return $buff;
}

