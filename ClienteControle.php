<?php
require_once "ClienteInterface.php";
require_once "Cliente.php";
require_once "ClienteFisico.php";
require_once "ClienteJuridico.php";
$cliente1 = new ClienteFisico();
$cliente2 = new ClienteJuridico();
$cliente3 = new ClienteFisico();
$cliente4 = new ClienteJuridico();
$cliente5 = new ClienteFisico();
$cliente6 = new ClienteJuridico();
$cliente7 = new ClienteFisico();
$cliente8 = new ClienteJuridico();
$cliente9 = new ClienteJuridico();
$cliente10 = new ClienteJuridico();
$cliente1->setarTodosCampos(1, 'Kelvis', 'Borges', '03056836166', 'Travessa Agudos',2);
$cliente2->setarTodosCampos(2, 'Maria', 'Rodrigues', '11056836166', '14 de Julho',4);
$cliente3->setarTodosCampos(3, 'Ed', 'Carlos', '3333333333333', '13 de maio',1);
$cliente4->setarTodosCampos(4, 'Denise', 'Jesus', '4444444444444', 'Afonso Pena',3);
$cliente5->setarTodosCampos(5, 'Leonardo', 'Miagy', '55555555555555', 'Via Park',2);
$cliente6->setarTodosCampos(6, 'João', 'Pedro', '66666666666666', 'Rua das Garças',2);
$cliente7->setarTodosCampos(7, 'Patricia', 'Malu', '11056836166', '14 de Julho',5);
$cliente8->setarTodosCampos(8, 'Hernanes', 'Silveira', '11056836166', '14 de Julho',3);
$cliente9->setarTodosCampos(9, 'Ana', 'Julia', '11056836166', '14 de Julho',2);
$cliente10->setarTodosCampos(10, 'Ingrid', 'Guimaraes', '11056836166', '14 de Julho',1);
$array = [$cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10];

if (isset($_GET['ordenacao'])) {
    $ord = $_GET['ordenacao'];
    if ($ord == 'descendente') {
        arsort($array);
    } else {
        asort($array);
    }
}
