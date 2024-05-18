<?php
session_start();

// Post edilen verileri al
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifreyi kontrol et
if (!empty($username) && !empty($password)) {
    // Kullanıcı adını kontrol et
    if ($username === "b1812100001@sakarya.edu.tr") {
        // Şifreyi kontrol et
        if ($password === "b1812100001") {
            // Giriş başarılı
            $_SESSION['username'] = $username;
            header("Location: loginsuccess.html");
            exit;
        } else {
            // Şifre hatalı
            header("Location: loginfail.html");
            exit;
        }
    } else {
        // Kullanıcı adı hatalı
        header("Location: loginfail.html");
        exit;
    }
} else {
    // Kullanıcı adı veya şifre boş
    header("Location: loginfail.html");
    exit;
}
?>
