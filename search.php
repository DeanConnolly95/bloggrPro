<form method="post" action="search.php?search" id="searchform" class="control-group">
    <input type="text" name="article">
    <input type="submit" name="submit" value="Search">
</form>
<p>
    <a href="?by=A">A</a> | <a href="?by=B">B</a> | <a href="?by=K">K</a>
</p>

<?php
    if(isset($_POST['submit'])){
        if(isset($_GET['search'])){
            if(preg_match("/[A-Z | a-z]+/", $_POST['article'])){
                $name=$_POST['article'];
                //connect to the database
                $db=mysql_connect ("localhost", "bloggrPro", "bloggrPro") or die ('Search is offline.'); 
                //-select the database to use
                $mydb=mysql_select_db("bloggrPro");
                //-query the database table
                $sql="SELECT id, title FROM articles WHERE title LIKE '%" . $name . "%' OR id LIKE '%" . $name ."%'";
                //-run the query against the mysql query function
                $result=mysql_query($sql);
                //-count results
                $numrows=mysql_num_rows($result);
                echo "<p>" .$numrows . " results found for " . stripslashes($name) . "</p>"; 
                //-create while loop and loop through result set
                while($row=mysql_fetch_array($result)){
                    $ID=$row['id'];
                    $TITLE=$row['title'];
		
                    //-display the result of the array

                    echo "<ul>\n"; 
                    echo "<li>" . "<a href=\".?action=viewArticle&amp;articleId=$ID\">" . $TITLE . "</a></li>\n";
                    echo "</ul>";
                }
            }
            else{
                echo "<p>Please enter a search query</p>";
            }
        }
    }
?>