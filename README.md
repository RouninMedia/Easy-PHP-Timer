# Easy-PHP-Timer
A quick PHP Script for time-testing PHP Functions, Scripts and Processes.

```
$Start_Seconds = microtime(true);

for ($i = 0; $i < 1000; $i++) {

  $Test_String = createScript($Test_Script_JSON);
  $Time_Test_Array[] = $Test_String;
}

$End_Seconds = microtime(true);

echo '<p>Time taken to Create and Append Script '.$i.' times: '.($End_Seconds - $Start_Seconds).' seconds</p>';
```
