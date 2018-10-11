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

  // Truncate
/*  function truncate($text, $chars = 25) {
    if (strlen($text) <= $chars) {
        return $text;
    }
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."[..]";
    return $text;
}*/

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

  /*public function getTags($postId)
  {
    $db_conct = $this->dbConnect();

    // query for one post
    $sql = 'SELECT tag_name
            FROM t_tag tg
            INNER JOIN t_pst_tag pTg
            ON pTg.tag_id = tg.tag_id
            INNER JOIN t_post p
            ON p.pst_id=tg.tag_id
            WHERE pTg.pst_id = ?';
  //  $sql = 'select tag_name FROM t_tag tg INNER JOIN t_pst_tag pTg ON pTg.tag_id=tg.tag_id INNER JOIN t_post p ON p.pst_id=tg.tag_id where pTg.pst_id = ?';
    $stmt = $db_conct->prepare($sql);

    // perform query
    $stmt->execute(array($postId));
    $tagId = $stmt->fetch();

    return $tags;

  }*/

  /* add new post*/
  public function postPost($pstTitle, $pstContent) {
    $db_conct = $this->dbConnect();

    $post = $db_conct->prepare("INSERT INTO t_post(pst_id, pst_title, pst_content, pst_date) VALUES('', ?, ?, NOW())");
    $affectedRows = $post->execute(array($pstTitle, $pstContent));

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
