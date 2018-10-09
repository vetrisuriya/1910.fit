<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Survey - S10.fit</title>

    <!-- default styles -->
    <?php include("inc/styles.php"); ?>
    <link rel="stylesheet" href="css/productsurvey/index.css">

</head>
<body>

    <!-- navbar -->
    <?php include("inc/navbar.php"); ?>

    <div class="main-container">

        <!-- section 1 -->
        <section class="section1">
            <br><br>
            <div class="row">
                <h2 class="text-center" style="width: 100%; color: var(--fit-orange-light);">Is S10.fit the right product for you?</h2>   
            </div>
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
                                </ul>
                                            
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane active" id="tab-1">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:1 </span>Is your schedule busy and you find it difficult to coordinate with the fitness regimen?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques1" id="ques1" value="yes" onclick="showDesc(this.id, 'You may appreciate the freedom of not having to coordinate your schedule with anyone else with S10.fit');">Yes</label></div>
                                                <div class="radio"><label><input type="radio" name="ques1" id="ques1" value="no" onclick="showDesc(this.id, 'You are one of the few people who seem to do a good job of coordinating your schedule. Keep it up.');">No</label></div>
                                            </div>
                                            <div class="desc ques1"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="count" style="float: unset; margin: 0px auto 0px 40%;">1 / 10</a>
                                            <a class="btn btn-primary surveyNext disabled" style="float: right; margin: unset;" data-quesid="ques1">Next</a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-2">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:2 </span>Are you finding time for exercise a difficulty?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques2" id="ques2" value="yes" onclick="showDesc(this.id, 'FitBOT enables anywhere gym with personal robot trainers to save time and achieve mastery over exercising at the comfort of your home.');">Yes</label></div>
                                                <div class="radio"><label><input type="radio" name="ques2" id="ques2" value="no" onclick="showDesc(this.id, 'You are one of those disciplined people. However, if time becomes a constraint try S10.fit anywhere gym with personal robot trainers to save time and achieve mastery over exercising.');">No</label></div>
                                            </div>
                                            <div class="desc ques2"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">2 / 10</a>   
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques2">Next</a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-3">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:3 </span>Do you like exercising indoor or outdoor?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques3" id="ques3" value="indoor" onclick="showDesc(this.id, 'S10.fit is your perfect companion to work indoor without worrying about safety, weather condition or pollution.');">Indoor</label></div>
                                                <div class="radio"><label><input type="radio" name="ques3" id="ques3" value="outdoor" onclick="showDesc(this.id, 'S10.fit mainly an indoor work out enabler may not be very interesting for you. How ever exercising outdoors brings up safety issues in terms of people, traffic, pollution and weather conditions. Avoid exercising in high heat and humidity, and always wear appropriate clothing and shoes in cold, snowy, and inclement weather. You may want to try S10.fit to work indoor without worrying about safety, weather condition or pollution.');">Outdoor</label></div>
                                            </div>
                                            <div class="desc ques3"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">3 / 10</a>   
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques3">Next</a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-4">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:4 </span>Prefer exercising with others or solo?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques4" id="ques4" value="solo" onclick="showDesc(this.id, 'S10.fit gives you the comfort of exercising solo and at the same time leverage the S10\'er league to involve your family members, friends, and co-workers in your exercise program.You can help each other make exercise a regular habit. In doing so, you claim health and well-being benefits for yourself while also helping those around you to do the same. You may also find opportunities to expand your social network with others already involved in activities of interest to you.');">Solo</label></div>
                                                <div class="radio"><label><input type="radio" name="ques4" id="ques4" value="others" onclick="showDesc(this.id, 'S10.fit S10 er league enables you to involve your family members, friends, and coworkers in your activity program. You can help each other make exercise a regular habit. In doing so, you claim health and well-being benefits for yourself while also helping those around you to do the same. You may also find opportunities to expand your social network with others already involved in activities of interest to you.');">Others</label></div>
                                            </div>
                                            <div class="desc ques4"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">4 / 10</a>   
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques4">Next</a>
                                        </div>    
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-5">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:5 </span>Do you want to exercise at home or gym?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques5" id="ques5" value="home" onclick="showDesc(this.id, 'You seem to prefer to exercise in the comfort and convenience of your own home. S10.fit enables an anywhere gym with personal robot trainers to save time and achieve mastery over exercising in the privacy of your home.');">Home</label></div>
                                                <div class="radio"><label><input type="radio" name="ques5" id="ques5" value="gym" onclick="showDesc(this.id, 'You like joining a health club or fitness facility. How ever use S10.fit as a complimentary product to improve your fitness level and enhance the safety with a home-based program');">Gym</label></div>
                                            </div>
                                            <div class="desc ques5"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">5 / 10</a> 
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques5">Next</a>
                                        </div>     
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-6">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:6 </span>Do you like exercising with equipment?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques6" id="ques6" value="yes" onclick="showDesc(this.id, 'S10.fit is the right product for you. It has a very effective functional fitness program that is gradual, easy and painless with little to no equipment.');">Yes</label></div>
                                                <div class="radio"><label><input type="radio" name="ques6" id="ques6" value="no" onclick="showDesc(this.id, 'You like machine based program. Many a time machine based workouts can cause injury. Try S10.fit which has a very effective fitness program at home with little to no equipment. You may find it interesting.');">No</label></div>
                                            </div>
                                            <div class="desc ques6"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">6 / 10</a>   
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques6">Next</a>
                                        </div>      
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-7">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:7 </span>Do you listen to music while exercising?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques7" id="ques7" value="yes" onclick="showDesc(this.id, 'Try S10.fit exercises embedded with music, you will love it.');">Yes</label></div>
                                                <div class="radio"><label><input type="radio" name="ques7" id="ques7" value="no" onclick="showDesc(this.id, 'Try S10.fit exercises embedded with music, you will love it.however exercise aution as music reduces the ability to attend to sounds that may be important for safety. Safety first.');">No</label></div>
                                            </div>
                                            <div class="desc ques7"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">7 / 10</a>  
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques7">Next</a>
                                        </div>     
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-8">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:8 </span>Do you find exercising difficult?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques8" id="ques8" value="yes" onclick="showDesc(this.id, 'S10.fit has personalised music embedded functional exercises with no equipments that is easy to execute. It starts slow, with one step at a time improvement. It is designed for beginners to take them to elite category overtime.');">Yes</label></div>
                                                <div class="radio"><label><input type="radio" name="ques8" id="ques8" value="no" onclick="showDesc(this.id, 'You are doing a good job of handling your exercise program. Keep it up.');">No</label></div>
                                            </div>
                                            <div class="desc ques8"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">8 / 10</a>      
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques8">Next</a>
                                        </div>    
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-9">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:9 </span>Do you find exercising boring?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques9" id="ques9" value="yes" onclick="showDesc(this.id, 'Gaming features, being part of S10ér league, music as a coach and different back ground to exercise makes exercising with S10.fit exciting');">Yes</label></div>
                                                <div class="radio"><label><input type="radio" name="ques9" id="ques9" value="no" onclick="showDesc(this.id, 'You have found ways to keep your excersing schedule intresting. Keep it up.');">No</label></div>
                                            </div>
                                            <div class="desc ques9"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">9 / 10</a>      
                                            <a class="btn btn-primary surveyNext disabled" data-quesid="ques9">Next</a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-10">
                                        <div class="tab-inner">
                                            <div class="question"><span> Q:10 </span>I don't exercise as i dont know how/what to exercise?</div>
                                            <div class="answer">
                                                <div class="radio"><label><input type="radio" name="ques10" id="ques10" value="yes" onclick="showDesc(this.id, 'S10.fit has put in lot of emphasis on ensuring people learn to exercise at ease without pressure. S10.fit would be the right choice for you to learn in private without feeling shy.');">Yes</label></div>
                                                <div class="radio"><label><input type="radio" name="ques10" id="ques10" value="no" onclick="showDesc(this.id, 'You have learnt how to exercise and what exercise to do. It would have taken a lot of commitment and hardwork. Great job.');">No</label></div>
                                            </div>
                                            <div class="desc ques10"></div>
                                        </div>
                                        <div class="tab-btn">
                                            <a class="btn btn-primary surveyPrevious">Previous</a>
                                            <a class="count">10 / 10</a>
                                            <button type="button" id="surveyButton" class="btn disabled" data-quesid="ques10">Submit</button>
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


        $("button[id='surveyButton']").on("click", function() {
            
            var ans1 = $("input[id='ques1']:checked").val();
            var ans2 = $("input[id='ques2']:checked").val();
            var ans3 = $("input[id='ques3']:checked").val();
            var ans4 = $("input[id='ques4']:checked").val();
            var ans5 = $("input[id='ques5']:checked").val();
            var ans6 = $("input[id='ques6']:checked").val();
            var ans7 = $("input[id='ques7']:checked").val();
            var ans8 = $("input[id='ques8']:checked").val();
            var ans9 = $("input[id='ques9']:checked").val();
            var ans10 = $("input[id='ques10']:checked").val();

            var storePurpose = "productsurvey";

            $.ajax({
                url: "./php/product_survey.php",
                method: "POST",
                data: {purpose: storePurpose, ques1: ans1, ques2: ans2, ques3: ans3, ques4: ans4, ques5: ans5, ques6: ans6, ques7: ans7, ques8: ans8, ques9: ans9, ques10: ans10},
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

    
    function showDesc(target, content)
    {
        $("."+target+"").text("");
        $("."+target+"").text(content);
    }
    </script>
</body>
</html>