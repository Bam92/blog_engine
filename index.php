<?php

require('controller/frontend.php');
require('controller/backend.php');

try{
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
      listPosts();
    } elseif ($_GET['action'] == 'post') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        post();
        //numberComments();
      } else {
        throw new Exception("aucun identifiant de billet envoye");
      }
    } elseif ($_GET['action'] == 'addComment') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        if (!empty($_POST['author'])  && !empty($_POST['comment'])) {
          addComment($_GET['id'], $_POST['author'], $_POST['comment']);
        } else {
          throw new Exception("tous les champs ne sont pas remplis!");
        }
      } else {
        throw new Exception("aucun identifiant n'a ete envoye");
      }
    } elseif ($_GET['action'] == 'login') {
      login();
    } elseif (isset($_POST["username"]) && isset($_POST["password"]) && $_GET['action'] == 'admin') {
      if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        callAdmin();
      } else {
        throw new Exception("aucun champ n'a ete rempli");
      }
    }
  } else {
    listPosts();
  }
} catch(Exception $e) {
  $errorMessage = $e->getMessage();

  require('view/frontend/errorView.php');
}
