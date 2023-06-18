<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Accountant</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>
	<?php
 
 include('./header.php'); 
 // include('./auth.php'); 
 ?>
</head>
<body>

<div class="wrapper" >

	<div class="top_navbar">
		<div class="logo">
			<a href="#"><marquee>Accountant Panel</marquee></a>
		</div>
		<div class="top_menu">
			<div class="home_link">
				
			</div>
			<div class="right_info">
				<div class="icon_wrap">
					<div class="icon">
		
					</div>
				</div>
				<div class="icon_wrap">
					<div class="icon">
          <a href="logout.php">
					<span class="icon"><i class="fas fa-home"></i></span>
					<span>Home</span>
				</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu" style="background-color: white;  box-shadow: inset 0 0 2px #000000;">
	        <div class="inner__sidebar_menu"  style="background:#f0eaea">
	        	
	        	<ul>   <div  style="height:10px;background-color:white;"></div>
		          <li >
		          <a href="index.php?page=home">
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">My Dashboard</span>
		            </a>
		          </li>
              <div  style="height:10px;background-color:white;"></div>
		          <li>
		            <a href="index.php?page=fees" >
		              <span class="icon"><i class="fas fa-chart-pie"></i></span>
		              <span class="list">Fees</span>
		            </a>
		          </li>
              <div  style="height:10px;background-color:white;"></div>
		          <li>
		            <a href="index.php?page=payments">
		              <span class="icon"><i class="fas fa-address-book"></i></span>
		              <span class="list">Payments</span>
		            </a>
		          </li>
              <div  style="height:10px;background-color:white;"></div>
		          <li>
		            <a href="index.php?page=courses">
		              <span class="icon"><i class="fas fa-address-card"></i></span>
		              <span class="list">Courses & Fees</span>
		            </a>
		          </li>
              <div  style="height:10px;background-color:white;"></div>
		          <li>
		            <a href="index.php?page=students">
		              <span class="icon"><i class="fab fa-blogger"></i></span>
		              <span class="list">Students</span>
		            </a>
		          </li>
              <div  style="height:10px;background-color:white;"></div>
		          <li>
		            <a href="index.php?page=payments_report">
		              <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
		              <span class="list">Payments Report</span>
		            </a>
		          </li>
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	    <div class="container">



      <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
  	<?php include $page.'.php' ?>
  	


  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  </div>



	</div>
</div>
<script>
	 window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }
 window.viewer_modal = function($src = ''){
    start_load()
    var t = $src.split('.')
    t = t[1]
    if(t =='mp4'){
      var view = $("<video src='"+$src+"' controls autoplay></video>")
    }else{
      var view = $("<img src='"+$src+"' />")
    }
    $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
    $('#viewer_modal .modal-content').append(view)
    $('#viewer_modal').modal({
            show:true,
            backdrop:'static',
            keyboard:false,
            focus:true
          })
          end_load()  

}
  window.uni_modal = function($title = '' , $url='',$size=""){
    start_load()
    $.ajax({
        url:$url,
        error:err=>{
            console.log()
            alert("An error occured")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal .modal-title').html($title)
                $('#uni_modal .modal-body').html(resp)
                if($size != ''){
                    $('#uni_modal .modal-dialog').addClass($size)
                }else{
                    $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
                }
                $('#uni_modal').modal({
                  show:true,
                  backdrop:'static',
                  keyboard:false,
                  focus:true
                })
                end_load()
            }
        }
    })
}
window._conf = function($msg='',$func='',$params = []){
     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
     $('#confirm_modal .modal-body').html($msg)
     $('#confirm_modal').modal('show')
  }
   window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:3000}).toast('show');
  }
  $(document).ready(function(){
    $('#preloader').fadeOut('fast', function() {
        $(this).remove();
      })
  })
  $('.datetimepicker').datetimepicker({
      format:'Y/m/d H:i',
      startDate: '+3d'
  })
  $('.select2').select2({
    placeholder:"Please select here",
    width: "100%"
  })
</script>	
<script>
	var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
document.querySelector("body").classList.toggle("active");
})
</script>

</body>
</html>