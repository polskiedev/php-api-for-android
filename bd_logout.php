<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/sess_mgr.php';

$sessMgr = new SESS_MGR();
$sessMgr->destroy();

header("Location: ".SITE_URL."/bd_login.php");
?>
