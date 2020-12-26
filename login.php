<?php
include "header.php";
include "connection.php";
error_reporting(0);

?>


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Login</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <form name="form1" action="" method="POST">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"><strong>Login Here</strong>
                                    </div>

                                    <div class="card-body card-block">

                                        <div class="form-group"><label class=" form-control-label">Username:</label><input type="text" placeholder="Enter New Username" class="form-control" name="username" required="">
                                        </div>

                                        <div class="form-group"><label class=" form-control-label">Password:</label><input type="password" placeholder="Enter New Password" class="form-control" name="password" required="">
                                        </div>

                                        <div class="form-group">
                                            <p>
                                              <label class="form-control-label">User</label>
                                    
                                              <input type="radio" id="materialChecked" class="form-check-input" name="user_type" value="user" checked>
                                              &nbsp;&nbsp;
                                              
                                              <label class="form-control-label">Volunteer </label>
                                              
                                              <input class="form-check-input" id="materialChecked"  type="radio" name="user_type" value="voln"/>
                                            </p>
                                          <div class="form-group"><input type="submit" name="submit1" value="Log In" class="btn btn-success">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

if ( isset( $_POST[ 'submit1' ] ) ) {
    $data_missing = array();
    if ( empty( $_POST[ 'username' ] ) ) {
        $data_missing[] = 'Username';
    } else {
        $user_name = trim( $_POST[ 'username' ] );
    }
    if ( empty( $_POST[ 'password' ] ) ) {
        $data_missing[] = 'Password';
    } else {
        $pass_word = $_POST[ 'password' ];
    }
    if ( empty( $_POST[ 'user_type' ] ) ) {
        $data_missing[] = 'User Type';
    } else {
        $user_type = $_POST[ 'user_type' ];
        $_SESSION[ 'user_type' ] = $user_type;
    }

    if ( empty( $data_missing ) ) {
        if ( $user_type == 'user' ) {


            if ( isset( $_POST[ "submit1" ] ) ) {
                $count = 0;
                $res = mysqli_query( $link, "select * from register where username='$_POST[username]' && password='$_POST[password]'" );
                $count = mysqli_num_rows( $res );

                if ( $count == 0 ) {
                    ?>
                    <script type="text/javascript">
                        alert( "Invalid Username Or Password!!! Try Again." );
                        window.location.href = window.location.href;
                    </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">
                        alert( "Log In successfully!!!" )
                        window.location = "user/dashboard.php";
                    </script>

                    <?php
                }
            }
        } else if ( $user_type == 'voln' ) {

            if ( isset( $_POST[ "submit1" ] ) ) {
                $count = 0;
                $lin = mysqli_query( $link, "select * from volunteer where username='$_POST[username]' && password='$_POST[password]'" );
                $count = mysqli_num_rows( $lin );

                if ( $count == 0 ) {
                    ?>

                    <script type="text/javascript">
                        alert( "Invalid Username Or Password!!! Try Again." );
                        window.location.href = window.location.href;
                    </script>

                    <?php
                } else {
                    ?>

                    <script type="text/javascript">
                        alert( "Log In successfully!!!" )
                        window.location = "volunteer/User.php";
                    </script>

                    <?php
                }
            }
        }
    }
}

include "footer.php";
?>