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
        <div id="article-container">
          <div>
            <h3>Article ID</h3>
            <p><?php echo $this->id; ?></p>
          </div>
          <h3>Article Title</h3>
          <p><?php echo $this->title; ?></p>
          <h3>Article Content</h3>
          <p><?php echo $this->content; ?></p>         
        </div>
      <?php
    }



}