<?php

include("./connection.php");

if(isset($_POST["purpose"]) && $_POST["purpose"] == "fitnesssurvey")
{

    $ques1 = $_POST["ques1"];
    $ques2 = $_POST["ques2"];
    $ques3 = $_POST["ques3"];
    $ques4 = $_POST["ques4"];
    $ques5 = $_POST["ques5"];
    $ques6 = $_POST["ques6"];
    $ques7 = $_POST["ques7"];
    $ques8 = $_POST["ques8"];
    $ques9 = $_POST["ques9"];
    $ques10 = $_POST["ques10"];
    $ques11 = $_POST["ques11"];

    $query = mysqli_query($con, "INSERT INTO `fitness_survey`(`fs_q1`, `fs_q2`, `fs_q3`, `fs_q4`, `fs_q5`, `fs_q6`, `fs_q7`, `fs_q8`, `fs_q9`, `fs_q10`, `fs_q11`, `fs_survey_status`, `fs_log`) VALUES ('$ques1', '$ques2', '$ques3', '$ques4', '$ques5', '$ques6', '$ques7', '$ques8', '$ques9', '$ques10', '$ques11', 'completed', '$current_datetime')");
    if($query == true)
    {
        echo "success";
    }
    else
    {
        echo "failed";
    }
}

?>