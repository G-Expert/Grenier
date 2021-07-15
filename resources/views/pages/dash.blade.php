    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- Sidebar -->
        @include('pages.admin_nav')
        <!-- sidebar -->

        <!-- Page Content -->
        <div id="page-content">

            <!-- Page Header -->
            @include('pages.admin_header')
            <!-- Page Header -->

            <!-- Container fluid::Tableau de bord -->
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-4 mb-4 d-lg-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="mb-0 h2 font-weight-bold">Tableau de bord</h1>
                            </div>
                            <div class="d-flex">
                                
                                <a href="/" class="btn btn-warning">Commencer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="font-size-xs text-uppercase font-weight-semi-bold">Soldées</span>
                                    </div>
                                    <div>
                                        <span class="fe fe-shopping-bag font-size-lg text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="font-weight-bold mb-1">
                                    10,800 fcfa
                                </h2>
                                <span class="text-success font-weight-semi-bold">
                                    <i class="fe fe-trending-up mr-1"></i>100</span>
                                <span class="ml-1 font-weight-medium">commandes soldées</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="font-size-xs text-uppercase font-weight-semi-bold">Courses totale</span>
                                    </div>
                                    <div>
                                        <span class=" fe fe-book-open font-size-lg text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="font-weight-bold mb-1">
                                    2,456
                                </h2>
                                <span class="text-danger font-weight-semi-bold">120+</span>
                                <span class="ml-1 font-weight-medium">courses disponibles</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="font-size-xs text-uppercase font-weight-semi-bold">Clients</span>
                                    </div>
                                    <div>
                                        <span class=" fe fe-users font-size-lg text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="font-weight-bold mb-1">
                                    1,22,456
                                </h2>
                                <span class="text-success font-weight-semi-bold"><i class="fe fe-trending-up mr-1"></i>+1200</span>
                                <span class="ml-1 font-weight-medium">clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="font-size-xs text-uppercase font-weight-semi-bold">Transporteurs</span>
                                    </div>
                                    <div>
                                        <span class=" fe fe-user-check font-size-lg text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="font-weight-bold mb-1">
                                    22,786
                                </h2>
                                <span class="text-success font-weight-semi-bold"><i class="fe fe-trending-up mr-1"></i>+200</span>
                                <span class="ml-1 font-weight-medium">transporteurs</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
                                <h4 class="mb-0">Commandes récentes</h4>
                                <a href="#!" class="btn btn-outline-white btn-sm">Voir Plus</a>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">Rob Percival</h4>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">42</span>Courses</span>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">1,10,124</span>Students</span>
                                                <span class="font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">32,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown7"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-2.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">Jose Portilla</h4>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">12</span>Courses</span>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">21,567</span>Students</span>
                                                <span class="font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">22,000
                            </span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown8"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-away">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-3.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">Eleanor Pena</h4>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">32</span>Courses</span>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">11,604</span>Students</span>
                                                <span class="font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">12,230
                            </span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown9"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-info">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">March Delson</h4>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">23</span>Courses</span>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">6,304</span>Students</span>
                                                <span class="font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">56,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown10"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-busy">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">Sina Ray</h4>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">14</span>Courses</span>
                                                <span class="mr-2 font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">8,000</span>Students</span>
                                                <span class="font-size-xs">
                            <span class="text-dark  mr-1 font-weight-semi-bold">33,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown11"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
                                <h4 class="mb-0">Nouveau Transporteurs</h4>
                                <a href="#!" class="btn btn-outline-white btn-sm">Voir plus</a>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group flush -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0">
                                        <div class="row">
                                            <!-- Col -->
                                            <div class="col-auto">
                                                <a href="#!">
                                                    <img src="../../assets/images/course/course-laravel.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <!-- Col -->
                                            <div class="col pl-0">
                                                <a href="#!">
                                                    <h5 class="text-primary-hover">
                                                        Revolutionize how you build the web...
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <span class="font-size-xs">Brooklyn Simmons</span>
                                                </div>
                                            </div>
                                            <!-- Col auto -->
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown3"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#!"><img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="#!">
                                                    <h5 class="text-primary-hover">
                                                        Guide to Static Sites with Gatsby.js
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <span class="font-size-xs">Jenny Wilson</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown4"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#!">
                                                    <img src="../../assets/images/course/course-javascript.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="#!">
                                                    <h5 class="text-primary-hover">The Modern JavaScript Courses
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <span class="font-size-xs">Guy Hawkins</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown5"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#!">
                                                    <img src="../../assets/images/course/course-wordpress.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="#!">
                                                    <h5 class="text-primary-hover">
                                                        Online WordPress Courses Become an Expert Today‎
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <span class="font-size-xs">Robert Fox</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown6"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header card-header-height d-flex align-items-center">
                                <h4 class="mb-0">Clients récents
                                </h4>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush list-timeline-activity">
                                    <li class="list-group-item px-0 pt-0 border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">Dianna Smiley</h4>
                                                <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                                                <span class="font-size-xs">2m ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 pt-0  border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">
                                                    Irene Hargrove
                                                </h4>
                                                <p class="mb-1">Comment on “Bootstrap Tutorial” Says “Hi,I m irene...</p>
                                                <span class="font-size-xs">1 hour ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 pt-0  border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-busy">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-4.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">Trevor Bradle</h4>
                                                <p class="mb-1">Just share your article on Social Media..</p>
                                                <span class="font-size-xs">2 month ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 border-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-away">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n3">
                                                <h4 class="mb-0 h5">John Deo</h4>
                                                <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                                                <span class="font-size-xs">2m ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container fluid -->

        </div>
        <!-- Page Content -->
    </div>