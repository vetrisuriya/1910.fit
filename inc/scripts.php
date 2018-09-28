    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            $windowWidth = window.outerWidth;


            $(document).on("scroll", function () {

                $scrollHeight = window.scrollY;
                $windowWidth = window.outerWidth;
                var changeNavstyle = 0;


                if ($scrollHeight > 50) {
                    if (changeNavstyle == 0) {
                        $("body").addClass("scrollNav");
                        changeNavstyle = 1;
                    }
                } else {
                    $("body").removeClass("scrollNav");
                }
            });

    
        });
    </script>