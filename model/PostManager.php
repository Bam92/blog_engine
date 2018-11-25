<?php
namespace Bam\Blog\Model;

require_once("model/Manager.php");
/**
 * Manage all posts
 */
class PostManager extends Manager
{
  /* Get all posts from db except the more recent one (a la une) */
  public function getPosts()
  {
    $db_conct = $this->dbConnect();

    $stmt = $db_conct->query('SELECT pst_id, pst_title, pst_content, DATE_FORMAT(pst_date, \'%d %M %Y\') AS pst_date_fr FROM t_post ORDER BY pst_date DESC LIMIT 1, 5');
    return $stmt;

  }

/* Get the recent post for our jumbontron  */
  public function getUnique()
  {
    $db_conct = $this->dbConnect();

    // query for one post
    $stmt = $db_conct->query('SELECT pst_id, pst_title, pst_content, DATE_FORMAT(pst_date, \'%d %M %Y\') AS pst_date_fr FROM t_post ORDER BY pst_date DESC LIMIT 0, 1');
    // perform query
    //$stmt->execute(array($postId));
    //$unique = $stmt->fetchAll();

    return $stmt;

  }

  /* Get one post GET  */
  public function getPost($postId)
  {
    $db_conct = $this->dbConnect();

    // query for one post
    $sql = 'SELECT pst_id, pst_title, pst_content, DATE_FORMAT(pst_date, \'%d %M %Y\') AS pst_date_fr FROM t_post WHERE pst_id = ?';
    $stmt = $db_conct->prepare($sql);

    // perform query
    $stmt->execute(array($postId));
    $post = $stmt->fetch();

    return $post;

  }
    
  /* add new post*/
  public function postPost($pstTitle, $pstContent) {
    $db_conct = $this->dbConnect();

    $post = $db_conct->prepare("INSERT INTO t_post(pst_id, pst_title, pst_content, pst_date) VALUES('', ?, ?, NOW())");
    $affectedRows = $post->execute(array($pstTitle, $pstContent));

    return $affectedRows;
  }
  
  /* delete post*/
  public function delPost($postId) {
    $db_conct = $this->dbConnect();

    $stmt = $db_conct->prepare("DELETE FROM t_post WHERE pst_id = :pstId");
    $affectedRows = $stmt->execute(array("pstId" => $postId));

    return $affectedRows;
  }

  /* Update */
  public function editPost($pstTitle, $pstContent, $id) {
    $db_conct = $this->dbConnect();

    $post = $db_conct->prepare("UPDATE t_post SET pst_title = :title, pst_content = :content, pst_date = NOW() WHERE pst_id = :id");
    $affectedRows = $post->execute(array(
      'title' => $pstTitle,
      'content' => $pstContent,
      'id' => $id,

    ));

    return $affectedRows;
  }
}
