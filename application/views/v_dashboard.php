<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/ui/drilldown.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/ui/fab.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-bottom">

    <!-- Page header -->
    <div class="page-header page-header-inverse">

        <!-- Main navbar -->
        <div class="navbar navbar-inverse navbar-transparent">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

                <ul class="nav navbar-nav pull-right visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <p class="navbar-text"><span class="label bg-success-400">Premium</span></p>

                <ul class="nav navbar-nav">
                    <li><a href="index.html#">Upgrade</a></li>
                </ul>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-bell2"></i>
                                <span class="visible-xs-inline-block position-right">Activity</span>
                                <span class="status-mark border-pink-300"></span>
                            </a>

                            <div class="dropdown-menu dropdown-content">
                                <div class="dropdown-content-heading">
                                    Activity
                                    <ul class="icons-list">
                                        <li><a href="index.html#"><i class="icon-menu7"></i></a></li>
                                    </ul>
                                </div>

                                <ul class="media-list dropdown-content-body width-350">
                                    <li class="media">
                                        <div class="media-left">
                                            <a href="index.html#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="index.html#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                            <div class="media-annotation">4 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="index.html#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>
                                        </div>

                                        <div class="media-body">
                                            Special offers have been sent to subscribed users by <a href="index.html#">Donna Gordon</a>
                                            <div class="media-annotation">36 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="index.html#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i class="icon-plus3"></i></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="index.html#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch in <span class="text-semibold">Limitless</span> repository
                                            <div class="media-annotation">2 hours ago</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="index.html#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i class="icon-truck"></i></a>
                                        </div>

                                        <div class="media-body">
                                            Shipping cost to the Netherlands has been reduced, database updated
                                            <div class="media-annotation">Feb 8, 11:30</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="index.html#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i class="icon-bubble8"></i></a>
                                        </div>

                                        <div class="media-body">
                                            New review received on <a href="index.html#">Server side integration</a> services
                                            <div class="media-annotation">Feb 2, 10:20</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="index.html#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
                                        </div>

                                        <div class="media-body">
                                            <strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                            <div class="media-annotation">Feb 1, 05:46</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-bubble8"></i>
                                <span class="visible-xs-inline-block position-right">Messages</span>
                            </a>

                            <div class="dropdown-menu dropdown-content width-350">
                                <div class="dropdown-content-heading">
                                    Messages
                                    <ul class="icons-list">
                                        <li><a href="index.html#"><i class="icon-menu7"></i></a></li>
                                    </ul>
                                </div>

                                <ul class="media-list dropdown-content-body">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                            <span class="badge bg-danger-400 media-badge">5</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="index.html#" class="media-heading">
                                                <span class="text-semibold">James Alexander</span>
                                                <span class="media-annotation pull-right">04:58</span>
                                            </a>

                                            <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                            <span class="badge bg-danger-400 media-badge">4</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="index.html#" class="media-heading">
                                                <span class="text-semibold">Margo Baker</span>
                                                <span class="media-annotation pull-right">12:16</span>
                                            </a>

                                            <span class="text-muted">That was something he was unable to do because...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                        <div class="media-body">
                                            <a href="index.html#" class="media-heading">
                                                <span class="text-semibold">Jeremy Victorino</span>
                                                <span class="media-annotation pull-right">22:48</span>
                                            </a>

                                            <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                        <div class="media-body">
                                            <a href="index.html#" class="media-heading">
                                                <span class="text-semibold">Beatrix Diaz</span>
                                                <span class="media-annotation pull-right">Tue</span>
                                            </a>

                                            <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                        <div class="media-body">
                                            <a href="index.html#" class="media-heading">
                                                <span class="text-semibold">Richard Vango</span>
                                                <span class="media-annotation pull-right">Mon</span>
                                            </a>

                                            <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/placeholder.jpg" alt="">
                                <span>Victoria</span>
                                <i class="caret"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="index.html#"><i class="icon-user-plus"></i> My profile</a></li>
                                <li><a href="index.html#"><i class="icon-coins"></i> My balance</a></li>
                                <li><a href="index.html#"><span class="badge bg-blue pull-right">26</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                                <li class="divider"></li>
                                <li><a href="index.html#"><i class="icon-cog5"></i> Account settings</a></li>
                                <li><a href="<?php echo base_url('Administrator/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /main navbar -->


        <!-- Page header content -->
        <div class="page-header-content">
            <div class="page-title">
                <h4>Dashboard <small>Good morning, Eugene</small></h4>
            </div>

            <div class="heading-elements">
                <ul class="breadcrumb heading-text">
                    <li><a href="<?php echo base_url('Dashboard') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
            </div>
        </div>
        <!-- /page header content -->


        <!-- Second navbar -->
        <div class="navbar navbar-inverse navbar-transparent" id="navbar-second">
            <ul class="nav navbar-nav visible-xs-block">
                <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>

            <div class="navbar-collapse collapse" id="navbar-second-toggle">
                <ul class="nav navbar-nav navbar-nav-material">
                    <li class="active"><a href="<?php echo base_url('Dashboard') ?>">Dashboard</a></li>

                    <li class="dropdown mega-menu mega-menu-wide">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Data Menu<span class="caret"></span></a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-body">
                                <div class="row">
                                    <ul class="menu-list">
                                        <li>
                                            <a href="<?php echo base_url('Berita') ?>">Data</a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            </div>
            </li>
        </div>
    </div>
    <!-- /second navbar -->


    <!-- Floating menu -->

    <!-- /floating menu -->

    </div>
    <!-- /page header -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Main charts -->
                <div class="row">
                    <div class="col-lg-6">

                        <!-- Traffic sources -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Traffic sources</h6>
                                <div class="heading-elements">
                                    <form class="heading-form" action="index.html#">
                                        <div class="form-group">
                                            <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                                <input type="checkbox" class="switch" checked="checked">
                                                Live update:
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="index.html#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">New visitors</div>
                                                <div class="text-muted">2,349 avg</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="content-group" id="new-visitors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="index.html#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">New sessions</div>
                                                <div class="text-muted">08:20 avg</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="content-group" id="new-sessions"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="index.html#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">Total online</div>
                                                <div class="text-muted"><span class="status-mark border-success position-left"></span> 5,378 avg</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="content-group" id="total-online"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="position-relative" id="traffic-sources"></div>
                        </div>
                        <!-- /traffic sources -->

                    </div>

                    <div class="col-lg-6">

                        <!-- Sales stats -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Sales statistics</h6>
                                <div class="heading-elements">
                                    <form class="heading-form" action="index.html#">
                                        <div class="form-group">
                                            <select class="change-date select-sm" id="select_date">
                                                <optgroup label="<i class='icon-watch pull-right'></i> Time period">
                                                    <option value="val1">June, 29 - July, 5</option>
                                                    <option value="val2">June, 22 - June 28</option>
                                                    <option value="val3" selected="selected">June, 15 - June, 21</option>
                                                    <option value="val4">June, 8 - June, 14</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="content-group">
                                            <h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
                                            <span class="text-muted text-size-small">orders weekly</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="content-group">
                                            <h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
                                            <span class="text-muted text-size-small">orders monthly</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="content-group">
                                            <h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> $23,464</h5>
                                            <span class="text-muted text-size-small">average revenue</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group-sm" id="app_sales"></div>
                            <div id="monthly-sales-stats"></div>
                        </div>
                        <!-- /sales stats -->

                    </div>
                </div>
                <!-- /main charts -->


                <!-- Dashboard content -->

                <!-- /dashboard content -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <!-- Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom footer">
        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="footer">
            <div class="navbar-text">
                &copy; 2015. <a href="index.html#" class="navbar-link">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" class="navbar-link" target="_blank">Eugene Kopyov</a>
            </div>

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.html#">About</a></li>
                    <li><a href="index.html#">Terms</a></li>
                    <li><a href="index.html#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /footer -->

</body>

</html>