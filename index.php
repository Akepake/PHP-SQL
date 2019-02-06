<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384- 9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384- q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    <h1>R0315 - Web App Development with PHP/SQL - Code for Hands on Exercises</h1>
    <?php
    /**
     * Created by PhpStorm.
     * User: MEILOHI
     * Date: 23.11.2018
     * Time: 10.34
     */
        $dir    = getcwd (  );
        $files = scandir($dir, 1);
        $html = '<ul>';
        foreach ($files as $key => $value) {
            if(is_dir($value) && substr($value, 0,1 )!=".") {
                $html .= '<li><a href="' . $value . '">' . $value . '</a></li>';
            }
        }
        $html .= '</ul>';
        echo $html;
    ?>
</body>
</html>
