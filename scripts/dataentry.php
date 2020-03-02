<?php
require_once('init.php');
$type = $_POST['type'];

switch ($type) {
    case "respondent":
        $name = $_POST['name'];
        $case_no = $_POST['case_no'];
        $occupation = $_POST['occupation'];
        $medics = $_POST['medics'];
        $address = $_POST['address'];
        $props = $_POST['props'];
        $detail = $_POST['detail'];
        $date = $_POST['date'];

        $sql = "INSERT INTO respondent (name, case_no, occupation, medical, address, property, case_detail, date) VALUES ('$name', '$case_no', '$occupation', '$medics', '$address', '$props', '$detail', '$date')";
        $result = $conn->query($sql);

        $msg = 'Respondent details submitted successfully.';
        echo json_encode(['code' => 200, 'msg' => $msg]);
        break;
    case "appellant":
        $name = $_POST['name'];
        $case_no = $_POST['case_no'];
        $occupation = $_POST['occupation'];
        $medics = $_POST['medics'];
        $address = $_POST['address'];
        $props = $_POST['props'];
        $detail = $_POST['detail'];
        $date = $_POST['date'];

        $sql = "INSERT INTO appellant (name, case_no, occupation, medical, address, property, case_detail, date) VALUES ('$name', '$case_no', '$occupation', '$medics', '$address', '$props', '$detail', '$date')";
        $result = $conn->query($sql);

        $msg = 'Appellant details submitted successfully.';
        echo json_encode(['code' => 200, 'msg' => $msg]);
        break;
    case "case":
        $respondent = $_POST['rname'];
        $appellant = $_POST['aname'];
        $case_no = $_POST['case_no'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $judge = $_POST['judge'];
        $lawyer = $_POST['lawyer'];
        $a_date = $_POST['adate'];
        $judgement = $_POST['judgement'];

        $sql = "INSERT INTO case (respondent, appellant, case_no, location, date, judge, lawyer, a_date, judgement) VALUES ('$respondent', '$appellant', '$case_no', '$location', '$date', '$judge', '$lawyer', '$a_date', '$judgement')";
        $result = $conn->query($sql);

        $msg = 'Case details submitted successfully.';
        echo json_encode(['code' => 200, 'msg' => $msg]);
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
