<?php
include("dbconn.php");
?>

<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="gui.css" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rolling Stones</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.10.0/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.10.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.10.0/dist/js/uikit-icons.min.js ">
    </script>
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
    <!-- <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="">Schedule</a></li>
                <li class="uk-parent"><a href="">Training</a></li>
                <li><a href="">Log Out</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <img src="imgs/fit.png">
        </div>
    </nav> -->
    <div class="uk-section-muted">
        <div class="uk-container">
            <h2>The best albums of all time 2012</h2>
        </div>
        <div class="uk-container-expand">
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
        </div>
</body>

</html>