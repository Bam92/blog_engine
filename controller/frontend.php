<?php
require('model/frontend.php');

function listPosts() {

  $posts = getPosts();

  require('view/frontend/listPostsView.php');
}

function post() {

  $post = getPost($_GET['id']);
  $comments = getComments($_GET['id']);

  require('view/frontend/postView.php');
}

function addComment($pstId, $author, $comment) {
  $affectedRows = postComment($pstId, $author, $comment);

  if ($affectedRows === false) {
    die('Impossible d\'ajouter le Commentaires!');
  } else {
    header('Location: index.php?action=post&id=' .$pstId);
  }
}
