
<?php  $videos = file_get_contents("sections/video.json");

       $videos = json_decode($videos);    ?>









<div class="video-section section"  id="video">
        <div class="content content-video">
            <div class="sub">
                <h3>05. Video Lesson</h>
            </div>

            <div class="flexbox-container flexbox-video">

            <?php foreach ($videos as $vid) : ?>
                    <a href="http://">
                    <div class="flexbox-item flexbox-item-data">
                    
                        <div class="flexbox-atasbawah">
                            <img src="img/thumbnail/01.webp" alt="">
                            <h4>Investigating  Netflix Movie around the world Value</h4>
                            <p>02 Nov 2024</p>
                        </div>

                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <ul>
                                    <li>AI</li>
                                    <li>Python</li>
                                    <li>SNS</li>
                                </ul>
                            </div>
                        </div>

                    
                    </div>
                    </a>

                <?php endforeach;?>
            </div>

        </div>
</div>
