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
    <div class="outline">
        <div class="container">

            <h5>User Details</h5>
            <?php if ($this->session->flashdata('status')) {?>
            <div class="alert alert-success">
                <?=$this->session->flashdata('status')?>
            </div>
            <?php } elseif ($this->session->flashdata('warn')) { ?>
            <div class="alert alert-warning">
                <?=$this->session->flashdata('warn')?>
            </div>
            <?php }?>

            <form method="post" action="<?php echo base_url('FrontPage/insert'); ?>">

                <div class="form-group col-md-12">
                    <label>Full Name</label>
                    <input type="text" class="form-control form-control-sm" name="name">
                    <?php echo form_error("name");?>
                </div>
                <div class="form-group col-md-12">
                    <label>Age</label>
                    <input type="number" class="form-control form-control-sm" name="age">
                    <small><?php echo form_error('age');?></small>
                </div>

                <div class="form-group col-md-12">
                    <label>Address</label>
                    <input type="text" class="form-control form-control-sm" name="address">
                    <small><?php echo form_error('address');?></small>
                </div>
                <div class="form-group col-md-12">
                    <label>Contact Number</label>
                    <input type="text" class="form-control form-control-sm" name="contact">
                    <small><?php echo form_error('contact');?></small>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control form-control-sm" name="email">
                    <small><?php echo form_error('email');?></small>
                </div>
                <div class="text-center">

                
                    <button type="submit" class="btn btn-primary" id="btnSize" name="add"><i class="fa fa-plus"></i>
                        Add</button>
                </div>
            </form>
        </div>
        <br>
        <div>
            <div class="table-wrapper-scroll-y my-custom-scrollbar table table-bordered" id="tableLen">
                <div class="tableProduct-body">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Family_ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Email</th>
                                <th scope="col" colspan="2" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  
                        foreach ($fetch_data->result() as $row) {
                            ?>
                            <tr>

                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->age; ?></td>
                                <td><?php echo $row->address; ?></td>
                                <td><?php echo $row->contact; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td>
                                    <a href="<?php echo base_url('FrontPage/edit/'.$row->id); ?>"
                                        class="btn btn-success" id="btnSize"><i class="fa fa-edit"></i> Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('FrontPage/delete/'.$row->id); ?>"
                                        class="btn btn-danger" id="btnSize"><i class="fa fa-close"></i> Delete</a>


                                </td>
                            </tr>

                        </tbody>
                        <?php
                        }
                   
                    ?>

                    </table>
                </div>

            </div>
        </div>
    </div>
</body>
</html>