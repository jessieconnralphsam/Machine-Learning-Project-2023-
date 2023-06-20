<?php
require_once('../config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `images` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
if (isset($_GET['id']) && $_GET['id'] > 0) {
    // Retrieve data from the `prediction` table
    $qry2 = $conn->query("SELECT * FROM `prediction` WHERE id = '{$_GET['id']}'");

    if ($qry2->num_rows > 0) {
        foreach ($qry2->fetch_assoc() as $k => $v) {
            $$k = $v;
        }
    }
}
?>
<style>
    #uni_modal .modal-header,#uni_modal .modal-footer{
        display:none !important;
    }
</style>
<div class="container-fluid">
    <div class="w-100 d-flex justify-content-between">
        <!-- <h4><b><?php echo $original_name ?></b></h4> -->
        <a href="#" data-dismiss='modal' class="text-dark"><i class="fa fa-times"></i></a>
    </div>
</div>
<div class="container-fluid bg-dark" > <!-- or bg-white -->
    <div id="img-holder" class='w-100'> 
        <img src="<?php echo validate_image($path_name) ?>" alt="img" loading="lazy" class="w-100 view-img" id="view-img">
        <!-- echo specific data here -->
        <?php if (isset($name)): ?>
            <h3>Plant Name: <?php echo $name; ?></h3>
        <?php endif; ?>
        <?php if (isset($disease)): ?>
            <h3>Disease: <?php echo $disease; ?></h3>
        <?php endif; ?>
        <br>
        <?php if (isset($description)): ?>
            <h4>Description:</h4>
            <div style="text-align: justify;">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>
        <br>
        <?php if (isset($effects)): ?>
            <h4>Effects: </h4>
            <div style="text-align: justify;">
                <?php echo $effects; ?>
            </div>
        <?php endif; ?>
        <br>
        <?php if (isset($cause)): ?>
            <h4>Cause: </h4>
            <div style="text-align: justify;">
                <?php echo $cause; ?>
            </div>
        <br>
        <?php endif; ?>
        <?php if (isset($medicine)): ?>
            <h4>Medicine: </h4>
            <div style="text-align: justify;">
                <?php echo $medicine; ?>
            </div>
        <br>
        <?php endif; ?>
        <?php if (isset($prevention)): ?>
            <h4>Prevention: </h4>
            <div style="text-align: justify;">
                <?php echo $prevention; ?>
            </div>
        <?php endif; ?>
        <br>
        <br>
        <?php if (isset($link)): ?>
            <h4 style="font-size: 12px;"><a href="<?php echo $link; ?>" target="_blank"><em><?php echo $link; ?></em></a></h4>
        <?php endif; ?>

    </div>
</div>