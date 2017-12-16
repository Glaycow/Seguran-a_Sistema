<?php
if(isset($_FILES['arquivo1']['tmp_name'][1]))
{
    $arq1 = fopen($_FILES['arquivo1']['tmp_name'][1] , "r" );
    while ( ( $line = fgets( $arq1 ) ) ){

        if(strpos($line,"TOKEN:") !== false){
            $TOKEN =str_replace("TOKEN:", "", $line);
        }else
        {

            if(strpos($line,"NOME:") !== false){
                $NOME =str_replace("NOME:", "", $line);
            }
        }
    }
    fclose( $arq1 );
}
$data ="";
$arq1 = fopen($_FILES['arquivo1']['tmp_name'][0] , "r" );
while ( ( $line = fgets( $arq1 ) ) ){
    $data=$data.$line;
}
fclose( $arq1 );
$binary_signature = $TOKEN;

$public_key = <<<EOD
-----BEGIN PUBLIC KEY-----
$NOME
-----END PUBLIC KEY-----
EOD;
$ok = openssl_verify($data, base64_decode($binary_signature), $public_key, OPENSSL_ALGO_MD5);

if ($ok == 1) {
    echo "true";
} elseif ($ok == 0) {
    echo "false";
} else {
    echo "ERRO";
}
?>