<!DOCTYPE html>
<html>
<head>
  <title>Navigation Bar Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href = "{{asset('css/main.css')}}">
  <style>
    .navbar {
      background-color: black;
      font-weight: bold;
    }
    .navbar-brand {
      color: white;
      
    }
    .nav-item {
      margin-right: 10px;
    }
    .navbar-nav .nav-link {
      color: white;
    }
    .navbar-nav .nav-link:hover {
      color: orange;
      text-decoration: underline;
    }
    .btn-orange {
      background-color: orange;
      color: white;
      border-color: white;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">UAE Construction</a>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
  <button class="btn btn-orange" type="button">Get Started</button>
</nav>
<div class ="maindiv">
<div class="div1" style="background-image: url('{{ asset('images/div1.jpg') }}')">
    <h2>Header</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus sem sit amet eros congue venenatis.</p>
</div>
<div class="div2">
    <div class="left-div2">
      <img class="" src="{{asset('images/div2.jpg')}}" alt="" style="height: auto; width: 20rem; border-radius: 5rem;">
    </div>
    <div class="right-div2">
      <h2>Header</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus sem sit amet eros congue venenatis.</p>

      <h2>Header</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus sem sit amet eros congue venenatis.</p> 
      <button class ="btn btn-orange" style="margin-left: 20rem;">More about us</button>
    </div>
    </div>
  <div class="div3">
    <div class="right-div2">
        <h2>Header</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, alias magnam. Corporis, similique ipsum. Quasi ipsa consequatur labore enim cupiditate sed nulla debitis id ex repellat. Unde pariatur consequatur, obcaecati laborum aperiam beatae consequuntur.</p>
  
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus sem sit amet eros congue venenatis.</p> 
    </div>
      <div class="left-div2">
      <img class=""src="{{asset('images/div2.jpg')}}" alt="Image" style="height: auto; width: 20rem; border-radius: 5rem;">
    </div>
  </div>
  <div class="div4" style ="background-image: url('{{ asset('images/div4.jpg') }}')">
    <div>
    <p style="text-align: center;">Work Process</p>
    <h2 style="text-align: center; font-weight: bold;">How we Work</h2>
    </div>
    <div class="sub-div4">
    <div class="sub2-div4">
        <div>
            <h2 style="background-color: orange;color: black; margin-right:1rem; padding: 0.2rem;border-radius: 1rem;">01</h2>
        </div>
        <div>
      <h5 class="header">Header 1</h2>
      <p class="text">Text 1</p>
    </div>
    </div>
    
    <div class="sub2-div4">
        <div>
            <h2 style="background-color: orange;color: black; margin-right:1rem; padding: 0.2rem;border-radius: 1rem;" >02</h2>
        </div>
        <div>
      <h5 class="header">Header 1</h2>
      <p class="text">Text 1</p>
    </div>
    </div>
    
    <div class="sub2-div4">
        <div>
            <h2 style="background-color: orange;color: black; margin-right:1rem; padding: 0.2rem; border-radius: 1rem;">03</h2>
        </div>
        <div>
      <h5 class="header">Header 1</h2>
      <p class="text">Text 1</p>
    </div>
    </div>
    </div>
  </div>
  <div class="div5">
    <div class="div5_1" style="margin-left: 3rem;">
    <p style="font-weight:bold;padding-top:2rem;margin-bottom:0;font-size:30px">Our Team</p>
    <h2 style="color:orange;font-weight:bold;font-size:50px;margin-top:0">Meet our Experts</h2>
    </div>
    <div class="div5_2">
      <img src="{{asset('images/div5_1.jpg')}}" alt="" style="height:25rem;width:20rem;border-radius:4rem">
      <img src="{{asset('images/div5_2.jpg')}}" alt="" style="height:25rem;width:20rem;border-radius:4rem">
      <img src="{{asset('images/div5_3.jpg')}}" alt="" style="height:25rem;width:20rem;border-radius:4rem">
      <img src="{{asset('images/div5_4.png')}}" alt="" style="height:25rem;width:20rem;border-radius:4rem">
    </div>
  </div>

  <div class="div6">
    <h2 style="text-align:center; font-weight:bold;font-size:50px">Leading way in Building & Civil Construction</h2>
    <div>
      <div class="div6_1">
      <div class="div6_1_left">
        <h3>Request a Quote</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam error, voluptates obcaecati impedit ullam accusamus.</p>
        <form action="#" class="form1">
          <div class="form1_grid">
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Phone">
            <select name="service" id="service" placeholder="Choose a service">
              <option value="abc">Select your service</option>
              <option value="abc">def</option>
            </select>
          </div>
          <div class="form1_grid">
            <input type="text"  style="margin-top:0.5rem;width:58.5rem;height:10rem" placeholder="">
            </div>
            <button type="button" class="btn btn-secondary btn-dark btn-block" style="margin-top:0.5rem;font-weight:bold;height:3rem">Submit Request</button>
        </form>
      </div>
      <div class="div6_1_right">
        <h2>Contact Info</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <h4>Our Location</h4>
        <p>Lorem, ipsum dolor.</p>
        <h4>Quick Contact</h4>
        <p>Lorem ipsum dolor sit.</p>
        <h4>Opening Hours</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
        <h4>Do you have any question, Just contact us to get Help</h4>
        <button type="submit" class="btn btn-secondary btn-dark btn-block" style="margin-top:1.1rem;font-weight:bold;height:3rem">Contact Info</button>

      </div>
    </div>
  </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
