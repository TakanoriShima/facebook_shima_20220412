<?php
    // (C)
    require_once 'filters/login_filter.php';
     // ログインしている自分の投稿のそれぞれの詳細を取得
    $posts = $login_user->post_extract();
    
     $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    include_once 'views/posts_show_view.php';