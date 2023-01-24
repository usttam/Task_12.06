<?php   
   function getGenderDescription (array $persons_array){    
    $count_male=0;
    $count_female=0;
    $count_unsex=0;
    $percent_male=0;
    $percent_female=0;
    $percent_unsex=0;
    $counts_array=count($persons_array);

   for ($i=0; $i<$counts_array; $i++){            
       if (getGenderFromName($persons_array[$i]['fullname'])==1){
            $count_male++;        
        }
        if (getGenderFromName($persons_array[$i]['fullname'])==-1){
            $count_female++;
        }
        if (getGenderFromName($persons_array[$i]['fullname'])==0){
            $count_unsex++;
        }
   }  
    $percent_male = round($count_male/$counts_array*100,1);
    $percent_female = round($count_female/$counts_array*100,1);
    $percent_unsex = round($count_unsex/$counts_array*100,1);
   
    echo<<<HEREDOCLETTER
    Гендерный состав аудитории:\n <br>
    ---------------------------\n <br>
    Мужчины - $percent_male %\n  <br>
    Женщины - $percent_female %\n  <br> 
    Не удалось определить -  $percent_unsex %\n  <br> 
HEREDOCLETTER;
       // return [$percent_male,$percent_female,$percent_unsex];
   }
?>