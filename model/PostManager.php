<?php
/**
 * Manage all posts
 */
class PostManager
{

  private function dbConnect()
  {

      $db_conct = new PDO('mysql:host=localhost; dbname=p3_blog', 'bam', 'bam92');
      return $db_conct;
  }

  /* Get all posts from db */
  public function getPosts()
  {
    $db_conct = $this->dbConnect();

    $stmt = $db_conct->query('SELECT pst_id, pst_title, pst_content, pst_date FROM t_post ORDER BY pst_date DESC LIMIT 0, 5');
    return $stmt;

  }

  /* Get one post GET  */
  public function getPost($postId)
  {
    $db_conct = $this->dbConnect();

    // query for one post
    $sql = 'SELECT * FROM t_post WHERE pst_id = ?';
    $stmt = $db_conct->prepare($sql);

    // perform query
    $stmt->execute(array($postId));
    $post = $stmt->fetch();

    return $post;

  }
}
