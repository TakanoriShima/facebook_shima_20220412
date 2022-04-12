<?php
    // (C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';
    
    
    $id = $_GET['id'];
    $post = Post::find($id);

    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = null;

    $token = session_id();
    
    include_once 'views/posts_edit_view.php';