<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$Start_Seconds = microtime(true);

for ($i = 0; $i < 1000; $i++) {

  $Test_String = createScript($Test_Script_JSON);
  $Time_Test_Array[] = $Test_String;
}

$End_Seconds = microtime(true);

echo '<p>Time taken to Create and Append Script '.$i.' times: '.($End_Seconds - $Start_Seconds).' seconds</p>';

?>
