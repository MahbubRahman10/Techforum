<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/jquery.min.js"></script> 
<script type='text/javascript' src='assets/bootstrap/js/jquery.pack.js'></script>



<--- Menu-Bar --->

<script type="text/javascript">
$( "a.submenu" ).click(function() {
$( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
});
});
$( "ul li.dropdown a" ).click(function() {
$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
});
$('ul li.dropdown').toggleClass('current');
});
</script>

<--- Editprofile --->
<script>

	$(document).ready(function(){
		
		$("#toggleText").hide();
		$("#displayText").show();
		var display=$('#toggleText').css('display');
			$('#displayText').click(function(){
			
				var display=$('#toggleText').css('display');
					if(display=='none'){
					$('.location').removeAttr('value');
						$("#toggleText").show();
						document.getElementById('displayText').innerHTML = "Cancel";
						$('#displayText').css('color','red');
						document.getElementById('body').hidden = "hidden";
						
					}
					else{
						$("#toggleText").hide();
						document.getElementById('body').hidden = "";
						document.getElementById('displayText').innerHTML = "Edit";
				
					}
			});
	});
	
	$(document).ready(function(){
		$("#toggleText2").hide();
		$("#displayText2").show();
		var display=$('#toggleText2').css('display');
			$('#displayText2').click(function(){
				var display=$('#toggleText2').css('display');
					if(display=='none'){
						$('.occupation').removeAttr('value');
						$("#toggleText2").show();
						document.getElementById('displayText2').innerHTML = "Cancel";
						$('#displayText2').css('color','red');
						document.getElementById('body2').hidden = "hidden";
					}
					else{
						$("#toggleText2").hide();
						document.getElementById('body2').hidden = "";
						document.getElementById('displayText2').innerHTML = "Edit";
						$('#displayText3').css('color','red');
					}
			});
	});

	$(document).ready(function(){
		$("#toggleText3").hide();
		$("#displayText3").show();
		var display=$('#toggleText3').css('display');
			$('#displayText3').click(function(){
				var display=$('#toggleText3').css('display');
					if(display=='none'){
						$('.interest').removeAttr('value');
						$("#toggleText3").show();
						document.getElementById('displayText3').innerHTML = "Cancel";
						$('#displayText3').css('color','red');
						document.getElementById('body3').hidden = "hidden";
					}
					else{
						$("#toggleText3").hide();
						document.getElementById('body3').hidden = "";
						document.getElementById('displayText3').innerHTML = "Edit";
						$('#displayText3').css('color','red');
					}
			});
	});

</script>


<--- AjaxEditprofile --->	
	
<script type="text/javascript">
$('.edit').click(function(e){
	e.preventDefault();
	var id=$(this).attr("data-id");
	var location = $(".location").val();

	$.ajax({
		type: 'post',
		url: '/edit',
		data: {
		   '_token': $('input[name=_token]').val(),
			'id': id,
			'location': location
		},
		 success: function(data) {
				$("#toggleText").hide();
				document.getElementById('body').hidden = "";
				document.getElementById('displayText').innerHTML = "Edit";
				$( '#body' ).html( location);
		   }
	});
});

		$('.edit2').click(function(e){
	e.preventDefault();
	var id=$(this).attr("data-id");
	var occupation = $(".occupation").val();
	
	$.ajax({
		type: 'post',
		url: '/edit2',
		data: {
		   '_token': $('input[name=_token]').val(),
			'id': id,
			'occupation': occupation
		},
		 success: function(data) {
				$("#toggleText2").hide();
				document.getElementById('body2').hidden = "";
				document.getElementById('displayText2').innerHTML = "Edit";
				$( '#body2' ).html( occupation);
		   }
	});
});
			$('.edit3').click(function(e){
	e.preventDefault();
	var id=$(this).attr("data-id");
	var interest = $(".interest").val();
	
	$.ajax({
		type: 'post',
		url: '/edit3',
		data: {
		   '_token': $('input[name=_token]').val(),
			'id': id,
			'interest': interest
		},
		 success: function(data) {
				$("#toggleText3").hide();
				document.getElementById('body3').hidden = "";
				document.getElementById('displayText3').innerHTML = "Edit";
				$( '#body3' ).html( interest);
		   }
	});
});
</script>





 <--- Menu-Bar-shrink --->
 
<script type="text/javascript">
	
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});


</script>

