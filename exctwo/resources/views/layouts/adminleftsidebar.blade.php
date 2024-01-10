<!--Start Left Navbar-->

<div class="wrappers">
    <nav class="navbar navbar-expand-md navbar-light">

        <button type="button" class="navbar-toggler ms-auto mb-2" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="nav" class="navbar-collapse collapse">
            <div class="container-fluid">
                <div class="row">

                    <!-- Start Left Sidebar -->
                    <div class="col-lg-2 col-md-3 fixed-top vh-100 overflow-auto sidebars">
                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item nav-categories ">Main</li>
                            <li class="nav-item nav-categories"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks"><i
                                        class="fas fa-tachometer-alt fa-lg me-3"></i>Dashboard</a></li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks currents"
                                    data-bs-target="#pagelayout" data-bs-toggle="collapse"><i
                                        class="fas fa-file-alt fa-lg me-3"></i>Page Layout<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="pagelayout" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Right Boxed</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Left Boxed</a></li>
                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks"
                                    data-bs-target="#sidebarlayout" data-bs-toggle="collapse"><i
                                        class="fas fa-file-alt fa-lg me-3"></i>Form<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="sidebarlayout" class="collapse ps-2">
                                    
                                    <li><a href="{{route('attendances.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Att Form</a></li>

                                </ul>

                            </li>

                            <li class="nav-item nav-categories">Widgets</li>

                            <li class="nav-item nav-categories">UI Features</li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#basicui"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Articles<i class="fas fa-angle-left mores"></i></a>

                                <ul id="basicui" class="collapse ps-2">
                                    <li><a href="{{route('posts.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Post</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Announcement</a></li>
                                

                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#advanceui"
                                    data-bs-toggle="collapse"><i class="fas fa-users fa-lg me-3"></i>student<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="advanceui" class="collapse ps-2">
                                    <li><a href="{{route('students.index')}}" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>All Student</a></li>
                                    

                                </ul>

                            </li>

                            <li class="nav-item nav-categories">Popus</li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#iconselement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Icons<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="iconselement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Material</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Flat Icons</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Font Awesome</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Simple Line Icons</a>
                                    </li>

                                </ul>

                            </li>

                            <li class="nav-item nav-categories">Editors</li>

                            <li class="nav-item nav-categories">Text Editors</li>

                            <li class="nav-item nav-categories">Code Editors</li>

                            <li class="nav-item nav-categories">Data Representation</li>

                            

                            <li class="nav-item"><a href="javascript:void(0);"
                                class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#fixedanalysis"
                                data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Fixed Analysis<i
                                    class="fas fa-angle-left mores"></i></a>

                                    <ul id="fixedanalysis" class="collapse ps-2">
                                        
                                        <li class="nav-item"><a href="{{route('statuses.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>status</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('cities.index')}}"
                                            class="nav-link text-white  sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>city</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('countries.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>country</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('genders.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>gender</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('categories.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>categories</a>
                                        </li>

                                        <li class="nav-item"><a href="{{route('types.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Type</a>
                                        </li>
            
                                        <li class="nav-item"><a href="{{route('tags.index')}}"
                                            class="nav-link text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Tag</a>
                                        </li>          
    
                                    </ul>
                            </li>

                            <li class="nav-item"><a href="{{route('roles.index')}}"
                                class="nav-link text-white p-3 mb-2 sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>role</a>
                            </li>   

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#chartelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Addon<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="chartelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Pie Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Map Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Line Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Chart Js</a></li>

                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#chartelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Charts<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="chartelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Pie Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Map Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Line Chart</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Chart Js</a></li>

                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#tableelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Tables<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="tableelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Basic Table</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Data Table</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Sortable table</a></li>
                                </ul>

                            </li>

                            <li class="nav-item"><a href="javascript:void(0);"
                                    class="nav-link text-white p-3 mb-2 sidebarlinks" data-bs-target="#mapelement"
                                    data-bs-toggle="collapse"><i class="fas fa-file-alt fa-lg me-3"></i>Maps<i
                                        class="fas fa-angle-left mores"></i></a>

                                <ul id="mapelement" class="collapse ps-2">
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Google Map</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i
                                                class="fas fa-long-arrow-alt-right me-4"></i>Vector Map</a></li>
                                </ul>

                            </li>

                        </ul>
                    </div>
                    <!-- End Left Sidebar -->

                    <!-- Start Top Sidebar -->
                    <div class="col-lg-10 col-md-9 fixed-top ms-auto topnavbars">
                        <div class="row">

                            <nav class="navbar navbar-expand navbar-light bg-white shadow">

                                <!-- search -->
                                <form class="me-auto" action="" method="">
                                    <div class="input-group">
                                        <input type="text" name="search" id="search"
                                            class="form-control border-0 shadow-none"
                                            placeholder="Search Something..." />
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <!-- search -->

                                <!-- notify & userlogout-->
                                <ul class="navbar-nav me-5 pe-5">
                                    <!-- notify -->
                                    <li class="nav-item dropdowns">
                                        <a href="javascript:void(0);" class="nav-line dropbtn"
                                            onclick="dropbtn(event)">
                                            <i class="fas fa-bell"></i>
                                            <span class="badge bg-danger">5+</span>
                                        </a>

                                        <div class="dropdown-contents mydropdowns">
                                            <h6>Alert-Center</h6>
                                            <a href="javascript:void(0);" class="d-flex">
                                                <div>
                                                    <i class="fas fa-file-alt"></i>
                                                </div>
                                                <div>
                                                    <p class="small text-muted">3 May 2023</p>
                                                    <i>A new members created.</i>
                                                </div>
                                            </a>

                                            <a href="javascript:void(0);" class="d-flex">
                                                <div>
                                                    <i class="fas fa-database text-warning"></i>
                                                </div>
                                                <div>
                                                    <p class="small text-muted">3 May 2023</p>
                                                    <i>Some of your data are missing.</i>
                                                </div>
                                            </a>

                                            <a href="javascript:void(0);" class="d-flex">
                                                <div>
                                                    <i class="fas fa-user text-info"></i>
                                                </div>
                                                <div>
                                                    <p class="small text-muted">3 May 2023</p>
                                                    <i>New users are invited you.</i>
                                                </div>
                                            </a>

                                            <a href="javascript:void(0);" class="small text-muted text-center">Show
                                                All Notification</a>

                                        </div>

                                    </li>
                                    <!-- notify -->

                                    <!-- message -->
                                    <li class="nav-item dropdowns mx-3">
                                        <a href="javascript:void(0);" class="nav-line dropbtn"
                                            onclick="dropbtn(event)">
                                            <i class="fas fa-envelope"></i>
                                        </a>

                                        <div class="dropdown-contents mydropdowns">
                                            <h6>message-Center</h6>
                                            <a href="javascript:void(0);" class="d-flex">
                                                <div class="me-3">
                                                    <img src="./assets/img/users/user1.jpg" class="rounded-circle"
                                                        width="30" alt="user1" />
                                                </div>
                                                <div>
                                                    <p class="small text-muted">Lorem Ipsum is simply dummy text of
                                                        the printing and typesetting industry.</p>
                                                    <i>Ms.July - 25m ago</i>
                                                </div>
                                            </a>

                                            <a href="javascript:void(0);" class="d-flex">
                                                <div class="me-3">
                                                    <img src="./assets/img/users/user2.jpg" class="rounded-circle"
                                                        width="30" alt="user2" />
                                                </div>
                                                <div>
                                                    <p class="small text-muted">Lorem Ipsum is simply dummy text of
                                                        the printing and typesetting industry.</p>
                                                    <i>Mr.Anton - 40m ago</i>
                                                </div>
                                            </a>

                                            <a href="javascript:void(0);" class="d-flex">
                                                <div class="me-3">
                                                    <img src="./assets/img/users/user3.jpg" class="rounded-circle"
                                                        width="30" alt="user3" />
                                                </div>
                                                <div>
                                                    <p class="small text-muted">Lorem Ipsum is simply dummy text of
                                                        the printing and typesetting industry.</p>
                                                    <i>Ms.PaPa - 55m ago</i>
                                                </div>
                                            </a>

                                            <a href="javascript:void(0);" class="small text-muted text-center">Read
                                                More Message</a>

                                        </div>


                                    </li>
                                    <!-- message -->

                                    <!-- userlogout -->
                                    <li class="navitem dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <span class="text-muted small me-2">{{$userdata['name']}}</span>
                                            <img src="./assets/img/users/user1.jpg" class="rounded-circle"
                                                width="25" />
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="fas fa-user fa-sm text-muted me-2"></i> Profile</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="fas fa-cogs fa-sm text-muted me-2"></i> Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="fas fa-list fa-sm text-muted me-2"></i> Activity Log</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="fas fa-sign-out-alt fa-sm text-muted me-2"></i>
                                                Logout</a>

                                        </div>
                                    </li>
                                    <!-- userlogout -->
                                </ul>
                                <!-- notify & userlogout-->

                                <button type="button" class="close-btns" data-bs-toggle="collapse" data-bs-target="#nav">
                                    <span class="fas fa-times"></span>
                                </button>

                            </nav>

                        </div>
                    </div>
                    <!-- End Top Sidebar -->
                </div>

            </div>
        </div>

    </nav>
</div>

<!--End Left Navbar-->