<?php
session_start();
$questions = array(
    "Kata Apa yang terdengar audio diatas?",
    "Apa kata yang tidak disebutkan audio diatas?",
    "Berapa kali kata 'Aku' disebutkan?",
    "Berapa kali kata 'belajar' disebutkan?",
    "Hewan apa yang tidak disebutkan audio diatas?",
    "Ada Berapa hewan yang disebutkan audio diatas?",
    "Suara binatang apa yang kamu dengar?",
    "Suara siapa yang kamu dengar dari audio diatas?",
    "Berapa jumlah kata yang disebutkan audio diatas?",
    "Suara alat musik apa yang dimainkan audio diatas?"
);
$choices = array(
    array("Akuarium","Makan Kriuk","Kurang Minum"),
    array("Jerapah","Kuda","Gajah"),
    array("2 Kali","3 Kali","4 Kali"),
    array("Tidak sama sekali","1 Kali","2 Kali"),
    array("Kucing","Burung","Babi"),
    array("4 Hewan","3 Hewan","7 Hewan"),
    array("Ayam","Bebek","Katak"),
    array("Will Smith","Jackie Chan","Fahmi Raihan"),
    array("13 Kata","9 Kata","11 Kata"),
    array("Klarinet","Piano","Gitar")
);
$c_values = array(
    array(0,0,0,10),
    array(0,0,20,0),
    array(0,10,0,0),
    array(0,0,30,0),
    array(0,15,0,0),
    array(0,10,0,0),
    array(10,0,0,0),
    array(0,20,0,0),
    array(0,10,0,0),
    array(0,0,30,0),
);
// Set Question function
function setQuestion($total){
    do{
        $x = rand(0,count($total)-1);
    }while(in_array($x,$_SESSION['except']));
    return $x;
}
$current = setQuestion($questions);
if(isset($_POST["nextBtn"]))
    {
        $_SESSION['nilai'] += (int) $_POST["inputRadio"];
        // Finish collecting data
        array_push($_SESSION['except'], $current);
        if(count($_SESSION['except']) >= $_SESSION['paket']){
            header("Location: quiz_end.php");
        }else{
        setQuestion($questions);
        }
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
    <div class="position-absolute container-fluid row m-0">
        <div class="col-10 col-lg-4 p-0 mx-auto my-auto">
            <audio controls class="w-100">
                <source src="horse.ogg" type="audio/ogg">
            </audio>
            <b>SOAL <?php echo count($_SESSION['except'])+1 ?></b>
            <p class="mb-0"><?php echo $questions[$current]; ?></p>
            <code>Hadiah <?php echo array_sum($c_values[$current]) ?> Point</code>
            <form class="my-4" method="POST">
                <div class="custom-control custom-radio my-2">
                    <input required type="radio" id="inputRadio1" name="inputRadio" class="custom-control-input"
                    value=<?php echo $c_values[$current][0]?>
                    >
                    <label class="custom-control-label" for="inputRadio1">
                    <?php echo $choices[$current][0]; ?>
                    </label>
                </div>
                <div class="custom-control custom-radio my-2">
                    <input required type="radio" id="inputRadio2" name="inputRadio" class="custom-control-input"
                    value=<?php echo $c_values[$current][1]?>
                    >
                    <label class="custom-control-label" for="inputRadio2">
                    <?php echo $choices[$current][1];?>
                    </label>
                </div>
                <div class="custom-control custom-radio my-2">
                    <input required type="radio" id="inputRadio3" name="inputRadio" class="custom-control-input"
                    value=<?php echo $c_values[$current][2]?>
                    >
                    <label class="custom-control-label" for="inputRadio3">
                    <?php echo $choices[$current][2]; ?>
                    </label>
                </div>
                <div class="custom-control custom-radio my-2">
                    <input required type="radio" id="inputRadio4" name="inputRadio" class="custom-control-input"
                    value=<?php echo $c_values[$current][3]?>
                    >
                    <label class="custom-control-label" for="inputRadio4">Semuanya Salah</label>
                </div>
                <input required class="my-4 btn btn-lg btn-warning btn-block" type="submit" value="Lanjut" name="nextBtn"></input>
            </form>
            <img class="img-fluid w-25 my-4" src="../img/kuswara.png" alt="">
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