<?php
error_reporting(-1);
$root=__DIR__.DIRECTORY_SEPARATOR;
require $root.'prepare.php'; #Здесь будут производиться подготовительные действия, объявления функций и т.д.
require $root.'auth.php'; #Здесь будет происходить авторизация пользователя
require $root.'account_current.php'; #Здесь мы будем получать информацию об аккаунте
require $root.'fields_info.php'; #Получим информацию о полях
require $root.'leads_list.php'; #Получим информацию о полях
require $root.'lead_update.php'; #Здесь будет происходить добавление сделки
?>