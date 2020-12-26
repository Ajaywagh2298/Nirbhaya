<?php
if ( isset( $_POST[ 'submit1' ] ) )
{
     $photo = $_FILES[ 'vphoto' ][ 'name' ];
    $target = 'images/' . $photo;
    move_uploaded_file( $_FILES[ 'vphoto' ][ 'tmp_name' ], $target );

    $photo1 = $_FILES[ 'proof' ][ 'name' ];
    $targeta = 'File/' . $photo1;
  move_uploaded_file( $_FILES[ 'proof' ][ 'tmp_name' ], $targeta );
}
?>
