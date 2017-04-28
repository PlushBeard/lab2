<?php
  //ogoloshuemo POST zminni
  $lastName = $_POST['last_name']; //prizvyche
  $firstName = $_POST['first_name']; //im'ya

  //Yakcho pole "Prizvyche" i "Im'ya" ne puste
  if (!empty($lastName) && !empty($firstName))
  {
    //pyshemo
   echo "Vitaiu Vas $lastName $firstName. <br />";
  }
?>

