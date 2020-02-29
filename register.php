<?php
require_once('scripts/session_auth.php');
include('scripts/header.php');
?>

<div class="container mt-5">
    <div class="px-3">
        <h3>Register</h3>
    </div>

    <hr>

    <form>
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
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="passwordInput" class="col-sm-2 col-form-label">Password</label>
            <div class="col-md-6">
                <input type="password" name="password" class="form-control" id="passwordInput" aria-describedby="passwordHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="accType" class="col-sm-2 col-form-label">Account Type</label>
            <div class="col-md-6">
                <select class="form-control" id="accType">
                    <option name="judge">Judge</option>
                    <option name="lawyer">Lawyer</option>
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