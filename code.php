<?php
include_once('../includes/connect.php');

if(isset($_POST['updatebtn']))
{
    $productID = $_POST['edit_productID'];
    $productomschrijving = $_POST['edit_productomschrijving'];
    $prijs = $_POST['edit_prijs'];
    

    $query = "UPDATE despot SET productomschrijving='$productID', prijs='$productomschrijving',  WHERE productID='$productID' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: despot.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: despot.php'); 
    }
}

?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
    </div>
    <div class="card-body">
    <?php

        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_productID'];
            
            $query = "SELECT * FROM product WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row)
            {
                ?>

                    <form action="code.php" method="POST">

                        <input type="hidden" name="edit_productID" value="<?php echo $row['productID'] ?>">

                        <div class="form-group">
                            <label> Username </label>
                            <input type="hidden" name="edit_productomschrijving" value="<?php echo $row['productomschrijving'] ?>" class="form-control"
                                placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_prijs" value="<?php echo $row['prijs'] ?>" class="form-control"
                                placeholder="Enter Email">
                        </div>
                        <a href="register.php" class="btn btn-danger"> CANCEL </a>
                        <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                    </form>
                    <?php
            }
        }
    ?>
    </div>
</div>
</div>

</div>