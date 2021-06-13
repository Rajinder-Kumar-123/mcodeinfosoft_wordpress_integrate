
<?php
header("Acces-Control-Allow-Origin: *");
//include "db1.php";
function valid($value):
    bool
    {
        return isset($value) && !empty($value);
    }
    if (valid($_POST['Email']) && valid($_POST['EmailCc']) && valid($_POST['EmailBcc']) && valid($_POST['Subject']) && valid($_POST['Message']))
    {
        try
        {
            $recipients = array(
                "rajinder.mcodeinfosoft@gmail.com",);
			$msg= "";
            $email_to = implode(',', $recipients);       /* support@mcodeinfosoft.com */
            $subject = "Contact Form";
            $from = $_POST['Email'];
            $header = "From : " . $from;
            $headers = "\nMIME-Version: 1.0\n" .
            "Content-Type: multipart/mixed";
           
           
            $body = "Email  : " .$_POST['Email'].'\n' . "EmailCc : " .$_POST['EmailCc'].'\n' . "EmailBcc : " .$_POST['EmailBcc'].'\n' . "Subject : " .$_POST['Subject'].'\n' .  "Message : " .$_POST['Message']/*  .'\n' . "Attach Resume : " .$_POST['myFile'] */;
            $body .= "please find the attachment";
            $body .= "MIME-type : application/myFile";  
            $semi_rand = md5(uniqid(time()));
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
            if($_FILES(['doc', 'jpeg', 'jpg', 'svg', 'jfif', 'gif', 'doc', 'xlsx', 'ppt', 'ms-doc', 'xlx']['myFile']['name'])){
                $strFilesName = $_FILES['myFile']['name'];
                $strContent = chunk_split(base64_encode(file_get_contents($_FILES['myFile']['tmp_name'])));
            $body .= "This is a multi-part message in MIME format.\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
            $body .= "\n\n";
            $body .= "--{$mime_boundary}\n" .
            "Content-Type: application/octet-stream;\n" .
            " name=\"{$strFilesName}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
            $strContent  .= "\n\n" .
            "--{$mime_boundary}--\n";
        
            }
            $sent = mail($email_to, $subject, $body, $header);
            if ($sent)
            {
                $msg = "Email is succesfully send contact you comming soon";
                die(json_encode(['success' => 200, 'message' => ' Thank You. Email Is Succesfully Send.']));
            }
            else
            {
                http_response_code(400);
                die(json_encode(['success' => 203, 'message' => 'Error in sending email']));
            }
        }
        catch(Exception $e)
        {
            http_response_code(400);
            die(json_encode(['success' => 204, 'message' => $e->getMessage() ]));
        }
    }
    else
    {
        http_response_code(400);
        die(json_encode(['success' => 201, 'message' => 'Please fill required fields']));
    }
?>

