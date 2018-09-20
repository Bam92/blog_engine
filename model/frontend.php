<?php
// return db object
function dbConnect()
{
  try {
    $db_conct = new PDO('mysql:host=localhost; dbname=p3_blog', 'bam', 'bam92');
    return $db_conct;

  } catch (PDOException $e) {
    echo "Impossible de se connecter a la base de donnees";

  }

}

/* Get all posts from db */
function getPosts()
{
  $db_conct = dbConnect();

  $stmt = $db_conct->query('SELECT pst_id, pst_title, pst_content, pst_date FROM t_post ORDER BY pst_date DESC LIMIT 0, 5');
  return $stmt;

}

/* Get one post GET  */
function getPost($postId)
{
  $db_conct = dbConnect();

  // query for one post
  $sql = 'SELECT * FROM t_post WHERE pst_id = ?';
  $stmt = $db_conct->prepare($sql);

  // perform query
  $stmt->execute(array($postId));
  $post = $stmt->fetch();

  return $post;

}

/* Get all comments for a given post */
function getComments($postId)
{
  /*$db_conct = dbConnect();

  // query for comments for a given post
  $sql = 'SELECT * FROM t_comment WHERE pst_id = ? ORDER BY cmt_date';
  $stmt = $db_conct->prepare($sql);

  // perform query
  $comments = $stmt->execute(array($postId));*/
  //$comments = $stmt->fetch();

  $db = dbConnect();

    $comments = $db->prepare('SELECT * FROM t_comment WHERE pst_id = ? ORDER BY cmt_date DESC');

    $comments->execute(array($postId));


  //  return $comments;

  return $comments;

}

/* add new comment*/
function postComment($pstId, $author, $comment) {
  $db_conct = dbConnect();

  $comments = $db_conct->prepare('INSERT INTO t_comment(pst_id, cmt_author, cmt_content, cmt_date) VALUES(?, ?, ?, NOW())');
  $affectedRows = $comments->execute(array($pstId, $author, $comment));

  return $affectedRows;
}
