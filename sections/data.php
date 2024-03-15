
<?php  $datas = file_get_contents("sections/data.json");

       $datas = json_decode($datas);    ?>









<div class="data-section section"  id="data">
        <div class="content content-data">
            <div class="sub">
                <h3>05. Data Project</h>
            </div>

            <div class="flexbox-container flexbox-data">

                <?php foreach ($datas as $data) : ?>
                    <a href="<?php echo $data->link ?>">
                    <div class="flexbox-item flexbox-item-data">
                    
                        <div class="flexbox-atasbawah">
                            <?php if ($data->star):?>
                            <img src="img/premium.png" alt="">
                            <?php endif?>
                            <h4 class= "flexbox-header"><?php echo $data->title ?></h4>
                        </div>

                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <p>
                                    <?php echo $data->tag ?>
                                </p>
                            </div>
                        </div>

                    
                    </div>
                    </a>

                <?php endforeach;?>
            </div>

        </div>
</div>
