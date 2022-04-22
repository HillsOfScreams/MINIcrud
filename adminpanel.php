
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
          
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> productID </th>
                            <th> Username </th>
                            <th> Prijs </th>
                            <th> DELETE</th>
                            <th> EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('includes/connect.php');
                        $query = "SELECT * FROM product";
                        $result = $connect->query($query);

                        if(mysqli_num_rows($result) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['productID']; ?></td>
                                <td><?php  echo $row['productomschrijving']; ?></td>
                                <td><?php  echo $row['prijs']; ?></td>
                              
                                <td>
                                    <form action="#" method="post">
                                        <input type="text" name="edit_productID" value="<?php echo $row['productID']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> DELETE</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="php/code.php" method="post">
                                        <input type="text" name="delete_productID" value="<?php echo $row['productID']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> EDIT</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
