<?php
include("conex.php");



    $your_name = $_REQUEST['your_name'];
    $your_email = $_REQUEST['your_email'];
    $your_telefono = $_REQUEST['your_telefono'];
    $your_subject = $_REQUEST['your_subject'];
    $your_message = $_REQUEST['your_message'];
    
    
           
        $registro = mysqli_query($conex, "INSERT INTO interesados (your_name,your_email,your_telefono,your_subject,your_message) VALUES ('$your_name','$your_email','$your_telefono','$your_subject','$your_message')");
        
        //echo "Entro <br>";
        
        if($registro){


            //para el envío en formato HTML 
            $headers = "Ventok: 1.0\r\n"; 
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

            //dirección del remitente 
            $headers .= "From: ". $your_name . " <". $your_email .">\r\n"; 

            $cuerpo = $your_message . "\n \n" . $your_name . "\n \n" . $your_telefono;

            mail("contacto@ventok.co",$your_subject,$cuerpo,$headers);
            header("Location: http://www.ventok.co");
        }
        else{
            echo "envío_fallo";
        }
        
    


$conex->close();
?>