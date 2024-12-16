<?php

// Menambah To do ke List
function addTodoList(string $todo)
{
    global $todoList;
    // global digunkana untuk mengakses variable di luar scope
    $number = sizeof($todoList) + 1;
    $todoList[$number] = $todo;
}