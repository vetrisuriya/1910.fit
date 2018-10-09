<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fitness Survey - S10.fit</title>

    <!-- default styles -->
    <?php include("inc/styles.php"); ?>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/fitnesssurvey/index.css">

</head>
<body>

    <!-- navbar -->
    <?php include("inc/navbar.php"); ?>

    <div class="main-container">

        <!-- section 1 -->
        <section class="section1">
            <br><br>
            <div class="row">
                <h2 class="text-center" style="width: 100%; color: var(--fit-orange-light);">Review your current fitness level?</h2>
                <p class="text-center" style="width: 100%; color: var(--fit-orange-light); font-size: 140%;">know your aerobic, muscular, flexibility & body composition</p>
            </div>
            <br><br>
            <div class="row">
                <div class="main-inner col-lg-8 col-sm-10 col-xs-12 offset-lg-2 offset-md-2 offset-md-8 offset-sm-1">
                    
                                <div class="inner">
                                    <div class="wrap">

                                            <div class="card">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active disabled"><a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab"><span>1</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab"><span>2</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab"><span>3</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab"><span>4</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab"><span>5</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-6" aria-controls="tab-6" role="tab" data-toggle="tab"><span>6</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-7" aria-controls="tab-7" role="tab" data-toggle="tab"><span>7</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-8" aria-controls="tab-8" role="tab" data-toggle="tab"><span>8</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-9" aria-controls="tab-9" role="tab" data-toggle="tab"><span>9</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-10" aria-controls="tab-10" role="tab" data-toggle="tab"><span>10</span></a></li>
                                                    <li role="presentation" class="disabled"><a href="#tab-11" aria-controls="tab-11" role="tab" data-toggle="tab"><span>11</span></a></li>
                                                </ul>
                                            
                                                <!-- Tab panes -->
                                                <div class="tab-content">

                                                    <div role="tabpanel" class="tab-pane active" id="tab-1">
                                                        <div class="tab-inner">
                                                            <div class="question">Do you find yourself breathless going up a short flight of stairs?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques1" id="ques1" value="never">Never</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques1" id="ques1" value="seldom">Seldom</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques1" id="ques1" value="sometimes">Sometimes</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques1" id="ques1" value="usually">Usually</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques1" id="ques1" value="always">Always</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="count" style="float: unset; margin: 0px auto 0px 40%;">1/11</a>
                                                            <a class="btn btn-primary surveyNext disabled" style="float: right; margin: unset;" data-quesid="ques1">Next</a>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-2">
                                                        <div class="tab-inner">
                                                            <div class="question">Do you avoid social or recreational situations that may involve physical activity?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques2" id="ques2" value="never">Never</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques2" id="ques2" value="seldom">Seldom</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques2" id="ques2" value="sometimes">Sometimes</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques2" id="ques2" value="usually">Usually</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques2" id="ques2" value="always">Always</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">2/11</a>   
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques2">Next</a>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-3">
                                                        <div class="tab-inner">
                                                            <div class="question">Are you unable to keep up with peers in recreational activities or sport competitions?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques3" id="ques3" value="never">Never</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques3" id="ques3" value="seldom">Seldom</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques3" id="ques3" value="sometimes">Sometimes</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques3" id="ques3" value="usually">Usually</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques3" id="ques3" value="always">Always</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">3/11</a>   
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques3">Next</a>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-4">
                                                        <div class="tab-inner">
                                                            <div class="question">Are you able to lift a full bag of groceries from your vehicle?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques4" id="ques4" value="easily">Easliy</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques4" id="ques4" value="usually">Usually</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques4" id="ques4" value="a strain">A Strain</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques4" id="ques4" value="almost">Almost</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques4" id="ques4" value="unthinkable">Unthinkable</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">4/11</a>   
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques4">Next</a>
                                                        </div>    
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-5">
                                                        <div class="tab-inner">
                                                            <div class="question">Are you able to hold a child?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques5" id="ques5" value="easily">Easliy</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques5" id="ques5" value="usually">Usually</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques5" id="ques5" value="a strain">A Strain</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques5" id="ques5" value="almost">Almost</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques5" id="ques5" value="unthinkable">Unthinkable</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">5/11</a> 
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques5">Next</a>
                                                        </div>     
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-6">
                                                        <div class="tab-inner">
                                                            <div class="question">Are you limited in your recreational pursuits by a lack of strength?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques6" id="ques6" value="never">Never</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques6" id="ques6" value="seldom">Seldom</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques6" id="ques6" value="sometimes">Sometimes</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques6" id="ques6" value="usually">Usually</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques6" id="ques6" value="always">Always</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">6/11</a>   
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques6">Next</a>
                                                        </div>      
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-7">
                                                        <div class="tab-inner">
                                                            <div class="question">Are you able to reach over to back of your shoulder?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques7" id="ques7" value="easily">Easliy</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques7" id="ques7" value="a strain">A Strain</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques7" id="ques7" value="almost">Almost</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques7" id="ques7" value="1-2 inches away">1-2 inches away</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques7" id="ques7" value="unthinkable">Unthinkable</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">7/11</a>  
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques7">Next</a>
                                                        </div>     
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-8">
                                                        <div class="tab-inner">
                                                            <div class="question">Do you find it difficult to look behind you to check for traffic when driving?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques8" id="ques8" value="easily">Easliy</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques8" id="ques8" value="a strain">A Strain</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques8" id="ques8" value="almost">Almost</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques8" id="ques8" value="1-2 inches away">1-2 inches away</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques8" id="ques8" value="unthinkable">Unthinkable</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">8/11</a>      
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques8">Next</a>
                                                        </div>    
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-9">
                                                        <div class="tab-inner">
                                                            <div class="question">Can you touch your toes standing with your leg straight?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques9" id="ques9" value="easily">Easliy</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques9" id="ques9" value="a strain">A Strain</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques9" id="ques9" value="almost">Almost</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques9" id="ques9" value="1-2 inches away">1-2 inches away</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques9" id="ques9" value="unthinkable">Unthinkable</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">9/11</a>      
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques9">Next</a>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-10">
                                                        <div class="tab-inner">
                                                            <div class="question">Do you have to modify your movements (e.g., swinging your hand) to compensate for limited joint mobility?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques10" id="ques10" value="never">Never</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques10" id="ques10" value="seldom">Seldom</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques10" id="ques10" value="sometimes">Sometimes</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques10" id="ques10" value="usually">Usually</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques10" id="ques10" value="always">Always</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">10/11</a>      
                                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques10">Next</a>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-11">
                                                        <div class="tab-inner">
                                                            <div class="question">How big is your Stomach?</div>
                                                            <div class="answer">
                                                                <div class="radio"><label><input type="radio" name="ques11" id="ques11" value="stomach is almost flat">Stomach is almost flat</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques11" id="ques11" value="i can easily see my buckle">I can easily see my buckle</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques11" id="ques11" value="stomach slightly rounded">Stomach slightly rounded</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques11" id="ques11" value="stomach extended well beyond my belt">Stomach extended well beyond my belt</label></div>
                                                                <div class="radio"><label><input type="radio" name="ques11" id="ques11" value="it hides everything underneath">It hides everything underneath</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-btn">
                                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                                            <a class="count">11/11</a>
                                                            <button type="button" class="btn disabled" data-quesid="ques11">Submit</button>    
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                </div>
                </div>       
            </div>
            <br><br>
        </section>

        <!-- footer -->
        <?php include("inc/footer.php"); ?>

    </div>


    <?php include("inc/scripts.php"); ?>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {


        $("input[type='radio']").on("click", function() {
            var quesid = $(this).attr("id");
            $("[data-quesid='"+quesid+"']").removeClass("disabled");
        });

        $('.surveyNext').click(function(){
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
        });

        $('.surveyPrevious').click(function(){
            $('.nav-tabs > .active').prev('li').find('a').trigger('click');
        });


        $("button[type='button']").on("click", function() {
            
            var ans1 = $("#ques1").val();
            var ans2 = $("#ques2").val();
            var ans3 = $("#ques3").val();
            var ans4 = $("#ques4").val();
            var ans5 = $("#ques5").val();
            var ans6 = $("#ques6").val();
            var ans7 = $("#ques7").val();
            var ans8 = $("#ques8").val();
            var ans9 = $("#ques9").val();
            var ans10 = $("#ques10").val();
            var ans11 = $("#ques11").val();

            var storePurpose = "fitnesssurvey";

            $.ajax({
                url: "./php/fitness_survey.php",
                method: "POST",
                data: {purpose: storePurpose, ques1: ans1, ques2: ans2, ques3: ans3, ques4: ans4, ques5: ans5, ques6: ans6, ques7: ans7, ques8: ans8, ques9: ans9, ques10: ans10, ques11: ans11},
                success: function(result) {
                    if(result == "success")
                    {
                        alert("Survey Completed");
                        window.location.reload();
                    }
                    else
                    {
                        alert("Survey Failed try again later");
                        window.location.reload();
                    }
                }
            })

        });

    });
    </script>
</body>
</html>