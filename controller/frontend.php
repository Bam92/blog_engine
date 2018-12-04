<?php
use \Bam\Blog\Model\PostManager;
use \Bam\Blog\Model\CommentManager;

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts() {

  $postManager = new PostManager();
  $commentManager = new CommentManager();

  $posts = $postManager->getPosts();
  $unique = $postManager->getUnique();
    
 // $cmt_number = $commentManager->countComments($row['pst_id']);

  require('view/frontend/listPostsView.php');
}

function post() {

  $postManager = new PostManager();
  $commentManager = new CommentManager();
 // $tagManager = new TagManager();

  $post = $postManager->getPost($_GET['id']);
  $comments = $commentManager->getComments($_GET['id']);
  //$tags = $tagManager->getTags($_GET['id']);
  $cmt_number = $commentManager->countComments($_GET['id']);

  require('view/frontend/postView.php');
}

function addComment($pstId, $author, $comment, $email, $web) {

  $commentManager = new CommentManager();
  $affectedRows = $commentManager->postComment($pstId, $author, $comment, $email, $web);

  if ($affectedRows === false) {
    throw new \Exception("Impossible d'ajouter le Commentaires!");
  } else {
    header('Location: index.php?action=post&id=' .$pstId);
  }
}

/*function numberComments() {
  $commentManager = new CommentManager();

  $cmt_number = $commentManager->countComments($_GET['id']);

  require('view/frontend/postView.php');
}*/
