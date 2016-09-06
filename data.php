<?php 
$query = $_GET['query'];
$data = array();
$data[] = array('value'=>$query.'hello world');
$data[] = array('value'=>$query.'hello bady');
echo json_encode($data);
?>