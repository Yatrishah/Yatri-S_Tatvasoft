<?php
session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/admindashboard.css">  
     <link rel="stylesheet" type="text/css" href="../assets/css/model.css"> 
     <link rel="stylesheet" type="text/css" href="../assets/css/css/footer.css"> 
     <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css"> 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  

    <title>Admin-dashboard</title>
</head>
<body>

    
       
 <!--------------------------------------Model For Navbar toggle--------------------------->
    <div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1"
        aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b>Admin</b> </h4>
                </div>
                <div class="modal-body">
                    <a href="#">Dashboard</a>
                    <a href="#">Service Management</a>
                    <a href="#">Role Management</a>
                    <a href="#">Coupen Code Management</a>
                    <a href="#">Escalation Management</a>
                    <a href="#servicerequest" id="servicerequest1" class="" onclick="servicerequest();" role="button">Service Requests</a>
                    <a href="#">Service Provider</a>
                    <a href="#usermanagement"   id="usermanagement1" class="" onclick="usermanagement();" role="button">User Mangement</a>
                    <a href="#">Finance Module</a>
                    <a href="#">Zip Code Management</a>
                    <a href="#">Rating Mangement</a>
                    <a href="#">Inquiry Mangement</a>
                    <a href="#">Newsletter Management</a>
                    <a href="#">Content Management</a>
                </div>
                <div class="modal-footer">
                    <a href="#">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </div>
                 <div class="modal-footer">
                    <a href="#"><img src="image/facebook.png"></a>
                    <a href="#"><img src="image/instagram.png"></a>
                   
                </div>
            </div>
        </div>
    </div>
   <!--------------------------------------End of Model For Navbar toggle--------------------------->
   <!--------------------------------------    Navbar ------------------------------------>

        <section id="section-header">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="../views/index.php">
                    helperland
                </a>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="float: left;">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="../assets/image/admin.png" class="user"
                                    alt=""> <?php echo "<li class='nav-item' style='text-align:center;font-size:20px;color:white;'><b > 
                   Welcome ".$_SESSION['FirstName']."</b></li>"; ?>  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="image/logout.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
<!-------------------------------------- End of Navbar ------------------------------------>

   <!--------------------------------------Left Table--------------------------->
  <div class="main">

        <section id="section">
            <div class="div-main" style="overflow-y:hidden;">
                <div class="div-sidebar" style="position:fixed">
                    <a href="#">Service Management</a>
                    <a href="#">Role Management</a>
                    <a href="#" class="nav-tog">
                        <p>Coupon Code Management <img src="image/next-left.png" alt=""></p>
                        <div class="nav-toggle">
                            <div>Coupen Code</div>
                            <div>Usage History</div>
                        </div>
                    </a>

                    <a href="#">Escalation Management</a>
                    <a href="#servicerequest" id="servicerequest1" class="" onclick="servicerequest();" role="button">Service Requests</a>
                    <a href="#">Service Provider</a>
                    <a href="#usermanagement" class="sidebar-active"  id="usermanagement1" class="" onclick="usermanagement();" role="button">User Mangement</a>
                    <a href="#" class="nav-tog">
                        <p>Finance Module <img src="image/next-left.png" alt=""></p>
                        <div class="nav-toggle">
                            <div>All Transaction</div>
                            <div>Generate Payment</div>
                            <div>Customer Invoices</div>
                        </div>
                    </a>
                    <a href="#">Zip Code Management</a>
                    <a href="#">Rating Mangement</a>
                    <a href="#">Inquiry Mangement</a>
                    <a href="#">Newsletter Management</a>
                    <a href="#" class="nav-tog">
                        <p>Content Management <img src="./static/images/next-left.png" alt=""></p>
                        <div class="nav-toggle">
                            <div>Blog</div>
                            <div>FAQs</div>
                        </div>
                    </a>
                </div>

    <!------------------------------------------------End of Left Table---------------------------------------------------->

    <!------------------------------------------------Right Table  UserManagment---------------------------------------------------->


                <div class="differ-section" >
                    
                    <div class="div-content" id="usermanagement">
                        <div class="title">
                            <p>User Management</p>
                            <button><span class="fa fa-plus-circle"></span>Add New User</button>
                        </div>
                        <div class="search-bar">
                            <form action="#">
                                <div class="row">
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Seelct User name</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>User Type</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">+49</span>
                                            <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username">
                                          </div>
                                    </div>
                                      <div class="col col-xs-12">
                                        <input type="text" class="form-control" placeholder="postalcode">
                                    </div>
                                     <div class="col-3">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" placeholder="zipcode">
                                    </div>
                                     <div class="col-3">
                                        <input type="date" class="form-control" placeholder="From Date">
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control" placeholder="To Date">
                                    </div>
                                    <div class="col col-buttons">
                                        <button type="Search" class="btn-search">Search</button>
                                        <button type="reset" class="btn-clear">Clear</button>
                                    </div>
                                  </div>
                            </form>
                        </div>
                        <div id="" class="table-responsive" >
                            <table class="table services" style>
                                <thead>
                                    <tr>
                                        <th scope="col">User Name <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">User Type <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Postal Code <img src="image/both_arrow.png" alt="">
                                        </th>
                                        <th scope="col">City</th>
                                        <th scope="col">Radius <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">User Status <img src="image/both_arrow.png" alt="">
                                        </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-name">Lyum Watson</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Call Center</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Inquiry Manager</div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Service Provider</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name">10 Km</div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Call Center</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Inquiry Manager</div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Customer</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Call Center</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Content Manager</div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Customer</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status cancelled"><button>Inactive</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Service Provider</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name">20 Km</div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Call Center</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Finance Manager</div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Customer</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Customer</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                            <!------------------------------------------------End of Right Table UserManagment---------------------------------------------------->

                     <!------------------------------------------------Pagination UserManagment---------------------------------------------------->


                        <div class="pagination">
                            <div class="show-page">
                                Show Entries
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                               
                            </div>
                            <div class="paginations">
                                <div class="next-left"><img src="image/next-left.png" alt=""></div>
                                <div class="current-page">1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div class="next-right"><img src="image/next-left.png" alt=""></div>
                            </div>
                        </div>
                        <div class="footer">
                            ©2018 Helperland. All rights reserved.
                        </div>
                    </div>
                     <!------------------------------------------------Pagination UserManagment---------------------------------------------------->

                    <!------------------------------------------------ Right Table Servicerequest---------------------------------------------------->

                    <div class="div-content" id="servicerequest">
                        <div class="title">
                            <p>Service Requests</p>
                        </div>
                        <div class="search-bar">
                            <form action="#">
                                <div class="row">
                                    <div class="col col-xs">
                                        <input type="number" class="form-control" placeholder="ServiceID">
                                    </div>
                                     <div class="col col-xs-12">
                                        <input type="text" class="form-control" placeholder="postalcode">
                                    </div>
                                     <div class="col-3">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Customer</option>
                                            <option value="">User1</option>
                                             <option value="">User2</option>
                                             <option value="">User3</option>
                                              </select></div>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Service Provider</option>
                                            <option value="">Type1</option>
                                             <option value="">Type2</option>
                                             <option value="">Type3</option>
                                          </select></div>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> Sp Payment  Status</option>
                                            <option value="New">Select 1</option>
                                            <option value="Pending">Select 2</option>
                                            
                                          </select> </div>

                                          <div class="col-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> Select Status</option>
                                            <option value="New">New</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Cancelled">Cancelled</option>
                                          </select> </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control" placeholder="From Date">
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control" placeholder="To Date">
                                    </div>
                                    <div class="col col-xs-12 col-buttons">
                                        <button type="Search" class="btn-search">Search</button>
                                        <button type="reset" class="btn-clear">Clear</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="servicerequests table-responsive">
                            <table class="table services">
                                <thead>
                                    <tr>
                                        <th scope="col">Service ID <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">Service Date <img src="image/both_arrow.png" alt="">
                                        </th>
                                        <th scope="col">Customer detailes <img src="image/both_arrow.png"
                                                alt=""></th>
                                        <th scope="col">Service Provider <img src="image/both_arrow.png"
                                                alt=""></th>
                                        <th scope="col">Status <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">

                                            </div>
                                        </td>
                                        <td class="btn-status new"><button>New</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button"  data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">

                                            </div>
                                        </td>
                                        <td class="btn-status new"><button>New</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status pending"><button>Pending</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status pending"><button>Pending</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status completed"><button>Completed</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status completed"><button>Completed</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status cancelled"><button>Cancelled</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status completed"><button>Completed</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status cancelled"><button>Cancelled</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">
                                                <div class="rating-user"><img src="image/image_table.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="name">Lyum Watson</div>
                                                    <div class="ratings">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="btn-status completed"><button>Completed</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

         </tbody>
                            </table>
                        </div>      

                                       <!------------------------------------------------End of Right Table Servicerequest---------------------------------------------------->
                   <!------------------------------------------------Servicerequest Pagination---------------------------------------------------->


                        <div class="pagination">
                            <div class="show-page">
                                Show Entries
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                               
                            </div>
                            <div class="paginations">
                                <div class="next-left"><img src="image/next-left.png" alt=""></div>
                                <div class="current-page">1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div class="next-right"><img src="next-left.png" alt=""></div>
                            </div>
                        </div>
                        <div class="shistory-footer">
                            ©2018 Helperland. All rights reserved.
                        </div>
                    </div>

                </div>
            </div>
        </section>           

    </div>
<
 <!------------------------------------------------ End of Servicerequest Pagination---------------------------------------------------->


<!--------------------------------------------------------- Model for Edit and Reschedule Service ------------------------------------------>
     <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="font-family:Roboto;">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Edit Service Request</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Date</label>
                                    <input type="date" class="form-control head">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Time">Time</label>
                                    <input type="time" class="form-control head">
                                </div>
                            </div>
                        </div>
                        <br><div class=" head">Service Address</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetname">Street name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="housenumber">House number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postalcode">Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <select name="" id="" class="form-control">
                                        <option value="rajkot">Rajkot</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br><div class="head">Invoice Address</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetname">Street name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="housenumber">House number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postalcode">Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <select name="" id="" class="form-control">
                                        <option value="rajkot">Rajkot</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br><div class="head">Why do you want to rechedule service requests?</div>
                        <div class="row">
                            <div class="col">
                                <textarea name="" id="" rows="3" class="form-control" placeholder="why do you want to rechedule service requests?"></textarea>
                            </div>
                        </div>

                        <br><div class="head">Call Center EMP notes</div>
                        <div class="row">
                            <div class="col">
                                <textarea name="" id="" rows="3" class="form-control" placeholder="Enter Notes?"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="form-control " style="background-color:#1fb6ff;">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!---------------------------------------------------------End of  Model for Edit and Reschedule Service ------------------------------------------>

  </body>
<script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/css/adashboard.js"></script>
</html>
 