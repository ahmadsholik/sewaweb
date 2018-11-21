
    <!-- footer -->
        <footer>
            <div class="w3ls-footer-grids">
                <div class="container">
                    <div class="col-md-3 w3l-footer one">
                        <h3>About Company</h3>
                        <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of Latin at Hampden-Sydney College in Virginia from a Lorem Ipsum passage, undoubtable source.</p>
                        <p class="adam">- Mark Thomson, CEO</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 w3l-footer one tweet">
                        <h3>Tweets</h3>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
                                <i>http//example.com</i></a>
                                <span>About 15 minutes ago<span>
                            </span></span></li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit. 
                                <i>http//example.com</i></a>
                                <span>About a day ago<span>
                            </span></span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3l-footer two">
                        <h3>Keep Connected</h3>
                        <ul>
                            <li><a class="fb" href="#"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
                            <li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
                            <li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Add us on Google Plus</a></li>
                            <li><a class="fb4" href="#"><i class="fa fa-pinterest-p"></i>Follow us on Pinterest</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3l-footer three">
                        <h3>Contact Information</h3>
                        <ul>
                            <li><i class="fa fa-map-marker"></i><p>The company name <span>Lorem ipsum dolor,</span>Polo Street (Yellow Door). </p><div class="clearfix"></div> </li>
                            <li><i class="fa fa-phone"></i><p>1234567890</p> <div class="clearfix"></div> </li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com">info@example.com</a> <div class="clearfix"></div></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="copy-right-grids">
                <div class="container">
                    <div class="copy-left">
                            <p class="footer-gd"><strong>Copyright &copy; 2018 <a href="http://kartinisoft.com">Jejesewa.com</a>.</strong> </a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </footer>
        <!-- //footer -->
        
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script><!-- Required-js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- banner slider-js -->
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script><!-- Required-js -->
    <script src="<?php echo base_url('assets/js/jquery.cycle.all.js');?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url('assets/js/jquery.maximage.js');?>" type="text/javascript" charset="utf-8"></script>        
    <script type="text/javascript">
        $(function(){
            $('#maximage').maximage({
                cycleOptions: {
                    fx: 'fade',
                    speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
                    timeout: 0,
                    prev: '#arrow_left',
                    next: '#arrow_right',
                    pause: 1,
                    before: function(last,current){
                        if(!$.browser.msie){
                            // Start HTML5 video when you arrive
                            if($(current).find('video').length > 0) $(current).find('video')[0].play();
                        }
                    },
                    after: function(last,current){
                        if(!$.browser.msie){
                            // Pauses HTML5 video when you leave it
                            if($(last).find('video').length > 0) $(last).find('video')[0].pause();
                        }
                    }
                },
                onFirstImageLoaded: function(){
                    jQuery('#cycle-loader').hide();
                    jQuery('#maximage').fadeIn('fast');
                }
            });
    
            // Helper function to Fill and Center the HTML5 Video
            jQuery('video,object').maximage('maxcover');
    
            // To show it is dynamic html text
            jQuery('.in-slide-content').delay(1200).fadeIn();
        });
    </script>   
    <!-- //banner slider-js -->
    
    <!-- login popop responsive tabs -->
        <script src="<?php echo base_url('assets/js/easyResponsiveTabs.js');?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });
        </script>
    <!-- //login popop responsive tabs -->
        
    <!-- here starts scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */
                                        
                $().UItoTop({ easingType: 'easeOutQuart' });
                                    
                });
        </script>
        
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/easing.js');?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- /ends-smoth-scrolling -->
    <!-- //here ends scrolling icon -->
    
    </body>
    <!-- //body -->
</html>
<!-- //html -->