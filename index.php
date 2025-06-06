<?php
/* 
    CSS0045L MIDTERM PRACTICAL EXAM
    Program: Computation of Final Grades
    Programmer: Leandro Martinez
    Section: BSCSSE AN21
    Start Date: June 4, 2025
    End Date: June 6, 2025
*/
?>

<?php include("header.php"); ?>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require("process.php");
    } else {
        include("form.php");
    }
    ?>
</div>

</body>
</html>
