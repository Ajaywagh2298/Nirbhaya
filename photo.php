<?php

if(isset($_POST['submit1']))
{
    $prophoto = time().'_'.$_FILES['photo']['name'];
    $target='images2/' .$prophoto;
    move_uploaded_file($_FILES['photo']['tmp_name'],$target);
}


?>
