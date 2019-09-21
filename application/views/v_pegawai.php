<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Constants Global Array Codeigniter 3</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <form method="POST">
        <p>NIP<br/>
            <input type="text" name="nip"/>
        </p>
        <p>Nama<br/>
            <input type="text" name="nama"/>
        </p>
       
        <p>Gender<br/>
            <?php
                // konstanta GENDER
                $arr_GENDER=unserialize(GENDER);         
                foreach ($arr_GENDER as $key => $value) {
                    echo '<input type="radio" name="gender" value="'.$key.'">'.$arr_GENDER[$key];
                }
            ?>
        </p>
   
        <p>Pendidikan<br/>
        <select name="pendidikan">
            <?php
                // konstanta PENDIDIKAN
                $arrPendidikan=unserialize(PENDIDIKAN);          
                foreach ($arrPendidikan as $key => $value) {
                    echo '<option value="'.$key.'">'.$arrPendidikan[$key].'</option>';
                }
            ?>
        </select>
        </p>
 
        <p>Status Pegawai<br/>
        <select name="Status_pegawai">
            <?php
                // decode json STATUS_PGW
                $arrStatus_pegawai=json_decode(STATUS_PGW);
                for($sp=0;$c<count($arrStatus_pegawai);$sp++){
                    echo '<option value="'.$sp.'">'.$arrStatus_pegawai[$sp].'</option>';
                }
            ?>
        </select>
        </p>
    </form>
</body>
</html>