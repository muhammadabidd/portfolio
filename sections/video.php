
<?php  $videos = file_get_contents("sections/video.json");

       $videos = json_decode($videos);    ?>









<div class="video-section section"  id="video">
        <div class="content content-video">
            <div class="sub">
                <h3>04.4. Video Lesson</h>
            </div>

            <div class="flexbox-container flexbox-video">

            <?php foreach ($videos as $vid) : ?>
                    <a class="card" href="<?php echo $vid->link?>">
                    <div class="flexbox-item flexbox-item-data">
                    
                        <div class="flexbox-atasbawah">
                            <img src="img/thumbnail/01.webp" alt="">
                            <h4 class= "flexbox-header"><?php echo $vid->title?></h4>
                            <p><?php echo $vid->released?></p>
                        </div>

                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <p><?php echo $vid->tag?></p>
                            </div>
                        </div>

                    
                    </div>
                    </a>

                <?php endforeach;?>
            </div>

            <button id="showMoreVideoBtn" class="button" style="margin:auto; display:block; margin-top : 20px;">See More</button>

        </div>
</div>
