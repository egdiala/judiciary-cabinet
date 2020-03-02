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
            <h3>Respondent Entry</h3>
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
                <label for="name" class="col-sm-2 col-form-label">Name of Respondent</label>
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="caseno" class="col-sm-2 col-form-label">Case Number</label>
                <div class="col-md-6">
                    <input type="text" name="caseno" class="form-control" id="caseno" aria-describedby="caseno">
                </div>
            </div>
            <div class="form-group">
                <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                <div class="col-md-6">
                    <input type="text" name="occupation" class="form-control" id="occupation" aria-describedby="occupationHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="medics" class="col-sm-2 col-form-label">Medical Report</label>
                <div class="col-md-6">
                    <input type="text" name="medics" class="form-control" id="medics" aria-describedby="medicsHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-md-6">
                    <input type="text" name="address" class="form-control" id="address" aria-describedby="addressHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="property" class="col-sm-2 col-form-label">Property Involved</label>
                <div class="col-md-6">
                    <input type="text" name="property" class="form-control" id="property" aria-describedby="propertyHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="detail" class="col-sm-2 col-form-label">Detail of Case</label>
                <div class="col-md-6">
                    <textarea type="text" name="detail" class="form-control" id="detail" aria-describedby="detailHelp"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="date" class="col-sm-3 col-form-label">Date of Respondent Entry</label>
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

                var name = $("#name").val();
                var caseno = $("#caseno").val();
                var occupation = $("#occupation").val();
                var medics = $("#medics").val();
                var address = $("#address").val();
                var property = $("#property").val();
                var detail = $("#detail").val();
                var date = $("#date").val();
                var type = 'respondent';

                $.ajax({
                    type: "POST",
                    url: '../scripts/dataentry.php',
                    dataType: "json",
                    data: {
                        name: name,
                        case_no: caseno,
                        occupation: occupation,
                        medics: medics,
                        address: address,
                        props: property,
                        detail: detail,
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