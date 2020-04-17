<!DOCTYPE HTML>
<html>

  <?php $this->load->view('head'); ?>

	<body>

	<div class="colorlib-loader"></div>
	<style>
		{
    margin:0;
    padding:0;
    width:100%;
    height:100%;
    font-family: 'Raleway', sans-serif;
    background-color:white;
    overflow: visible;
}
section1{{
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: center;
}
section2{
position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: center;
}
}
.testimonial {
    width:350px;
    display:inline-block;
    margin: 0 20px;
    transition: .5s;
}
.testimonial:hover{
    transform: translateY(-20px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.7);
}
.testimonial .card {
    position:relative;
    overflow:hidden;
    width:350px;
    margin:0 auto;
    background:#2c2c2c;
    padding:20px;
    box-sizing:border-box;
    text-align:center;
    box-shadow:0 10px 40px rgba(0,0,0,.5);
}
.testimonial .card .layer {
    z-index:1;
    position:absolute;
    top: 0;
    left: 99.5%;
    height:100%;
    width:100%;
    background:linear-gradient(to bottom right , #08686c, #59ed75);
    transition:0.5s;
}
.testimonial .card:hover  .layer{
    left: 0;
}
.testimonial .card .content {
    z-index:2; 
    position:relative;
}
.testimonial .card .content p {
    font-size:14px;
    line-height:24px;
    color:#fff;
}
.testimonial .card .content .image {
    width:100px;
    height:100px;
    margin:0 auto;
    border-radius:50%;
    overflow:hidden;
    border: 3px solid white;
    box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    transition: .5s;
}
.testimonial:hover .card .content .details h2{
    color: white;
}
.testimonial .card .content .details h2 {
    font-size:30px;
    color:black;
    transition:0.5s;
}
.testimonial .card .content .details h2 span {
    font-size:18px;
    color:#173ad0;
    transition:0.5s;
}
.testimonial .card:hover .content .details h2 span {
    color:white;
    position:relative;
}
	</style>
	<div id="page">

    <?php $this->load->view('header'); ?>

    <section1>
    <div class="testimonial">
  <div class="card">
    <div class="layer"></div>
    <div class="content">
      <p>Indian Development Foundation appreciated the amazing initiative taken by SAKEC Research Cell. The endless efforts and professionalism that your team has demonstrated is commendable.</p>
      <div class="image">
        <img  width="100px" height="100px" src="2.jpg" alt="">
      </div>
      <div class="details">
        <h2> Dr. Narayan Iyer <br> <span>CEO (IDF)</span><br> <span><button onclick="window.location.href = 'file:///C:/Users/Parth%20Aadatiya/Desktop/Testimonial/Narayan%20Iyer.html';">Click Here</button></span></h2>
      </div>
    </div>
  </div>
</div>

<div class="testimonial">
  <div class="card">
    <div class="layer">
      
    </div>
    <div class="content">
      <p>Launched the ‘Roti Bank’ app by @rotibankFdnalong with the former Police Commissioner of Mumbai, D.Sivanandhan, also the mentor behind the food rescue organisation. Will fill you up with joy if you try.</p>
      <div class="image">
        <img  width="100px" height="100px" src="1.jpg" alt="">
        
      </div>
      <div class="details">
        <h2> Boman Irani <br> <span>Actor</span><br><span><button onclick="window.location.href = 'file:///C:/Users/Parth%20Aadatiya/Desktop/Testimonial/BI.html';">Click Here</button></span></h2>
		
      </div>
    </div>
  </div>
</div>

<div class="testimonial">
  <div class="card">
    <div class="layer">
      
    </div>
    <div class="content">
      <p>The students showed unlimited enthusiasm and interest in creating a valuable "Roti Bank App" for roti bank Mumbai. This association of Sakec and Roti Bank would go very far in building a Strong Nation</p>
      <div class="image">
        <img width="100px" height="100px" src="3.jpg" alt="">
        
      </div>
      <div class="details">
         <h2> D. Sivanandhan <br> <span>I.P.S.(retd)</span><br> <span><button onclick="window.location.href = 'file:///C:/Users/Parth%20Aadatiya/Desktop/Testimonial/DSivanandhan.html';">Click Here</button></span></h2>
      </div>
    </div>
  </div>
</div>
</section1>

 <section2>
    <div class="testimonial">
  <div class="card">
    <div class="layer"></div>
    <div class="content">
      <p>We are impressed with the work done by the student and mentor who prodded them to show off their technical skills and leadership qualities. Foreseeing continuing with this alliance together, to fabricate a 	Strong Nation.</p>
      <div class="image">
        <img  width="100px" height="100px" src="4.jpg" alt="">
      </div>
      <div class="details">
         <h2> V.V.Pai <br> <span>Director (BLP)</span><br> <span><button onclick="window.location.href = 'file:///C:/Users/Parth%20Aadatiya/Desktop/Testimonial/VVPai.html';">Click Here</button></span></h2>
      </div>
    </div>
  </div>
</div>


</section2>
    
		<?php $this->load->view('footer'); ?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
  <?php $this->load->view('scripts'); ?>
  <script>
  $("#pagetitle").html("Research Cell | Testimonials");
  $(".treeview").removeClass('active');
  $(".treeview").eq(6).addClass('active');
	</script>
	<script>
	</script>
	</body>
</html>
