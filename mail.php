<?php
$nume     =   $_POST['nume'];
$telefon  =   $_POST['telefon'];
$email    =   $_POST['email'];
$mesaj    =   $_POST['mesaj'];
// echo"
//Nume: $nume <Br>
//Telfon: $telefon <Br>
//Email: $email <Br>
//Mesaj: $mesaj


 

$to      = 'vlad.hilea@gmail.com';
$subject = 'Contact Web Design';
$message = "
$nume 
$telefon
$email
$mesaj";
$headers = 'From: contact@vlad-hilea.ro' . "\r\n" .
           'Reply-To: contact@vlad-hilea.ro' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet"> 
</head>
<body>
<section class="bg-image-2 height-full" id="">
            <section class="height-full opacity-black">
                <div class="container display-table">
                    <div class="row valign-middle ">                      
                        <div class="col-sm-12 color-white text-center">
                            <p class="title-1"><strong>Multumim</strong></p>
                            <p class="title-1-sm pb">Mesajul dumneavoastra a fost trimis!</p>
         					<a href='index.php' class="  btn btn-default">Home</a>
                        </div> 
                    </div> 
                </div>
            </section>
</section>
</body>
</html>