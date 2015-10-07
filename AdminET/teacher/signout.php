<?php

session_start();
unset($_SESSION['etsu_username']);

echo "<script type='text/javascript'>
window.location.href = '../index.php?msg=102';
</script>";

?>