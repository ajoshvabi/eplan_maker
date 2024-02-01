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
    <title> Edit Register Forms customer</title>

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
                    <h2 class="title">Edit Profile </h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        {foreach from=$view item="a"}   
                        <input type="hidden" name="hide" value="h">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    
                                            <input class="input--style-5" type="text" name="name" value="{$a.name}">
                                            
            
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Addres</div>
                            <div class="value">
                                <div class="input-group">
                                    
                                    <textarea class="input--style-5" name="address">{$a.address}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="{$a.email}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row m-b-55">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="contactno" value="{$a.contactno}">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">District</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="input--style-5" name="district">
                                            <option disabled="disabled" selected="selected" >{$a.district}</option>
                                            <option>Thiruvananthapuram</option>
                                            <option>Kollam</option>
                                            <option>Pathanamthitta</option>
                                            <option>Alapuzha</option>
                                            <option>Kottayam</option>
                                            <option>Idukki</option>
                                            <option>Eranakulam</option>
                                            <option>Thrissur</option>
                                            <option>Palakkad</option>
                                            <option>Malappuram</option>
                                            <option>Kozhikkod</option>
                                            <option>Vayanad</option>
                                            <option>Kannur</option>
                                            <option>Kasargod</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="row row-space">
                                    
                                            <input class="input--style-5" type="text" name="city" value="{$a.city}">
                                           
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" value="register">Edit</button>
                        </div>
                        {/foreach}
                    </form>
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