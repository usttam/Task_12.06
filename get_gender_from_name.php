<?php   
   function getGenderFromName (string $person){
        $person_array=getPartsFromFullname($person);
        $sex_attr=0;
        $surname_signs_1=mb_strtolower(mb_substr($person_array['surname'], -1,1));
        $surname_signs_2=mb_strtolower(mb_substr($person_array['surname'], -2,2));        
        $name_signs=mb_strtolower(mb_substr($person_array['name'], -1,1));
        $familyname_signs_1=mb_strtolower(mb_substr($person_array['patronomyc'], -3,3));
        $familyname_signs_2=mb_strtolower(mb_substr($person_array['patronomyc'], -2,2));
        if($name_signs=='а'){
            $sex_attr--;
        }
        if($name_signs=='й'|| $name_signs=='н'){
            $sex_attr++;
        }
        if($surname_signs_2=='ва'){
            $sex_attr--;
        }
        if($surname_signs_1=='в'){
            $sex_attr++;
        }
        if($familyname_signs_1=='вна'){
            $sex_attr--;
        }
        if($familyname_signs_2=='ич'){
            $sex_attr++;
        }    
       switch ($sex_attr <=> 0) {
        case -1:
            return -1;//'женский пол';
            break;
        case 0:
            return 0;//'неопределенный пол';
                break;
        case 1:
            return 1;//'мужской пол';
            break;
       }      
   }
?>
