<header id="header" class="">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="./index.php?page=home">Reliable Experience Everytime</a></h1>
		

      <nav class="nav-menu d-none d-lg-block" id='top-nav'>
      <div id="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/GGM_Science_College_Jammu_Logo.jpg/1200px-GGM_Science_College_Jammu_Logo.jpg"></div>
        <ul>
          <li class="nav-home"><a href="./index.php?page=home">Home</a></li>
           <li class="nav-schedule"><a href="./index.php?page=schedule">View Bus Schedule</a></li>
			<li class="nav-admin"><a href="./index.php?page=admin">Login</a></li>
             
              
        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header>
  <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>';
      if(page != ''){
        $('#top-nav li').removeClass('active')
        $('#top-nav li.nav-'+page).addClass('active')
      }
      $('#manage_account').click(function(){
      uni_modal('Manage Account','manage_account.php')
  })
    })

  </script>