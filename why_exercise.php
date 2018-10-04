<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Why Exercise - S10.fit</title>

    <!-- default styles -->
    <?php include("inc/styles.php"); ?>

    <link rel="stylesheet" href="css/whyexercise/index.css">

</head>
<body>

    <!-- navbar -->
    <?php include("inc/navbar.php"); ?>

    <div class="main-container">

        <!-- section 1 -->
        <section class="section1">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 offset-lg-1 offset-md-1 parent-wrapper">
                    
                    <h1 class="text-center" style="margin-bottom: 0px;">Why Exercise</h1>
                    <div class="text-center">Exercise is the new age Miracle</div>
                    <br><br>
                    
                    <div class="whyExercise">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                <div class="content">
                                    <img class="thumb" src="https://bikoapp.com/static/images/cities/mexico-city.png">
                                    <div class="text"><p>It makes you feel younger and act that way too.</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                <div class="content">
                                    <img class="thumb" src="https://bikoapp.com/static/images/cities/mexico-city.png">
                                    <div class="text"><p>It makes you look better.</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                <div class="content">
                                    <img class="thumb" src="https://bikoapp.com/static/images/cities/mexico-city.png">
                                    <div class="text"><p>It help’s in reproductive wellness.</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                <div class="content">
                                    <img class="thumb" src="https://bikoapp.com/static/images/cities/mexico-city.png">
                                    <div class="text"><p>It helps in the reduction of risk, amelioration and management of diseases such as heart disease, diabetes, certain forms of cancer, obesity, high blood pressure, and osteoporosis.</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                <div class="content">
                                    <img class="thumb" src="https://bikoapp.com/static/images/cities/mexico-city.png">
                                    <div class="text"><p>Regular Exercise is essential for managing your weight.</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                <div class="content">
                                    <img class="thumb" src="https://bikoapp.com/static/images/cities/mexico-city.png">
                                    <div class="text"><p>It can help you to sleep better.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    
                    <div class="row">
                        <div class="col-md-6 about1">
                            <div class="inner"></div>
                        </div>
                        <div class="col-md-6 about2">
                            <div class="inner">
                                <ul>
                                    <li><a href="./get_started.php">Signup for 1 month free trial</a></li>
                                    <li><a href="./corporate.php">Corporate fitness program</a></li>
                                    <li><a href="./partner.php">Partnership program</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- footer -->
        <?php include("inc/footer.php"); ?>

    </div>


    <?php include("inc/scripts.php"); ?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var img = selectAll('.whyExercise .thumb');
        var p = selectAll('.whyExercise p');  
        
        TweenMax.from(img, 1, {y: -100});
        TweenMax.from(p, 1, {autoAlpha: 0, delay: 0.5, ease:Power2.easeIn});   
    });

    function select(el) {
        return document.querySelector(el);
    }

    function selectAll(el) {
        return document.querySelectorAll(el);
    }
    </script>
</body>
</html>