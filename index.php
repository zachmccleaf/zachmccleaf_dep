<?php include 'inc/header.php' 



?>
        <div class="calltoaction">
            <div class="container">
                <div class="heroimg">
                </div>
                <div class="calltext">
                    <h1>Zach McCleaf</h1>
                    <p class="aboutme left">Front-End Web Developer</p>
                    <p class="aboutme">Specialize in building engaging experiences</p>
                    <p class="aboutme right">accross all media platforms</p>
                    <a class = "callbutton centerbtn" href ="#">Contact Now</a>
                </div>
            </div>
        </div>
        <div class="work">
            <div class="container bottomborder">
                <div class="content">
                    <h3>Work</h3>
                    <p>Coming Soon!</p>
                </div>
            </div>
        </div>
        <div class="container bottomborder">
            <div class="clearfix">
                <div class="skills">
                    <h3>Skills</h3>
                    <ul class="skilllist">
                        <li class="skill">
                            <h5>Programming</h5>
                            <progress class="skill1" max="100" value="90">
                            </progress>
                        </li>
                        <li class="skill">
                            <h5>Troubleshooting</h5>
                            <progress class="skill2" max="100" value="90">
                            </progress>
                        </li>
                        <li class="skill">
                            <h5>Learning</h5>
                            <progress class="skill3" max="100" value="97">
                            </progress>
                        </li>
                        <li class="skill">
                            <h5>Multi-Tasking</h5>
                            <progress class="skill4" max="100" value="93">
                            </progress>
                        </li>
                        <li class="skill">
                            <h5>Teamwork</h5>
                            <progress class="skill5" max="100" value="90">
                            </progress>
                        </li>
                    </ul>
                </div>
                <div class="technologies">
                    <h3 class="white">Technologies</h3>
                    <ul class="height">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        <li>PHP</li>
                        <li>AJAX</li>
                        <li>FTP</li>
                        <li>Version Control (GIT)</li>
                        <li>WordPress</li>
                        <li>Graphic Design (Adobe Collection)</li>
                        <li>Microsoft Office</li>
                    </ul>
                </div>
            </div>
            <a class="resume" href="#">Download My Resume</a>
        </div>
        <div class="container clearfix">
            <div class="about">
            <img class="aboutphoto" src="img/aboutphoto.png">
                <h3>Zach McCleaf</h3>
                <p>Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
            </div>
        </div>
        <div class="contact">
            <div class="whitelineleft"></div>
            <div class="whitelineright"></div>
            <h2>Contact</h3>
            <form class="contactform" action="confirm.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <input class="input" name="name" type="text" value="" size="30" placeholder="Name" /><br />
                </div>
                <div class="row">
                    <input class="input" name="email" type="text" value="" size="30" placeholder="Email"/><br />
                </div>
                <div class="row">
                    <textarea class="message" name="message" type="text" rows="7" cols="70" placeholder="Message"></textarea><br />
                </div>
                 <button type="submit" name="send" class="callbutton contactbtn">Say Hi!</button>
                </form>                     
            </div>
<?php include 'inc/footer.php' ?> 
