<?php
require_once ("../includes.php");

$s = new Smarty();
$s -> setTemplateDir("../templates");

$clientsData = array(/* name=>(logo, link_description) */);
$clientsSql = "SELECT name, logo, description_link FROM clients";
$res = $database->query($clientsSql);
while($row = $res->fetch(PDO::FETCH_OBJ)){
	$data = new stdClass();
	$data->logo = $row->logo;
	$data->description_link = $row->description_link;
	$clientsData[$row->name] = $data;
}

$s->assign("clientsArray", $clientsData);
$s->display("clients.tpl");