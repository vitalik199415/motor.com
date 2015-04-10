<?php

/**
 * Рекурсивная функция для реструктуризации массива
 *
 * @param array   $arrayForFill          Массив для заполнения.
 *                                       Этот массив будет содержать "правильное"
 *                                       представление $_FILES
 * @param string  $currentKey            Ключ текущей позиции
 * @param mixed   $currentMixedValue     Значение текущей позиции
 * @param string  $fileDescriptionParam  Текущий параметр описания файла
 *                                       (name, type, tmp_name, error или size)
 * @return void
 */
function rRestructuringFilesArray(&$arrayForFill, $currentKey, $currentMixedValue, $fileDescriptionParam)
{
    if (is_array($currentMixedValue)) {
        foreach ($currentMixedValue as $nameKey => $mixedValue) {
            rRestructuringFilesArray($arrayForFill[$currentKey],
                $nameKey,
                $mixedValue,
                $fileDescriptionParam);
        }
    } else {
        $arrayForFill[$currentKey][$fileDescriptionParam] = $currentMixedValue;
    }
}

// массив, в котором будем формировать "правильный" $_FILES
$arrayForFill = array();

// первый уровень проходим без изменения
foreach ($_FILES as $firstNameKey => $arFileDescriptions) {

    // а вот со второго уровня интерпритатор делает то,
    // что мне в большинстве случаев не подходит
    foreach ($arFileDescriptions as $fileDescriptionParam => $mixedValue) {
        rRestructuringFilesArray($arrayForFill,
            $firstNameKey,
            $_FILES[$firstNameKey][$fileDescriptionParam],
            $fileDescriptionParam);
    }
}
// перегружаем $_FILES сформированным массивом
$_FILES = $arrayForFill;