<?php
    // (C)
    require_once 'filters/login_filter.php';
    // ログインしている自分の投稿だけを取得
    $posts = $login_user->posts();
    
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    
    include_once 'views/mypage_view.php';
