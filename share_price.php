<?php
/*
    Author:     Anopan Kandiah
    Created:    25/04/2021
    Modified:   12/05/2021
*/

require_once('asx_share.class.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dem Shares</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">

            <br>
            <form action="" method="POST" class="row g-0">
                <input type="text" name="shareCode" class="form-control" id="shareCodeInput" placeholder="Enter share code..."> 
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
            <br>
            
            <?php
            $asx_share = new ASXShare($_POST["shareCode"]);
            echo '<h1>' .$asx_share->get_share_code() .': ' .$asx_share->get_share_price() .'</h1>';
            echo '<h4>' .'Annual Dividend Yield: ' .$asx_share->get_dividend_yield() .'%' .'</h4>';
            ?>
        </div>
    </body>
</html>