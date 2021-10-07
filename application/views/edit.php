<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="<?php echo base_url()."assets/";?>css/styleFpage.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="containerEdit">

<form method="post" action="<?php echo base_url('FrontPage/update/'.$edit->id); ?>">



    <h5>Update Details</h5>
    <br>

    <div class="form-group col-md-12">
        <label>Full Name</label>
        <input type="text" class="form-control form-control-sm" name="name" value="<?=$edit->name?>">
        <?php echo form_error("name");?>
    </div>
    <div class="form-group col-md-12">
        <label>Age</label>
        <input type="number" class="form-control form-control-sm" name="age" value="<?=$edit->age?>">
        <small><?php echo form_error('age');?></small>
    </div>

    <div class="form-group col-md-12">
        <label>Address</label>
        <input type="text" class="form-control form-control-sm" name="address" value="<?=$edit->address?>">
        <small><?php echo form_error('address');?></small>
    </div>
    <div class="form-group col-md-12">
        <label>Contact Number</label>
        <input type="text" class="form-control form-control-sm" name="contact" value="<?=$edit->contact?>">
        <small><?php echo form_error('contact');?></small>
    </div>
    <div class="form-group col-md-12">
        <label>Email</label>
        <input type="email" class="form-control form-control-sm" name="email" value="<?=$edit->email?>">
        <small><?php echo form_error('email');?></small>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-default btn-primary" id="btnSize" name="update">Update</button>
        <a href="<?php echo base_url('FrontPage'); ?>" class="btn btn-danger" id="btnSize">Back</a>
    </div>
</form>
</div>
</body>

</html>