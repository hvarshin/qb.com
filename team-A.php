<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="main.css" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['v']))
            $id = $_GET['v'];
        $myFile = "rank.txt";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $id . "\n");
        fclose($fh);
        if ($id == 1)
            header('location:team-A.html');
        elseif ($id == 2)
            header('location:team-B.html');
        elseif ($id == 3)
            header('location:team-C.html');
        elseif ($id == 4)
            header('location:team-D.html');
            elseif ($id == 5)
            header('location:team-E.html');
            elseif ($id == 6)
            header('location:team-F.html');
            elseif ($id == 7)
            header('location:team-G.html');
            elseif ($id == 8)
            header('location:team-H.html');
            elseif ($id == 9)
            header('location:team-I.html');
            elseif ($id == 10)
            header('location:team-J.html');
        ?>
        <div id="buzzer">

        </div>
    </body>
</html>
