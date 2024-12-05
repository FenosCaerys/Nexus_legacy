<?php
if($_POST){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $object = $_POST['object'];
    $message = $_POST['message'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: FORMULAIRE NEXUS LEGACY $name <$email>\r\nReply-to : $name <$email>\nX-mailer:PHP";
    $subject = "$object";
    $destinataire="leganexus1@gmail.com";
    $body= " 'Email :' $email .'Objet:'  $subject. 'Message:' $message";
    if(mail($destinataire,$subject,$body,$headers)){
        $response['status'] = 'success';
        $response['msg'] = 'your mail is sent';
    }else{
        $response['status'] = 'error';
        $response['msg'] = 'Something went wrong';
    }
    echo json_encode($response);
}
?>