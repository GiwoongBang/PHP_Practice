<?php

session_start();
session_unset();
session_destroy();

?>

<script>
    alert('Logout');
    self.location.href='login.php';
</script>