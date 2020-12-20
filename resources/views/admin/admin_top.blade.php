@extends('admin.layouts.template')

@section('content')
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
        <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex">
            <!-- Search form -->
            <form class="navbar-search form-inline" id="navbar-search-main">
                <div class="input-group input-group-merge search-bar">
                    <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                    <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                </div>
            </form>
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link text-dark mr-lg-3 icon-notifications" data-unread-notifications="true" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon icon-sm">
                    <span class="fas fa-bell bell-shake"></span>
                    <span class="icon-badge rounded-circle unread-notifications"></span>
                </span>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                <div class="list-group list-group-flush">
                    <a href="#" class="text-center text-primary font-weight-bold border-bottom border-light py-3">Notifications</a>
                    <a href="../../pages/calendar.html" class="list-group-item list-group-item-action border-bottom border-light">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="{{'images/team/profile-picture-1.jpg'}}" class="user-avatar lg-avatar rounded-circle">
                        </div>
                        <div class="col pl-0 ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                </div>
                                <div class="text-right">
                                <small class="text-danger">a few moments ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                        </div>
                    </div>
                    </a>
                    <a href="../../pages/tasks.html" class="list-group-item list-group-item-action border-bottom border-light">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="{{'images/team/profile-picture-2.jpg'}}" class="user-avatar lg-avatar rounded-circle">
                        </div>
                        <div class="col pl-0 ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                </div>
                                <div class="text-right">
                                <small class="text-danger">2 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Youve been assigned a task for "Awesome new project".</p>
                        </div>
                    </div>
                    </a>
                    <a href="../../pages/tasks.html" class="list-group-item list-group-item-action border-bottom border-light">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="{{'images/team/profile-picture-3.jpg'}}" class="user-avatar lg-avatar rounded-circle">
                        </div>
                        <div class="col pl-0 ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                </div>
                                <div class="text-right">
                                <small>5 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Tagged you in a document called "First quarter financial plans",</p>
                        </div>
                    </div>
                    </a>
                    <a href="../../pages/single-message.html" class="list-group-item list-group-item-action border-bottom border-light">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="{{'images/team/profile-picture-4.jpg'}}" class="user-avatar lg-avatar rounded-circle">
                        </div>
                        <div class="col pl-0 ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                </div>
                                <div class="text-right">
                                <small>1 d ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                        </div>
                    </div>
                    </a>
                    <a href="../../pages/single-message.html" class="list-group-item list-group-item-action border-bottom border-light">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="{{'images/team/profile-picture-5.jpg'}}" class="user-avatar lg-avatar rounded-circle">
                        </div>
                        <div class="col pl-0 ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                </div>
                                <div class="text-right">
                                <small>2 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                        </div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media d-flex align-items-center">
                    <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="{{'images/team/profile-picture-3.jpg'}}">
                    <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                    <span class="mb-0 font-small font-weight-bold">Bonnie Green</span>
                    </div>
                </div>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="btn-toolbar dropdown">
            <button class="btn btn-primary btn-sm mr-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-plus mr-2"></span>New Task
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-left mt-2">
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-tasks"></span>New Task</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cloud-upload-alt"></span>Upload Files</a>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Preview Security</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-rocket text-danger"></span>Upgrade to Pro</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-primary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-primary">Export</button>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-12 mb-4">
            <div class="card bg-yellow-alt shadow-sm">
                <div class="card-header d-flex flex-row align-items-center flex-0">
                    <div class="d-block">
                        <div class="h5 font-weight-normal mb-2">Sales Value</div>
                        <h2 class="h3">$10,567</h2>
                        <div class="small mt-2"> 
                            <span class="font-weight-bold mr-2">Yesterday</span>
                            <span class="fas fa-angle-up text-success"></span>
                            <span class="text-success font-weight-bold">10.57%</span>
                        </div>
                    </div>
                    <div class="d-flex ml-auto">
                        <a href="#" class="btn btn-secondary text-dark btn-sm mr-2">Month</a>
                        <a href="#" class="btn btn-primary btn-sm mr-3">Week</a>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="ct-chart-sales-value ct-double-octave ct-series-g"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fas fa-chart-line"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Customers</h2>
                                <h3 class="mb-1">345,678</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Customers</h2>
                                <h3 class="mb-1">345k</h3>
                            </div>
                            <small>Feb 1 - Apr 1,  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> WorldWide</small> 
                            <div class="small mt-2">
                                <span class="fas fa-angle-up text-success"></span>
                                <span class="text-success font-weight-bold">18.2%</span> Since last month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-secondary rounded mr-4"><span class="fas fa-cash-register"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Revenue</h2>
                                <h3 class="mb-1">$43,594</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Revenue</h2>
                                <h3 class="mb-1">$43,594</h3>
                            </div>
                            <small>Feb 1 - Apr 1,  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> Worldwide</small>
                            <div class="small mt-2">
                                <span class="fas fa-angle-up text-success"></span>
                                <span class="text-success font-weight-bold">28.2%</span> Since last month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="ct-chart-traffic-share ct-golden-section ct-series-a"></div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <h2 class="h5 mb-3">Traffic Share</h2>
                            <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-secondary mr-1"><span class="fas fa-desktop"></span></span> Desktop <a href="#" class="h6">60%</a></h6>
                            <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-primary mr-1"><span class="fas fa-mobile-alt"></span></span> Mobile Web <a href="#" class="h6">30%</a></h6>
                            <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-tertiary mr-1"><span class="fas fa-tablet-alt"></span></span> Tablet Web <a href="#" class="h6">10%</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-8 mb-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                <h2 class="h5">Page visits</h2>
                                </div>
                                <div class="col text-right">
                                    <a href="#" class="btn btn-sm btn-secondary">See all</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Page name</th>
                                    <th scope="col">Page Views</th>
                                    <th scope="col">Page Value</th>
                                    <th scope="col">Bounce rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        /demo/admin/index.html
                                    </th>
                                    <td>
                                        3,225
                                    </td>
                                    <td>
                                        $20
                                    </td>
                                    <td>
                                        <span class="fas fa-arrow-up text-danger mr-3"></span> 42,55%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /demo/admin/forms.html
                                    </th>
                                    <td>
                                        2,987
                                    </td>
                                    <td>
                                        0
                                    </td>
                                    <td>
                                        <span class="fas fa-arrow-down text-success mr-3"></span> 43,52%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /demo/admin/util.html
                                    </th>
                                    <td>
                                        2,844
                                    </td>
                                    <td>
                                    294
                                    </td>
                                    <td>
                                        <span class="fas fa-arrow-down text-success mr-3"></span> 32,35%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /demo/admin/validation.html
                                    </th>
                                    <td>
                                        2,050
                                    </td>
                                    <td>
                                        $147
                                    </td>
                                    <td>
                                        <span class="fas fa-arrow-up text-danger mr-3"></span> 50,87%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /demo/admin/modals.html
                                    </th>
                                    <td>
                                        1,483
                                    </td>
                                    <td>
                                        $19
                                    </td>
                                    <td>
                                        <span class="fas fa-arrow-down text-success mr-3"></span> 32,24%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-header border-bottom border-light d-flex justify-content-between">
                            <h2 class="h5 mb-0">Team members</h2>
                            <a href="#" class="btn btn-sm btn-secondary">See all</a>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush list my--3">
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="user-avatar">
                                            <img class="rounded-circle" alt="Image placeholder" src="{{'images/team/profile-picture-1.jpg'}}">
                                        </a>
                                    </div>
                                    <div class="col-auto ml--2">
                                        <h4 class="h6 mb-0">
                                            <a href="#">Christopher Wood</a>
                                        </h4>
                                        <span class="text-success">●</span>
                                        <small>Online</small>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check mr-1"></i> Invite</a>
                                    </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <a href="#" class="user-avatar">
                                                <img class="rounded-circle" alt="Image placeholder" src="{{'images/team/profile-picture-2.jpg'}}">
                                            </a>
                                        </div>
                                        <div class="col-auto ml--2">
                                            <h4 class="h6 mb-0">
                                                <a href="#">Jose Leos</a>
                                            </h4>
                                            <span class="text-warning">●</span>
                                            <small>In a meeting</small>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment mr-1"></i> Message</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <a href="#" class="user-avatar">
                                                <img class="rounded-circle" alt="Image placeholder" src="{{'images/team/profile-picture-3.jpg'}}">
                                            </a>
                                        </div>
                                        <div class="col-auto ml--2">
                                            <h4 class="h6 mb-0">
                                                <a href="#">Bonnie Green</a>
                                            </h4>
                                            <span class="text-danger">●</span>
                                            <small>Offline</small>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check mr-1"></i> Invite</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <a href="#" class="user-avatar">
                                                <img class="rounded-circle" alt="Image placeholder" src="{{'images/team/profile-picture-4.jpg'}}">
                                            </a>
                                        </div>
                                        <div class="col-auto ml--2">
                                        <h4 class="h6 mb-0">
                                                <a href="#">Neil Sims</a>
                                        </h4>
                                        <span class="text-success">●</span>
                                        <small>Online</small>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment mr-1"></i> Message</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        </div>
                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-header border-bottom border-light">
                            <h2 class="h5 mb-0">Progress track</h2>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center mb-4">
                                <div class="col-auto">
                                    <span class="icon icon-md text-purple"><span class="fab fa-bootstrap"></span></span>
                                </div>
                                <div class="col">
                                    <div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="h6 mb-0">Rocket - SaaS Template</div>
                                            <div class="small font-weight-bold text-dark"><span>34 %</span></div>
                                        </div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-auto">
                                    <span class="icon icon-md text-danger"><span class="fab fa-angular"></span></span>
                                </div>
                                <div class="col">
                                    <div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="h6 mb-0">Pixel - Design System</div>
                                            <div class="small font-weight-bold text-dark"><span>60 %</span></div>
                                        </div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-auto">
                                    <span class="icon icon-md text-success"><span class="fab fa-vuejs"></span></span>
                                </div>
                                <div class="col">
                                    <div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="h6 mb-0">Spaces - Listings Template</div>
                                            <div class="small font-weight-bold text-dark"><span>45 %</span></div>
                                        </div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-tertiary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-auto">
                                    <span class="icon icon-md text-info"><span class="fab fa-react"></span></span>
                                </div>
                                <div class="col">
                                    <div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="h6 mb-0">Stellar - Dashboard</div>
                                            <div class="small font-weight-bold text-dark"><span>35 %</span></div>
                                        </div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="icon icon-md text-purple"><span class="fab fa-bootstrap"></span></span>
                                </div>
                                <div class="col">
                                    <div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="h6 mb-0">Volt - Dashboard</div>
                                            <div class="small font-weight-bold text-dark"><span>34 %</span></div>
                                        </div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mb-4">
            <div class="col-12 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                        <div class="d-block">
                            <div class="h6 font-weight-normal text-gray mb-2">Total orders</div>
                            <h2 class="h3">452</h2>
                            <div class="small mt-2">
                                <span class="fas fa-angle-up text-success"></span>
                                <span class="text-success font-weight-bold">18.2%</span>
                            </div>
                        </div>
                        <div class="d-block ml-auto">
                            <div class="d-flex align-items-center text-right mb-2">
                                <span class="shape-xs rounded-circle bg-quaternary mr-2"></span>
                                <span class="font-weight-normal small">July</span>
                            </div>
                            <div class="d-flex align-items-center text-right">
                                <span class="shape-xs rounded-circle bg-secondary mr-2"></span>
                                <span class="font-weight-normal small">August</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light pb-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span class="fas fa-globe-europe"></span></span>Global Rank</h6>
                            </div>
                            <div>
                                <a href="#" class="text-primary font-weight-bold">#755<span class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light py-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span class="fas fa-flag-usa"></span></span>Country Rank</h6>
                                <div class="small card-stats">United States<span class="icon icon-xs text-success ml-2"><span class="fas fa-angle-up"></span></span></div>
                            </div>
                            <div>
                                <a href="#" class="text-primary font-weight-bold">#32<span class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span class="fas fa-folder-open"></span></span>Category Rank</h6>
                                <a href="#" class="small card-stats">Travel > Accomodation</a>
                            </div>
                            <div>
                                <a href="#" class="text-primary font-weight-bold">#16<span class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <h2 class="h5">Acquisition</h2>
                        <p>Tells you where your visitors originated from, such as search engines, social networks or website referrals.</p>
                        <div class="d-block">
                            <div class="d-flex align-items-center pt-3 mr-5">
                                <div class="icon icon-shape icon-sm icon-shape-danger rounded mr-3"><span class="fas fa-chart-bar"></span></div>
                                <div class="d-block">
                                    <label class="mb-0">Bounce Rate</label>
                                    <h4 class="mb-0">33.50%</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <div class="icon icon-shape icon-sm icon-shape-quaternary rounded mr-3"><span class="fas fa-chart-area"></span></div>
                                <div class="d-block">
                                    <label class="mb-0">Sessions</label>
                                    <h4 class="mb-0">9,567</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection