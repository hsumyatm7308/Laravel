@extends('layouts.adminindex')





<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-9 ms-auto">
                <!--Start Shortcut Area-->
                <div class="row pt-md-5 mt-md-3">

                    <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card shadow py-2 border-left-primarys">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="text-xs fw-bold text-primary text-uppercase">Sales (Monthly)</h5>
                                        <p class="h5 text-muted mb-0">$ 50,000</p>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card shadow py-2 border-left-successes">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="text-xs fw-bold text-primary text-uppercase">Rental (Monthly)</h5>
                                        <p class="h5 text-muted mb-0">$ 50,000</p>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card shadow py-2 border-left-infos">
                            <div class="card-body">
                                <div class='row align-items-center'>
                                    <div class='col'>
                                        <h5 class='text-xs fw-bold text-primary text-uppercase mb-1'>Debt Collect</h5>
                                        <div class='row'>
                                            <div class='col-auto'>
                                                <p class='h5 text-muted mb-0'>60%</p>
                                            </div>
                                            <div class='col'>
                                                <div class='progress progress-sm'>
                                                    <div class='progress-bar bg-info' style='width:60%'
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax='100'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col-auto'>
                                        <i class='fas fa-clipboard-list fa-2x text-secondary'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-2">
                        <div class="card shadow py-2 border-left-warnings">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="text-xs fw-bold text-primary text-uppercase">Request Message</h5>
                                        <p class="h5 text-muted mb-0">25</p>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--End Shortcut Area-->

               
                    <!-- Start Expense Area -->
                    <div class="row">

                        <div class="col-md-7 mb-3">
                            <div class="card shadow">
                                <div class="card-header py-2">
                                    <h6 class="text-primary">Expenses</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small">Other Expenses <span>20%</span></h4>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-danger" style="width:20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small">Sale Tracking <span>40%</span></h4>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-warning" style="width:40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small">Rental Fee <span>60%</span></h4>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-primary" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small">Salary <span>80%</span></h4>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-info" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small">Furniture <span>20%</span></h4>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-success" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div class="card">
                                <div class="card-header py-2">
                                    <h6 class="text-primary">Revenue Sources</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <canvas id="mypiechart">d</canvas>
                                    </div>
                                    <div class="small text-center mt-2">
                                        <span><i class="fas fa-circle text-warning"></i>Return Item</span>
                                        <span class="mx-2"><i class="fas fa-circle text-primary"></i>Direct Sales</span>
                                        <span><i class="fas fa-circle text-danger"></i>Online Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Expense Area -->

                    <!-- Start Earning Area -->
                    <div class="row">

                        <div class="col-lg-8 mb-3">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center py-2">
                                    <h6>Earnings Overview</h6>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v fa-sm"></i>
                                        </a>
                                        <div class="dropdown-menu shadow">
                                            <div class="dropdown-header" class="dropdown-item">Quick Action</div>
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">View Report</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="curve_chart" style="width:100%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Regional Team</h5>

                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <img src="../assets/img/users/user1.jpg" class="rounded-circle" width="40" height="40" alt="user1" />
                                        <div class="ms-3">
                                            <h6 class="mb-1 ms-1">Ms.July</h6>
                                            <span class="text-muted mb-0"><i class="fas fa-map-marker-alt fa-sm">Mandalay City , Myanmar</i></span>
                                        </div>
                                        <div class="badge bg-success p-1 ms-auto">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <img src="../assets/img/users/user2.jpg" class="rounded-circle" width="40" height="40" alt="user2" />
                                        <div class="ms-3">
                                            <h6 class="mb-1 ms-1">Mr.Anton</h6>
                                            <span class="text-muted mb-0"><i class="fas fa-map-marker-alt fa-sm">Yangon City , Myanmar</i></span>
                                        </div>
                                        <div class="badge bg-success p-1 ms-auto">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <img src="../assets/img/users/user3.jpg" class="rounded-circle" width="40" height="40" alt="user3" />
                                        <div class="ms-3">
                                            <h6 class="mb-1 ms-1">Ms.Yoon</h6>
                                            <span class="text-muted mb-0"><i class="fas fa-map-marker-alt fa-sm">Bago City , Myanmar</i></span>
                                        </div>
                                        <div class="badge bg-success p-1 ms-auto">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Earning Area -->

                    <!-- Start Result Area -->
                    <div class="row">

                        <div class="col-12 mb-3">
                             <div class="card">
                                <div class="row">

                                    <div class="col-md-3 col-sm-6">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-users fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="text-dark mb-0">Users</p>
                                                    <h5 class="fw-bold text-dark mb-0">56,320</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-check-circle fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="text-dark mb-0">Feedbacks</p>
                                                    <h5 class="fw-bold text-dark mb-0">3200</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-trophy fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="text-dark mb-0">Employees</p>
                                                    <h5 class="fw-bold text-dark mb-0">16,00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-star fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="text-dark mb-0">Sales</p>
                                                    <h5 class="fw-bold text-dark mb-0">12,860</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                             </div>
                        </div>

                    </div>
                     <!-- End Result Area -->

                     <!-- Start Project Status Area -->
                     <div class="row">
                        
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h5 class="card-title">Sale Analysis Trend</h5>
                                    </div>

                                    <div id="salescontainer">
                                        
                                    </div>
    
                                    <!-- <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Order Value</small>
                                            <small>120.8%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-secondary" style="width:80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Total Products</small>
                                            <small>325.2%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width:50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Quantity</small>
                                            <small>25.60%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width:70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">

                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h5>Project Status</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="../assets/img/clients/client1.png" class="img-sm me-3" width="100" alt="client1" />
                                                            <div>
                                                                <div>Company</div>
                                                                <div class="fw-bold mt-1">Sony Electronic</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Sales
                                                        <div class="fw-bold mt-1">$3250</div>
                                                    </td>
                                                    <td>
                                                        Status
                                                        <div class="fw-bold text-success mt-1">88%</div>
                                                    </td>
                                                    <td>
                                                        Deadline
                                                        <div class="fw-bold mt-1">10 June 2023</div>
                                                    </td>
                                                    <td>
                                                       <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i>Edit action</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="../assets/img/clients/client2.png" class="img-sm me-3" width="100" alt="client2" />
                                                            <div>
                                                                <div>Company</div>
                                                                <div class="fw-bold mt-1">Mi Electronic</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Sales
                                                        <div class="fw-bold mt-1">$5250</div>
                                                    </td>
                                                    <td>
                                                        Status
                                                        <div class="fw-bold text-success mt-1">78%</div>
                                                    </td>
                                                    <td>
                                                        Deadline
                                                        <div class="fw-bold mt-1">12 June 2023</div>
                                                    </td>
                                                    <td>
                                                       <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i>Edit action</button>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="../assets/img/clients/client3.png" class="img-sm me-3" width="100" alt="client3" />
                                                            <div>
                                                                <div>Company</div>
                                                                <div class="fw-bold mt-1">Vivo Electronic</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Sales
                                                        <div class="fw-bold mt-1">$1250</div>
                                                    </td>
                                                    <td>
                                                        Status
                                                        <div class="fw-bold text-success mt-1">38%</div>
                                                    </td>
                                                    <td>
                                                        Deadline
                                                        <div class="fw-bold mt-1">12 June 2023</div>
                                                    </td>
                                                    <td>
                                                       <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i>Edit action</button>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="../assets/img/clients/client4.png" class="img-sm me-3" width="100" alt="client4" />
                                                            <div>
                                                                <div>Company</div>
                                                                <div class="fw-bold mt-1">Oppo Electronic</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Sales
                                                        <div class="fw-bold mt-1">$5250</div>
                                                    </td>
                                                    <td>
                                                        Status
                                                        <div class="fw-bold text-success mt-1">78%</div>
                                                    </td>
                                                    <td>
                                                        Deadline
                                                        <div class="fw-bold mt-1">15 June 2023</div>
                                                    </td>
                                                    <td>
                                                       <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i>Edit action</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                     </div>
                     <!-- End Project Status Area -->

                     <!-- Start To Do List Area  -->
                     <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title">To Do List</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggler" data-bs-toggle="dropdown" data-bs-target="mydropdown"><i class="fas fa-ellipsis-v  fa-sm"></i></a>
                                            <div class="dropdown-menu shadow" id="mydropdown">
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Another Action</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Something else here</a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Add list here..."/>
                                        <button type="submit" class="btn btn-primary btn-sm form-group-list">Add to lis</button>
                                    </div>
            
                                    <div>
                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        <ul>
                                            <li>
                                                <label for="">
                                                    <input type="checkbox" class="checkbox"/><span class="ms-2">when an unkwon priter took a galley of type</span>
                                                </label>
                                                <i class="fas fa-transh-alt text-muted"></i>
                                            </li>
            
                                            <li>
                                                <label for="">
                                                    <input type="checkbox" class="checkbox"/><span class="ms-2">when an unkwon priter took a galley of type</span>
                                                </label>
                                                <i class="fas fa-transh-alt text-muted"></i>
                                            </li>
            
                                            <li>
                                                <label for="">
                                                    <input type="checkbox" class="checkbox"/><span class="ms-2">when an unkwon priter took a galley of type</span>
                                                </label>
                                                <i class="fas fa-transh-alt text-muted"></i>
                                            </li>
            
                                            <li>
                                                <label for="">
                                                    <input type="checkbox" class="checkbox"/><span class="ms-2">when an unkwon priter took a galley of type</span>
                                                </label>
                                                <i class="fas fa-transh-alt text-muted"></i>
                                            </li>
            
                                            <li>
                                                <label for="">
                                                    <input type="checkbox" class="checkbox"/><span class="ms-2">when an unkwon priter took a galley of type</span>
                                                </label>
                                                <i class="fas fa-transh-alt text-muted"></i>
                                            </li>
            
                                            <li>
                                                <label for="">
                                                    <input type="checkbox" class="checkbox"/><span class="ms-2">when an unkwon priter took a galley of type</span>
                                                </label>
                                                <i class="fas fa-transh-alt text-muted"></i>
                                            </li>
            
                                            <li>
                                                <label for="">
                                                    <input type="checkbox" class="checkbox"/><span class="ms-2">when an unkwon priter took a galley of type</span>
                                                </label>
                                                <i class="fas fa-transh-alt text-muted"></i>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0 text-primary">Illustrations</h5>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/img/etc/studentgroup.png" class="" style="width: 150px;" alt="studentgroup">
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <a href="javascript:void(0);">Browse Illustration no more</a>
                                </div>
                            </div>
                         </div>
                      
                     </div>

                     
                     <!-- End To Do List Area  -->
            </div>
        </div>
    </div>
</section>