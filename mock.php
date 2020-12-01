<?php
    $show_complete_tasks = rand(0, 1);
    $head_title = '';

    $projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

    $tasks = [
        [
            'name' => 'Собеседование в IT компании',
            'data' => '01.12.2019',
            'category' => 'Работа',
            'status' => false
        ],
        [
            'name' => 'Выполнить тестовое задание',
            'data' => '25.12.2019',
            'category' => 'Работа',
            'status' => false
        ],
        [
            'name' => 'Сделать задание первого раздела',
            'data' => '21.12.2019',
            'category' => 'Учеба',
            'status' => true
        ],
        [
            'name' => 'Встреча с другом',
            'data' => '22.12.2019',
            'category' => 'Входящие',
            'status' => false
        ],
        [
            'name' => 'Купить корм для кота',
            'data' => 'Нет',
            'category' => 'Домашние дела',
            'status' => false
        ],
        [
            'name' => 'Заказать пиццу',
            'data' => 'Нет',
            'category' => 'Домашние дела',
            'status' => false
        ],
];
?>
