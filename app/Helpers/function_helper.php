<?php
function paises($selected){
  $paises = array("Chile","Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Argentina","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Palestina","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue");

  for ($a=0; $a < count($paises); $a++) {
    $aux = '';
    if( $paises[$a] == $selected ){
      $aux = 'selected';
    }
    echo '<option value="'.$paises[$a].'" '.$aux.'>'.$paises[$a].'</option>';
  }

}
function bancos($selected){
  $bancos = array("Banco Estado","Banco de Chile","Banco Bci","Banco Santander","Banco BICE","Banco Condell","Banco CrediChile","Banco Edwards Citi","Banco Falabella","Banco Internacional","Banco Itaú","Banco Ripley","Banco Security","Scotiabank");

  for ($a=0; $a < count($bancos); $a++) {
    $aux = '';
    if( $bancos[$a] == $selected ){
      $aux = 'selected';
    }
    echo '<option value="'.$bancos[$a].'" '.$aux.'>'.$bancos[$a].'</option>';
  }
}

function cuentas($selected){
    $cuentas = array("Cuenta RUT","Cuenta Corriente","Cuenta Vista","Cuenta Ahorro");
  
    for ($a=0; $a < count($cuentas); $a++) {
      $aux = '';
      if( $cuentas[$a] == $selected ){
        $aux = 'selected';
      }
      echo '<option value="'.$cuentas[$a].'" '.$aux.'>'.$cuentas[$a].'</option>';
    }
  }

function uniqidReal($lenght = 13) {
  // uniqid gives 13 chars, but you could adjust it to your needs.
  if (function_exists("random_bytes")) {
    $bytes = random_bytes(ceil($lenght / 2));
  } elseif (function_exists("openssl_random_pseudo_bytes")) {
    $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
  } else {
    throw new Exception("No cryptographically secure random function available");
  }
  return substr(bin2hex($bytes), 0, $lenght);
}

function send_email($send_to, $send_cc, $subject, $message, $attach){
  error_reporting(0);
  $email = \Config\Services::email();

  $config = Array(
							'protocol' => 'smtp',
							'SMTPHost' => 'mail.aguacerocomics.cl',
							'SMTPPort' => '587',
							'SMTPUser' => 'postmaster@aguacerocomics.cl',
							'SMTPPass' => 'N0QM@33bq7UI',
							'mailType' => 'html',
							'charset'  => 'utf-8',
							'newline'	 => "\r\n"
						);

  $email->initialize($config);

  $email->setFrom('postmaster@aguacerocomics.cl', 'Aguacero Festival');
  $email->setTo($send_to);
  $email->setCC($send_cc);

  if( $attach != '' ){ $email->attach($attach); }

  $email->setSubject($subject);
  $email->setMessage($message);
  
  $email->send();
  return true;
  /*
  if ( $email->send() ){
    return true;
  } else {
    echo $email->printDebugger();
    return false;
  }
  */
}//end send_email

function var_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

?>