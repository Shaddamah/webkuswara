<?php
session_start();
$_SESSION['except'] = [];
$_SESSION['nilai'] = 0;
echo  $_SESSION['log_save'];
if(isset($_GET["mulaiBtn"]))
    {
        echo "<sciprt> alert('Anda akan dialihkan!') </script>";
        $_SESSION['paket'] = (int) $_GET["inputSoal"];
        header("Location: quiz_play.php");
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
            <form method="GET" class="form-signin">
                <h5 class="card-title"><?php echo $_SESSION['log_name']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['log_inst']?></h6>
                <p class="card-text">Pilih Paket Jumlah soal yang ingin anda mainkan lalu tekan mulai untuk langsung bermain!</p>
                <div class="custom-control custom-radio custom-control-inline mt-2 mb-5">
                    <input required type="radio" id="inputSoal" value=5 name="inputSoal" class="custom-control-input">
                    <label class="custom-control-label" for="inputSoal">5 Soal</label>
                    </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input required type="radio" id="customRadioInline2" value=10 name="inputSoal" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">10 Soal</label>
                </div><br>
                <input type="submit" name="mulaiBtn" value="Mulai" class="btn btn-warning px-3 mr-3">
                <a href="../index.php" class="text-dark">Keluar</a>
            </form>
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