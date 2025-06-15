<?php
// Исходный массив строк
$words = ["яблоко", "банан", "дом", "программирование", "код", "компьютер", "солнце"];

// Фильтрация: оставляем только строки длиной больше 5 символов
$filteredWords = array_filter($words, function($word) {
    return strlen($word) > 5;
});

// Вывод результата
echo "Отфильтрованные слова:<br>";
foreach ($filteredWords as $word) {
    echo $word . "<br>";
}
?>
