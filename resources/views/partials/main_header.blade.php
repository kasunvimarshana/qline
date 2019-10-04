<!-- Main Header -->
<!-- nav-bar -->
<!-- header -->
    
<!-- nav -->
<nav class="navbar navbar-expand-sm navbar-light bg-danger sticky-top fixed-top d-print s-navbar" role="navigation">
    <!-- container-fluid -->
    <!-- div class="container container-fluid" -->
        <!-- div class="navbar-header" -->
            <!-- Brand/logo -->
            <a class="navbar-brand text-center font-weight-bold text-white" href="#">Brandix</a>
            <!-- a class="nav-link active disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a -->
            <!-- /.Brand/logo -->
            <!-- button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false" aria-controls="collapsibleNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </span>
            </button -->
            <!-- button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- /div -->

        <!-- navbar-collapse -->
        <div class="collapse navbar-collapse justify-content-left" id="collapsibleNavbar">
            <!-- nav lists -->
            <!-- ul class="list-unstyled nav navbar-nav mr-auto navbar-left">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>  
            </ul -->
            <!-- /.nav lists -->
            
            <!-- nav lists -->
            <ul class="list-unstyled nav navbar-nav mr-auto navbar-left">
                <li class="nav-item">
                    <div class="btn-group">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="id_accordion_nav_container id_nav_container_1" role="button" type="button">
                            <i class="fa fa-home fa-fw"></i>
                        </button>
                    </div>
                </li>  
            </ul>
            <!-- /.nav lists -->
            
            <!-- nav lists -->
            <ul class="list-unstyled nav navbar-nav ml-auto navbar-right">
                <!-- li class="nav-item">
                    <span class="navbar-text text-center text-uppercase font-weight-bold text-white"> <span id="span_time">0</span> &nbsp;&nbsp;&nbsp;</span>
                </li -->
                <!-- li class="nav-item">
                    <span class="navbar-text text-center text-uppercase font-weight-bold text-white"> <span id="span_date">0</span> </span>
                </li -->
                <!-- li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action1</a>
                        <a class="dropdown-item" href="#">Action2</a>
                        <a class="dropdown-item" href="#">Action3</a>
                        <a class="dropdown-item active disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </li -->
            </ul>
            <!-- /.nav lists -->
            
            <!-- nav lists -->
            <ul class="list-unstyled nav navbar-nav ml-auto navbar-right">
                <li class="nav-item">
                    <span class="navbar-text text-center font-weight-bold text-white p-1">
                        <i class="fa fa-user-alt fa-fw"></i>
                        <span> User </span>
                    </span>
                </li>
                
                <li class="nav-item">
                    <div class="btn-group">
                        <a type="button" class="btn btn-danger text-white" href="{!! route('login.doLogout', []) !!}">
                            <i class="fa fa-power-off fa-fw" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>  
            </ul>
            <!-- /.nav lists -->
            
            <!-- nav form >
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            < /.nav form -->
            <!-- nav text >
            <span class="navbar-text">Navbar text with an inline element</span>
            < /.nav text -->
        </div>
        <!-- /.navbar-collapse -->
    <!-- /div -->
    <!-- /.container-fluid -->
</nav>
<!-- /.nav -->   
    
<!-- /header -->
<!-- /.nav-bar -->
<!-- /.Main Header -->