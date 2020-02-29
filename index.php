<?php
require_once('scripts/session_auth.php');
include('scripts/header.php');
?>

<div class="container mt-5">
    <div class="px-3">
        <h3>Login</h3>
    </div>

    <hr>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
            <div class="col-md-6">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="form-group">
            <label for="passwordInput" class="col-sm-2 col-form-label">Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" id="passwordInput" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
            </div>
        </div>
        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>

</div>