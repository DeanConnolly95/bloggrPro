<?php include "templates/include/header.php" ?>
<body>
    <?php include "inc/navbar.php"; ?>
        <div id="container" class="container">
            <h1><?php echo $results['pageTitle']?></h1>
            <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
                <div class="col-md-6">
                    <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
                    <?php if ( isset( $results['errorMessage'] ) ) { ?>
                        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
                    <?php } ?>
                    
                    <label for="title">Article Title</label>
                    <input type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" class="form-control" />
                    
                    <label for="summary">Article Summary</label>
                    <textarea name="summary" id="summary" placeholder="Brief description of the article" required maxlength="1000" style="height: 5em;" class="form-control"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
                    
                    <label for="publicationDate">Publication Date</label>
                    <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" class="form-control" />
                    <br />
                    <div class="buttons">
                        <input type="submit" name="saveChanges" value="Save Changes" class="btn btn-success"/>
                        <input type="submit" formnovalidate name="cancel" value="Cancel" class="btn btn-warning" />
                        <?php if ( $results['article']->id ) { ?>
                            <a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')" class="btn btn-danger">Delete This Article</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="content">Article Content</label>
                    <textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="50000" style="height: 30em;"  class="form-control"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
                </div>
            </form>

            
            <?php include "templates/include/footer.php" ?>

