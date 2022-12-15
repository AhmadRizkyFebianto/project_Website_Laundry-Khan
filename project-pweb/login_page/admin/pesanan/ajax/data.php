<?php
    $keyword = $_GET["keyword"];
    include("../../../../process/connection.php");
    $query = mysqli_query($conn,"select * from trx where id = $keyword");
    $row = 1;
?>
<table class="table table-striped table-hover" style="background-color: #FFFFFF;">
                            <thead id="header">
                              <tr id="row">
                                <th scope="col">No</th>
                                <th scope="col">Kode Unik</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Berat Cucian</th>
                                <th scope="col">Tipe Cucian</th>
                                <th scope="col">Proses</th>
                                <th scope="col">Total Harga</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                              <?php while($data = mysqli_fetch_assoc($query)) : ?>
                              <tr>
                                <th scope="row"><?php echo $row ;?></th>
                                <td><?php echo $data["id"] ;?></td>
                                <td><?php echo $data["nama"] ;?></td>
                                <td><?php echo $data["berat"] ;?></td>
                                <td><?php echo $data["tipe"] ;?></td>
                                <td><?php echo $data["status"] ;?></td>
                                <td><?php echo $data["harga"] ;?></td>
                              </tr>
                            <?php endwhile; ?>
                            </tbody>
                        </table>