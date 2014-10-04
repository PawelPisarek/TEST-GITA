<?php

require_once '../src/Suggestotron/Config.php';
\Suggestotron\Config::setDirectory('../config');

$config = \Suggestotron\Config::get('autoload');
require_once $config['class_path'] . '/Suggestotron/Autoloader.php';

$data = new \Suggestotron\TopicData();

$topics = $data->getAllTopics();

//$config = \Suggestotron\Config::get('autoload');
//echo $config;

$template = new \Suggestotron\Template("../views/base.phtml");
$template->render("../views/index/index.phtml", ['topics' => $topics]);
?>