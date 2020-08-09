<?php


namespace App;


class ArrayTask
{

    /**
    * Дан массив с элементами 'Привет, ', 'мир' и '!'.
    * Необходимо вывести на экран фразу 'Привет, мир!'.
    */
    public function Task1()
    {
        $array = ['Привет, ', 'мир', '!'];
        $result = $array[0].$array[1].$array[2];
        return $result;
    }

    /**
    * Дан массив с числами. Запишите в новый массив только те числа, в которых есть цифра 5
    */
    public function Task2()
    {
        $searchValue = 5;
        $searchArray = [2,1,4,3,5,7,6,9,8,11,10,15,29,25,52,13,51];
        $result = self::Task2GetValue($searchArray, $searchValue);
        return $result;
    }
    public function Task2GetValue($array, $value)
    {
        $result = [];
        foreach ($array as $item) {
            if (strpos(strval($item), strval($value)) !== false) { $result[] = $item;}
        }
        return $result;
    }



}