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
<!-- $(function(){
    $('a#500-451').on('click'.function(){
        $('500-451').show();
    }} -->
<body>

    <div class="uk-section-muted">
        <div class="uk-container">
            <h2>The best albums of all time 2012</h2>
        </div>
        <nav class="uk-navbar-container uk-width-1-10" uk-navbar>
            <div class="uk-navbar">
                <ul class="uk-navbar-nav">
                    <li class ="uk-active"><a href="">500 - 451</a></li>
                    <div id=500-451 class="uk-container style='display:none'">
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
                    </div>
                    <li class="uk-active"><a href="">450 - 401</a></li>
                    <div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match">
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
                                if ($number <= 401) {
                                    break;
                                }
                            }
                            ?>
                        </div>
                        <li class="uk-active"><a href="">400 - 351</a></li>
                        <div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
                        <li class="uk-active"><a href="">350 - 301</a></li>
                        <div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
                        <li class="uk-active"><a href="">300 - 251</a></li>
                        <div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
                        <li class="uk-active"><a href="">250 - 201</a></li>
                        <div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
                        <li class="uk-active"><a href="">200 - 151</a></li>
                        <div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
                        <li class="uk-active"><a href="">150 - 101</a></li><div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
                        <li class="uk-active"><a href="">100 - 51</a></li><div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
                        <li class="uk-active"><a href="">50 - 1</a></li>
                        <div class="uk-container-expand">
                        <div class="uk-child-width-1-4@s uk-grid-match" uk-grid>
                            <!-- <?php
                            while ($row = $dataListResults->fetch_assoc()) {
                                $number = $row['Number'];
                                $artist = $row['Artist'];
                                $album = $row['Album'];
                                echo "
                    <div class='uk-card uk-card-body uk-card-default 'style='background-image: url(images/dark.jpg);'>
                         <h3 class ='uk-card-title'>$number. $album </h3> 
                          $artist
                         </div>";
                                if ($number <= 451) {
                                    break;
                                }
                            }
                            ?> -->
                            <div> <a href="" uk-totop></a> </div>
                        </div>
                    </div>
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
</body>

</html>
