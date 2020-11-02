<?php

echo 'Un texto de una línea';

echo 'Un texto de 
varías líneas solo en código
no solo refleja en output';

echo 'Podemos escapar una comilla
simple así \' con un backslash \\ continuar con más texto <br>';

$name = 'Luigi';
echo "Mi nombre es $name <br>";
echo 'Mi nombre es ' . $name;


$name = 'Luigi';
$courses = [
    'backend' => 'PHP'
];

echo "{$courses['backend'][0]}";

class User
{
    public $name = 'Mario';
}

$user1 = new User;

echo "<br>  $user1->name quiere aprender {$courses['backend'][0]} <br>";


$teacher = 'waluigi';
$waluigi = 'Profesor de moda púrpura';

echo "$teacher es ${$teacher}";

function getTeacher()
{
    return 'teacher';
}

$teacher = 'Wario';

echo "{${getTeacher()}} enseña PHP";