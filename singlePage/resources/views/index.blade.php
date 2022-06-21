
   <x-layout>                  
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services"> 
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fab fa-android fa-10x text-success"></i></a>
        <h4 class="mt-4">Android Application</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-desktop fa-10x text-primary"></i></a>
        <h4 class="mt-4">Web Application</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-database fa-10x text-info"></i></a>
        <h4 class="mt-4">Database</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Course  -->
  <div class="container pt-5" id="Courses"> <!-- Start Course Container -->
    <h2 class="text-center">Our Courses</h2>  <!-- Course Heading -->
    <div class="row mt-4">        <!-- Start Course 1st Row -->
      <div class="col-lg-6 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <img src="{{asset('assets/images/course1.jpeg')}}" alt="" class="img-fluid">
      </div>  <!-- End Course 1st Row's 1st Column -->

      <div class="col-lg-6">    <!-- Start Course 1st Row's 2nd Column -->
        <h2 class="text-center">Learn Java Programming</h2> <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ducimus, modi aut consequatur dolore ut praesentium esse recusandae at amet. Dolorem eius obcaecati ratione, quas laborum consequatur inventore vitae nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos asperiores magnam culpa ullam. Quasi voluptatem eveniet sed velit tempore eaque adipisci magnam recusandae quaerat praesentium illo, animi, sit ratione quo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi atque ipsam optio, iusto explicabo odit suscipit delectus quis eum adipisci quo voluptas laboriosam quisquam sit, sint asperiores eius in!</p>
      </div>  <!-- End Course 1st Row's 2nd Column -->
    </div>  <!-- End Course 1st Row -->

    <div class="row mt-4">    <!-- Start Course 2nd Row -->
      <div class="col-lg-6">  <!-- Start Course 2nd Row's 1st Column -->
        <h2 class="text-center">Real World Projects</h2> <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ducimus, modi aut consequatur dolore ut praesentium esse recusandae at amet. Dolorem eius obcaecati ratione, quas laborum consequatur inventore vitae nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos asperiores magnam culpa ullam. Quasi voluptatem eveniet sed velit tempore eaque adipisci magnam recusandae quaerat praesentium illo, animi, sit ratione quo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi atque ipsam optio, iusto explicabo odit suscipit delectus quis eum adipisci quo voluptas laboriosam quisquam sit, sint asperiores eius in!</p>
      </div>  <!-- End Course 2nd Row's 1st Column -->
      <div class="col-lg-6 mb-4">   <!-- Start Course 2nd Row's 2nd Column -->
        <img src=" {{asset('assets/images/course2.jpeg')}}" alt="" class="img-fluid">
      </div>    <!-- End Course 2nd Row's 2nd Column -->
    </div>    <!-- End Course 2nd Row -->
    <div class="row mt-4">    <!-- Start Course 2nd Row -->
      <div class="col-lg-6">  <!-- Start Course 2nd Row's 1st Column -->
        <h2 class="text-center">Learn Web Development</h2> <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ducimus, modi aut consequatur dolore ut praesentium esse recusandae at amet. Dolorem eius obcaecati ratione, quas laborum consequatur inventore vitae nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos asperiores magnam culpa ullam. Quasi voluptatem eveniet sed velit tempore eaque adipisci magnam recusandae quaerat praesentium illo, animi, sit ratione quo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi atque ipsam optio, iusto explicabo odit suscipit delectus quis eum adipisci quo voluptas laboriosam quisquam sit, sint asperiores eius in!</p>
      </div>  <!-- End Course 2nd Row's 1st Column -->
      <div class="col-lg-6 mb-4">   <!-- Start Course 2nd Row's 2nd Column -->
        <img src=" {{asset('assets/images/course2.jpeg')}}" alt="" class="img-fluid">
      </div>    <!-- End Course 2nd Row's 2nd Column -->
    </div>
  </div> <!-- End Course Container --> <!-- End Course  -->

  <!-- Start Team  -->
  <div class="jumbotron bg-danger" id="Team">   <!-- Start Team Jumbotron -->
    <div class="container">     <!-- Start Team Container -->
      <h2 class="text-center text-white">Team</h2>    <!-- Team Heading-->
      <div class="row mt-5">    <!-- Start Team Row-->
        <div class="col-lg-3 col-sm-6">     <!-- Start Team 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="{{asset('assets/images/avtar5.jpeg')}}" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Shrotriya</h4>
              <p class="card-text"><strong>Diractor</strong><br>
                  Qulification - B.ed <br>
                  Experience: 3year <br> </p>
            </div>
          </div>
           <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="{{asset('assets/images/avtar1.jpeg')}}" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Hitakshi Mishra</h4>
              <p class="card-text"><strong>Counslor</strong><br>
                  Qulification - B.A <br>
                  Experience: 3year <br> </p>
            </div>
          </div>
        </div>    <!-- End Team 1st Column-->

        <div class="col-lg-3 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="{{asset('assets/images/avtar2.jpeg')}}" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Himanshu Mishra</h4>
              <p class="card-text"><strong>Software Engineer</strong><br>
                  Qulification - B.tech <br>
                  Experience: 3year <br></p>
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->

        <div class="col-lg-3 col-sm-6">       <!-- Start Team 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="{{asset('assets/images/avtar3.jpeg')}}" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Ojas Trivedi</h4>
              <p class="card-text"><strong>Java Developer</strong><br>
                  Qulification - B.tech <br>
                  Experience: 3year <br></p>
            </div>
          </div>
        </div>       <!-- End Team 3rd Column-->

        <div class="col-lg-3 col-sm-6">        <!-- Start Team 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="{{asset('assets/images/avtar4.jpeg')}}" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Anand Yadav</h4>
              <p class="card-text"><strong>Php Developer</strong><br>
                  Qulification - B.tech <br>
                  Experience: 3year <br></p>
            </div>
          </div>
        </div>     <!-- End Team 4th Column-->
      </div>    <!-- End Team Row-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->
</x-layout>
 
