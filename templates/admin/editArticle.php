<?php include "templates/include/header.php" ?>

    <body>
        <?php include "inc/navbar.php"; ?>
            <div class="container">
                <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">

                    <?php if ( isset( $results['errorMessage'] ) ) { ?>
                        <div class="alert alert-dismissible alert-info">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            <?php echo $results['errorMessage'] ?>
                        </div>
                        <?php } ?>

                            <!-- TITLE DIV !-->
                            <div class="col-md-4">
                                <label for="title">Post Title</label>
                                <input type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" class="form-control" />
                            </div>

                            <!-- SUMMARY DIV !-->
                            <div class="col-md-4">
                                <label for="summary">Summary</label>
                                <input type="text" name="summary" id="summary" placeholder="Summary of the post" required maxlength="1000" class="form-control" value="<?php echo htmlspecialchars( $results['article']->summary )?>">
                            </div>

                            <!-- DATE DIV !-->
                            <div class="col-md-4">
                                <label for="publicationDate">Publication Date</label>
                                <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( " Y-m-d ", $results['article']->publicationDate ) : " " ?>" class="form-control" />
                            </div>

                            <!-- CONTENT DIV !-->
                            <div class="col-md-12">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="50000" style="height: 30em;" class="form-control">
                                    <?php echo htmlspecialchars( $results['article']->content )?>
                                </textarea>
                            </div>

                            <!-- POST ID AND ACTION BUTTONS DIV !-->
                            <div class="col-md-12">
                                <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>" />
                                <br />
                                <label>Actions: </label>
                                <input type="submit" name="saveChanges" value="Save Changes" class="btn btn-success btn-block" />
                                <br />
                                <input type="submit" formnovalidate name="cancel" value="Cancel" class="btn btn-warning btn-block" />
                                <?php if ( $results['article']->id ) { ?>
                                    <a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')" class="btn btn-danger btn-block">Delete Post</a>
                                    <?php } ?>

                            </div>
                </form>
            </div>
            <?php include "templates/include/stickyfooter.php"; ?>
    </body>
    <?php include "templates/include/scripts.php"; ?>