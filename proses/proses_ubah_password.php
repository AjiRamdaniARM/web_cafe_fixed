<?php
    include "connect.php";
    $id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
    $passwordlama = (isset($_POST['passwordlama'])) ? (htmlentities($_POST['passwordlama'])) : "";
    $passwordbaru = (isset($_POST['passwordbaru'])) ? (htmlentities($_POST['passwordbaru'])) : "";
    $repassword = (isset($_POST['repassword'])) ? (htmlentities($_POST['repassword'])) : "";


    if (!empty($_POST['ubah_password_validate'])) {
        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_oniichan]' && password = '$passwordlama'");
        $hasil = mysqli_fetch_array($query);
        if ($hasil) {
            $query = mysqli_query($conn, "UPDATE tb_user SET password='$passwordbaru' nama='$name', username='$username', level='$level', nohp='$nohp', alamat='$alamat' WHERE id='$id'");
            if($query){
                $message = '<script>alert("Data berhasil diupdate");
                window.location="../user"</script>';    
            }else{
                $message = '<script>alert("Data gagal diupdate")</script>';
            }
        } else { ?>
            <script>
                alert('Username atau password yang anda masukkan salah!!!');
                window.location = '../login'
            </script>
        <?php
        }     
    } echo $message;
    ?>