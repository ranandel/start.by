<?

$arFilter = Array("IBLOCK_ID"=>1); //тут указываем ID Вашего инфоблка

$db_list = CIBlockSection::GetList(Array("NAME"=>"ASC"), $arFilter, false);

while ($arr = $db_list->GetNext()) {

    $arResult["SECTIONS"][$arr["ID"]]["DESCRIPTION"] = $arr["DESCRIPTION"];

}

?>