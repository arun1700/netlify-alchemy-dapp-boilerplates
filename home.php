<style>
    body {
    background-image: url(https://images.unsplash.com/photo-1570125909232-eb263c188f7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80.png) ;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
}
    </style>
<section id="" class="d-flex align-items-center">
    <div class="container">
    <center>
      <br>
    <h1 class="highlight">Online Bus Reservation System</h1></center>
      <?php if(!isset($_SESSION['login_id'])): ?>
      	<center><button class="btn btn-danger btn-lg" type="button" id="book_now">Reserve Your Tickets Now</button></center>
      <?php else: ?>
        
		<center><br><br><br><h2 class="highlight2">Welcome, <?php echo $_SESSION['login_name'] ?></h2></center>
	
      <?php endif; ?>
    </div>
  </section>
  <script>
  	$('#book_now').click(function(){
      uni_modal('Find Schedule','book_filter.php')
  })
  </script>