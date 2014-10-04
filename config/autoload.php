<?php
return [
    'class_path' => realpath('../src')
];
$config = \Suggestotron\Config::get('autoload');

$file = $config['class_path'] . '/' . str_replace("\\", "/", $className) . '.php';

?>
