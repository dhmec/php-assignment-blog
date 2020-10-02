<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>
    <?php
    require_once './includes/Articles.Class.php';
    $articles = [];
    $articlesFileString = file_get_contents('./data/articles.json');
    
    if( $articlesFileString )
    {
        $articlesArray = json_decode( $articlesFileString );
        if( $articlesArray )
        {
            foreach( $articlesArray as $article )
            {
               
                $articles[] = new Article($article->id,$article->title,$article->content);
            }
        } 
        
    
    
    
    }   
    
    ?>
    <h2>Our Articles</h2>
    <?php if ( !empty( $articles ) ) : // If there are articles, output them! ?>
    <?php foreach ( $articles as $article ) $article->output(); ?>
    <?php else : // If there are no articles though... ?>
    <p>Sorry, no articles found!</p>
    <?php endif; ?>

</body>
</html>