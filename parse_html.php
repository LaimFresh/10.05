<?php
// Загрузка содержимого HTML
$htmlContent = file_get_contents('output.html');

// Создание DOMDocument для парсинга
$dom = new DOMDocument();
@$dom->loadHTML($htmlContent); // @ подавляет предупреждения о некорректном HTML

// Функция для получения текста первого элемента по тегу
function getFirstElementText($tagName, $dom) {
    $elements = $dom->getElementsByTagName($tagName);
    return $elements->length > 0 ? $elements->item(0)->nodeValue : null;
}

// Получаем данные
$title = getFirstElementText('title', $dom);
$h1 = getFirstElementText('h1', $dom);
$h2 = getFirstElementText('h2', $dom);

// Вывод результатов
echo "<h2>Результаты парсинга:</h2>";
echo "<p><strong>Title:</strong> $title</p>";
echo "<p><strong>H1:</strong> $h1</p>";
echo "<p><strong>H2:</strong> $h2</p>";
?>