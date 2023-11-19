 <!-- Navigation-->
 <head>
    <link href="./libs/style.css">
	<style>
	  div a:hover{
		  color:black;
	  }
	  .collapse navbar-collapse{
		  color:red;
	  }
	  
	</style>
</head>
 <nav style="height:50px"; class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
            <div style="background-color:black;"; "height:20px";  class="container-fluid">
			    
                <a style="padding:0px";"margin-top:0px";"margin-down:0px"; class="navbar-brand" href="#page-top"><span class="text-waring"><img style="height:150px";"width:100px";"padding:0px"; src="./inc/logogeekathon1.png" alt="DesiYatra"/></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
				
                <div  class="collapse navbar-collapse" id="navbarResponsive">
                    <ul  class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					    
                        <li class="nav-item"><a class="nav-link" href="<?php echo $page !='home' ? './':''  ?>">Home</a></li>
						
						
                        <li class="nav-item"><a class="nav-link" href="./?page=packages">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $page !='home' ? './':''  ?>#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $page !='home' ? './':''  ?>#contact">Contact</a></li>
                        <?php if(isset($_SESSION['userdata'])): ?>
                          <li class="nav-item"><a class="nav-link" href="./?page=my_account"><i class="fa fa-user"></i> Hi, <?php  echo $_settings->userdata('firstname') ?>!</a></li>
                          <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i></a></li>
                        <?php else: ?>
                          <li class="nav-item"><a class="nav-link" href="javascript:void(0)" id="login_btn">Login</a></li>
                        <?php endif; ?>
                    </ul>
			
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login_btn').click(function(){
      uni_modal("","login.php","large")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })
</script>