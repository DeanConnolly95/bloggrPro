<?php include "templates/include/header.php" ?>

    <body>
        <nav class="navbar navbar-success">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <?php include "strings/str.blog.name.php"; ?>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?action=archive">All Posts</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <?php echo $results['totalRows']?> article
                                    <?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> total.</a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>

        <div id="container" class="container">
            <div class="col-md-6">
                <h1>All Posts</h1>
                <p>
                    Here's all of the posts that have been made to
                    <?php include "strings/str.blog.name.php"; ?> - we have a unique sorting order, too.
                        <br /> Every day that there is a post, the newest post is always added to the top of the list. If there are more posts after the first in a day, those posts are displayed below the first post of that day, but before the previous day's most recent post. Got it? Cool :)
                </p>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <?php foreach ( $results['articles'] as $article ) { ?>
                        <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="list-group-item">
                            <h4 class="list-group-item-heading">
                        <?php echo date('j F Y', $article->publicationDate)?> - <?php echo htmlspecialchars( $article->title )?>
                    </h4>
                            <p class="list-group-item-text">
                                <?php echo htmlspecialchars( $article->summary )?>
                            </p>
                        </a>
                        <?php } ?>
                </div>
            </div>
        </div>
        <footer class="footer">
                <div class="container">
                    <p class="text-muted">Place sticky footer content here.</p>
                </div>
            </footer>
        <?php include "templates/include/footer.php" ?>