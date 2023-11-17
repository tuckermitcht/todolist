<?php

namespace App\ViewHelpers;

use mysql_xdevapi\Table;

class TodoHelper
{
    public static function renderTodo(array $todolist)
    {

        $output = '<table>';
        foreach ($todolist as $todo) {
            $output .= '<tr> <td>' . $todo['message'] . '</td> </tr>';
        }
        $output .= '</table>';
        return $output;
    }
}
