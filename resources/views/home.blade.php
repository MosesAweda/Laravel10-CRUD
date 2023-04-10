<html lang="en">
<head>
  <title> Laravel 10 CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  body  {
 
    background: linear-gradient(to top, rgba(196, 113, 245, 1), rgba(250, 113, 205, 1))
  }
  
  .theme  {
   
   background: rgba(250, 113, 205, 1)}

   .btn:hover {background: rgba(196, 113, 245, 1)}
  </style>

</head>

<body>
  @if($errors->any())
  <div class=" container   mt-3 d-flex justify-content-center">
 
  <div class="alert alert-danger alert-dismissible fade show  row m-3">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <ul class=" col-md-8">
      @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
  <div class="col-md-4">
    <img src="{{asset('images/no-try-again.gif')}}" class="rounded-circle shadow-4-strong" style="margin-right:30px" width="100" height="100">
  </div>
  </div>
  
   
  </div>
  @endif








  <!-- form -->

<div class="container mt-3 d-flex justify-content-center bg-light">
 
  <form action="{{url('save-student')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3" >
      <label for="email">name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" 
      value="{{ old('name')}}">
    </div>
    
    
    @error('name')
    
    <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong> {{ $message }}</strong>  
    </div>
    @enderror
    <div class="mb-3">
      <label for="pwd">email:</label>
      <input type="" class="form-control" id="pwd"   name="email">
    </div>
    @error('email')
    
    <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong> {{ $message }}</strong>  
    </div>
    @enderror
    <div class="mb-3">
        <label for="pwd">address:</label>
        <input type="text" class="form-control" id="pwd"   name="address">
      </div>
      @error('address')
    
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong> {{ $message }}</strong>  
      </div>
      @enderror

      <div class="mb-3">
        <label for="pwd">phone:</label>
        <input type="tel" class="form-control"  name="phone" >
      </div>
      @error('phone')
    
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong> {{ $message }}</strong>  
      </div>
      @enderror


      <div class="mb-3">
        <label for="pwd">image:</label>
        <input type="file" class=" custom-file-input form-control "  name="image" >
      </div>
      @error('image')
    
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>  {{  $message }}</strong>  
      </div>
      @enderror

     
    <button name="submit" type="submit" class="btn theme text-light ">Submit</button>
  </form>
</div>











<div class="row d-flex justify-content-center">
  <div class=" col-md-6 mt-3">
      @if(Session::has('success'))
      <div class="alert alert-info alert-dismissible fade show">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong> {{ Session::get('success') }}</strong>  
        </div>
          
   @endif
        </div>
        </div>
  
   
   
            <div class="row  d-flex justify-content-center">
               
  
    
                
  
              <div   class=" col-md-10 m-4 table-responsive overflow-visible:">
                <table class="table bg-light   " >
                      <thead>
                        <tr>
                          <th class="p-4"  >#</th>
                          <th class="p-4">Name</th>
                          <th class="p-4">Photo</th>
                          <th class="p-4" >Email</th>
                          <th class="p-4"  >Phone</th>
                          <th class="p-4">Address</th>
                          
                          <th class="p-4"> Action</th>
  
                        </tr>
  
                       
                            
                 
                      </thead>
                      <tbody>
                        @php
                       $i=1;
                        @endphp
                          @foreach ($data as $stu)
                          <td> {{ $i++}} </td>  
                          <td><img width="30"  height="30" src="{{ asset('images/'.$stu->image)}}" class="rounded-circle" > </td>
                        <td> {{ $stu->name}} </td>
                     
                        <td> {{ $stu->email }} </td>
                        <td> {{ $stu->phone }} </td>
                        <td> {{ $stu->address }} </td>
                        <td class="text-center"> <a class="btn theme" href="{{ url('edit-student/'.$stu->id)}}"><i class="fa-solid fa-pencil"></i>
                        </a>  </td>
                        <td class="text-center"> <a class=" btn theme " href="{{ url('view/'.$stu->id)}}"><i class="fa-solid fa-eye"></i></a>  </td>
                    <td class="text-center"> <a class=" btn theme" href="{{ url('delete-student/'.$stu->id)}}"><i class="fa-solid fa-trash-alt"></i></a>
                        </td>
                        
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                </div>
                </div>

                <footer>
                    <p class="text-white">&copy; 2023 Moses Aweda.</p>
                  </footer>
               
        
   
  
   
  
  
  
</body>
</html>
 
