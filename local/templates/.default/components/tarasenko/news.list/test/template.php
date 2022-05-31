<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php

    function print2($arr) {
        echo "<pre>"; print_r($arr); echo "</pre>";
    }

    $arFilter = Array("IBLOCK_ID"=>6, "ID"=> 320);
    $res = CIBlockElement::GetList(Array(), $arFilter); // с помощью метода CIBlockElement::GetList вытаскиваем все значения из нужного элемента
    if ($ob = $res->GetNextElement()){; // переходим к след элементу, если такой есть
        $arFields = $ob->GetFields(); // поля элемента
        //print2($arFields);
        $arProps = $ob->GetProperties(); // свойства элемента
        print2($arProps);
    }

/*    foreach($arResult['ITEMS'] as $k => $v) {
        echo '<p>' . $v['ID'];
        $res = CIBlockElement::GetByID($v["ID"]);
        if ($ar_res = $res->GetNext())
            //print2($ar_res);
        //echo '1';

        $res = CIBlockElement::GetProperty(6, 320, array(), array());
        while ($ob = $res->GetNext()) {
            $VALUES = $ob['VALUE'];
        }
        echo $VALUES;
    }*/
?>
