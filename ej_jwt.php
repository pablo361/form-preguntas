<?php
    $usuario = "ayunes";
    $clave = "ayunes1";
    $rol_buscado="cn=mail,ou=groups,dc=ucasal,dc=edu,dc=ar";

    $ch = curl_init();
    curl_setopt_array($ch,[
        CURLOPT_URL=>"https://www-desa.ucasal.edu.ar/api/v1/jwt/index.php",
        CURLOPT_POST=>true,
        CURLOPT_RETURNTRANSFER=>true,
        CURLOPT_SSL_VERIFYPEER=>false,  //!<-- no recomendado, peeero desa anda flojo de certs
        CURLOPT_SSL_VERIFYHOST=>false,  //!<-- no recomendado, peeero desa anda flojo de certs
        CURLOPT_POSTFIELDS=>[
            "usuario"=>$usuario,
            "clave"=>$clave,
        ],
    ]);

    $ret = curl_exec(($ch));
    if (curl_getinfo($ch,CURLINFO_HTTP_CODE)==200){
        //el token JWT puro
        echo "
        <h3>El JWT original</h3>
        $ret";
        echo "<hr />";
        //extraigo la parte que me interesa
        $json = explode('.',$ret);
        $json = json_decode(base64_decode($json[1]),true);
        echo "
        <h3>La parte que me interesa del JWT</h3>
        <pre>
        ".print_r($json['roles']['ldap']['memberof'],true)."</pre>
        <hr>
        <h3>
        "
        //vemos si es que tiene el rol que busco...
        .(in_array($rol_buscado,$json['roles']['ldap']['memberof'])?"TIENE EL ROL NECESARIO":"NO TIENE EL ROL NECESARIO")
        ."</h3>";      
    }else{
        echo "usuario o contraseña incorrectos";
    }
?>