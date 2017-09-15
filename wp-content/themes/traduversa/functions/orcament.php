<?php
   $msgBody ='
   <html>
       <head>
           <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
           <title>Inscrição</title>
           <style type="text/css">
           *{
             white-space: normal !important;
           }
         body{
               margin:0;
               width:100%  !important;
              -webkit-text-size-adjust:none; -ms-text-size-adjust:none;
               white-space: normal !important;
             }
           p {
                margin: 1em 0;
             }
             .yshortcuts,
             .yshortcuts a,
             .yshortcuts a:link,
             .yshortcuts a:visited,
             .yshortcuts a:hover,
             .yshortcuts a span {
               color: black;
               text-decoration: none !important;
               border-bottom: none !important;
               background: none !important;
             }
             #outlook a{padding:0;}
         body{width:100% !important;}
             .ReadMsgBody{width:100%;}
             .ExternalClass{width:100%;}
         a{
             text-decoration:none;
           }
         td{
             white-space: normal !important;
           }
         span *{
             font-size:inherit !important;
             white-space: normal !important;
           }
           b{
             font-size:inherit !important;
           }
           @media only screen and (max-device-width: 480px) {
               img{
                   max-width:100% !important;
                   height:auto !important;
                   }
               table[class=conteudo] {
                   width:320px !important;
               }
               table[class=half] {
                   padding:10px 0;
                   width:100% !important;
               }
           }
           </style>
       </head>
       <body>
           <table border="0" cellpadding="0" cellspacing="0" width="100%">
                   <tr>
                       <td align="center" style="white-space:normal" valign="top">
                           <table bgcolor="#F6F6F6" border="0" cellpadding="0" cellspacing="0" width="100%">
                                   <tr>
                                       <td align="center" style="white-space:normal" valign="top">
                                           <table border="0" cellpadding="0" cellspacing="0" width="580" class="conteudo">
                                                   <tr>
                                                       <td height="30" style="white-space:normal" valign="top">
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td  style="white-space:normal" valign="top">
                                                       <table border="0" cellpadding="0" cellspacing="0" width="580" class="conteudo">
                                                           <tr>

                                                               <td height="30" style="white-space:normal" valign="top">
                                                                   <span style="font-family:Arial, Helvetica, sans-serif">
                                                                        <strong sttyle="font-weight:bold; font-family: Arial, Helvetica">nome:</strong>
                                                                        '.$nome.' <br />
                                                                        <strong sttyle="font-weight:bold; font-family: Arial, Helvetica">E-mail:</strong>
                                                                        '.$email.' <br />
                                                                        <strong sttyle="font-weight:bold; font-family: Arial, Helvetica">Telefone:</strong>
                                                                        '.$telefone.' <br />
                                                                        <strong sttyle="font-weight:bold; font-family: Arial, Helvetica">Assunto:</strong>
                                                                         '.$assunto.' <br />
                                                                        <strong sttyle="font-weight:bold; font-family: Arial, Helvetica">Mensagem:</strong>
                                                                        <br />'.$mensagem.' <br />

                                                                   </span>
                                                               </td>
                                                           </tr>
                                                       </table>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td height="30" style="white-space:normal" valign="top">
                                                       </td>
                                                   </tr>
                                           </table>
                                       </td>
                                   </tr>
                           </table>
                       </td>
                   </tr>
           </table>
       </body>
   </html>';

// return a response ===========================================================
$sucess = 'Mensagem Enviada';

$data['success'] = true;
$data['message'] = $sucess;

$subject  = "Inscrição - " . $nome;
$sub = '=?UTF-8?B?'.base64_encode($subject).'?=';
$NoWhite = preg_replace('/\s+/', '', $nome);

$mail = new PHPMailer;
$mail->From = "thommorais@gmail.com";
$mail->FromName = "Contato";
$mail->AddAddress('thommorais@gmail.com', 'Atendimento');
$mail->addReplyTo("thommorais@gmail.com", "Reply");
$mail->isHTML(true);
$mail->Subject = $sub;
$mail->Body =  $msgBody;

if(!$mail->send()){
   echo "Mailer Error: " . $mail->ErrorInfo;
   $errors['mail'] = 'Não rolou o email.';
}


echo json_encode($data);
