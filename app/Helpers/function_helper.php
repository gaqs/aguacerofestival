<?php
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

?>