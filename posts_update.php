<?php
    // (C)
    // var_dump($_POST);
    // var_dump($_FILES);
    require_once 'models/Post.php';
    require_once 'filters/login_filter.php';
    require_once 'filters/csrf_filter.php';

    $id = $_POST['id'];    
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    
    $post = Post::find($id);
    $post->title = $title;
    $post->content = $content;
    
    if($image !== ''){
        $post->image = $image;
    }
    
    // エラーの検証のメソッド
    $errors = $post->validate();
    
    // var_dump($errors);
    if(count($errors) === 0) {
        
        if($image !== ''){
            $post->upload();
        }
        $flush = $post->save();
        if($flush === '') {
            $_SESSION['errors'] = array('何らかの理由で投稿に失敗しました。');
            $_SESSION['post'] = $post;
            header('Location: posts_create.php');
            exit;
        } else {
            $_SESSION['flush'] = $flush;
            header('Location: posts_show.php?id=' . $id);
            exit;
        }

    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['post'] = $post;
        header('Location: posts_edit.php?id=' . $id);
        exit;
    }