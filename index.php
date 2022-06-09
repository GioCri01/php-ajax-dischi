<?php

    include __DIR__ .'/DB/dischi_db.php';
    
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <div class="container d-flex flex-wrap">
            <?php foreach($dischi as $key ):?>
            <div class="box">
                <img src="<?php echo $key["poster"]?>" alt="">
                <h4><?php echo $key["title"]?></h4>
                <h4><?php echo $key["author"]?></h4>
                <h4><?php echo $key["genre"]?></h4>
                <h4><?php echo $key["year"]?></h4>
            </div>
            <?php endforeach;?>
        </div>
    </main>
</body>
</hh4