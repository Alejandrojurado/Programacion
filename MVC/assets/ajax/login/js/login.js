

	$(document).ready(function(){
		$('#loginform').submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: 'login.php',
				data: $(this).serialize(),
				success: function(response){

					var jsonData = JSON.parse(response);

					// user is logged in successfully in the back-end
	                // let's redirect

	                if (jsonData.success == "1") {


	                	$_SESSION['username'];
	                	location.href = 'privado.php';
	                } 
	                else{

	                	header('www-Autheticate: Basic realm="contenido restringido"');
	                	header("HTTP/1.0 401 Unauthorized");
	                	exit;

	                }
				}
			});
		});

	});