<?php
// Функция для вычисления среднего значения оценок
function calculateAverage($grades) {
    // Проверка, что массив не пустой
    if (empty($grades)) {
        return "Массив оценок пуст.";
    }

    // Вычисление суммы и количества оценок
    $sum = array_sum($grades);
    $count = count($grades);

    // Расчет среднего значения
    $average = $sum / $count;

    // Возвращаем результат
    return $average;
}

// Тестирование функции
$grades1 = [90, 85, 78, 92];
$grades2 = [100, 100, 100];
$grades3 = [];

echo "Средний балл 1: " . calculateAverage($grades1) . "<br>";
echo "Средний балл 2: " . calculateAverage($grades2) . "<br>";
echo "Средний балл 3: " . calculateAverage($grades3) . "<br>";
?>
