@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Home</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Sort Team</li>
					</ol>
				</nav>
			</div>
			<
				
		</div>
		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
			<strong>{{ $message }}</strong>
		</div>
		@endif @if ($message = Session::get('error'))
		<div class="alert alert-danger alert-block">
			<!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
			<strong>{{ $message }}</strong>
		</div>
		@endif
		<!--end breadcrumb-->
		<h6 class="mb-0 text-uppercase">Team</h6>

		<hr />
		<div class="card">
			<div class="card-body">
			    <div class="row" id="sortable">
			        	@foreach($team as $value)
			        <div class="col-md-3 ui-state-default" id="item-{{ $value->id }}" data-article-id={{$value['id']}}>
			            <div class="card" style="width: 18rem;">
			                @if($value['image'])
									<img src="{{ asset('/public/images') . '/' .  $value['image']; }}" style="width: 100%;object-fit: contain;height: 200px;" class="card-img-top" alt="user avatar">
									@else
									<img src="https://jkfenner.com/wp-content/uploads/2019/11/default.jpg" style="width: 100%;object-fit: contain;height: 200px;" class="card-img-top" alt="user avatar">
									@endif
                      
                      <div class="card-body">
                        <h5 class="card-title">{{$value['title']}}</h5>
                        
                      </div>
                    </div>
			        </div>
			        @endforeach
			    </div>
			
			</div>
		</div>

	</div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
     var getXsrfToken = function () {
        var cookies = document.cookie.split(';');
        var token = '';

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].split('=');
            if (cookie[0] == 'XSRF-TOKEN') {
                token = decodeURIComponent(cookie[1]);
            }
        }

        return '8AVgfiZnQVk2vTbS9fx3RK0fqqhqJ7pU14hcNCXs';
    };
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $( function() {
    $( "#sortable" ).sortable({
	       
	        update: function(event, ui) {
	            var data = $(this).sortable('serialize');
	            console.log(data);
	            
  $.ajax({
	                url: '{{ route('update.sort') }}',
	                type: 'POST',
	                data: data
	            });
	           
	        }
	    });
  } );
  </script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable({
			lengthChange: false,
			buttons: ['copy', 'excel', 'pdf', 'print']
		});

		table.buttons().container()
			.appendTo('#example2_wrapper .col-md-6:eq(0)');
	});
</script>
@endsection