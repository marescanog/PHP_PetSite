<?php 
        $pagelink='?city='.str_replace(' ','+',$city).'&animal='.$animal.'&gender='.$gender.'&age='.$age.'&size='.$size;
        echo $countResQuery;
        echo '<br>';
        echo '<br>';
        echo 'TOTAL RESULTS = '.$totalResults;
        echo '<br>';
        echo '<br>';
        echo 'TOTAL PAGES = '.$totalPages;
        echo '<br>';
        echo '<br>';
        echo 'CURRENT PAGE = '.$currentpage;
        echo '<br>';
        echo '<br>';
        echo 'OFFSET = '.$offset;
        echo '<br>';
        echo '<br>';
        echo $pagelink;
        echo '<br>';
        echo '<br>';
        //echo var_dump($pageResults);
       // echo $pageResults[0];
       /* echo var_dump(ENUM_GENDER::isValidValue($gender));
        echo '<br>';
        echo '<br>';
        echo '<p>City:'.$city.'</p>';
        echo '<p>Animal:'.$animal.'</p>';
        echo '<p>Gender:'.$gender.'</p>';
        echo '<p>'. var_dump( $gender==ENUM_GENDER::male ) .'</p>';
        echo '<p>Age:'.$age.'</p>';
        echo '<p>Size:'.$size.'</p>';
        echo '<p>Page:'.$page.'</p>';

       foreach($results as $result){
            echo $result['petName'];
            echo '<br>';
        } */
?>