<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guess the Number</title>
        <link rel="stylesheet" href="../CSS/Conditional.css">
    </head>
    <body>        
        <div class="badan">
        <form method="post">
            <h1>Guess the Number</h1>
            <h3>Diketahui sebuah angka bernilai X sama dengan Y<br>1 <= y <= 10<br>Tebaklah Nilai X!!!</h3>
            <label for="angka">Input angka: </label>
            <input type="number" name="angka" id="angka" required><br><br>
            <input type="submit" name="submit" value="Tebak angka">
        </form>
        <br>
        <?php
            $x = null;
            $y = rand(1, 10);
            if (isset($_POST['submit'])) {
                if (isset($_POST['angka']) && $_POST['angka'] !== '') {
                    $x = (int)$_POST['angka'];
                    if ($x > 10) {
                        echo "Jawaban anda melebihi maksimal angka<br>";
                    } elseif ($x === $y) {
                        echo "<font color='green'>Jawaban anda Benar<br> Y = $y<br></font>";
                        echo '<img src="https://kepojepang.com/wp-content/uploads/2021/02/Summer-Virtual-Classroom-9.jpg" width="300px">';
                    } else {
                        echo "<font color='red'>Jawaban anda salah<br>Yang benar Y = $y</font>";
                    }
                }
            }
        ?>
        </div>
    </body>
</html>