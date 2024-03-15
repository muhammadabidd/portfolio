
<?php  $datas = file_get_contents("sections/data.json");

       $datas = json_decode($datas);    ?>









<div class="data-section section"  id="data">
        <div class="content content-data">
            <div class="sub">
                <h3>05. Data Project</h>
            </div>

            <div class="flexbox-container flexbox-data">

                <?php foreach ($datas as $data) : ?>
                    <a href="http://">
                    <div class="flexbox-item flexbox-item-data">
                    
                        <div class="flexbox-atasbawah">
                            <h4>Investigating  Netflix Movie around the world Value</h4>
                        </div>

                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <p>
                                    asd, asd, asd, as, ads
                                </p>
                            </div>
                        </div>

                    
                    </div>
                    </a>

                <?php endforeach;?>
            </div>

        </div>
</div>
