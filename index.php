<?php
require_once('scripts/session_auth.php');
include('scripts/header.php');

if (isset($_SESSION['type'])) {
    header('Location: admin/dashboard.php');
}
?>

<div class="container mt-5">
    <div class="px-3">
        <h3>Login</h3>
    </div>

    <hr>

    <div class="col-md-6 alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong>
    </div>
    <div class="col-md-6 alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong>
    </div>
    <form id="loginform">
        <div class="form-group">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="passwordInput" class="col-sm-2 col-form-label">Password</label>
            <div class="col-md-6">
                <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp" autocomplete="on">
            </div>
        </div>
        <div class="col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
            </div>
        </div>
        <div class="col-auto my-1">
            <button id="loginBtn" type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#loginform').submit(function(e) {
            e.preventDefault();

            var email = $("#email").val();
            var password = $("#password").val();

            $.ajax({
                type: "POST",
                url: 'scripts/login.php',
                dataType: "json",
                data: {
                    email: email,
                    password: password
                },
                success: function(data) {
                    // user is logged in successfully in the back-end
                    if (data.code == 200) {
                        $(".alert-success").append(data.msg).show();
                        setInterval(function() {

                            window.location.href = "admin/dashboard.php";

                        }, 5000);

                    } else {
                        $(".alert-danger").append(data.msg).show();
                        setInterval('location.reload()', 5000);
                    }
                }
            });
        });
    });
</script>