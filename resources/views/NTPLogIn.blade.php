<!DOCTYPE html>
<html>
<head>
	<title>SDOQC-NTPIS</title>
    <link rel="stylesheet" href="{{ asset('css/UserLogin.css')}}">
	<link rel="icon" href="{{asset('Asset/sdo_logo.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{asset('Asset/waves.png')}}">
	
	<div class="container">
		<div class="img">
			<img src="{{asset('Asset/login_svg_pic.svg')}}">
		</div>

		<div class="login-content">

			<form action="{{Route('NTPLogin.store')}}" method="POST">
				@csrf

			  	<img src="{{asset('Asset/user_ic.png')}}">
				<h2 class="title">SDOQC NTP-IS</h2>

           		<div class="input-div one" style="@error('email') border-bottom: 2px solid  rgb(255, 105, 105); @enderror">       		  
					<div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>           		  
				   <div class="div">
           		   		<h5>Username :</h5>
           		   		<input type="text" class="input" name="email">
							
           		   </div>
           		</div>
				<p class="err">@error('email') {{$message}} @enderror </p>
			
				<div class="input-div pass"  style= "@error('password') border-bottom: 2px solid rgb(255, 105, 105); @enderror">
           		   <div class="i"> 
           		    	<i class="fas fa-lock" ></i>
           		   </div>
           		   <div class="div">			
           		    	<h5>Password : </h5>				
           		    	<input type="password" class="input" name="password">					 	
            	   </div>  		
					      
				</div>
				<p class="err">@error('password') {{$message}} @enderror </p>
			
				<div class="Third">
					<span class="spansur">
						<input class="forx" type="checkbox" name="remember">	
						<label class="forx2" for="">Remember Me</label>
					</span>
							
					<a class = "forgot" href="#">Forgot Password?</a>
				</div>
		
				<button type="submit" class="btn">Login</button>
			
			
				@if (session('fail'))
				<div id="error-password" class="errorpass"> *{{session('fail');}}*</div>
		    	@endif

            </form>

        </div>

    <script src="{{asset('js/Login.JS')}}"></script>
	<script src="{{asset('js/SweetAlert.JS')}}"></script>
    <script src="{{asset('js/Sweet.JS')}}"></script>
	<script>
			const Toast = Swal.mixin({           
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000,
					width: 350,
					showCloseButton: true,
					timerProgressBar: true,
					didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
					}
			})
			
			@if(Session::has('LogSuccess'))     
					
					// 		Toast.fire({
					// 		icon: 'success',
					// 		title: '{{session('LogSuccess')}}'
					// })
				Swal.fire({
					position: 'top-end',
					icon: 'success',
					title: '{{session('LogSuccess')}}',
					showConfirmButton: false,
					timerProgressBar: true,
					timer: 3500
				})
			@endif
            
            	
			@if(Session::has('errors'))     
					
				Swal.fire({
					position: 'center',
					icon: 'warning',
					title: 'Incorrect Name or Password',
					showConfirmButton: false,
					timerProgressBar: true,
					timer: 3500
				})
			@endif
		</script>

</body>
</html>
