<?php
/*
Задача №1. У вас есть массив. Необходимо отсортировать его по PRICE
*/

for($i=1; $i <= 5; $i++) { // создаем массив, заполняем товарами
    for($i1=1; $i1 <= 3; $i1++) {
        $array['SKLAD'.$i]['EDA']['TOVAR'.$tovar_counter++] = ['NAME' => 'EDA', 'PRICE' => mt_rand(1,1000)];
        $array['SKLAD'.$i]['NAPITKI']['TOVAR'.$tovar_counter++] = ['NAME' => 'NAPITOK', 'PRICE' => mt_rand(1,1000)];
    }
}

/*
Перебираем созданный массив и создаем новый массив с ключом = ID товара и
значением = Цена товара
*/

foreach($array as $sklad_id => $items_group) {
    foreach($items_group as $id => $items) {
        foreach($items as $id => $item) {
            $tovar_list[$id] = $item['PRICE'];
        }
    }
}

// Сортируем массив по убыванию цены, т.к. порядок сортировки в задаче не указан
arsort($tovar_list);
echo "<pre>"; print_r($tovar_list); echo "</pre>";

?>