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

    <div class="container mt-3">
        <div class="px-3">
            <h3>Adjourned Case Entry</h3>
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
        <form id="entryform">
            <div class="form-group">
                <label for="rname" class="col-sm-2 col-form-label">Name of Respondent</label>
                <div class="col-md-6">
                    <input type="text" name="rname" class="form-control" id="rname" aria-describedby="rnameHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="aname" class="col-sm-2 col-form-label">Name of Appellant</label>
                <div class="col-md-6">
                    <input type="text" name="aname" class="form-control" id="aname" aria-describedby="anameHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="caseno" class="col-sm-2 col-form-label">Case Number</label>
                <div class="col-md-6">
                    <input type="text" name="caseno" class="form-control" id="caseno" aria-describedby="caseno">
                </div>
            </div>
            <div class="form-group">
                <label for="detail" class="col-sm-2 col-form-label">Detail of Case</label>
                <div class="col-md-6">
                    <textarea type="text" name="detail" class="form-control" id="detail" aria-describedby="detailHelp"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="lawyer" class="col-sm-2 col-form-label">The Lawyer</label>
                <div class="col-md-6">
                    <input type="text" name="lawyer" class="form-control" id="lawyer" aria-describedby="lawyerHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="judge" class="col-sm-2 col-form-label">The Judge</label>
                <div class="col-md-6">
                    <input type="text" name="judge" class="form-control" id="judge" aria-describedby="judgeHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="adate" class="col-sm-3 col-form-label">Date Adjourned To</label>
                <div class="col-md-6">
                    <input type="date" name="adate" class="form-control" id="adate" aria-describedby="adateHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="date" class="col-sm-3 col-form-label">Date of Hearing</label>
                <div class="col-md-6">
                    <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp">
                </div>
            </div>
            <div class="col-auto my-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#entryform').submit(function(e) {
                e.preventDefault();

                var rname = $("#rname").val();
                var aname = $("#aname").val();
                var caseno = $("#caseno").val();
                var detail = $("#detail").val();
                var lawyer = $("#lawyer").val();
                var judge = $("#judge").val();
                var adate = $("#adate").val();
                var date = $("#date").val();
                var type = 'adjourned';

                $.ajax({
                    type: "POST",
                    url: '../scripts/dataentry.php',
                    dataType: "json",
                    data: {
                        rname: rname,
                        aname: aname,
                        case_no: caseno,
                        detail: detail,
                        lawyer: lawyer,
                        judge: judge,
                        adate: adate,
                        date: date,
                        type: type
                    },
                    success: function(data) {
                        // user is logged in successfully in the back-end
                        if (data.code == 200) {
                            $(".alert-success").append(data.msg).show();
                            setInterval(function() {

                                window.location.href = "/";

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

<?php } ?>