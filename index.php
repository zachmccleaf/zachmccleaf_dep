<?php include 'inc/header.php' 



?>
        <div id="calltoaction">
            <div class="container">
                <div class="heroimg">
                </div>
                <div class="calltext">
                    <h1>Zach McCleaf</h1>
                    <p class="aboutme left">Front-End Web Developer</p>
                    <p class="aboutme">Specialize in building engaging experiences</p>
                    <p class="aboutme right">accross all media platforms</p>
                    <a class = "callbutton centerbtn" href ="#contact">Contact Now</a>
                </div>
            </div>
        </div>
        <div id="work">
            <div class="container bottomborder">
                <div class="content">
                    <h3>Work</h3>
                    <p>Coming Soon!</p>
                    <a class="link" href="FEWD.html">Check out my work from Betamore</a>
                </div>
            </div>
        </div>
        <div class="container bottomborder">
            <div class="clearfix">
                <div id="skills">
                    <h3>Skills</h3>
                    <ul class="skilllist">
                        <li class="skill">
                            <h5>Programming</h5>
                            <div class="bar">
                                <span class="wow fill" style="width: 90%"></span>      
                            </div>
                        </li>
                        <li class="skill">
                            <h5>Troubleshooting</h5>
                            <div class="bar"> 
                                <span class="wow fill" style="width: 87%"></span>
                            </div>
                        </li>
                        <li class="skill">
                            <h5>Learning</h5>
                            <div class="bar"> 
                                <span class="wow fill" style="width: 98%"></span>
                            </div>
                        </li>
                        <li class="skill">
                            <h5>Multi-Tasking</h5>
                            <div class="bar">
                                <span class="wow fill" style="width: 90%"></span>
                            </div>
                        </li>
                        <li class="skill">
                            <h5>Teamwork</h5>
                            <div class="bar">
                                <span class="wow fill" style="width: 94%"></span> 
                            </div>
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
                        <li>FTP</li>
                        <li>Version Control (GIT)</li>
                        <li>WordPress</li>
                        <li>Graphic Design (Adobe Collection)</li>
                        <li>Microsoft Office</li>
                    </ul>
                </div>
            </div>
            <a class="resume link" href="Resume.pdf">Download My Resume</a>
        </div>
        <div class="container clearfix">
            <div id="about">
            <img src="img/aboutphoto.png" alt="My Photo" class="aboutphoto">
                <h3>About</h3>
                <p>I am a family oriented, nature loving, beer drinking web developer looking for new projects. I've always had a 
                knack for anything computer related, and fell into coding more seriously over a year ago. The reason I love 
                making, breaking and fixing websites comes from my desire to learn new things, and a passion for creative 
                solutions. Long story short, I enjoy solving complex problems with modular, succinct code.
                <a href="mailto:mccleaf324@gmail.com">Connect with me</a>
                </p>
            </div>
        </div>
        <div id="contact">
            <div class="whitelineleft"></div>
            <div class="whitelineright"></div>
            <h3>Contact</h3>
            <form class="contactform" action="confirm.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <input class="input" name="name" type="text" value="" size="30" placeholder="Name" /><br />
                </div>
                <div class="row">
                    <input class="input" name="email" type="text" value="" size="30" placeholder="Email"/><br />
                </div>
                <div class="row">
                    <textarea class="message" name="message" rows="7" cols="60" placeholder="Message"></textarea><br />
                </div>
                 <button type="submit" name="send" class="callbutton contactbtn">Say Hi!</button>
                </form>                     
            </div>
<?php include 'inc/footer.php' ?> 
