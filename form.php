<form method="POST">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <fieldset>
            <legend>Student <?php echo $i; ?></legend>
            <label>Name: <input type="text" name="name<?php echo $i; ?>" required></label><br><br>

            <label>Enabling Assessments (5):</label><br>
            <?php for ($j = 1; $j <= 5; $j++): ?>
                <input type="number" name="ea<?php echo $i . $j; ?>" min="0" max="100" required>
            <?php endfor; ?>
            <br><br>

            <label>Summative Assessments (3):</label><br>
            <?php for ($j = 1; $j <= 3; $j++): ?>
                <input type="number" name="sa<?php echo $i . $j; ?>" min="0" max="100" required>
            <?php endfor; ?>
            <br><br>

            <label>Major Exam Grade:
                <input type="number" name="exam<?php echo $i; ?>" min="0" max="100" required>
            </label>
        </fieldset>
    <?php endfor; ?>

    <button type="submit" class="btn">Calculate Grades</button>
</form>
