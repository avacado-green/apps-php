<?php
function getCurrentTime() {
    $hours = date("H");
    $minutes = date("i");

    // Функция склонения часов
    $hoursWord = "часов";
    if ($hours % 10 == 1 && $hours != 11) {
        $hoursWord = "час";
    } elseif (in_array($hours % 10, [2, 3, 4]) && !in_array($hours, [12, 13, 14])) {
        $hoursWord = "часа";
    }

    // Функция склонения минут
    $minutesWord = "минут";
    if ($minutes % 10 == 1 && $minutes != 11) {
        $minutesWord = "минута";
    } elseif (in_array($minutes % 10, [2, 3, 4]) && !in_array($minutes, [12, 13, 14])) {
        $minutesWord = "минуты";
    }

    return "$hours $hoursWord $minutes $minutesWord";
}

echo getCurrentTime();
?>