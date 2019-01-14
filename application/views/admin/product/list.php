<?php

    foreach ($Product as $Product):
        echo $Product->product_id; echo " ";
        echo $Product->name; echo " ";
		echo $Product->price; echo " ";
		echo $Product->description; echo " ";
        echo "<br />";
    endforeach;
?>