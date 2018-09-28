<?php
use \Bam\Blog\Model\UserManager;
use \Bam\Blog\Model\PostManager;
use \Bam\Blog\Model\CommentManager;
use \Bam\Blog\Model\TagManager;

require_once('model/PostManager.php');
require_once('model/UserManager.php');


function login() {


  require('view/backend/loginView.php');
}

function callAdmin() {

  $usrManager = new UserManager();

  $usr = $usrManager->getUser($_POST["username"]);

  $postManager = new PostManager();
  $posts = $postManager->getPosts();

/*  if ($usr)
      require('view/backend/adminView.php');

     else
      throw new \Exception("Erreur: Le nom d'Utilisateur envoye n'est pas correct, " . $usr['usr_name']. " et pwd " .$_POST["password"]);
*/

require('view/backend/adminView.php');


}

function addPost($pstTitle, $pstContent) {

  $pstManager = new PostManager();
  $affectedRows = $pstManager->postPost($pstTitle, $pstContent);

  if ($affectedRows === false) {
    throw new \Exception("Impossible d'ajouter l'article!");
  } else {
    header('Location: index.php?action=admin');
  }
}
