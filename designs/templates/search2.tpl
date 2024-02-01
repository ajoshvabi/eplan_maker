<!doctype html>
<html lang="en">
  <head>
    <title>View Requirement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="mytable/table-09/css/style.css">
      <link href="myform/aa/css/main.css" rel="stylesheet" media="all">
</head>


    </head>
    <body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">View Requirement</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
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
                        <table class="table table-striped">
                          <thead>
                             {foreach from=$data item="a"}
                            <tr>
                             <th>Company name</th>
                             <th>District</th>
                             <th>City</th>
                            </tr>

                          </thead>
                          
                         
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
                   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="mytable/table-09/js/jquery.min.js"></script>
  <script src="mytable/table-09/js/popper.js"></script>
  <script src="mytable/table-09/js/bootstrap.min.js"></script>
  <script src="mytable/table-09/js/main.js"></script>

    </body>
</html>







<div class="col-md-12">
          <div class="table-wrap">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Building type</th>
                  <th>Model</th>
                  <th>No rooms</th>
                  <th>Other requirement</th>
                 
                </tr>

              </thead>
              
              {foreach from=$view item="a"}
              <tbody>
                <tr>
                
                  <td>{$a.buildingtype}</td>
                  <td>{$a.model}</td>
                  <td>{$a.rooms}</td>
                  <td>{$a.otherreq}</td>
                  <td><a href="reqedit.php?key={$a.rkey}" class="btn btn-success">Edit</a></td>
                </tr>

                
              </tbody>
              {/foreach}
            </table>
          </div>
        </div>

