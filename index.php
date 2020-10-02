<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>
    <?php
    
    $articles = [];
    $articlesFileString = file_get_contents('./data/articles.json');
    
    if( $articlesFileString )
    {
        $articlesArray = json_decode( $articlesFileString );
        if( $articlesArray )
        {
            foreach( $articlesArray as $article )
            {
               
                $articles[] = new Article(...$article);
            }
        } var_dump($articles);
        
    
    
    
    }
    
    
    
    
    
    ?>
    

</body>
</html>