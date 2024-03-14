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

        <?php if(isset($item->name)): ?>
        <h1>  Hello Everyone, My Name is : <?php  echo $item->name ?> </h1>
        <?php endif;?>


        <?php if(isset($item->age)): ?>
        <p style="color: blue;">I am <?php echo $item->age?> years old</p>
        <?php endif;?>


        <?php if(isset($item->major)): ?>
        <p style="color: red">and I am Majoring in <?php echo $item->major?> </p>
        <?php endif;?>


        <h3 style="color: green">This is the list of my courses : </h3>


        <ol>
        <?php if(isset($item->courses)): ?>
        <?php foreach ($item->courses as $course): ?>

            <li><?php echo "$course" ?></li>

        <?php endforeach; ?>
        </ol>
        <?php endif;?>

    <?php endif;?>
<?php endforeach; ?>
</body>
</html>