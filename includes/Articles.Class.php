<?php
class Article
{
    public $id;
    public $title;
    public $content;

    function __construct ( $articleId = "", $articleTitle = "", $articleContent = "" )
    {
        $this->id = $articleId;
        $this->title = $articleTitle;
        $this->content = $articleContent;
    }

    public function output()
    {
        ?>
        <dl>
          <dt>Article ID</dt>
          <dd><?php echo $this->id; ?></dd>
          <dt>Article Title</dt>
          <dd><?php echo $this->title; ?></dd>
          <dt>Article Content</dt>
          <dd><?php echo $this->content; ?></dd>         
        </dl>
      <?php
    }



}