<?php
session_start();
if(empty($_SESSION["bhw-username"]) || $_SESSION["bhw-username"] == "") {
    header("location: ../../login-bhw.php");
    exit;
}
include "../../backend/bhw/_inventory.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Inventory</title>
        <link rel="stylesheet" href="../assets/css/bhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <?php
        $pageTitle = "Inventory";
        include "../templates/sidebar-bhw.php";
        include "../templates/header.php";
        ?>

        <main>
            <section class="grid-item">
                <form method="get">
                    <header class="table-header">
                        <div class="search-container flex-center">
                            <input name="searchdata" class="search-input" type="search" placeholder="Search...">
                            <button type="submit" name="search" class="mini-btn">&nbsp;</button>
                        </div>
                        <div class="filter-container flex-center">
                            <a href="inventory.php?new" name="new"><button type="button" class="mini-btn">New</button></a>
                            <select name="status">
                                <option value="" <?php if ($selectedStatus == "") { echo "selected"; } ?>>All</option>
                                <option value="In Stock" <?php if ($selectedStatus == "In Stock") { echo "selected"; } ?>>In Stock</option>
                                <option value="Out of Stock" <?php if ($selectedStatus == "Out of Stock") { echo "selected"; } ?>>Out of Stock</option>
                                <option value="Discontinued" <?php if ($selectedStatus == "Discontinued") { echo "selected"; } ?>>Discontinued</option>
                            </select>
                            <button type="submit" name="filter" class="mini-btn filter-btn"></button>
                        </div>
                    </header>
                </form>
                <div class="table-body">
                    <table class="vaccines-tbl" id="vaccines-tbl">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vaccine Name</th>
                                <th>Disease Prevented</th>
                                <th>Recipient Type</th>
                                <th>Qty On Hand</th>
                                <th>Qty Reserved</th>
                                <th>Qty Available</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr><tr>
                            <?php
                            if ($vaccines){
                                while ($row = mysqli_fetch_assoc($vaccines)){ ?>
                                    <tr>
                                        <td><?php echo $row["VaccineID"]?></td>
                                        <td><?php echo $row["VaccineName"]?></td>
                                        <td><?php echo $row["DiseasePrevented"]?></td>
                                        <td><?php echo $row["RecipientType"]?></td>
                                        <td><?php echo $row["QtyOnHand"]?></td>
                                        <td><?php echo $row["QtyReserved"]?></td>
                                        <td><?php echo $row["QtyAvailable"]?></td>
                                        <td><?php echo $row["VaccineStatus"]?></td>
                                        <td>
                                            <div class='row-btn-container'>
                                                <a href="inventory.php?edit=<?php echo $row["VaccineID"];?>" name="edit">
                                                    <img src="../assets/images/add-24px.png" class="img-link" alt="Edit" title="Edit">
                                                </a>
                                                <a href="bhw-inventory.php?confirm=<?php echo $row["VaccineID"];?>">
                                                    <img src="../assets/images/delete-24px.png" class="img-link" alt="Discontinue" title="Discontinue">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php    
                                }
                            }
                            if (mysqli_num_rows($vaccines) == 0) { ?>
                                <tr>
                                    <td colspan="9">No Records Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <div class="modal" id="modal">
                <section class="modal-content">
                    <form method="post" class="form-body" id="inventory-form">

                        <header class="form-header">
                            <h3>Vaccine Form <?php echo ($editState ? " - $vaxID " : ""); ?></h3>
                            <button type="button" class="close-btn" onclick="closeForm();"></button>
                        </header>

                        <fieldset class="vax-details" <?php echo ($editState ? 'style=display:none;' : ''); ?>>
                            <div class="input-group">
                                <label for="">Vaccine ID</label>
                                <input type="text" name="vax-id" <?php echo ($editState ? "value='$vaxID'" : ''); ?> placeholder="Enter vaccine ID" required>
                            </div>
                            <div class="input-group">
                                <label for="">Vaccine Name</label>
                                <input type="text" name="vax-name" id="vax-name" placeholder="Enter vaccine name" <?php echo (!$editState ? 'required' : ''); ?>>
                            </div>
                            <div class="input-group">
                                <label for="">Disease Prevented</label>
                                <input type="text" name="vax-disease" placeholder="Enter disease prevented" <?php echo (!$editState ? 'required' : ''); ?>>
                            </div>
                            <div class="input-group">
                                <label for="">Recipient Type</label>
                                <select name="vax-recipient" required">
                                    <option value="">...</option>
                                    <option value="Newborn">Newborn</option>
                                    <option value="Pregnant">Pregnant</option>
                                </select>
                            </div>
                        </fieldset>

                        <fieldset class="add-qty">
                            <div class="input-group">
                                <label for="vax-onhand">Quantity On Hand</label>
                                <input type="number" name="vax-onhand" <?php echo ($editState ? "readonly value='$vaxOnHand'" : ''); ?>" placeholder="Enter quantity on hand" required>
                            </div>
                            <div class="input-group" <?php echo (!$editState ? 'disabled style=display:none;' : ''); ?>>
                                <label for="vax-onhand">Quantity to  Add</label>
                                <input type="number" name="vax-add" placeholder="Enter quantity" title="Enter zero if you don't wish to add vaccines." <?php echo ($editState ? 'required' : ''); ?>>
                            </div>
                        </fieldset>

                        <div class="form-buttons">
                            <button type="submit" name="add" id="add-btn" class="dark-btn">Add</button>
                            <button type="submit" name="update" id="update-btn" class="dark-btn">Update</button>
                            <button type="button" id="cancel-btn" class="light-btn" onclick="closeForm();">Cancel</button>
                        </div>
                        
                    </form>
                </section>
            </div>

            <?php
            $title = "Discontinuation";
            $prompt = "
            <p>Do you want to discontinue this vaccine? You cannot undo this action.</p>
            <h4>Data Retention</h4>
            <p>This vaccine will still appear on past records and reports.</p>
            ";
            include "../templates/confirm-box.php";
            ?>

            <script type="text/javascript" src="../assets/js/modal.js" defer></script>
            
        </main>
    </body>
</html>