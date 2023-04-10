<html>




<head>
  <title> {{  $profile->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">   
    <style>
.gradient-custom {
    background: linear-gradient(to top, rgba(196, 113, 245, 1), rgba(250, 113, 205, 1))
}


</style>
</head>



<body>

    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                  <div class="col-md-4 gradient-custom text-center text-white"  >

                    <img  class="rounded-circle mt-4 img-fluid mb-3" src="{{asset('images/'.$profile->image)}}"
                      alt="profile pic "    style="width: 80px;" />
                    <h5>   {{ $profile->name}}</h5>
                    <p> 400L</p>
                  <a  href="{{ url('edit-student/'.$profile->id)}}"> <i class="far fa-edit mb-5 text-light"></i> </a>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-4">
                      <h6>Information</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Email</h6>
                          <p class="text-muted">{{ $profile->email}}</p>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Phone</h6>
                          <p class="text-muted">{{ $profile->phone}}</p>
                        </div>
                      </div>
                      <h6>Address</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                       
                        
                          <p class="text-muted">{{ $profile->address}}</p>
                         
                     
                      </div>

                      
                      <div class="d-flex justify-content-start">
                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                    
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>

</html>