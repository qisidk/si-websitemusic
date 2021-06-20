<?php
require_once "app/koneksi.php";
    ob_start();
    session_start();
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $_SESSION['username'] = $username;
        $Open = mysql_connect("localhost","root","");
            if (!$Open){
            die ("Koneksi ke Engine MySQL Gagal !");
                }
        $koneksi = mysql_select_db("login");
            if (!$koneksi){
            die ("Koneksi ke Database Gagal !");
            }
    $sql = "SELECT * FROM user where username=:username AND password=:password";
    $qry = mysql_query($sql);
    $num = mysql_num_rows($qry);
    $row = mysql_fetch_array($qry);

    if ($num==0 OR $password!=$row['password']) {
    ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai !');
            document.location='login.php';
        </script>
    <?php
    }
    else {
        $_SESSION['login']=1;
        header("Location: index.php");
    }
    mysql_close($Open); //Tutup koneksi engine MySQL
?>