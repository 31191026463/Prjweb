<?php 
function validateLoginInfo($username, $password) {
    if (strlen($username) > 0 && strlen($password) > 0)
        return true;
    return false;
}

//thiet lap trang thai nguoi dung: 
//1: admin

function setUser($username, $role) {
    $_SESSION['role'] = $role;
    $_SESSION['username'] = $username;
}

function unsetUser() {
    unset($_SESSION['role']);
    unset($_SESSION['username']);
}

function isLoggedIn() {
    return isset($_SESSION['role']);
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] == 1;
}

