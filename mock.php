<?php
    $show_complete_tasks = rand(0, 1);
    $head_title = '';

    $projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

    $tasks = [
        [
            'name' => 'Собеседование в IT компании',
            'data' => '01.02.2021',
            'category' => 'Работа',
            'status' => false
        ],
        [
            'name' => 'Выполнить тестовое задание',
            'data' => '25.02.2021',
            'category' => 'Работа',
            'status' => false
        ],
        [
            'name' => 'Сделать задание первого раздела',
            'data' => '21.02.2021',
            'category' => 'Учеба',
            'status' => true
        ],
        [
            'name' => 'Встреча с другом',
            'data' => '22.02.2021',
            'category' => 'Входящие',
            'status' => false
        ],
        [
            'name' => 'Купить корм для кота',
            'data' => '20.01.2021',
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
