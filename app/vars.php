<?php 

	// app vars
	$appName = 'FreeFlow';
	$appLocal = 'http://localhost/freeflow';

?>

<link rel="icon" type="image/x-icon" href="<?php echo $appLocal ?>/assets/favicon.png">

<style>
	@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Montserrat:wght@100&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

	body{
		padding: 95px 75px 0px calc(17vw + 75px);
		color: #00000098 !important;
	}

	.align{
		position: relative;
		top: 50%;
		transform: translateY(-50%);
	}

	.module{
		background: white !important;
		border-radius: 20px;
		box-shadow: 0px 0px 50px 0px #00000007;
		padding: 20px 30px 20px 30px !important;
		margin-bottom: 30px;
		width: 100%;
	}

	.moduleIcon{
		color: white;
		padding: 15px;
		border-radius: 15px;
		background-image: linear-gradient(to right bottom, #191921, #1a1923, #1c1825, #1f1726, #221627);
	}

	.title{
		font-size: 0.8rem !important;	
		color: #00000050;
	}

	.desc{
		color: #212529;	
		font-size: 1.5rem !important;
		font-family: Manrope !important;
		font-weight: 600 !important;
	}

	* {
		scrollbar-width: thin;
		scrollbar-color: #35424e #fafafa;
	}

	*::-webkit-scrollbar {
		width: 10px;
	}

	*::-webkit-scrollbar-track {
		background: #fafafa;
	}

	*::-webkit-scrollbar-thumb {
		background-color: #35424e;
		border-radius: 30px;
		border: 3px solid #ffffff;
	}
	.dropdown-menu,
	.show{
		font-size: 0.8rem !important;
	}
	.dropdown-item:active{
		background: #00000005 !important;
	}
</style>