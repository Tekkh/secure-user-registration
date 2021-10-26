<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
    unset($_SESSION['username']);
    echo "<script>window.location.href = 'http://localhost/signin'</script>";
} else {
    echo "<script>window.location.href = 'http://localhost/signin'</script>";
}
?>