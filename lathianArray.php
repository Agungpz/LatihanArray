<?php

$abjad = ["A", "B", "C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
$jadwal = ["Pendidikan Agama Dan Budi Pekerti","Pendidikan Pancasila","Bahasa Indonesia","Matematika","Bahasa Inggris","Dasar dasar Kejuruan RPL"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .bulat{
            width: 95px;
            height: 95px;
            border-radius: 100%;
            line-height: 95px;
            float: left;
            background-color: crimson;
            color: white; 
            text-align: center;
            margin: 3px;
        }
        .clear {clear: both;}
        .kotak{
            width: 300px;
            line-height: 150px;
            text-align: center;
            height: 150px;
            border-radius: 20px 0 20px 0;
            background-color: blue;
            margin: 3px;
            float : left;
            color : white;
        }
    </style>
</head>
<body>
    
<?php for($i = 0; $i < count($abjad); $i++){ ?>
<div class="bulat"><?php echo $abjad[$i]; ?></div>
 <?php } ?>  
 
<div class="clear"></div>

<h1>JADWAL PELAJARAN X-RPL-2</h1>    

<?php foreach($jadwal as $j ){ ?>
<div class="kotak"> <?php echo $j; ?></div>
<?php } ?>
</body>
</html>