<?php include "templates/include/header.php" ?>

    <body>
        <?php include "templates/include/navbar.php"; ?>
            <!-- REQUIRED FOR PRESENTATION ON DESKTOPS: TWO BR TAGS !-->
            <br />
            <br />

            <!-- MAIN CONTENT CONTAINER !-->
            <div id="container" class="container">
                <div class="col-md-6">
                    <div class="jumbotron">
                        <h1>Tracker</h1>
                        <p>
                            Here's all the bugs we're currently tracking.
                        </p>
                    </div>
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
            <?php include "templates/include/stickyfooter.php"; ?>
    </body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>