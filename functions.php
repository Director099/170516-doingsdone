<?php
    function include_template($name, $data) {
        $name = 'templates/' . $name;
        $result = '';

        if (!is_readable($name)) {
            return $result;
        }

        ob_start();
        extract($data);
        require $name;

        $result = ob_get_clean();

        return $result;
    }

    function count_task($list_task, $name) {
        $counter = 0;
        foreach ($list_task as $key) {
            if ($key['category'] === $name) {
                $counter++;
            }
        };

        return print($counter);
    };

    function deadline($end_time) {
        // Обязательно продумать
        /*
            1. Проверку на слово 'Нет' - в доке есть но мне не совсем понятно
            2. Определение даты по часовому поясу, время показывает время но отсчет след. дня начинается с 02:00:00
         */
        date_default_timezone_set('Asia / Yekaterinburg');

        $current_time = time();
        $secs_in_day = 86400;
        $end_ts = strtotime($end_time . 'tomorrow');

        $ts_diff = $end_ts - $current_time;
        $days_until_end =  floor($ts_diff / $secs_in_day);
        $HOURS_DAY = 24;
        return $days_until_end * $HOURS_DAY;
    };
?>
