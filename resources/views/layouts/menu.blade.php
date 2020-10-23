<!-- MainMenu-Area -->
<nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{'asset/images/logo.png'}}" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Home</a></li>
                    <li><a href="#about_page">About</a></li>
                    <li><a href="#solution_page">Solution</a></li>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('project')}}">Project</a></li>
                    <li><a href="#contact_page">Contacts</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="{{url('login')}}">Sign In</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->