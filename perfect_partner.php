<?php   
    function getPerfectPartner (string $surname,string $name,string $family_name, array $persons_array){  
        $surname =  mb_strtolower($surname);       
        $surname =  mb_strtoupper(mb_substr($surname, 0, 1)).mb_substr($surname, 1);
       // $surname[0] = mb_strtoupper($surname[0]);
        $name =  mb_strtolower($name);
        $name =  mb_strtoupper(mb_substr($name, 0, 1)).mb_substr($name, 1);
       // $name[0] = mb_strtoupper($name[0]);
        $family_name =  mb_strtolower($family_name);
        $family_name =  mb_strtoupper(mb_substr($family_name, 0, 1)).mb_substr($family_name, 1);
       // $family_name[0] = mb_strtoupper($family_name[0]);
        $full_name = getFullnameFromParts ($surname,$name,$family_name);
        $gender_person = getGenderFromName ($full_name);
        $counts_array = count($persons_array);
        do {            
          $rendom_person = $persons_array[rand(0, $counts_array-1)]['fullname'];
          if (getGenderFromName ($rendom_person) <> $gender_person && getGenderFromName ($rendom_person)!=0){
            break;
          }
        } while (true);   
        $person_short1 = getShortName ($full_name);
        $person_short2 = getShortName ($rendom_person);
        $perfect_rand = round(50.00 + 50 / rand(1,50),2);

   
        echo<<<HEREDOCLETTER
        $person_short1 +  $person_short2 \n <br> 
        ♡ Идеально на $perfect_rand % ♡ \n <br> 
HEREDOCLETTER;      
    
   }
?>