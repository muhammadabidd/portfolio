
<?php  $courses = file_get_contents("sections/course.json");

       $courses = json_decode($courses);    ?>



<div class="courses-section section"  id="courses">
        <div class="content content-courses">
            <div class="sub">
                <h3>06. Courses Taken</h>
            </div>

            <div class="flexbox-container flexbox-courses">

                <?php foreach ($courses as $course) : ?>
                    <a href="<?php echo $course->link?>/">
                    <div class="flexbox-item flexbox-item-data">
                    
                        <div class="flexbox-atasbawah">
                            <h4 class= "flexbox-header"><?php echo $course->title?></h4>
                        </div>

                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <p><?php echo $course->tag?></p>
                            </div>
                        </div>

                    
                    </div>
                    </a>

                <?php endforeach;?>
            </div>

        </div>
</div>
