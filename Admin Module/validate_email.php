<?php

$reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

if (preg_match($reg, $email)) {

echo $email . \" Email Id is accepted.\";

} else {

echo $email . \"Invalid Email ID.\";

}

?>