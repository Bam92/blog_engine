<?php
use \Bam\Blog\Model\PostManager;
use \Bam\Blog\Model\CommentManager;

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function listPosts() {

  $postManager = new PostManager();
  $posts = $postManager->getPosts();

  require('view/frontend/listPostsView.php');
}

function post() {

  $postManager = new PostManager();
  $commentManager = new CommentManager();

  $post = $postManager->getPost($_GET['id']);
  $comments = $commentManager->getComments($_GET['id']);

  require('view/frontend/postView.php');
}

function addComment($pstId, $author, $comment) {

  $commentManager = new CommentManager();
  $affectedRows = $commentManager->postComment($pstId, $author, $comment);

  if ($affectedRows === false) {
    throw new \Exception("Impossible d'ajouter le Commentaires!");
  } else {
    header('Location: index.php?action=post&id=' .$pstId);
  }
}
