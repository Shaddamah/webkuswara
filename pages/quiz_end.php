<?php
session_start();
if ($_SESSION['log_save']){
    include "koneksi.php";
    $nama = $_SESSION['log_name'];
    $institusi = $_SESSION['log_inst'];
    $score = $_SESSION['nilai'];
    $query = mysqli_query($con, "INSERT INTO scoreboard (nama,institusi,score,date) VALUES ('$nama','$institusi','$score',NOW())");
    $_SESSION['log_save'] = false;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Kuswara - Kuis Bersuara</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
</head>
<body id="particles-js">
    <div class="container-fluid row m-0 position-absolute">
        <div class="col-10 col-md-4 p-0 mx-auto my-auto">
                <h5 class="card-title"><?php echo $_SESSION['log_name']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['log_inst']?></h6>
                <p class="card-text">Anda telah selesai memainkan quiz ini!</p>
                <div class="my-5">
                <p class="h5">Total Point Anda:</p>
                <code class="h2"><?php echo $_SESSION['nilai'] ?> Point</code>
                </div>
                <div class="btn-group">
                    <a href="scoreboard.php" class="btn btn-warning px-3 mr-3">Scoreboard</a>
                    <a class="btn btn-warning px-3 mr-3">Tukarkan Hadiah</a>
                </div>
                <a href="../index.php" class="text-dark">Home</a>
        </div>
    </div>
</body>
<script src="../js/particles.js"></script>
<script>
    particlesJS.load('particles-js', '../js/particlesjs-config.json', function() {
        console.log('callback - particles.js config loaded');
    });
</script>
</html>