<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(0, 119, 255);
        }

    </style>
</head>
<body>
    
<h1 style="color: rgb(255, 255, 255);">Selamat Datang <?php echo $_GET["fname"];?> <?php echo $_GET["lname"];?>
 </h1>

 Jenis Kelamin sayaa <?php echo $_GET["Gender"];?> <br>
 Kewarganegaraan Saya <?php echo $_GET["Nationality"];?> <br>
 Bahasa Saya <?php
// Memeriksa apakah ada setidaknya satu checkbox yang dipilih
if(isset($_GET['language'])) {
   
    $selected_languages = $_GET['language'];
    
    
    echo "";
    foreach($selected_languages as $language) {
        echo $language . ",";
    }
} else {
    
    echo "Bahasa Saya: Tidak ada bahasa yang dipilih";
}
?> <br>
 pesan saya ke anda adalah <?php echo $_GET["w3review"];?> <br>
    <h3 style="color: rgb(255, 255, 255);">Terimakasih Telah Bergabung di Website Kami. Media Belajar Kami Bersama!</h3>

</body>
</html>