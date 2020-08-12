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

    /**
     * Задача Хитрое слияние массивов*
     * 1: Напишите функцию, которая будет сливать два массива таким образом: из, к
     * примеру, [1, 2, 3] и ['a', 'b', 'c'] она сделает [1, 'a', 2, 'b', 3, 'c'].
     * 2: Сделайте аналогичную функцию, которая параметрами будет принимать
     * не два массива, а произвольное количество (пусть функция параметром принимает
     * двухмерный массив, где его подмассивы – это то, что мы будем сливать).
     */
    public function Task3()
    {
        $array1 = [1, 2, 3];
        $array2 = ['a', 'b', 'c'];
        $result = self::Task3Merge($array1, $array2);
        return $result;
    }
    public function Task3Merge(...$arrays)
    {
        $maxLength = 0;
        foreach ($arrays as $array) {
        $maxLength = max(count($array), $maxLength);
        }
        $result = [];

        for ($i = 0; $i < $maxLength; $i++) {
            foreach ($arrays as $array) {
                if (isset($array[$i])) {
                $result[] = $array[$i];
                }
            };
        }
        return $result;
    }

    /**
     * 4 - Напишите функцию, которая корректно будет складывать часы и минуты.
     * Примеры: на вход функции подается такое – 1ч20мин+50мин –
     * в результатте функция выведет 2ч10мин.*** (Задача решается разными способами, приведите пример
     * одного из них)
     */
    public function Task4()
    {
        return self::Task4TimePlus("01:20:00","00:50:00");
    }
    public function Task4TimePlus() {
        $time = 0;
        $times = func_get_args();
        for ($i=0;$i<count($times);$i++) {
            $ntime = explode(":",$times[$i]);
            $time += self::Task4normal2seconds(" $ntime[0]:$ntime[1]:$ntime[2]");
        }
        return self::Task4seconds2normal($time);
    }
    //
    public function Task4h2s($h)
    {
        $h = $h/3600 % 24;
        $h = $h % 10 ? "0".$h : $h;
        $h = $h == 0 ? $h = "00" : $h;
        return $h;
    }
    // Переводим минусты в секунды
    public function Task4m2s($m)
    {
        $m = $m/60 % 60;
        $m = $m % 10 ? "0".$m : $m;
        $m = $m == 0 ? $m = "00" : $m;
        return $m;
    }

    public function Task4s($s)
    {
        $s = $s % 60;
        $s = $s % 10 ? "0".$s : $s;
        $s = $s == 0 ? $s = "00" : $s;
        return $s;
    }
    protected function Task4normal2seconds($normal)
    {
        $hms = explode(":",$normal);
        $h = $hms[0]*3600;
        $m = $hms[1]*60;
        $s = $hms[2];
        return $h+$m+$s;
    }
    protected function Task4seconds2normal($seconds)
    {
        $v = max($seconds,0);
        $h = self::Task4h2s($v);
        $m = self::Task4m2s($v);
        $s = self::Task4s($v);
        return "$h:$m:$s";
    }

    /**
     * 5 - Дан многомерный массив $arr. Напишите функцию, которая принимает строки
     * вида 'строка1.строка2.строка3' – буквы разделенные точками, а возвращает элемент
     * многомерного массива $arr['строка1']['строка2']['строка3']. Количество точек в строке
     * может быть любым, вложенность массива тоже любая, ключи массива не содержат
     * точек.
     */
    public function Task5() {
        $value = '2.2.2';
        $array = [1,2,[1=>2, 2 => [1,5,3]]];
        $array = self::Task5arrayGet($array, $value);
        return $array;
    }
    public function Task5arrayGet($array, $key) {
        $keys = explode('.', $key);
        $result = $array;
        while ($k = array_shift($keys)) {
            if (empty($result[$k])) { throw new Exception('element '.$key.' found'); }
            $result = $result[$k];
        }
        return $result;
    }

}