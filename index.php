<?php

use App\ArrayTask;

require_once './vendor/autoload.php';
$result = new ArrayTask();

?>

<h1>Сборник PHP задач</h1>
<h2>Отработка навыков решения задач c использованием TDD</h2>

<h3>Массивы</h3>
<p>Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести на экран фразу 'Привет, мир!'.</p>
<pre>
<?php
echo $result->Task1();
?>
</pre>

<p>Дан массив с числами. Запишите в новый массив только те числа, в которых есть цифра 5</p>
<pre>
<?php
var_dump($result->Task2());
?>
</pre>