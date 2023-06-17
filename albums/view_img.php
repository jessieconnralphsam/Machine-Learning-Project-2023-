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
<div class="container-fluid bg-dark" >
    <div id="img-holder" class='w-100'>
        <img src="<?php echo validate_image($path_name) ?>" alt="img" loading="lazy" class="w-100 view-img" id="view-img">
        <!-- echo specific data here -->
        <?php if (isset($name)): ?>
            <h1 style="font-size: 20px;">Name: <?php echo $name; ?></h1>
        <?php endif; ?>
        <?php if (isset($disease)): ?>
            <h5>Disease: <?php echo $disease; ?></h5>
        <?php endif; ?>
        <?php if (isset($description)): ?>
            <h5 style="font-size: 10px;">Description: <?php echo $description; ?></h5>
        <?php endif; ?>
        <?php if (isset($effects)): ?>
            <h5 style="font-size: 10px;">Effects: <?php echo $effects; ?></h5>
        <?php endif; ?>
        <?php if (isset($cause)): ?>
            <h5 style="font-size: 10px;">Cause: <?php echo $cause; ?></h5>
        <?php endif; ?>
        <?php if (isset($medicine)): ?>
            <h5 style="font-size: 10px;">Medicine: <?php echo $medicine; ?></h5>
        <?php endif; ?>
        <?php if (isset($prevention)): ?>
            <h5 style="font-size: 10px;">Prevention: <?php echo $prevention; ?></h5>
        <?php endif; ?>
        <?php if (isset($link)): ?>
            <h5 style="font-size: 10px;">Source: <a href="<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a></h5>
        <?php endif; ?>

    </div>
</div>