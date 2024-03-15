
<?php  $certifications = file_get_contents("sections/certifications.json");

       $certifications = json_decode($certifications);    ?>









<div class="certification-section section"  id="certification">
        <div class="content content-certification">
            <div class="sub">
                <h3>03. My Certification</h>
            </div>

            <div class="flexbox-container flexbox-certification">

                <?php foreach ($certifications as $cert) : ?>
                    <a href="<?php echo "$cert->link"?>">
                    <div class="flexbox-item flexbox-item-data">
                    
                        <div class="flexbox-atasbawah flexbox-atas">
                            <div class="kiri">
                                <img src="<?php echo "$cert->img"?>" alt="">
                            </div>

                            <div class="kanan">
                                <h4><?php echo "$cert->title"?></h4>
                                <p><?php echo "$cert->issued"?></p>
                            </div>
                            
                        </div>

                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <p><?php echo "$cert->tag"?></p>
                            </div>
                        </div>

                    
                    </div>
                    </a>

                <?php endforeach;?>
            </div>

        </div>
</div>
