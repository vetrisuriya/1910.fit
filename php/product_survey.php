<?php

include("./connection.php");

if(isset($_POST["purpose"]) && $_POST["purpose"] == "productsurvey")
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

    $query = mysqli_query($con, "INSERT INTO `product_survey`(`ps_ques1`, `ps_ques2`, `ps_ques3`, `ps_ques4`, `ps_ques5`, `ps_ques6`, `ps_ques7`, `ps_ques8`, `ps_ques9`, `ps_ques10`, `ps_survey_status`, `ps_log`) VALUES ('$ques1', '$ques2', '$ques3', '$ques4', '$ques5', '$ques6', '$ques7', '$ques8', '$ques9', '$ques10', 'completed', '$current_datetime')");
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