<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Kuswara - Kuis Bersuara</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
</head>
<body id="particles-js">
    <div class="position-absolute container-fluid row m-0">
        <div class="col-10 col-md-4 p-0 mx-auto my-auto">
            <form action="start.php" method="GET" class="form-signin">
                <div class="text-center mb-4">
                  <img class="img-fluid w-75 my-4" src="img/kuswara.png" alt="">
                  <p>Dengarkan suara dan pilih jawaban yang tepat untuk mendapatkan <code>Point</code> dan dapatkan Hadiah di akhir quiz.
                    <a class="text-warning" href="https://caniuse.com/#feat=css-placeholder-shown">Pelajari lebih lanjut.</a>
                </p>
                </div>
                
                <div class="custom-control custom-switch my-4">
                    <input value="save" type="checkbox" name="save" class="custom-control-input" id="checkData" onclick="saveData()">
                    <label class="custom-control-label" for="checkData">Simpan Data saya</label>
                </div>
                <div id="input" style="display: none;">
                  <div class="form-label-group">
                    <input type="text" name="name" id="inputName" class="form-control" placeholder="Nama Pemain" autofocus>
                    <label for="inputName">Nama Pemain</label>
                  </div>
                
                  <div class="form-label-group">
                    <input type="text" name="inst" id="inputInst" class="form-control" placeholder="Institusi">
                    <label for="inputInst">Institusi</label>
                  </div>
                </div>
              
                <button class="btn btn-lg btn-warning btn-block" type="submit">Mulai Bermain</button>
                <p class="mt-5 mb-3 text-muted text-center">Shaddam Amru Hasibuan &copy; 2020</p>
              </form>
        </div>
    </div>
</body>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<script>
function saveData() {
  var data_input = document.getElementById("input");
  var x = document.getElementById("checkData").checked;
  if(x){
    data_input.setAttribute("style", "display: block;");  
  }else{
    data_input.setAttribute("style", "display: none");  
  }
}
</script> 
</html>