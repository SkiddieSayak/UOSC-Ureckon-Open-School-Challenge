<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ureckon Open School Challenge | Register</title>
    <!--  meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous">
    <!-- Form CSS -->
    <link rel="stylesheet" href="{{ asset('css/form.css')}}">
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
      <!-- Google Fonts CSS -->
      <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logos/favicon.png')}}" type="image/x-icon">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{asset('css/nav_bar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  </head>

  <body>
    <div class="nav-btn ntbn-vis"><i id="ntbni" class="fas fa-bars"></i></div>
    <div class="nav-btn-close closebtn-hid">
      <i id="ntbni" class="fas fa-times"></i>
    </div>

    <div class="nav-bar close">
      <div class="nav-container">
        <h1 class="menu">MENU</h1>
        <a href="/" class="list-item">HOME</a>
        <a href="/about" class="list-item">ABOUT</a>
        <a href="/register" class="list-item">REGISTER</a>
        <a href="/" class="list-item">GALLERY</a>
        <a href="/contact" class="list-item">CONTACT</a>
      </div>
    </div>

    <a href="/"><img src="{{asset('assets/img/brand-logo.svg')}}" alt="" class="logo" /></a>
    <div class="navbar"></div>
    <h1 class="text-center head animated rubberBand">Register</h1>
    <hr class="mt-3">
    <div class="container jumbotron mx-auto mt-4 animated zoomIn">
      <div class="text-center alert alert-success" id="alertSuccess" role="alert">
      <h5>Details submitted successfully</h5>
      </div>
      <!-- Start of form -->
      <form method="POST" id="registrationForm" action='/registers' class="">
          @csrf
          <h5 class="mb-4 ml-2">Basic Details&#58;</h5>
        <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Team Name">
          <label class="label-input100">Team Name</label>
          <input type="text" name="team" class="form-control input100" id="teamName" placeholder="Enter your Team Name" required>
        </div>
        <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter School Name">
          <label class="label-input100">School Name</label>
          <input type="text" name="school" class="form-control input100" id="schoolName" placeholder="Enter your School Name" required>
        </div>
        <div class="form-group wrap-input100 validate-input bg1">
          <label class="label-input100">Select Event</label>
          <select name="eventSelector" class="form-control js-select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" id="events" onchange="eventSelected(this)" >
            <option value="ps">Please Select</option>
            <option value="coding">CodeWise &#40;3 Members&#41;</option>
            <option value="quiz">UreckQuiz &#40;3 Members&#41;</option>
            <option value="model">Urecka &#40;5 Members&#41;</option>
          </select>
        </div>
        <div id="member1" class="mt-4">
          <h5>Member 1 &#40;Team Leader&#41; Details&#58;</h5>
          <div class="form-group mt-3 wrap-input100 validate-input bg1" data-validate="Please Enter Member 1's Name">
            <label class="label-input100">Name</label>
            <input type="text" name="name1" class="form-control input100" id="member1-name" placeholder="Enter your name" required>
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 1's Class">
            <label class="label-input100">Class</label>
            <input type="text" name="class1" class="form-control input100" id="member1-class" placeholder="Enter your class" required>
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 1's Contact Number">
            <label class="label-input100">Contact Number</label>
            <input type="text" name="contact1" class="form-control input100" id="member1-contact" placeholder="Enter your contact number" required>
          </div>
        </div>
        <div id="member2" class="mt-4">
        <h5>Member 2 Details&#58;</h5>
          <div class="form-group mt-3 wrap-input100 validate-input bg1" data-validate="Please Enter Member 2's Name">
            <label class="label-input100">Name</label>
            <input type="text" name="name2" class="form-control input100" id="member2-name" placeholder="Enter your name" required>
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 2's Class">
            <label class="label-input100">Class</label>
            <input type="text" name="class2" class="form-control input100" id="member2-class" placeholder="Enter your class" required>
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 2's Contact Number">
            <label class="label-input100">Contact Number</label>
            <input type="text" name="contact2" class="form-control input100" id="member2-contact" placeholder="Enter your contact number" required>
          </div>
        </div>
        <div id="member3" class="mt-4">
          <h5>Member 3 Details&#58;</h5>
          <div class="form-group mt-3 wrap-input100 validate-input bg1" data-validate="Please Enter Member 3's Name">
            <label class="label-input100">Name</label>
            <input type="text" name="name3" class="form-control input100" id="member3-name" placeholder="Enter your name" required>
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 3's Class">
            <label class="label-input100">Class</label>
            <input type="text" name="class3" class="form-control input100" id="member3-class" placeholder="Enter your class" required>
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 3's Contact Number">
            <label class="label-input100">Contact Number</label>
            <input type="text" name="contact3" class="form-control input100" id="member3-contact" placeholder="Enter your contact number" required>
          </div>
        </div>
        <div id="member4" class="mt-4">
          <h5>Member 4 Details&#58;</h5>
          <div class="form-group mt-3 wrap-input100 validate-input bg1" data-validate="Please Enter Member 4's Name">
            <label class="label-input100">Name</label>
            <input type="text" name="name4" class="form-control input100" id="member4-name" placeholder="Enter your name">
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 4's Class">
            <label class="label-input100">Class</label>
            <input type="text" name="class4" class="form-control input100" id="member4-class" placeholder="Enter your class">
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 4's Contact Number">
            <label class="label-input100">Contact Number</label>
            <input type="text" name="contact4" class="form-control input100" id="member4-contact" placeholder="Enter your contact number">
          </div>
        </div>
        <div id="member5" class="mt-4">
          <h5>Member 5 Details&#58;</h5>
          <div class="form-group mt-3 wrap-input100 validate-input bg1" data-validate="Please Enter Member 5's Name">
            <label class="label-input100">Name</label>
            <input type="text" name="name5" class="form-control input100" id="member5-name" placeholder="Enter your name" >
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 5's Class">
            <label class="label-input100">Class</label>
            <input type="text" name="class5" class="form-control input100" id="member5-class" placeholder="Enter your class" >
          </div>
          <div class="form-group wrap-input100 validate-input bg1" data-validate="Please Enter Member 5's Contact Number">
            <label class="label-input100">Contact Number</label>
            <input type="text" name="contact5" class="form-control input100" id="member5-contact" placeholder="Enter your contact number" >
          </div>
        </div>
        <button type="submit" class="mt-4 btn btn-primary btn-lg text-center mx-auto contact100-form-btn">Submit <i class="fas fa-arrow-circle-right"></i></button>
      </form>
      <!-- End of Form -->
      </div>

      <footer class="footer">
        <div class="container_img">
          <a href="https://uem.edu.in"><img src="{{asset('assets/img/logos/UEM_03.png')}}" alt="" class="logo_uem"></a>
          <a href="https://www.isro.gov.in/"><img src="{{asset('assets/img/logos/ISRO_03.png')}}" alt="" class="logo_isro"></a>
          <a href="http://iem.edu.in/"><img src="{{asset('assets/img/logos/IEM_03.png')}}" alt="" class="logo_iem"></a>
        </div>
      </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <!-- Navbar script -->
    <script src="{{ asset('js/navbar.js')}}"></script>
    <!-- form Validation script -->
    <script src="{{ asset('js/validate.js')}}"></script>
    <!-- Registration script -->
    <script src="{{ asset('js/register.js')}}"></script>
  </body>
</html>
