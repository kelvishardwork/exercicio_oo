<?php
require_once "Cliente.php";
$cliente1 = new Cliente();
$cliente2 = new Cliente();
$cliente3 = new Cliente();
$cliente4 = new Cliente();
$cliente5 = new Cliente();
$cliente6 = new Cliente();
$cliente7 = new Cliente();
$cliente8 = new Cliente();
$cliente9 = new Cliente();
$cliente10 = new Cliente();
$cliente1->setarTodosCampos(1, 'Kelvis', 'Borges', '03056836166', 'Travessa Agudos');
$cliente2->setarTodosCampos(2, 'Maria', 'Rodrigues', '11056836166', '14 de Julho');
$cliente3->setarTodosCampos(3, 'Ed', 'Carlos', '3333333333333', '13 de maio');
$cliente4->setarTodosCampos(4, 'Denise', 'Jesus', '4444444444444', 'Afonso Pena');
$cliente5->setarTodosCampos(5, 'Leonardo', 'Miagy', '55555555555555', 'Via Park');
$cliente6->setarTodosCampos(6, 'João', 'Pedro', '66666666666666', 'Rua das Garças');
$cliente7->setarTodosCampos(7, 'Patricia', 'Malu', '11056836166', '14 de Julho');
$cliente8->setarTodosCampos(8, 'Hernanes', 'Silveira', '11056836166', '14 de Julho');
$cliente9->setarTodosCampos(9, 'Ana', 'Julia', '11056836166', '14 de Julho');
$cliente10->setarTodosCampos(10, 'Ingrid', 'Guimaraes', '11056836166', '14 de Julho');
$array = [$cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10];

if (isset($_GET['ordenacao'])) {
    $ord = $_GET['ordenacao'];
    if ($ord == 'descendente') {
        arsort($array);
    } else {
        asort($array);
    }
}
