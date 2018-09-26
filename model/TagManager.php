<?php
namespace Bam\Blog\Model;

require_once("model/Manager.php");
/**
 * Handle all tags
 */
class TagManager extends Manager
{

  public function getTags($postId)
  {
    $db_conct = $this->dbConnect();

    // query for tags
    $sql = 'SELECT tag_name
            FROM t_tag tg
            INNER JOIN t_pst_tag pTg
            ON pTg.tag_id = tg.tag_id
            INNER JOIN t_post p
            ON p.pst_id = tg.tag_id
            WHERE pTg.pst_id = ?';

      $tags = $db_conct->prepare($sql);

      // perform query
      $tags->execute(array($postId));
    //$tags->fetchAll();

      return $tags;

  }
}
