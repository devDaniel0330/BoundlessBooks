<?php

include 'base.php';

if (is_post()) {
    $email = req('email');
    $password = req('password');

    // Email Validation
    if ($email == '') {
        $_err['email'] = 'Required';
    } else if (!is_email($email)) {
        $_err['email'] = 'Invalid email';
    }

    // Password Validation
    if ($password == '') {
        $_err['password'] = 'Required';
    }

    // Login the user
    if (!$_err) {
        $stm = $_db->prepare('SELECT * FROM user WHERE email = ? AND password = SHA1(?)');
        $stm->execute([$email, [$password]]);
        $u = $stm->fetch();

        if ($u) {
            temp('info', 'Login successfully');
            login($u);
        } else {
            $_err['password'] = 'Not matched';
        }
    }
}