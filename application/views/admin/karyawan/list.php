<?php

    foreach ($Karyawan as $Karyawan):
        echo $Karyawan->karyawan_id; echo " ";
        echo $Karyawan->name; echo " ";
        echo $Karyawan->address; echo " ";
        echo $Karyawan->no_telpon; echo " ";
        echo "<br />";
    endforeach;
?>