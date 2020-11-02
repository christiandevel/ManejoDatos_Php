<?php

echo "<prev>";
$data = 'Estudio PHP';
echo $data[0];
echo $data{0};

echo "<br>";
$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, reiciendis non facilis commodi numquam ea perspiciatis aliquid voluptas fuga? Magnam animi architecto reprehenderit eaque officia maxime facere fugit repellendus! Praesentium?";
$extract = substr($post, 0, 30);

echo "$extract... [ver más]";

echo "<br>";
$data = 'javascript, php, laravel';
$tags = explode(', ', $data);

var_dump($tags);

echo "<br>";
$courses = ['ruby','php','python'];
echo implode(' --- ', $courses);

$course = "   Curso de PHP   ";
// ltrim($course) o rtrim($course).
$course = trim($course);
echo "<prev>";
echo "Quiero aprender $course, y otro curso.";