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

?>
