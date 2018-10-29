<?php
namespace Bam\Blog\Model;

require_once("model/Manager.php");
/**
 * Manage all posts
 */
class CommentManager extends Manager
{

  public function getComments($postId)
  {
    $db_conct = $this->dbConnect();

    /*// query for comments for a given post
    $sql = 'SELECT * FROM t_comment WHERE pst_id = ? ORDER BY cmt_date';
    $stmt = $db_conct->prepare($sql);

    // perform query
    $comments = $stmt->execute(array($postId));*/
    //$comments = $stmt->fetch();

      $comments = $db_conct->prepare('SELECT cmt_id, cmt_content, cmt_author, DATE_FORMAT(cmt_date, \'%d %M %Y\') AS cmt_date_fr FROM t_comment WHERE pst_id = ? ORDER BY cmt_date DESC');

      $comments->execute(array($postId));

    return $comments;
  }

    /**
     * Get all comments for a given post
     * @param $postId
     * @return array
     */
  public function countComments($postId)
  {
    $db_conct = $this->dbConnect();

    $number = $db_conct->prepare('SELECT COUNT(*) AS nb FROM t_comment WHERE pst_id = ?');
    $number->execute(array($postId));
    $cmt_number = $number->fetch();

    return $cmt_number;
  }

  /* add new comment*/
  public function postComment($pstId, $author, $comment, $email, $web) {
    $db_conct = $this->dbConnect();

    $comments = $db_conct->prepare('INSERT INTO t_comment(pst_id, cmt_author, cmt_content, cmt_date, cmt_email, cmt_web) VALUES(?, ?, ?, NOW(), ?, ?)');
    $affectedRows = $comments->execute(array($pstId, $author, $comment, $email, $web));

    return $affectedRows;
  }
}
