<?php
require_once('../scripts/session_auth.php');
include('../scripts/header.php');

if (!isset($_SESSION['type'])) {
?>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>


    <div class="container mt-5">
        <div class="col-md-6 alert alert-warning center" role="alert">
            <i class="fas fa-exclamation-triangle"></i>
            You need to login before accessing this page!
        </div>
    </div>

    <script>
        setInterval(function() {

            window.location.href = "/";

        }, 5000);
    </script>
<?php
} else {
?>

    <div class="container mt-3">
        <div class="px-3">
            <h3>Court Updates</h3>
        </div>

        <hr>
    </div>
    <script>
        $(document).ready(function() {
            $.get("date-time.php", function(data) {
                // Display the returned data in browser
                $("#result").html(data);
            });
        });
    </script>
<?php
}
