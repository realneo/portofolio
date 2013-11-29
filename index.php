<!DOCTYPE html>
<html>
    <head>
        <title>Yoteyote | Portofolio</title>

        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery.windows.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <!-- NOTE: each "window" is a section element with class .window -->

        <section id="0" class="window">
            <div id='top_bar'>
                <div id='logo_holder'>
                    <img src='img/yoteyote_logo.png' alt='Yoteyote' />
                    <div id='logo_text' class='RawengulkLight'>Yoteyote</div>
                    <div id='sub_logo_text' class='RawengulkLight'>Portofolio</div>
                </div><!-- logo_holder -->
                <div id='top_menu'>
                    <div class='top_menu light_blue_bg'>
                        <img src='img/software_icon.png' alt='Yoteyote Softwares' />
                        <p>Softwares</p>
                    </div>
                    
                    <div class='top_menu pink_bg'>
                        <img src='img/design_icon.png' alt='Yoteyote Designs' />
                        <p>Design</p>
                    </div>
                    
                    <div class='top_menu yellow_bg'>
                        <img src='img/logo_icon.png' alt='Yoteyote Logos' />
                        <p>Logos</p>
                    </div>
                    
                    <div class='top_menu purple_bg'>
                        <img src='img/3d_icon.png' alt='Yoteyote 3D Animations' />
                        <p>Logos</p>
                    </div>
                    
                    <div class='top_menu blue_bg'>
                        <img src='img/apps_icon.png' alt='Yoteyote Apps' />
                        <p>Apps</p>
                    </div>
                    
                    <div class='top_menu light_green_bg'>
                        <img src='img/videos_icon.png' alt='Yoteyote Videos' />
                        <p>Videos</p>
                    </div>
                    
                    <div class='top_menu dark_purpe_bg'>
                        <img src='img/webs_icon.png' alt='Yoteyote Websites' />
                        <p>Websites</p>
                    </div>
                    
                    <div class='top_menu lighter_blue_bg'>
                        <img src='img/contacts_icon.png' alt='Yoteyote Contacts' />
                        <p>Hire Us</p>
                    </div>
                </div><!-- top_menu -->
            </div><!-- top_bar -->

            <div class="content">
                <div>
                    <h1 class='RawengulkLight'>Our mission is to Help brands shine online.</h1>
                </div>
                
            </div>
        </section>

        <section id="1" class="window">
            <div class="content">
                <h2>
                project root<br/>
                | -- css<br/>
                | -- | -- main.css (compiled)<br/>
                | -- js<br/>
                | -- | -- <span class="highlight">jquery.windows.js</span><br/>
                | -- scss<br/>
                | -- | -- <span class="highlight">main.scss</span><br/>
                | -- <span class="highlight">index.html</span>
                </h2>
            </div>
        </section>

        <section id="2" class="window">
            <div class="content">
                <h2>How it works</h2>
                <div class="explanation">This is a light bootstrap that sets up:
                    <ul>
                        <li>- the basic SASS for sequential full screen windows</li>
                        <li>- a jQuery plugin for managing their positions as the user scrolls</li>
                    </ul>
                    The plugin simply opens up a handy API for position management, provides callbacks, and will allow for window snapping.  No CSS is applied to the callee.
                </div>
            </div>
        </section>

        <section id="3" class="window">
            <pre>
                $('.window').windows({
                    snapping: true,
                    snapSpeed: 500,
                    snapInterval: 1100,
                    onScroll: function(scrollPos){
                        // scrollPos:Number
                    },
                    onSnapComplete: function($el){
                        // after window ($el) snaps into place
                    },
                    onWindowEnter: function($el){
                        // when new window ($el) enters viewport
                    }
                });
            </pre>
        </section>

        <section id="4" class="window">
            <div class="content">
                <h1>api</h1>
                <pre>
                    // returns ratio 0-1
                    $('.window:eq(0)').ratioVisible();

                    // returns boolean of whether or not is visible on screen
                    $('.window:eq(0)').isOnScreen();

                    // get most visible window
                    $('.window').getCurrentWindow();


                </pre>
            </div>
        </section>

        <section id="5" class="window">
            <div class="content">
                <a href="https://github.com/nick-jonas/nick-jonas.github.com/tree/master/windows" title="Download Me!" id="btn-wrap">
                    <span class="title">Download Me</span>
                    <div id="info">
                        <p>
                            <strong>Version 0.0.1 /</strong>
                            <span>1 MB</span>
                        </p>
                    </div>
                </a>

                <iframe src="http://ghbtns.com/github-btn.html?user=nick-jonas&repo=windows&type=fork&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="156px" height="30px" style="margin:50px 0 0 50px;"></iframe>

            </div>
        </section>

        <script>

            $(document).ready(function(){

                var $windows = $('.window');

                $windows.windows({
                    snapping: true,
                    snapSpeed: 500,
                    snapInterval: 1100,
                    onScroll: function(s){},
                    onSnapComplete: function($el){},
                    onWindowEnter: function($el){}
                });

            });
        </script>

    </body>
</html>