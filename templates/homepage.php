<!doctype html>
<html lang="en">

<?php include "include/header.php"; ?>

    <body>
        <?php include "include/navbar.php"; ?>
            <!-- COMPULSORY FOR PRESENTATION ON DESKTOPS: TWO BR TAGS !-->
            <br />
            <br />

            <!-- main content container !-->
            <div class="container">
                <div class="col-md-6">
                    <div class="jumbotron">
                        <h1>Hi There!</h1>
                        <p>
                            <?php include "strings/str.blog.intro.php"; ?>
                        </p>
                        <p>
                            <a href="index.php?action=archive" class="btn btn-primary btn-lg btn-block">All Posts</a>
                            <a href="#" class="btn btn-success btn-lg btn-block">Custom site 1</a>
                            <a href="#" class="btn btn-info btn-lg btn-block">Custom site 2</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <?php foreach ( $results['articles'] as $article ) { ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
                                    <?php echo date('j F', $article->publicationDate)?>: 
                                    <b><?php echo htmlspecialchars( $article->title )?></b>
                                </a>
                            </h3>
                            </div>

                            <div class="panel-body">
                                <?php echo htmlspecialchars( $article->summary )?>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>

            <?php include "templates/include/stickyfooter.php"; ?>
    </body>
    <?php include "templates/include/scripts.php"; ?>

</html>