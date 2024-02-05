<?php

//------- Sql DataBase -------
$serverName = "localhost"; // ادیت نشود
$db_name    = "id20460852_userinfo"; // نام دیتابیس
$db_user    = "id20460852_userinfo"; // یوزر دیتابیس
$db_pass    = "Habib12."; // پسورد دیتابیس

$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);

if(!$conn){
    die('failed ' . mysqli_connect_error());
}
//------- Data -------
$token        = "6467269928:AAEgVJl5VNL26NS8iLqc5VDBvgc8xIwfzOc"; // توکن ربات
$admin        = "810707085"; // آیدی عددی ادمین
$vpnname      = "Vpn(Digital Ocean)"; // اسم ربات
$channel_bot  = "https://t.me/+OUM8qfi_yCY4ZjM0"; // آیدی کانال جوین اجباری بدون @
$bot_id       = "Digitalovpn_bot"; // آیدی ربات بدون @
$cartP        = "****-****-****-****"; // شماره کارت
$cartN        = ""; // نام مالک شماره کارت
$gig25        = 40; // قیمت سرور 25 گیگ
$gig50        = 100; // قیمت سرور 50 گیگ
$gig75        = 150; // قیمت سرور 75 گیگ
$gig100       = 180; // قیمت سرور 100 گیگ
$chanSef      = ""; // آیدی کانال گزارشات با @
$MerchantID   = ""; // مرچند کد درگاه زرین پال
$adminmail    = ""; // ایمیل ادمین
$phoneadmin   = ""; // شماره تلفن ادمین
$web          = ""; // آدرس پوشه ربات

//------- Function -------
    
    function bot($method, $user = []){
        global $token;
    $url = "https://api.telegram.org/bot$token"."/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $user);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

mysqli_multi_query(
    $conn,
    "CREATE TABLE `users` (
        `id` bigint PRIMARY KEY,
        `step` varchar(20),
        `ref` bigint(20),
        `coin` bigint,
        `phone` bigint,
        `account` text
        ) default charset = utf8mb4;
        CREATE TABLE `vpn` (
        `id` bigint PRIMARY KEY,
        `code` text,
        `hajm` varchar(20),
        `contry` text
        ) default charset = utf8mb4;
        CREATE TABLE `Bought` (
        `id` bigint PRIMARY KEY,
        `code` text,
        `contry` text,
        `Owner` bigint,
        `date` text
        ) default charset = utf8mb4;
        CREATE TABLE `moton` (
        `tarfe` text,
        `android` text,
        `windows` text,
        `ios` text,
        `testserver` text
        ) default charset = utf8mb4;
        CREATE TABLE `Settings` (
        `bot` text,
        `pay` text,
        `sharj` text,
        `support` text
        ) default charset = utf8mb4;");
    if(mysqli_connect_errno()){
    echo "به دلیل مشکل زیر، اتصال برقرار نشد : <br />" . mysqli_connect_error();
    die();
}

?>