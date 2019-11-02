# Easy-PHP-Timer
An easy-to-implement PHP Script for time-testing PHP Functions, Scripts and Processes.

```
$Start_Seconds = microtime(true);

for ($i = 0; $i < 1000; $i++) {

  // PROCESSES TO TEST
}

$End_Seconds = microtime(true);

echo '<p>Time taken to Create and Append Script '.$i.' times: '.($End_Seconds - $Start_Seconds).' seconds</p>';
```
