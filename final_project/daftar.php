<!DOCTYPE html>
<html>
<head>
	<title>Create Account Page</title>
	<link rel="stylesheet" type="text/css" href="style/daftar.css">
</head>
<body>
<center>
	<div class="page">
			
			<br><br>
			<form id="data_input" method="POST">
			<div class="header_daftar">
				<label><h2>CREATE ACCOUNT</h2></label>
			</div>
			<div class="daftar">
				<table width="340px">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" id="nama" class="input"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><textarea cols="21" rows="5" name="alamat" id="alamat" class="input1"></textarea></td>
					</tr>
					<tr>
						<td>No Telp.</td>
						<td>:</td>
						<td><input type="text" name="no_tlp" id="no_tlp" class="input"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" id="username" class="input"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" id="password" class="input"></td>
					</tr>
					<tr>
						<td>ID akses</td>
						<td>:</td>
						<td><input type="text" name="id_akses" value="3" id="id_akses" readonly class="input"></td>
					</tr>
				</table>
				<div class="button">
					<button type="submit" name="submit" id="submit_form" value="Submit">Daftar</button><br>
					<a href="login.php"><button type="button" name="b_index" value="Back to Index">Batal</button></a>	
				</div>
			</div>
		</form>
	</div>
</center>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	 $(document).ready(function(){
  $("#submit_form").click(function(){
   var data = $('#data_input').serialize();
   $.ajax({
    type: 'POST',
    url: "proses/daftar_proses.php",
    data: data,
    success: function(response) {
     console.log(response);
    }
   });
  });
 });
	</script>

<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("#submit_form").click(function(){
			var data = $('#data_input').serialize();
			$.ajax({
				type: 'POST',
				url: "proses/daftar_proses.php",
				data: data,
				success: function(response) {
					if(response == "ok"){
		               
		               alert("Berhasil Daftar");
		               window.location.href = "login.php";
		               
					}else{

						alert("Gagal Daftar");
					}
				}
			});
		});
	});
	</script> -->
<!-- <script type="text/javascript">

	$(function(){
         
    //ketika submit button d click
    $("#submit_form").click(function(){
         
         //do ajax proses
         $.ajax({
           
           url : "proses/daftar_proses.php", 
           type: "post", //form method
           data: $(this).serialize(),
           dataType:"json", //misal kita ingin format datanya brupa json
           beforeSend:function(){
             //lakukan apasaja sambil menunggu proses selesai disini
             //misal tampilkan loading
             
             $(".loading").html("Please wait....");
             
           },
           success:function(response){
             
             if(response == "ok"){
               
               alert("Berhasil Registrasi");
               window.location.href = "index.php";
               
             }else{
               
               alert("Gagal Registrasi");
             }
             
           },
           
         });
              
       return false;
     })
  
  });
</script> -->
</body>
</html>