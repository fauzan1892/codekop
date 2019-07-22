<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
    <!--Load file bootstrap.css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Data Mahasiswa</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            <!--Fetch data dari database-->
            <?php
              $no = $this->uri->segment('2') + 1;
              foreach ($hasil_pagination as $row){
            ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['prodi']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <br/>
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>


</div>
<!--Load file bootstrap.js-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
