<?php include "templates/include/header.php"; ?>

    <body>
        <?php include "include/article_nav.php"; ?>
            <div id="container" class="container">
                <div class="col-md-9">
                    <!-- MAIN CONTENT PANEL !-->
                    <div class="well">
                        <h1><?php echo htmlspecialchars( $results['article']->title )?></h1>
                        <?php echo $results['article']->content?>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- ADDITIONAL CONTENT PANEL !-->
                    <div class="well">
                        <h4>Summary</h4>
                        <p>
                            <?php echo htmlspecialchars( $results['article']->summary )?>
                        </p>

                        <a href="#" class="btn btn-primary btn-block">Github</a>
                        <a href="#" class="btn btn-success btn-block">BitBucket</a>
                        <a href="index.php?action=archive" class="btn btn-info btn-block">View Tracker</a>
                    </div>
                </div>
            </div>

            <!-- ADDITIONAL CONTENT PANEL 2 !-->
            <div class="container">
                <div class="well">

                </div>
            </div>
            <?php include "templates/include/stickyfooter.php"; ?>
    </body>