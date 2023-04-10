<html lang="en">
<head>
  <title>edit record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  body  {
 
    background: linear-gradient(to top, rgba(196, 113, 245, 1), rgba(250, 113, 205, 1))
  }
  
  .theme  {
   
   background: rgba(250, 113, 205, 1)}
  </style>

</head>

<body>



  <div class="row d-flex justify-content-center">
    <div class=" col-md-6 mt-3">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong> {{ Session::get('success') }}   </strong>  

            <a href="/home">  Go back </a>
          </div>
            
     @endif
          </div>
          </div> 
<div class="mx-5">
<div class="container mt-3  d-flex justify-content-center bg-light">

  <form action="{{url('update-student')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3" >
      <input hidden name="id" value="{{$data->id}}">
      <label for="email">name:  </label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" 
      value="{{$data->name}}">
    </div>
    
    
    @error('name')
    
    <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong> {{ $message }}</strong>  
    </div>
    @enderror



   
    <div class="mb-3">
        <label for="pwd">address:</label>
        <input type="text" class="form-control" id="pwd"   name="address" value="{{$data->address}}">
      </div>
      @error('address')
    
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong> {{ $message }}</strong>  
      </div>
      @enderror

      <div class="mb-3">
        <label for="pwd">phone:</label>
        <input type="tel" class="form-control"  name="phone"  value="{{$data->phone}}">
      </div>
      @error('phone')
    
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong> {{ $message }}</strong>  
      
      </div>
      @enderror



      
      <div class="mb-3">
        <label for="pwd">image:</label>
        <input type="file" class=" custom-file-input form-control "  name="image"  value="jj">
      </div>
      @error('image')
    
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>  {{  $message }}</strong>  
      </div>
      @enderror

 
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    <a href="/home" class="btn btn-danger"> Back</a>
  </form>
</div>

</div>







 
        
   
  
   
  
  
  
</body>
</html>
