<?php
class Mail {

public $lastname;  // nom
public $firstname; // prenom
public $phone;     // numero de telephone
public $mail_exp;  // adresse mail de l'expediteur
public $msg_form;  //
public $mail_dest = "realmaghin@gmail.com"; // destinataire des mail

public function __construct($lastname, $firstname, $phone, $mail_exp, $msg_form)
{
  Mail::setLastName($lastname);
  Mail::setFirstName($firstname);
  Mail::setPhone($phone);
  Mail::setMail_exp($mail_exp);
  Mail::setMsg_form($msg_form);
}

public function setLastName($lastname) {
  $this->lastname = $lastname;
}
public function setFirstName($firstname) {
  $this->firstname = $firstname;
}
public function setPhone($phone) {
  $this->phone = $phone;
}
public function setMail_exp( $mail) {
  $this->mail = $mail;
}
public function setMsg_form($msg_form) {
  $this->msg_form =  $msg_form;
}
public function setCorpMail() {
  if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail_exp)) {
    $passage_ligne = "\r\n";
  } else {
    $passage_ligne = "\n";
  }
  $message_html = "<html><head></head><body><b>Nouveau Message de ".$nom." ".$prenom."</br><br> ".$msg_form." <br><br> contact : <br>téléphone : ".$tel." <br> Email : ".$mail."</body></html>";
  $boundary = "-----=".md5(rand());
  $sujet = "Nouveau message cv en ligne : ".$nom." ".$prenom;
  $header = "From: \"$nom\"<$mail>".$passage_ligne;
  $header.= "Reply-to: \"$nom\" <$mail>".$passage_ligne;
  $header.= "MIME-Version: 1.0".$passage_ligne;
  $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
  $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

  $msg = $passage_ligne.$boundary.$passage_ligne;
  $msg.= $passage_ligne."--".$boundary.$passage_ligne;
  $msg.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
  $msg.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $msg.= $passage_ligne.$message_html.$passage_ligne;
  $msg.= $passage_ligne."--".$boundary."--".$passage_ligne;
  $msg.= $passage_ligne."--".$boundary."--".$passage_ligne;
}

public static function send()
{
  try {
    throw new Exception();
    mail($mail_destinataire,$sujet,$msg,$header);
    echo "<br><br><p id='msgEnvoyer'> Votre message à bien été prit en compte.</p>";
  } catch (Exception $e) {
    echo " <br><br><p id='msgEnvoyer'>Une erreur est survenu lors de l'envoie.</p>";
  }
}
}
?>.
