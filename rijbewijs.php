<?php
$A = 16.5;
print("how old are you?\n");
$age = (float) fgets(STDIN);
if ($age > $A){
    print("you can start your driveing lessons\n");
} else {
    print("you are to young\n");
}

?>