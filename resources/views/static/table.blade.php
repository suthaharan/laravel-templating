   @extends('layouts.dashboard')

   @section('content')
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