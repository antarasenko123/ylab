<?php

# 1) У вас есть массив. Необходимо отсортировать его по PRICE
for($i=1; $i <= 5; $i++) { // 5 складов
    for($i1=1; $i1 < 3; $i1++) { // по 2 товара в каждой категории - Еда и Напитки
        $array['SKLAD'.$i]['EDA']['TOVAR'.$tovar_counter++] = ['NAME' => 'EDA', 'PRICE' => mt_rand(1,1000)];
        $array['SKLAD'.$i]['NAPITKI']['TOVAR'.$tovar_counter++] = ['NAME' => 'NAPITOK', 'PRICE' => mt_rand(1,1000)];
    }
}

foreach($array as $sklad) {
    echo "<pre>";
        print_r ($sklad);
    echo "</pre>";
    foreach($sklad as $id => $group) {
        echo $id."<br>";
        print_r($group);
        //echo $group;
    }
}

echo "<pre>";
    print_r($array);
echo "</pre>";




?>