<?php

    foreach ($Supplier as $Supplier):
        echo $Supplier->supplier_id; echo " ";
        echo $Supplier->supplier_name; echo " ";
        echo $Supplier->supplier_address; echo " ";
        echo "<br />";
    endforeach;
?>