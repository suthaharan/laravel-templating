   @extends('layouts.dashboard')
   @push('style-extend')

	<!-- Morris chart -->
    <link href="{{ asset('css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="{{ asset('css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="{{ asset('css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="{{ asset('css/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="{{ asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" /> -->

   @endpush

   @section('content')
   <div class="row" style="margin-bottom:5px;">
        <!-- Depending on how you would structure the widgets, this layout can further be structured -->
        @include('panels.mainstats')
   </div> 
    <div class="row">
        <div class="col-md-8">
            @include('panels.earngraph')
        </div>
        <div class="col-md-4">
            @include('panels.chat')
        </div>
    </div>
                            
     <div class="row">
        <div class="col-md-8">
            @include('panels.workprogress')
        </div>
        <div class="col-md-4">
            @include('panels.twitterfeed')
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            @include('panels.teammates')
        </div>
        <div class="col-md-7">
            @include('panels.todo')
        </div>
    </div>
                            
                    <div class="row">
                        <div class="col-md-6">
							@include('panels.bordered-table')
							@include('panels.condensed-table')
						</div><!-- /.col -->
                        <div class="col-md-6">
							@include('panels.fullwidth-table')
							@include('panels.stripedwidth-table')
						</div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12">
							@include('panels.resphover-table')
						</div>
                    </div>
    @endsection
    
    @push('scriptsfooter-1')
            <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
            <!-- daterangepicker -->
        <script src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>

        <script src="{{ asset('js/plugins/chart.js') }}" type="text/javascript"></script>

        <!-- datepicker
        <script src="{{ asset('js/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="{{ asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
        <!-- calendar -->
        <script src="{{ asset('js/plugins/fullcalendar/fullcalendar.js') }}" type="text/javascript"></script>
    
    
    
    @endpush
    
    @push('scriptsfooter-2')
    
    
           <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('js/Director/dashboard.js') }}" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
    
    @endpush