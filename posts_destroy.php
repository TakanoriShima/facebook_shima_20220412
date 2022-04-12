<?php
    //(C)
    require_once 'filters/csrf_filter.php';
    require_once 'models/Post.php';
    
    $id = $_POST['id'];
    // モデルを使ってPostインスタンスを取得
    $post = Post::find($id);
    // var_dump($post);
    
    // そのインスタンスをMySQLから削除
    $flush = $post->delete();
    
    // flushメッセージをセッションに保存
    $_SESSION['flush'] = $flush;
    
    // リダイレクト
    header('Location: top.php');
    exit;
    