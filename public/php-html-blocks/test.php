<?php 
        
        echo $query;
        echo '<br>';
        echo '<br>';
        echo var_dump(ENUM_GENDER::isValidValue($gender));
        echo '<br>';
        echo '<br>';
        echo '<p>City:'.$city.'</p>';
        echo '<p>Animal:'.$animal.'</p>';
        echo '<p>Gender:'.$gender.'</p>';
        echo '<p>'. var_dump( $gender==ENUM_GENDER::Male ) .'</p>';
        echo '<p>Age:'.$age.'</p>';
        echo '<p>Size:'.$size.'</p>';
        echo '<p>Page:'.$page.'</p>';

       foreach($results as $result){
            echo $result['petName'];
            echo '<br>';
        } 
?>