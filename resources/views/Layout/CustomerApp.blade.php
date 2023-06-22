<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SDOQC NTP-IS</title>
	@yield('css')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
	<link rel="icon" href="{{asset('Asset/sdo_logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/TableM.css')}}">
    <link rel="stylesheet" href="{{ asset('css/FrontMain.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
	@livewireStyles

</head>
<body>
	<!--header--->
	<header>

		<a href="{{Route('NTPDashBoard.index')}}" class="logo">
			<img src="{{asset('Asset/sdo_logo.png')}}" alt="Logo">SDOQC NTP-IS
		</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a class ="a" href="{{Route('NTPDashBoard.index')}}"> <i class="fa-solid fa-house"></i>Home</a></li>
			<li><a class ="a" href="{{Route('NTPApplicant.index')}}"><i class="fa-solid fa-users"></i>Employee</a>
				<ul class="ticks">
					<li><a href="{{Route('NTPEmployeeReport.index')}}" class ="c"><i class="fa-solid fa-chart-simple"></i>Reports</a></li>
				</ul>
			</li>
			<li><a class ="a" href="{{Route('NTPSchool.index')}}"><i class="fa-solid fa-school"></i>School</a>
				<ul class="ticks1">
					<li><a href="{{Route('NTPDistrict.index')}}" class ="c"><i class="fa-solid fa-city"></i>Districts</a></li>
					<li><a href="{{Route('NTPSchoolReport.index')}}" class ="c"><i class="fa-solid fa-chart-simple"></i>Reports</a></li>
				</ul>
			</li>
            <li><a class ="a" href="#Account"><i class="fa-solid fa-user"></i> {{auth()->user()->name}}  </a>
				<ul class="ticks2">
					<li><a href="{{Route('NTPLogout')}}" class ="c"><i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>
				</ul>
			</li>
		</ul>

	</header>


    @yield('contentFE')

	<!--footer--->
	<div id="contact">
		<div class="footer">
			<div class="main">

				<div class="list">
					<h5 class="logo">SDOQC NTP</h5>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="">About us</a></li>
						<li><a href="">Terms & Conditions</a></li>
						<li><a href="">FAQS</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">Nueva Ecija St.</a></li>
						<li><a href="#">Bago Bantay</a></li>
						<li><a href="#">Quezon City</a></li>
						<li><a href="#">human.resource@depedqc.ph</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="https://www.facebook.com/SDOQC-HR-Non-Teaching-101158962545643" target=”_blank”><i class='bx bxl-facebook' ></i></a>
					</div>
				</div>

			</div>
		</div>

		<hr>

		<div class="end-text">
			<p>©{{now()->format('Y')}} All rights reserved | By SDO QC OJTs</p>
		</div>
	</div>

	<!--link to js--->
	@livewireScripts
    <script src="{{asset('js/Sticky.JS')}}"></script>
    <script src="{{asset('js/SweetAlert.JS')}}"></script>
    <script src="{{asset('js/Sweet.JS')}}"></script>
	<script src="{{asset('js/TBLS.JS')}}"></script>
    <script src="{{asset('js/TBLM.JS')}}"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('js/Connection.JS')}}"></script>

  <!-- Initialize Swiper -->


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

					Toast.fire({
					icon: 'success',
					title: '{{session('LogSuccess')}}'
			})

		@endif

		@if(Session::has('successAdd'))

				Toast.fire({
				icon: 'success',
				title: '{{session('successAdd')}}'
		})

		@endif

		@if(Session::has('successupd'))

				Toast.fire({
				icon: 'info',
				title: '{{session('successupd')}}'
		})

		@endif

		@if($errors->any())
					Toast.fire({
							icon: 'error',
							title: 'Some Fields Are Empty !'
					})
		@endif

		@if(Session::has('successdel'))

		Swal.fire(
				'Deleted !',
				'{{session('successdel')}}',
				'success'
		)
		@endif

		@if(Session::has('return'))

			Toast.fire({
					icon: 'warning',
					title: '{{session('return')}}'
			})
		@endif

		@if(Session::has('removed'))

		Swal.fire(
				'Removed !',
				'{{session('removed')}}',
				'success'
		)
		@endif

        @if(Session::has('Cannot'))


         Swal.fire({
          icon: 'error',
          title: 'Cannot Be Deleted',
          html: '{{session('Cannot')}}',
          backdrop: `
                rgba(0,0,123,0.4)
                url("/Asset/nyan.gif")
                left top
                no-repeat
                 `
          })


        @endif
	</script>



</body>
</html>
