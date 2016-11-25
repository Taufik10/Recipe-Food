@extends('app.app')

@section('script')
	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		$(window).load(function(){
	 			// alert('loaded');
	 			$.ajax({
	 				url: '{{ url('curl') }}',
	 				type: 'get',
	 				dataType: 'json',
	 				success:function(data){
	 					$.each(data.recipes,function(index,item){
	 						$('#before_data').after('<div class="col s12 m4 l4"><div class="card small"><div class="card-image"><img src="'+item.image_url+'"><span class="card-title"></span></div><div class="card-content"><p>'+item.title+'</p></div><div class="card-action"><a href="'+item.f2f_url.replace("http://food2fork.com/view/","{{ url('details') }}"+"/")+'">Details</a></div></div></div>');
	 					});
	 				}
	 			});
	 		});
	 	});
	 </script>
@endsection

@section('content')  	
  	<div class="container" id="tes_cont">
  		<div class="row">
	  		<div id="before_data">
	  		</div>
  		</div>
  	</div>
@endsection