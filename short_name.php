<?php   
   function getShortName (string $person){
        $person_array=getPartsFromFullname($person);
        return $person_array['name'].' '.mb_substr($person_array['surname'], 0,1).'.';
   }
?>
