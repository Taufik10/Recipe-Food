@extends('app.app')

@section('script')
<script type="text/javascript">
	 	$(document).ready(function(){
	 		$(window).load(function(){
	 			// alert('loaded');
	 			$.ajax({
	 				url: '{{ url('curl') }}'+'/'+{{ $id }},
	 				type: 'get',
	 				dataType: 'json',
	 				success:function(data){
	 					console.log(data);
	 					$('#title-card').html(data.recipe.title);
	 					// $('.ingredients').html(data.recipe.ingredients[2]);
	 					$('img').attr("src",data.recipe.image_url);
	 					for (var i = 0; i < data.recipe.ingredients.length; i++) {
	 						// data.recipe.ingredients[i]
	 						$('.ingredients').after("<p>"+data.recipe.ingredients[i]+"</p>")
	 					}
	 					// $.each(data.recipe.ingredients,function(index,item){
	 					// 	$('#ingredients').after("<p>"+item.+"</p>")
	 					// });
	 				}
	 			});
	 		});
	 	});
	 </script>
@endsection

@section('content')
	<div class="container">
	<h5><span class="card-title" id="title-card">Card Title</span></h5>
  	 <div class="row">
        <div class="col s12 m4 l4">
          <div class="card">
            <div class="card-image">              
              <img src="">                           
            </div>
            <div class="card-content">
              <p class="ingredients">
              Ingridients :
              </p>
            </div>            
          </div>
        </div>
      </div>
    </div>  
@endsection