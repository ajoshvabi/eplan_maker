<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Register Forms company</title>

    <!-- Icons font CSS-->
    <link href="myform/aa/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="myform/aa/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="myform/aa/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="myform/aa/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="myform/aa/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Edit Complaints </h2>
                </div>
                <div class="card-body">
                    {foreach from=$data item="d"}
                    <form method="POST">
                        <input type="hidden" name="hide" value="h">
                 >
                        <div class="form-row">
                            <div class="name">Edit Complaint</div>
                            <div class="value">
                                <div class="input-group">
                                    
                                    <textarea class="input--style-5" name="complaint" >{$d.complaint}</textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" value="register">Submit</button>
                        </div>
                        
                    </form>
                    {/foreach}

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="myform/aa/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="myform/aa/vendor/select2/select2.min.js"></script>
    <script src="myform/aa/vendor/datepicker/moment.min.js"></script>
    <script src="myform/aa/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="myform/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->