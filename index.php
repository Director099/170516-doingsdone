<?php
    require_once('functions.php');
    require_once('mock.php');

    $main_content = include_template('main.php', [
        'tasks' => $tasks,
        'show_complete_tasks' => $show_complete_tasks,
    ]);
    $layout_content = include_template('layout.php', [
        'tasks' => $tasks,
        'projects' => $projects,
        'main_content' => $main_content,
        'head_title' => 'Дела в порядке - Главная страница',
        'user_name' => 'Константин'
    ]);

    print($layout_content);
?>
