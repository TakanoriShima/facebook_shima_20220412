<?php
    require_once 'filters/csrf_filter.php';
    require_once 'models/User.php';
    // var_dump($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    // 入力されたら値を持ったユーザーがいるかDBを探す。
    $user = User::login($email, $password);
    // var_dump($user);
    // そんなユーザーがDBに存在するならば
    if($user !== false) {
        // ログイン処理
        // DBから見つけたユーザーをセッションに保存
        $_SESSION['login_user'] = $user;
        header('Location: top.php');
        exit;
    } else {
        // ログイン画面に戻る
        // リダイレクト(C) => (C)
        $_SESSION['errors'] = array('ログインに失敗しました');
        header('Location: login.php');
        exit;
    }