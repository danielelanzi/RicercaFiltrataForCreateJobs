<?php
// File di servizio per invocare i metodi
include_once 'select_print.class.php';
$opt = new SelectPrint();

if(isset($_GET['id_job_sector']))
{
	echo $opt->ShowJob();
	die;
}

?>