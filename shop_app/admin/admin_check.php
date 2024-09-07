<?php
function checkAdminAccess($conn) {
    session_start();

    if(!isset($_SESSION['user_id'])){
        header('Location: ../index.php');
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
    $fetch_user = mysqli_fetch_assoc($query);

    if($fetch_user['admin'] != 1){
        $_SESSION['error'] = 'Unauthorized access! You do not have permission to access this page.';
        header('Location: ../index.php');
        
        exit;
    }
}
?>
