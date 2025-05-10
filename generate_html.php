<?php
// 1. Чтение текста из файла Input.txt
$inputFile = 'Input.txt';
$text = file_get_contents($inputFile);

// 2. Удаление лишних пробелов с помощью регулярного выражения
$cleanedText = preg_replace('/\s+/', ' ', $text); // заменяем множественные пробелы на один

// 3. Подсчёт количества лишних пробелов
$originalSpaces = substr_count($text, ' ');
$correctSpaces = substr_count($cleanedText, ' ');

$extraSpaces = $originalSpaces - $correctSpaces;

// 4. Вывод информации о лишних пробелах
echo "Оригинальный текст: \"$text\"<br>";
echo "Очищенный текст: \"$cleanedText\"<br>";
echo "Количество лишних пробелов: $extraSpaces<br>";

// 5. Генерация даты и времени
$dateNow = date("Y-m-d H:i:s");

// 6. Формирование HTML и запись в файл
$html = <<<HTML
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Бузикова Таня</title>
</head>
<body>
    <h1>$dateNow</h1>
    <h2>$cleanedText</h2>
</body>
</html>
HTML;

file_put_contents('output.html', $html);
echo "HTML файл успешно создан: output.html";
?>