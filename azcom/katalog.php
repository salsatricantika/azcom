<html>
    <head>
        <title>AZCom</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
            <?php include("header.php"); ?>
            </div>
            <div class="menu">
                <a href="index.php">Beranda</a> | 
                <a href="katalog.php">Katalog</a>
            </div>
            <div class="content">
                <form action="" method="POST">
                    Pilih katalog :
                    <select name="katalog">
                        <option value="hardware" name='hardware'>Hardware</option>
                        <option value="software" name='software'>Software</option>

                    </select>
                    <input type="submit" value="TAMPILKAN" name="submit">
                    <hr>
                    <table border="1" cellpadding="3" cellspacing="0" width="300">
                        <tr>
                            <th>No</th>
                            <th>Nama Product</th>
                            <th>Jenis</th>
                        </tr>
                        <?php
                        $hardware = array("Monitor","CPU","Keyboard","mouse"); 
                        $software = array("Windows os","linux os","mac os");
                        
                        if(isset($_POST['submit'])){
                            $katalog = ($_POST['katalog']);

                            if($katalog == 'hardware'){
                                $no=1;
                                foreach ($hardware as $m) {
                                    echo"<tr>
                                    <td>$no</td>
                                    <td>$m</td>
                                    <td>$katalog</td>
                                    </tr>";
                                    $no++;
                                }
                            }

                            if($katalog == 'software'){
                                $no=1;
                                foreach ($software as $m) {
                                    echo"<tr>
                                    <td>$no</td>
                                    <td>$m</td>
                                    <td>$katalog</td>
                                    </tr>";
                                    $no++;
                                }
                            }
                        }
                            
                         ?>
                    </table>
                </form>
            </div>
            <div class="footer"><?php include("footer.php"); ?></div>
        </div>
    </body>
</html>