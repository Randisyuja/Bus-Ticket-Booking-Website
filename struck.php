<?php

$data=array();
$data["nama"]=$_POST["nama"];
$data["nomoriden"]=$_POST["nomoriden"];
$data["nohp"]=$_POST["nohp"];
$data["kelas"]=$_POST["kelas"];
$data["penumpang"]=$_POST["penumpang"];
$data["lansia"]=$_POST["lansia"];
?>

<html>
    <head>
    </head>
    <body>
    <!DOCTYPE html>
<html>
    <head>
        <title>Randi Syuja</title>

        <!-- Bootstrap CSS -->
        <link href="test/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .con{
                padding:1rem;
                background-color:#727272;
                color:#fff;
                text-align:center;
            }
            
            .con-t{
                border-radius:50px;
                padding:1rem;
                background-color:gainsboro;
                color:#fff;
                text-align:center;
            }

            .row{
                padding:1rem;
                color:#fff;
                text-align:center;
            }

            .row2{
                margin-bottom:1rem;
                border:2px solid #fff;
                border-radius:40px;
            }
            
            .col{
                padding:5px;
                background-color:gainsboro;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                border:2px solid #727272;
                border-radius:50px;
                text-align:center;
                color:black;
            }
        </style>
    </head>
    <body style="background-color:#727272;">
        <div class="con">
            <div class="row" style="border-bottom:2px solid #fff;">
                <div class="col">Randi Syuja's Website</div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
            </div>
            <div class="row">
            </div>
            <div class="con-t" style="background-color:#727272;">
                <div class="con-t" style="background-color:#727272;">
                    <div class="con-t">
                        <div class="con" style="border-radius:40px">
                            <div class="row">
                                <div class="col-sm">
                                    <table width="400" class="font1" border="0" style="color:white;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                                        <tr>
                                            <td>Nama Pemesan</td>
                                            <td>: <?php echo $data["nama"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Identitas</td>
                                            <td>: <?php echo $data["nomoriden"]?></td>
                                        </tr>
                                        <tr>
                                            <td>No HP</td>
                                            <td>: <?php echo $data["nohp"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Kelas Penumpang</td>
                                            <td>: <?php echo $data["kelas"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Penumpang</td>
                                            <td>: <?php echo $data["penumpang"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumah Penumpang Lansia</td>
                                            <td>: <?php echo $data["lansia"]?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
    </body>
</html>
