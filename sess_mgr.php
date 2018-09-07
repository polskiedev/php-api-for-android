<?php
// session_start();

// $bSetSession = false;
// if(isset($_SERVER)) {
//     if(isset($_SERVER['HTTP_REFERER']))
//     {
//         $nSiteURL = strlen(SITE_URL);
//         if(substr($_SERVER['HTTP_REFERER'], 0, $nSiteURL) == SITE_URL)
//         {
//             $bSetSession = true;
//         }
//     }
// }
class SESS_MGR {
	function __construct()
	{
		$this->init();
	}

	function init() {
		session_name("WebApp");
		session_start(); 

		$_SESSION['initiated'] = true; 
	}

	function destroy() {
		session_destroy();
	}
}
?>
