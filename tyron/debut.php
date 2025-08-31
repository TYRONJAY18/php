<?php

$age = 21;
$gender = "female";

if ($gender == "female") {
    if ($age == 18) {
    echo "Your Age is: $age". "<br>";
    echo "Gender: Female". "<br>";
    echo "You are Female Debutant";
}else
    {
        echo "you are not a debutant";
    }
}
elseif ($gender == "male") {
    if ($age == 21) {
    echo "Your Age is: $age". "<br>";
    echo "Gender: Male". "<br>";
    echo "You are Male Debutant";
}else
    {
        echo "you are not a debutant";
    }
}

?>