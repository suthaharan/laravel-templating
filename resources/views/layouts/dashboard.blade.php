<!DOCTYPE html>
<html>
    <head>
        @include('partials.titlehead')
		
		@include('partials.stylehead')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		@include('partials.scriptshead')
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
		@include('partials.header')
		<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
					@include('partials.top-sidebar-userpanel')
					<!-- search form -->
					@include('partials.top-sidebar-search')
					@include('partials.top-sidebar-nav')
				</section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">

                <!-- Main content -->
                <section class="content">
                    @yield('content')  

                </section><!-- /.content -->
				@include('partials.footer')
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

	@include('partials.scriptsfooter')
    </body>
</html>
