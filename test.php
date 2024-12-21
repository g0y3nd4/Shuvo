<?php
ob_start();
phpinfo();  // Capture the phpinfo() output
$phpinfo = ob_get_contents();
ob_end_clean();

// Base64 encode the PHP info output
echo base64_encode($phpinfo);
?>
