<x-layout>
                     <!--Start Contact Us-->
  <div class="container" id="Contact"> <!--Start Contact Us Container-->
    <h2 style="color:orange" class="text-center mb-4" >Contact US</h2>    <!-- Contact Us Heading -->
    @if(Session::has('message'))
<p class="">{{ Session::get('message') }}</p>
@endif
    <div class="row">           <!--Start Contact Us Row-->
      <div class="col-md-8">    <!--Start Contact Us 1st Column-->
        <form action="" method="post">
          @csrf
          <input class="form-control" name="name" placeholder="Name" /><br />
               @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
          <input class="form-control" name="phone" placeholder="Phone" /><br />
                @error('phone')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
          <input class="form-control" name="email" placeholder="E-mail" /><br />
                @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
          <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
          <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
        </form>
        
      </div>  <!-- End Contact Us 1st Column-->
      <div class="col-md-4 text-jastify">    <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Shrotriya ji pvt.ltd, <br>
        Shyam Nagar, Etah <br>
        U.P - 207001 <br>
        Phone: +7982748233 <br> 
        <a href="https://www.shrotriyaji.com" target="_blank">www.shrotriyaji.com</a> <br>
    
        <br><br>
        <strong>Ghaziabad Branch:</strong> <br>
        Shrotriya ji pvt.ltd, <br>
        Sec 11, Prtap vihar Ghaziabad <br>
        U.P - 201009 <br>
        Phone: +7302728533 <br> 
        <a href="https://www.shrotriyaji.com" target="_blank">www.shrotriyaji.com</a> <br>
      </div>    <!-- End Contact Us 2nd Column-->
    </div>    <!-- End Contact Us Row-->
  </div>  <!-- End Contact Us Container-->    <!-- End Contact Us -->

                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>