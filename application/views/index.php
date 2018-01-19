<html>
	<head>
		<title>Form Login Admin Perpustakaan Puslitbang Gizi Dan Makanan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Form Login Admin Perpustakaan" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="<? echo base_url() ?>css/style.css" rel="stylesheet" type="text/css" media="all" /> 
		<script src="<? echo base_url() ?>js/jquery-2.2.3.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="main-agileits">
			<h2>Harap Login Untuk Melihat dan Memanage Daftar Buku Perpustakaan</h2>
			<div class="mainw3-agileinfo form">
				<div id="login">    
					<form action="" method="post"> 
						<div class="field-wrap">
							<label> Masukan Username Anda<span class="req">*</span> </label>
							<input name="username" type="text" required autocomplete="off"/>
						</div> 
						<div class="field-wrap">
							<label> Password Anda<span class="req">*</span> </label>
							<input name="password" type="password" required autocomplete="off"/>
						</div> 
						<input type="submit" value="Login" class="button button-block">
					</form> 
				</div>
			</div>	
		</div>
		<script>
		$('.form').find('input, textarea').on('keyup blur focus', function (e) { 
		  var $this = $(this),
			  label = $this.prev('label');

			  if (e.type === 'keyup') {
					if ($this.val() === '') {
				  label.removeClass('active highlight');
				} else {
				  label.addClass('active highlight');
				}
			} else if (e.type === 'blur') {
				if( $this.val() === '' ) {
					label.removeClass('active highlight'); 
				}else{
						label.removeClass('highlight');   
				}   
			}else if (e.type === 'focus') {
				if( $this.val() === '' ) {
					label.removeClass('highlight'); 
				} 
				else if( $this.val() !== '' ) {
					label.addClass('highlight');
				}
			}
		}); 
		</script>
	</body>
</html>