<?php

session_start();
if (!$_SESSION['usuario']) {
    unset($_SESSION['usuario']);
    header('Location: index.php');
} else {
    ?>
    <script> alert('login   ');</script>
    <?php

}