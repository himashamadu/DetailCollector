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

    <link href="<?php echo base_url()."assets/";?>css/styleFront.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="outline">
        <h1 style="text-align: center;">Expense Tracker</h1>
        <div class="label-display">
            <label name="income" id="item"><b>Income </b><br> +35000</label>
            <label name="Expense" id="item"><b>Expense</b> <br> -4500</label>
        </div>
        <div class="button">
            <button id="buttonAdd">Add new Transaction</button>
        </div>

        <div class="tableInput">

            <label id="labelDisplay">Text</label>

            <label id="labelDisplay">Amount</label>

            <label id="labelDisplay">Date</label>



            <input type="text" id="addDetail">
            <input type="text" id="addDetail">
            <input type="date" id="addDetail">

            <label></label>
            <label id="note"> Negative -expense <br> Positive +income </label>


        </div>

        <div>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">History</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td>Salary</td>
                        <td>+35000</td>

                        <td>
                            <button type="button" class="btn btn-success" id="changeButton"><i class="fa fa-edit"></i>
                                Edit</button>
                            <button type="button" class="btn btn-danger" id="changeButton"><i class="fa fa-close"></i>
                                Delete</button>
                        </td>

                    </tr>

                </tbody>


            </table>
        </div>
    </div>

</body>

</html>