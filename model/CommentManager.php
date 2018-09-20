<?php
require_once("model/Manager.php");
/**
 * Manage all posts
 */
class CommentManager extends Manager
{

  public function getComments($postId)
  {
    /*$db_conct = dbConnect();

    // query for comments for a given post
    $sql = 'SELECT * FROM t_comment WHERE pst_id = ? ORDER BY cmt_date';
    $stmt = $db_conct->prepare($sql);

    // perform query
    $comments = $stmt->execute(array($postId));*/
    //$comments = $stmt->fetch();

    $db = $this->dbConnect();

      $comments = $db->prepare('SELECT * FROM t_comment WHERE pst_id = ? ORDER BY cmt_date DESC');

      $comments->execute(array($postId));


    //  return $comments;

    return $comments;

  }

  /* add new comment*/
  public function postComment($pstId, $author, $comment) {
    $db_conct = $this->dbConnect();

    $comments = $db_conct->prepare('INSERT INTO t_comment(pst_id, cmt_author, cmt_content, cmt_date) VALUES(?, ?, ?, NOW())');
    $affectedRows = $comments->execute(array($pstId, $author, $comment));

    return $affectedRows;
  }
}
