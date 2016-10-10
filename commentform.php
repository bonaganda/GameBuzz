<!-- Comment Section -->

                <br><br><br>

                <font color = "white"><b>Leave a Comment</b></font> </br></br>
 

                <form action="Doom.php" method="POST">
                    <input type = "text" name = "name" maxlength = "15" required> Username <font color = "red">(required)</font></br></br>                           
                    <textarea rows ="8" cols ="65" name="commentContent" required></textarea></br>
                    <input type = "submit" value = "Submit Comment"></br>
                </form>

                <?php
                
                if ($_POST) {

                    $name = $_POST['name'];
                    $content = $_POST['commentContent'];

                    #Get old comments
                    $old = fopen("comments.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("comments.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("comments.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                
                //$handle = fopen("comments.html", "a");
                //fwrite($handle, "<b><br>" . $name . "</b></br>" . $content . "</br>");
                //fclose($handle);
                // }
                ?>       