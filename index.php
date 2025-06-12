<?php
// counter.php
$counterFile = 'counter.txt';

// Проверяем, существует ли файл счетчика
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

// Получаем текущее значение счетчика
$count = (int)file_get_contents($counterFile);

// Увеличиваем счетчик на 1
$count++;

// Записываем новое значение обратно в файл
file_put_contents($counterFile, $count);

// Выводим значение счетчика
echo "Количество просмотров: " . $count;
?>