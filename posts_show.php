<?php
    // (C)
    require_once 'filters/login_filter.php';
     // ログインしている自分の投稿だけを取得
    $posts = $login_user->posts();
    include_once 'views/posts_show_view.php';