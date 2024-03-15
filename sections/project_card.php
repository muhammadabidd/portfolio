
<?php  $projects = file_get_contents("sections/project_card.json");

       $projects = json_decode($projects);    ?>



<!-- PROJECT START -->
<div class="project-section section" id="project">
        <div class="content content-project">
            <div class="sub">
                <h3>03. My Project</h>
            </div>



            <div class="flexbox-container">
                <?php foreach ($projects as $pro):  ?>
                    <?php if(isset($pro) && !empty($pro)): ?>
                        <div class="flexbox-item flexbox-item-1">
                        <a href="<?php echo $pro->link ?>" target="_blank">
                            <div class="flexbox-atasbawah">
                                <div class="gambar-inline">
                                    <img class="image-filter" src="img/svg/folder.svg" style="height: 44px; width: 44px;" alt="">
                                    <img class = "outside-link" src="img/svg/link.svg" style="height: 25px; width: 25px;"alt="">
                                </div>
                                <h4 class="flexbox-header"><?php echo $pro->title ?></h4>
                                <p class="flexbox-text"><?php echo $pro->desc ?></p>
                            </div>
                            <div class="flexbox-atasbawah">
                                <div class="project-tag">
                                    <ul>

                                        <?php foreach ($pro->tags as $tag): ?>
                                            <li><?php echo $tag ?></li>
                                        <?php endforeach; ?>   

                                    </ul>
                                </div>
                            </div> 
                        </a>
                        </div>
                    <?php endif;?>
                 <?php endforeach; ?>
            </div>


        </div>
    </div>
    <!-- PROJECT END -->