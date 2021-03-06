<?php
include("dbconn.php");
?>

<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rolling Stones</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.10.0/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.10.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.10.0/dist/js/uikit-icons.min.js "></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<?php

include("dbconn.php");

$dataList = " SELECT * FROM data ";

$dataListResults = $conn->query($dataList);

if (!$dataListResults) {
    echo $conn->error;
    exit();
}
// print_r($dataListResults);
?>

<body>

    <div class="uk-section-muted">
        <div class="uk-container uk-container-xsmall">
        <h1 class="uk-heading-large">The best albums of all time 2012</h1>
        </div>
    </div>
    <nav class="uk-navbar-container-expand" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav uk-width-1-10 ">
                <li class="uk-active"><a href="">500 - 451</a></li>
                <li class="uk-active"><a href="">450 - 401</a></li>
                <li class="uk-active"><a href="">400 - 351</a></li>
                <li class="uk-active"><a href="">350 - 301</a></li>
                <li class="uk-active"><a href="">300 - 251</a></li>
                <li class="uk-active"><a href="">250 - 201</a></li>
                <li class="uk-active"><a href="">200 - 151</a></li>
                <li class="uk-active"><a href="">150 - 101</a></li>
                <li class="uk-active"><a href="">100 - 51</a></li>
                <li class="uk-active"><a href="">50 - 1</a></li>
            </ul>
        </div>

    </nav>

    <!-- <div class="uk-container-expand">
            <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                <?php
                while ($row = $dataListResults->fetch_assoc()) {
                    $number = $row['Number'];
                    $artist = $row['Artist'];
                    $album = $row['Album'];
                    echo " <div> 

                    <div class='uk-card uk-card-body uk-card-default'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>
                         
                       </div> ";
                }
                ?>
            </div>
        </div> -->
    <div id="500-451" class="uk-container">
        <div class="uk-chld-width-1-4@s uk-grid-match" uk-grid>
            <?php
            while ($row = $dataListResults->fetch_assoc()) {
                $number = $row['Number'];
                $artist = $row['Artist'];
                $album = $row['Album'];
                echo "
                                <div class='uk-card uk-card-body uk-card-default style='background-image: url(images/dark.jpg);''>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                if ($number <= 451) {
                    break;
                }
            }
            ?>
            <div> <a href="" uk-totop></a> </div>
        </div>
        <script $(function(){$(a#500-451).on(click.function()>
            {
                $('500-451').show();
            }
        </script>
</body>

</html>
