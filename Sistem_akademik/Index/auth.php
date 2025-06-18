<?php
include_once "db.php";
if ($_POST['uname'] && $_POST['psw']) {
    $username=$_POST['uname'];
    $password=md5($_POST['psw']);
    $q = "SELECT * FROM users WHERE username = ? AND `password` = ?";
    $rs = mysqli_prepare($cn, $q);
    $rs->bind_param("ss", $username, $password);
    $rs->execute();
    $result = $rs->get_result();
    $r = $result->fetch_object();
    if (!$r) die("Username/Password salah!");

    $role = $r->role_id;
    switch($role){
        case 1:
            $url = 'Admin/Admin.html';
        break;
        case 2:
            $url = 'Teacher/Teacher.html';
        break;
        case 3:
            $url = 'Student.html';
        break;
    }

    header('Location: ' . $url);
    die();
}
?>