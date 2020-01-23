# phpmailer

  $mail->SMTPDebug = 1; //see debug message. Use 0 if use on prod 
  
  $mail->isSMTP();
  
  $mail->CharSet = "UTF-8";//use actual charset or comment
  
  $mail->SMTPAuth   = true;
  
  $mail->Host       = 'smtp..';// actual smtp server
  
  $mail->Username   = ''; // login
  
  $mail->Password   = $this->getPassword(); // password
  
  $mail->SMTPSecure = 'ssl';
  
  $mail->Port       = ' ' ;//use port your select mail
  
  $mail->setFrom('', ''); // 'sender address', your name
  
  $mail->addAddress($email);  // address of the recipient
  
  $mail->isHTML(true); 
  
  $mail->Subject = 'Notification '; // email header
  
  $mail->Body    = ""; // your text
  
  if ($mail->send()) {
  
    echo = "email sent";
    
  } else {
  
    echo "Message has not been sent. Your email settings are incorrect";
    
  }
  
  } catch (Exception $e) {
  
    echo "Message has not been sent. The reason for the error: $mail->ErrorInfo";
    
  }
