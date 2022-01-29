<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<title>data display
	</title>
</head>
<body>
<div class="container-fluit">
	<div class="row">
		<div class="col-md-12">
			<br>
			<h3 class="text-center text-light bg-success">DISPLAY DATA </h3>
			<br>
			<br>
        <a href="index.php"><h4 class="btn bg-dark text-light">Home</h4></a>
			<table class="table table-striped table-bordered text-center bg-dark text-light">
				<thead>
					<td>SL no</td>
					<td>NAME</td>
					<td>EMAIL</td>
					<td>PHONE</td>
					<td>PASSWORD</td>
					<td>PROFILE PIC</td>
					
					
				</thead>
				<tbody id="response">
					
				</tbody>
			</table>
			
		</div>
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">





	/*$('#displaydata').click(function(){

		//alert('test view data');
		$.ajax({
			url: 'form.php',
			type:'post',
            success:function (responsedata){
            	console.log(responsedata);
				$('#response').html(responsedata);

			}

		});
	});*/

	$(document).on('click','#displaydata',function(e){
      $.ajax({    
        type: "GET",
        url: "dis.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#response").html(data); 
           
        }
    });
});


	function DataLoad(){
      $.ajax({    
        type: "GET",
        url: "dis.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#response").html(data); 
           
        }
    });
	}

	DataLoad();



</script>
</body>
</html>