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
    <title> Register Forms customer</title>

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
                    <h2 class="title">Company search</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <input type="hidden" name="hide" value="h"><div class="form-row m-b-55">
                            <div class="name">Search company</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="search" placeholder="Search">
                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Search</button>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                    </form>
                    <table border="1">
    <form method="post">
        <tr>
            <th>Company name</th>
            <th>District</th>
            <th>City</th>
        </tr>
        {foreach from=$data item="a"}
        <tr>
            <td>{$a.company_name}</td>
            <td>{$a.district}</td>
            <td>{$a.city}</td>
            <td><a href="planreq.php?key={$a.ckey}">Plan Request</a></td>
        </tr>
        {/foreach}
    </form>
</table>
                   


<div class="col-md-12">
                    <div class="table-wrap">
                       
                    </div>
                </div>

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









   <table >
                          <thead>
                            <tr>
                             <th>Company name</th>
            <th>District</th>
            <th>City</th>
                            </tr>

                          </thead>
                          
                          {foreach from=$data item="a"}
                          <tbody>
                            <tr>
                            
                             <td>{$a.company_name}</td>
            <td>{$a.district}</td>
            <td>{$a.city}</td>
                              <td><a href="planreq.php?key={$a.ckey}" >Plan Request</a></td>
                            </tr>

                            
                          </tbody>
                          {/foreach}
                        </table>
                   