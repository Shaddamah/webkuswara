<?php
include "koneksi.php";
$query = mysqli_query($con, "SELECT * FROM scoreboard ORDER BY score DESC");
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
</style>
<body id="particles-js">
    <div class="container-fluid row m-0 position-absolute">
        <div class="col-10 col-md-6 p-0 mx-auto my-auto">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Institusi</th>
                    <th scope="col">Score</th>
                    <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<th scope='row'>".$row['nama']."</td>";
                    echo "<td>".$row['institusi']."</td>";
                    echo "<td><span class='badge badge-warning'>".$row['score']."</span></td>";
                    echo "<td>".$row['date']."</td>";
                    echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="btn-group">
                    <button href="scoreboard.php" disabled class="btn btn-warning px-3 mr-3">Scoreboard</button>
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