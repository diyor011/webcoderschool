<?php 

$route = $_GET['route'] ?? 'main';

$arrayPages = [
    'about'  => ['page_name' => 'Biz haqimizda',
                'page_img'  => 'info.png'],
    'course'  => ['page_name' => 'Kurslar',
                'page_img'  => 'course.png'],
    'comand'  => ['page_name' => 'Komanda',
                'page_img'  => 'comand.png'],
    'location'  => ['page_name' => 'Manzil',
                'page_img'  => 'location.png']
];

$pageTitle = $arrayPages[$route]['page_name'];
?>