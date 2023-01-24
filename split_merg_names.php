<?php 
   function getFullnameFromParts (string $surname,string $name,string $family_name){
    return $surname.' '.$name.' '.$family_name;    
   }

   function getPartsFromFullname (string $person){
        $person_array=explode(' ',trim($person));     
        $base_arrey=['surname','name','patronomyc'];  
        if (count($person_array)==3) {
            return  array_combine(array_values($base_arrey),array_values($person_array));
        }
        else {
            echo("Full name mismatch with required parameters!\n");
        }    
   }
?>
