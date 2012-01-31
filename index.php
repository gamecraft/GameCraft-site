<?php
require_once ("smarty/Smarty.class.php");

$s = new Smarty();
$s -> setTemplateDir("templates");

$s->display("index.tpl");
