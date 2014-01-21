<link rel='stylesheet' href='assets/css/global.css' type='text/css'>
<link rel='stylesheet' href='assets/css/style.css' type'text/css'>

<?php 
	require_once('config.php');
	echo $_SESSION['fname'] ."". $_SESSION['lname'];

?>	

<body style='background-color:D3D8E8'>
	<div class='navbar navbar-fixed-top'>
			<div class='navbar-inner'>
				<div class='container'><font face = 'tahoma'>
					<a href='#' class='brand'>Examination</a>
					<ul class='nav pull-right'>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></b> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li style='hover:blue'>
								  	<a href="logout.php">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>



	<div class='container' style='margin-top:100px'>
		<div id='takeExam'>
			<h1>Are you READY to take your Exam</h1>
			<h3>This is good for 30 Minutes</h3>
			<button id='yesExam' class='btn btn-success'>Take my Exam NOW</button>
			<button id='noExam' class='btn'>Not Now</button>
		</div>


	<!--test Proper code-->
		<div hidden id='testExam'>
			<h1 class='pull-right' id='countdown'></h1>
			<div class='container'>
				<div class='row'>
					<div class='well' style='margin-top:100px'>

					</div>
				</div>
			</div>
		</div>

	<!-- END test Proper code-->

	<!--exit code-->

		<div hidden id='exitTest'>
			<div class='container'>
				<div class='row'>
						<h1 color='red'>Are you sure. You want to EXIT</h1>
						<button id='exitYes' class='btn btn-primary'>Yes</button>
						<button id='exitNo' class='btn'>No</button>
				</div>
			</div>
		</div>

	<!--end exit code-->

	</div>
</body>


<script src="assets/js/jquery-1.7.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/admin.min.js"></script>
<script>
	$(document).ready(function(){
		$('#yesExam').click(function(){
			$('#takeExam').fadeOut(1000);
			$('#testExam').fadeIn(3000);
			var min = 60;
			var second = 0;
			countDown = setInterval(function(){
				if(min == 0 && second == 0){
					$('#countdown').html("0 : 00");
					clearTimeout(countDown);
				} else if ((second % 60) == 0) {
					$('#countdown').html(min +" : 0"+second);
					min--;
					second = 59;
				} else if (second < 10){
					$('#countdown').html(min +" : 0"+second);
					second--;
				} else {
					$('#countdown').html(min +" : "+second);
					second--;
				}
			},1000);
		});
	});

	$(document).ready(function(){
		$('#noExam').click(function(){
			$('#takeExam').hide(1000);
			$('#takeExam').fadeOut(1000);
			$('#exitTest').fadeIn(1000);
		});
		$('#exitYes').click(function(){
			window.location.href='exam.php';
		});
		$('#exitNo').click(function(){
			$('#takeExam').fadeOut(1000);
			$('#exitTest').fadeOut(1000);
			$('#takeExam').slideDown(1000).fadeIn(1000);
			
		});
	})
</script>