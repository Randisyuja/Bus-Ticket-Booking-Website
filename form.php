<!DOCTYPE html>
<html>
    <head>
        <title>Randi Syuja</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" initial-scale="1.0">

        
        <!-- Bootstrap CSS -->
        <link href="bus-ticket-booking-website/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .con{
                padding:1rem;
                background-color:#727272;
                color:#fff;
                text-align:center;
            }

            .row{
                padding:1rem;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                color:#fff;
                text-align:center;
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

            .col2{
                padding:1rem;
                background-color:gainsboro;
                border:2px solid 2px solid #727272;
                border-radius:50px; 
                
            }

            .font1{
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                color:black;
            }

            button{
                padding-left:33rem;
                padding-right:33rem;
                background-color:darkgrey;
                border:2px solid gainsboro;
                border-radius:20px;
            }
            
            .b2e4:hover{
                background-color:darkorange;
                border:2px solid gainsboro;                
                border-radius:20px;
                color:white;
            }

            .boxinput{
                color:black;
                background-color:gainsboro;
                border:0 solid gainsboro;
            }
            
        </style>

    </head>
    <body style="background-color:#727272" >
        <?php
        $bus=$_POST['bus'];
        ?>
        <div class="con">
            <div class="row" style="border-bottom:2px solid gainsboro">
                <div class="col">Randi Syuja's Website</div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
            </div>
            <div class="row">
                <div class="col2">
                    <div class="row " style="border:2px solid #727272; border-radius:50px;">
                        <div class="col-sm font1">
                            <h2 align="left">
                                Form Pemesanan<br>
                                <?php
                                echo "$bus"
                                ?> 
                            </h2>
                        </div>
                        <div class="col-sm"></div>
                        <form action="struck.php" method="post">
                            <br>
                            <table width="100%" class="font1" border="0">
                                <tr>
                                    <td width="200" align="left">Nama Lengkap</td>
                                    <td>:</td>
                                    <td align="left"><input type="text" style="width:800px;" name="nama"></td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">Nomor Identitas</td>
                                    <td>:</td>
                                    <td align="left"><input type="text" style="width:800px"  name="nomoriden"></td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">No. HP</td>
                                    <td>:</td>
                                    <td align="left"><input type="text" style="width:800px" name="nohp"></td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">Kelas Penumpang</td>
                                    <td>:</td>
                                    <td align="left">
                                        <select style="width:800px" name="kelas" id="kelas" onchange="hargaperkelas()">
                                            <option value="" selected disabled>-- Pilih Kelas --</option>
                                            <option value="Ekonomi">Ekonomi</option>
                                            <option value="Bisnis">Bisnis</option>
                                            <option value="Eksekutif">Eksekutif</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">Jadwal Keberangkatan</td>
                                    <td>:</td>
                                    <td align="left"><input type="date" style="width:800px"></td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">Jumlah Penumpang</td>
                                    <td>:</td>
                                    <td align="left"><input type="text" id="penumpang" style="width:800px" name="penumpang"></td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">Jumlah Penumpang Lansia</td>
                                    <td>:</td>
                                    <td align="left"><input type="text" id="lansia" style="width:800px" name="lansia"></td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">Harga Tiket</td>
                                    <td>:</td>
                                    <td align="left"><div id="harga" name="harga" align="left"><div></td>
                                </tr>
                                <tr>
                                    <td width="200" align="left">Total Bayar</td>
                                    <td>:</td>
                                    <td align="left"><div id="total" name="total" align="left"><div></td>
                                </tr>
                            </table>
                            <br><br>
                            <button class="b2e4" align="center">Pesan</button>
                        </form>
                        <table>
                            <button class="b2e4" onclick="total()">Hitung Bayar</button>
                        </table>
                        <a width="100%" href="index.html">
                        <button class="b2e4" align="center">Cancel</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">            
            function hargaperkelas(){
                var a=document.getElementById("kelas").value;
                var harga=0;

                if(a=="Ekonomi"){
                    harga=25000;
                }else if(a=="Bisnis"){
                    harga=50000;
                }else{
                    harga=100000;
                }

                document.getElementById("harga").innerHTML=harga;
            }

            function total(){
                var a=document.getElementById("kelas").value;
                var penumpang=document.getElementById("penumpang").value;
                var p_lansia=document.getElementById("lansia").value;
                var harga=0;
                var harga_lansia=0;
                var total=0;
                var lansia=0;
                penumpangmuda=penumpang-p_lansia;

                if(a=="Ekonomi"){
                    harga=25000;
                    lansia=harga*0.10;
                    harga_lansia=harga-lansia;
                }else if(a=="Bisnis"){
                    harga=50000;
                    lansia=harga*0.10;
                    harga_lansia=harga-lansia;
                }else{
                    harga=100000;
                    lansia=harga*0.10;
                    harga_lansia=harga-lansia;
                }

                var totalharga=harga*penumpangmuda;
                var totallansia=harga_lansia*p_lansia;
                total=totalharga+totallansia;
 
                document.getElementById("total").innerHTML=total;
            }

        </script>

    </body>
</html>
