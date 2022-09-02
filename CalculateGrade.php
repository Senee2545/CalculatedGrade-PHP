<!DOCTYPE html>
<html>
    <body>
        <form method="get">
            <label>Score: </label>
            <input type="number" name="grade">
            
        </form>
        <?php                 
        $score = $_GET['grade'];
        if($score >= "80" && $score <= "100"){
            echo "GPA: A";
        } 
        elseif($score >= "60" && $score < "80"){
            echo "GPA: B";
        }
        elseif($score >= "40" && $score < "60"){
            echo "GPA: C";
        }
        elseif($score < "40" && $score >= "0"){
            echo "Fail";
        }
        ?>
    </body>
</html>