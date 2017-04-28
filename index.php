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
  else //abo
  {
    //pyshemo
    echo "Yak Vy posmily natysnuty ciu knopky?";
    //i povertaemoc nazad na index.html
    echo "<meta http-equiv='refresh' content='15; url=index.html' />";
?>

