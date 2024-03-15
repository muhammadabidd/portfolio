
<?php  $courses = file_get_contents("sections/course.json");

       $courses = json_decode($courses);    ?>












<div class="courses-section section"  id="courses">
        <div class="content content-courses">
            <div class="sub">
                <h3>06. Courses Taken</h>
            </div>

            <div class="flexbox-container flexbox-courses">

                <?php foreach ($courses as $course) : ?>
                    <a href="http://">
                    <div class="flexbox-item flexbox-item-data">
                    
                        <div class="flexbox-atasbawah">
                            <h4>Investigating  Netflix Movie around the world Value</h4>
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
