
<?php
    include 'example_persons.php';
    include 'split_merg_names.php';
    include 'short_name.php';
    include 'get_gender_from_name.php';
    include 'gender_decription.php';
    include 'perfect_partner.php';    
     
    getGenderDescription($example_persons_array);
    echo "\n <br>";
    getPerfectPartner ('Быстрая','Талия','Георгевна', $example_persons_array);
    echo "\n <br>";
    getPerfectPartner ('Пащенко','Владимир','Александрович', $example_persons_array);     
    echo "\n <br>";
?>
