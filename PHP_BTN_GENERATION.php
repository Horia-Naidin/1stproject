<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
<?php 


$arr2 = range(1,5);
print_r($arr2);

echo '<br>';
shuffle($arr2);
echo '<div class="container" style="padding:10px">';
 foreach ($arr2 as $number) {
    if($number%3 == 1){
        echo '<div class="row" style="padding:5px">';}
        
        
     
echo '<div class="col" style="padding:2px" ><button id="bttn'.$number.'" class="btn btn-primary w-100 p-3" onclick="changeButton(this)">'.$number .' </button></div>';


}

 echo '</div>';
 shuffle($arr2);
 echo '<div class="container" style="padding:10px">';
 foreach ($arr2 as $number) {
    if($number%3 == 1){
        echo '<div class="row" style="padding:5px">';}
        
        
     
echo '<div class="col" style="padding:2px" ><button id="bttn'.$number.'" class="btn btn-primary w-100 p-3" onclick="changeButton(this)">'.$number .' </button></div>';


}

 echo '</div>';

 echo '<script defer>function changeButton(bttn){
     bttn.classList.remove("btn-primary");
     bttn.classList.add("btn-secondary");
     
    // bttn.remove();
}
    </script>';
 
?> 

</body>
</html>
