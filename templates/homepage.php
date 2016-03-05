<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>bloggrPro</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet" />
        
        <!-- Import the custom CMS styles we incorporate with Bootstrap !-->
        <link href="assets/css/cms_styling.css" rel="stylesheet" />
        
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <div class= "container">
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1>Hi There!</h1>
                    <p><?php include "strings/str.blog.intro.php"; ?></p>
                    <p><a href="index.php?action=archive" class="btn btn-primary btn-lg">View Posts</a></p>
                </div>
            </div>
                    
            <div class="col-md-6">
                <?php foreach ( $results['articles'] as $article ) { ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
                                    <?php echo htmlspecialchars( $article->title )?>
                                </a>
                            </h3>
                            <small><?php echo date('j F', $article->publicationDate)?></small>
                        </div>
                        
                        <div class="panel-body">
                            <?php echo htmlspecialchars( $article->summary )?> 
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        <footer class="footer-fixed">
            <div class="container">
                <p class="text-muted">
                    <?php include "strings/str.blog.name.php"; ?> &copy; 2015, <?php include "strings/str.blog.company.php"; ?>.
                    <a href="index.php">Home</a> | 
                    <a href="index.php?action=archive">All Posts</a> | 
                    <a href="contact.php">Contact</a> | 
                    <a href="admin.php">Site Admin</a>
                </p>
                </div>
            </footer>    
    </body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>
</html>