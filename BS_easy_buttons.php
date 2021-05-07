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
echo '<div class="container" style="padding:10px">';
for ($i = 1; $i <= 9; $i++){
echo '<div  id="bttn'.$i.'" class="col" style="padding:2px"><button class="btn btn-primary w-100 p-3">'.$i .' </button></div>';
}
echo '</div>';
echo '<script defer>function changeButton(bttn){bttn.remove();}</script>';
?>
</body>
</html>
