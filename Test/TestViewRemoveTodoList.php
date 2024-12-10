<?php

require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
addTodoList("Belajar Mysql");
addTodoList("Belajar Laravel");

showTodoList();

viewRemoveTodoList();

showTodoList();