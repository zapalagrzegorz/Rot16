<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ROT 16 PL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
<?php
require 'zadanie2.php';
?>
        <form id="usrForm" class="searchForm form-inline" name="" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend class="centerText">ROT 16 PL</legend>
                <div class="centerText">

                    <textarea class="form-control" rows="4" cols="50"  name="inputDateRaw">
<?php
if($input !== ""){
    echo ' '.$input;
}
 ?>
                    </textarea>=>
                    <textarea class="form-control" rows="4" cols="50" name="comment" form="usrForm">
<?php
if($output !== ""){
    echo ' '.$output;
}
?>
                   </textarea>
                </div>
                <div class="wrap">
                    <input id="js-searchBtn" class="btn btn-primary" type="submit" formnovalidate value="Konwertuj">
                </div>
            </fieldset>
        </form>
    </body>
</html>