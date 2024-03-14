
<?php  $experiences = file_get_contents("experience.json");

       $experiences = json_decode($experiences);    ?>




<!--EXPERIENCE START-->
<div class="experience-section section"  id="experience">
        <div class="content content-experience">
            <div class="sub">
                <h3>02. Where I’ve Worked</h>
            </div>

            <div class="isi">
                <div class="tab">
                    <?php foreach ($experiences as $exp):  ?>
                        <?php if(isset($exp) && !empty($exp)): ?>

                            <button class="tablinks" onclick="openExperience(event, '<?php echo $exp->id ?>')" id="defaultOpen"> <?php echo $exp->workplace ?></button>

                        <?php endif;?>
                    <?php endforeach; ?>
                </div>
                

                <?php foreach ($experiences as $exp):  ?>
                    <?php if(isset($exp) && !empty($exp)): ?>
                        <div id="<?php echo $exp->id ?>" class="tabcontent">
                            <h4><?php echo $exp->role ?> <span class="green">@ <?php echo $exp->workplace ?></span></h4>
                            <p class="time"><?php echo $exp->time ?></p>
                            <ul class="jobdesk ">

                                <?php foreach ($exp->notes as $note): ?>
                                    <li><span class="list text-panjang" > <?php echo $note ?> </span></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>
                <?php endforeach; ?>

            </div>
            <div class="clear"></div>
        </div>
    </div>
<!--EXPERIENCE END-->

