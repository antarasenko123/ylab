<?php
/*
Задача №3. Создать абстрактный класс.
Он должен содержать обязательные к реализации 2 метода: save, new.
А также внутри него должен быть реализован метод: getName - возвращающий произвольную строку.
Далее реализовать свой класс, который наследуется от абстрактного класса.
Реализовать все требуемые методы (содержимое реализации не имеет значения),
переопределить метод getName (он должен возвращать строку родительского метода + надпись “Здорово!”)
*/

abstract class Example
{
    abstract public function Save();
    abstract public function New();
    public function getName() {
        return "Случайная строка: ".mt_rand(0,1000);
    }
}

class Ylab extends Example
{
    public function Save() {}
    public function New() {}
    public function getName() {
        return parent::getName() . '. Здорово!';
    }
}

$n = new Ylab;
echo $n -> getName();    
