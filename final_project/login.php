<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<center>
	<div class="page">
		<!-- <form action="proses/login_proses.php" method="POST"> -->
		<form id="login_form" method="POST">
			<div class="header_login">
				<label><h2>LOGIN</h2></label>
			</div>
			<br><br>
			<div class="login">
				<table>
					<tr>
						<td>
							<input type="text" name="username" placeholder="Username">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="password" placeholder="Password">
						</td>
					</tr>
				</table>
				<div class="button">
					<button type="submit" name="submit" id="btn_login" value="Submit"> Submit</button><br>
					<a href="daftar.php"><button type="button"  name="b_index" value="Back to Index">Daftar</button></a>	
					<a href="index.php"><button type="button" name="b_index" value="Back to Index">Kembali</button></a>	
					<div id="error" style="margin-top: 10px; color: white"></div>
				</div>
			</div>
		</form>
	</div>
</center>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    $('document').ready(function()
    { 
         /* validation */
      $("#login_form").validate({
          rules:
       {
       password: {
       required: true,
       },
       username: {
                required: true,
                },
        },
           messages:
        {
                password:{
                          required: "Masukkan Password Anda"
                         },
                username: "Masukkan Username Anda",
           },
        submitHandler: submitForm 
           });  

       function submitForm()
       {  
       var data = $("#login_form").serialize();

       $.ajax({

       type : 'POST',
       url  : 'proses/login_proses.php',
       data : data,
       beforeSend: function()
       { 
        $("#error").fadeOut();
        $("#btn_login").html('<span class="glyphicon glyphicon-transfer"></span>   Sending ...');
       },
       success :  function(response)
          {      
         if(response == "ok"){

          $("#btn_login").html('<img src="https://github.com/maulayyacyber/phantom0308/raw/master/btn-ajax-loader.gif" />   Signing In ...');
          setTimeout(' window.location.href = "index.php"; ',4000);
         }
         else{

          $("#error").fadeIn(1000, function(){   

          $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   alamat email atau password salah!.</div>');
               $("#btn_login").html('<span class="glyphicon glyphicon-log-in"></span>   Sign In');

           });
          }
         }
       });
        return false;
      }
    });
</script>
</body>
</html>