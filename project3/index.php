<!--Php file that links the header and form files-->
<?php
include 'header.php';
include 'form.php';
?>

<!--H1 and H2 for index.php-->
<h1>Front Page</h1>
<h2>All Articles:</h2>

<div class="article-container">
    <?php
    $sql = ' SELECT * FROM article '; 
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
    if($queryResult > 0 ) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='article-box'>
                <h3>".$row['a_title']."</h3>
                <p>".$row['a_text']."</p>
                <p>".$row['a_date']."</p>
                <p>".$row['a_author']."</p>
            </div>";

    }
 }

    ?>

</div>

<!--Footer section-->
<footer>
     <!-- Links to W3C HTML5 & CSS Validation and your Course Homepage --> 
          <p id="validation">  
               <a href="http://validator.w3.org/check?uri=referer" title="HTML5 Validation - W3C">HTML5 Validation</a> | 
               <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" title="CSS Validation - W3C">CSS Validation</a> | <a href="../home.htm">Course Homepage</a></p>
     </footer>
</body>
</html>