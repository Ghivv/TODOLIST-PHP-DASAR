<?php

// Menghapus To do di List
function removeTodoList(int $number)
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    } 
    
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($tofoList[sizeof($todoList)]);

    return true;
}