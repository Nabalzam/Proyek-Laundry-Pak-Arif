<?php include 'header.php'; ?>
<div class="container">
    <div class="shadow-sm p-2 card">
        <div class="card-heading">
            <h2 class="text-center">List Admin</h2>
        </div>
        <div class="card-body">
            <div class="d-grid gap-2">
                <a href="admin_tambah.php" class="btn btn-sm btn-info pull-right text-white w-max">+ Tambah</a>
            </div>
            <br/>
            
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                </tr>
                <?php
                // koneksi database
                include '../koneksi.php';
                $data = mysqli_query($connect, 'select * from admin');
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $d['username'];?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>