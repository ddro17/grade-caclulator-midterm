<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<table>";
    echo "<tr>
            <th>Name of Student</th>
            <th>Class Participation</th>
            <th>Summative Assessment</th>
            <th>Exam Grade</th>
            <th>Grade Score</th>
            <th>Letter Grade</th>
          </tr>";

    for ($i = 1; $i <= 5; $i++) {
        $name = $_POST["name$i"];
        $enabling = array_map('floatval', [
            $_POST["ea{$i}1"], $_POST["ea{$i}2"], $_POST["ea{$i}3"],
            $_POST["ea{$i}4"], $_POST["ea{$i}5"]
        ]);
        $summative = array_map('floatval', [
            $_POST["sa{$i}1"], $_POST["sa{$i}2"], $_POST["sa{$i}3"]
        ]);
        $exam = floatval($_POST["exam$i"]);

        $class_participation = array_sum($enabling) / count($enabling);
        $summative_grade = array_sum($summative) / count($summative);
        $final_grade = ($class_participation * 0.3) + ($summative_grade * 0.3) + ($exam * 0.4);

        if ($final_grade >= 90) {
            $letter = "A";
        } elseif ($final_grade >= 80) {
            $letter = "B";
        } elseif ($final_grade >= 70) {
            $letter = "C";
        } elseif ($final_grade >= 60) {
            $letter = "D";
        } else {
            $letter = "F";
        }

        echo "<tr>
                <td>$name</td>
                <td>" . round($class_participation) . "</td>
                <td>" . round($summative_grade) . "</td>
                <td>$exam</td>
                <td>" . round($final_grade) . "</td>
                <td>$letter</td>
              </tr>";
    }
    echo "</table>";
}
?>
