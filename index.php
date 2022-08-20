    
<!doctype html>
<html lang="en">
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link href="bg.png" rel="icon" type="image/png">
<title>RandomChat</title>
</head>
<body>
<?php
include "koneksi.php";
    $tampil = mysqli_query($conn,"SELECT * FROM data");
    $jumlah_cht = mysqli_num_rows($tampil);
    if ($jumlah_cht > 0) {
        while ($row = mysqli_fetch_assoc($tampil)){

        
            
       
    
?>
<div class="wrapper">
<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
<time class="text">
<?= $row['waktu']; ?>
</time>
<p class="text"><?= $row['chat']; ?>
</p>
</div>
</div>
<?php
        }
    }
?>

<div class="row comment-box-main p-3 rounded-bottom">
<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
<form method="post" action="masuk.php">
<input type="text" name="cht" class="form-control" placeholder="send some message"/>
</div>
<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
<input type="submit" name="simpan" value="Send" class="btn btn-info">
</form>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>
</html>