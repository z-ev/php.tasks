<?php


namespace App\tests;


use App\ArrayTask;
use PHPUnit\Framework\TestCase;

class ArrayTaskTest extends TestCase
{
    private $solve;

    protected function setUp() : void
    {
        $this->solve = new ArrayTask();
    }

    protected function tearDown(): void
    {
        unset($this->solve);
    }

    /**
     * Дан массив с элементами 'Привет, ', 'мир' и '!'.
     * Необходимо вывести на экран фразу 'Привет, мир!'.
     */
     public function test_array_task_1()
     {
         $this->assertEquals('Привет, мир!', $this->solve->Task1());
     }

}