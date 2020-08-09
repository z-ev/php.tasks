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
}