<?php
// Индексированные массивы
$fruits = ["яблоко", "банан", "персик", "киви", "апельсин"];
$colors = ["красный", "синий", "зеленый", "желтый", "черный", "фиолетовый"];

// Ассоциативные массивы
$student = [
    "имя" => "Алия",
    "курс" => 3,
    "средний_балл" => 3.7,
    "группа" => "ИС-21",
    "стипендия" => true
];

$car = [
    "марка" => "Hyundai",
    "год" => 2020,
    "цвет" => "белый",
    "пробег" => 35000
];

$product = [
    "название" => "Наушники",
    "цена" => 15990,
    "категория" => "Электроника",
    "бренд" => "Xiaomi"
];

// Вывод всех массивов с помощью foreach
echo "Массив fruits:\n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

echo "\nМассив colors:\n";
foreach ($colors as $color) {
    echo $color . "\n";
}

echo "\nМассив student:\n";
foreach ($student as $key => $value) {
    echo "$key: $value\n";
}

echo "\nМассив car:\n";
foreach ($car as $key => $value) {
    echo "$key: $value\n";
}

echo "\nМассив product:\n";
foreach ($product as $key => $value) {
    echo "$key: $value\n";
}
?>
