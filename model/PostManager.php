<?php
namespace Bam\Blog\Model;

require_once("model/Manager.php");
/**
 * Manage all posts
 */
class PostManager extends Manager
{
  /* Get all posts from db */
  public function getPosts()
  {
    $db_conct = $this->dbConnect();

    $stmt = $db_conct->query('SELECT pst_id, pst_title, pst_content, DATE_FORMAT(pst_date, \'%d %M %Y\') AS pst_date_fr FROM t_post ORDER BY pst_date DESC LIMIT 0, 5');
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
}
