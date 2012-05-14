<?php
require_once ("../includes.php");

$s = new Smarty();
$s -> setTemplateDir("../templates");

$s->display("hall-of-fame.tpl");