<?php include "templates/include/header.php"; ?>

    <body>
        <?php include "include/article_nav.php"; ?>
                    <div id="container" class="container">
                    <div class="col-md-9">
                        <!-- VIDEO PANEL !-->
                        <?php echo $results['article']->content?>
                        <!--img src="templates/images/vid_placeholder.png" style="width: 90%; height: 90%;" / !-->
                    </div>
                    
                    <div class="col-md-3">
                        <!-- ABOUT VIDEO PANEL !-->
                        <h4>Description</h4>
                        <p>
                            <?php echo htmlspecialchars( $results['article']->summary )?>
                        </p>
                        
                        <p>
                            <a href="#" class="btn btn-primary">Facebook</a>
                            <a href="#" class="btn btn-success">Twitter</a><br /><br />
                            <a href="#" class="btn btn-info">Ello.co</a>
                            <a href="#" class="btn btn-warning">Original Site</a>
                        </p>
                        
                        <p>
                            <a href="index.php?action=archive">All Posts</a><br />
                            <a href="./">Return to Homepage</a>
                        </p>
                    </div>
                </div>
        
                <div class="container">
                    <div class="alert alert-success">
                        <div class="container">
                            <p>
                                You can place your ad here!
                                <a href="#" class="btn btn-primary">View More</a>
                                <a href="#" class="btn btn-primary">Close</a>
                            </p>
                            
                        </div>
                    </div>
                </div>
        
            <!-- ADSPACE !-->
            
        <!-- /ADSPACE/ !-->
        
        <!-- COMMENT SPACE !-->
                <div class="container">
                <div class="col-md-4">
                    <h3>Looking for more?</h3>
                    <p>Here's some links to get you started!</p>
                </div>
                <div class="col-md-8">
                    <br />
                    <a href="index.php" class="btn btn-primary btn-lg">Home</a>
                    <a href="index.php?action=archive" class="btn btn-success btn-lg">All Posts</a>
                    <a href="downloads.php" class="btn btn-info btn-lg">Downloads</a>
                    <a href="https://nsport.al/content/" class="btn btn-warning btn-lg">More</a>
                    <br />
                </div>
            </div>
        <!-- //COMMENT SPACE// !-->
    </body>