<?php
session_start();
require('controller/frontend.php');
require('controller/backend.php');

try{
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
      listPosts();
    } elseif ($_GET['action'] == 'post') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        post();
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
    } elseif ($_GET['action'] == 'login') { // call connection form
      loginForm();
    } elseif ($_GET['action'] == 'loginChk') { // chck form entries
      if (isset($_POST["username"]) && isset($_POST["password"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
          loginChk();
        } else {
          throw new Exception("il y a des champs non remplis");
        }
      }

    } elseif ($_GET['action'] == 'admin') {
        callAdmin();
    } elseif ($_GET['action'] == 'pst_add_form') {
      require('view/backend/pstAddView.php');
    } elseif ($_GET['action'] == 'addPost') {
      if (!empty($_POST['title']) && !empty($_POST['content'])) {
        addPost($_POST['title'], $_POST['content']);

      } else {
        throw new Exception("Impossible d'enregistrer l'article");
      }
    }
  } else {
    listPosts();
  }
} catch(Exception $e) {
  $errorMessage = $e->getMessage();

  require('view/frontend/errorView.php');
}
