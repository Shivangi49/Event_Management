<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-secondary">
  <a class="navbar-brand" href="#">Event Management</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tab1">About us</a>
      </li>
      
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#tab3">Events</a>

      <li class="nav-item">
        <a class="nav-link" href="#tab2">Gallery</a>
      </li>
        
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#tab4">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	 <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="images/party1.jpg" alt="Marriage"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Wedding</h3>
        <p>Plan your big day with us </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/party6.jpg" alt="Birthday Parties" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Birthday Parties</h3>
        <p>Make your birthday a special one!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/party5.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Formal Functions</h3>
        <p>We even arrange formal functions too!</p>
      </div>   
    </div>
	 <div class="carousel-item">
      <img src="images/party4.jpg" alt="Gallery" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Gallery</h3>
        <p>View gallery for some of our best events!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-4">
		<h2 class="text-center" id="tab1"></h2>
	</div>
  <div class="container-fluid ">
    <div class="row">
    <div class="col-lg-6 col-md-16 col-12">
      <img src="images/aboutus.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-16 col-12 py-4 bg-info">
      <h2 class= "text-white">Creative and elegant event design and planning</h2>
      <p class="py-2 text-white">We take this opportunity to introduce ourselves as an event management company.
        We have proven experience in strategic corporate events, automobile events, party & wedding events, experiential marketing, luxury event consultation and integrated corporate activations.
      </p>
      <button type="button" class="btn btn-light btn-lg text-black" data-toggle="modal" data-target="#abtModal">Know More
    </button>
    <div class="modal fade" id="abtModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Services we provide</h4> 
        </div>
        <div class="modal-body">
            <div class="modaltext2 col-md-12">
            <p>
             Our aim is to organise events with a primary motive of cost minimization for the client yet making sure that all the requirements are met with a creative precision.
              </p>
            <p>
           What Do We Do: <br>

            1) Corporate Calendar Events<br>
            2) Promotions & Launches<br>
            3) Exhibitions Stall Designing<br>
            4) Destination Events<br>
            5) Social & Wedding Events<br>
            6) Event Manpower<br>

            </p>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    </div>
  </div>
</div>    
    
</div>
</section>

<section class="my-5">
  <div class="py-5" id="tab3">
    <h2 class="text-center" >Popular Events</h2>   
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/social.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Social Events</h4>
    <p class="card-text">Planning a soical event ? we provide the best social events.</p>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View Details
    </button>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Social Events</h4> 
        </div>
        <div class="modal-body">
            <div class="text-center">
                <img src="images/social1.jpg" class="img-responsive"><p></p>
            </div>
            <div class="modaltext2 col-md-12">
            <p>
             Corporate team-building events and social workdays out are an essential part of any company’s overall health. Taking a break from the office and getting your employees to interact with each other in a relaxed and fun environment is vital for employee engagement and productivity.
			 A highly engaged team shows 21% greater profitability, 
			 so having a great employee engagement strategy is vital for your businesses success.
              </p>
            <p>
           With us you can have the best social event.We give our best to make this event successful.
            </p>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    </div>
    </div>
   </div>
  </div>

       <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/wedding.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Destination Weddings</h4>
    <p class="card-text">Plan Your Destination Wedding
With India’s Largest Wedding Co.
</p>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal2">View Details
    </button>
      <div class="modal fade" id="Modal2" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Wedding</h4> 
        </div>
        <div class="modal-body">
            <div class="text-center">
                <img src="images/wedding1.jpg" class="img-responsive"><p></p>
            </div>
            <div class="modaltext2 col-md-12">
			<p>
           Looking for your ideal wedding destination? Search through our premier portfolio of resorts to find your perfect fit, 
		   whether you're looking for a beachfront all-inclusive property or a quaint European castle in the country, 
		   we'll help make your dreams of the perfect destination wedding a reality. 
		   From a sprawling family-friendly gem to a chic and secluded adults-only oasis, we offer you a world of choice.
            </p>
            <p>
             We offer amazing deals through our preferred hotel partners. You won’t find these savings anywhere else!
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn  btn-info" data-dismiss="modal">Close</button>
        </div>
        </div>
        </div>
      
    </div>
  </div>
</div>

        
      </div>

       <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/birthday.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Birthday Planning</h4>
    <p class="card-text">Surprise your loved ones on their birthday with beautiful decorations.</p>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal3">View Details
    </button>
      <div class="modal fade" id="Modal3" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Birthday Planning</h4> 
        </div>
        <div class="modal-body">
            <div class="text-center">
                <img src="images/birthday.jpg" class="img-responsive"><p></p>
            </div>
            <div class="modaltext2 col-md-12">
            <p>
              We are professional birthday party decorator offer complete event planning services for a birthday. 
			  Our team of professionals will analyze your requirements and provide birthday ideas to suit your needs and budget.
			  Either your birthday party budget is small or big, we handle all kinds of party works for all budgets.
              </p>
            <p>
           Let us handle the birthday party and you just enjoy your memorable moments,
		   make your guests surprise by your best birthday bash in the town.
		   We have made many parents happy with our birthday party decorations.
            </p>
            
            
      
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
        </div>
        </div>
      
    </div>
  </div>
</div>

        
      </div>
    </div>
  </div>
  
</section>

<section class="my-5">
  <div class="py-3">
    <h2 class="text-center" id="tab2">Gallery</h2> 
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/1.jpg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/2.jpg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/3.jpg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/4.jpg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/10.jpg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/6.jpg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/5.jpeg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-4"> 
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/9.jpg" class="img-fluid pb-4"> 
      </div>
      
    </div>
    
  </div>
</section>

<section class="my-5">
  <div class="py-3">
    <h2 class="text-center" id="tab4">Share the details</h2> 
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post" onSubmit="alert('Thank you! We will reach out in 24 hours.');">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Event Type</label>
        <input type="text" name="etype" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Additional Information</label>
        <textarea class="form-control" name="comments">  
        </textarea>
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary btn-success">Submit</button>
        
    </div>
    </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@ShivangiEventManagement<br> +91 963526171</br></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
