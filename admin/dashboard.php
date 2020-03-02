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
            You need to login before accessing this page! Redirecting...
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

    <div id="result" class="container mt-3">
        <div class="px-3">
            <h3>Court Updates</h3>
        </div>

        <hr>
        <table class="table table-striped">
            <thead class="bg-success text-white" id="firstThead">
                <th> ID </th>
                <th> Respondent </th>
                <th> Appellant </th>
                <th> Case Number </th>
                <th> Location </th>
                <th> Date </th>
                <th> Judge </th>
                <th> Lawyer </th>
                <th> Adjourned Date </th>
                <th> Judgement </th>
            </thead>
            <tbody id="firstTable">

            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "../scripts/fetch.php",
                data: {},
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                cache: false,
                success: function(response) {
                    var trHTML = '';
                    $.each(response, function(i, item) {
                        trHTML += '<tr><td>' + item.id + '</td><td>' + item.respondent +
                            '</td><td>' + item.appellant + '</td><td>' + item.case_no + '</td><td>' + item.location +
                            '</td><td>' + item.date + '</td><td>' + item.judge + '</td><td>' + item.lawyer +
                            '</td><td>' + item.a_date + '</td><td>' + item.judgement +
                            '</td></tr>';
                    });
                    $('#firstTable').append(trHTML);
                },
                error: function(e) {
                    console.log(response);
                }
            });
        });
    </script>
<?php
}
