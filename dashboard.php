<?php
session_start();
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
    echo '<a href="http://localhost/signin/logout.php">Logout</a>';
} else {
    echo "<script>window.location.href = 'http://localhost/signin'</script>";
}
?>