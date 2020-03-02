<?php
require_once('scripts/session_auth.php');
include('scripts/header.php');

if (isset($_SESSION['type'])) {
    header('Location: admin/dashboard.php');
}
?>

<div class="container mt-5">
    <div class="px-3">
        <h3>Register</h3>
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
    <form id="regform">
        <div class="form-group">
            <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-md-6">
                <input type="text" name="fname" class="form-control" id="firstname" aria-describedby="nameHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-md-6">
                <input type="text" name="lname" class="form-control" id="lastname" aria-describedby="nameHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="passwordInput" class="col-sm-2 col-form-label">Password</label>
            <div class="col-md-6">
                <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="accType" class="col-sm-2 col-form-label">Account Type</label>
            <div class="col-md-6">
                <select class="form-control" id="accType">
                    <option name="type">Judge</option>
                    <option name="type">Lawyer</option>
                </select>
            </div>
        </div>
        <div class="col-auto my-2">
            <small>Already have an account? <a href="/">Login here</a></small>
        </div>
        <div class="col-auto my-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#regform').submit(function(e) {
            e.preventDefault();

            var fname = $("#firstname").val();
            var lname = $("#lastname").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var type = $("#accType").val();

            $.ajax({
                type: "POST",
                url: 'scripts/sign_up.php',
                dataType: "json",
                data: {
                    fname: fname,
                    lname: lname,
                    email: email,
                    password: password,
                    type: type
                },
                success: function(data) {
                    // user is logged in successfully in the back-end
                    if (data.code == 200) {
                        $(".alert-success").append(data.msg).show();
                        setInterval(function() {

                            window.location.href = "index.php";

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