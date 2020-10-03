<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>My Blog</title>
     <!-- Style(s) -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php
    require_once './includes/Articles.Class.php';
    
    $articles = [];
    $searchVal = strtoupper($_POST["search-val"]);
    $articlesFileString = file_get_contents('./data/articles.json');
    
    if( $articlesFileString )
    {
        $articlesArray = json_decode( $articlesFileString );
        if( $articlesArray )
        {
            foreach( $articlesArray as $article )
            {   
                if( empty($searchVal) )
                {
                    $articles[] = new Article($article->id,$article->title,$article->content);
                }
                else if ( ($searchVal ===  strtoupper($article->title)) || ($searchVal === "$article->id") || (strpos(strtoupper($article->content), $searchVal) )  )
                {                    
                    $articles[] = new Article($article->id,$article->title,$article->content);
                }                
            }
        }    
    
    }   
    
    ?>
    <h1>Programming Languages</h1>

    <form method="POST" action="index.php">
        <label for="search">            
            <input
            id="search"
            name="search-val"
            type="text"
            value="">
        </label>
        <input type="submit" value="Search!">
    </form>
    
    
    

    <?php if ( !empty( $articles ) ) : // If there are articles, output them! ?>
    <?php foreach ( $articles as $article ) $article->output(); ?>
    <?php else : // If there are no articles though... ?>
    <p>Sorry, no articles found!</p>
    <?php endif; ?>

</body>
</html>