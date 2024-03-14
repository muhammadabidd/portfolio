<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php  $myfile2 = file_get_contents("json2.json");

            $myfile2 = json_decode($myfile2);    ?>
    

</head>
<body>
    
<?php foreach ($myfile2 as $item):  ?>
    <?php if(isset($item) && !empty($item)): ?>

        <h1>  Hello Everyone, My Name is : <?php  echo $item->name ?> </h1>

        <p style="color: blue;">I am <?php echo $item->age?> years old</p>

        <p style="color: red">and I am Majoring in <?php echo $item->major?> </p>

        <p style="color: green">This is the list of my courses : </p>


        <ol>
        <?php foreach ($item->courses as $course): ?>

            <li><?php echo "$course" ?></li>

        <?php endforeach; ?>
        </ol>

    <?php endif;?>
<?php endforeach; ?>
</body>
</html>