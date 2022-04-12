<?php
    //(C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';
    // 投稿データを全部取得するstaticメソッド
    $posts = Post::all();

    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
  
    include_once 'views/top_view.php';