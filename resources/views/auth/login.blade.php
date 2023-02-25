<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Cheetos | Admin | Log In</title>

   <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/adminx1.css') }}" media="screen" />
</head>
<body>
  <div class="bg"></div>
   <div class="card w-25 p-3" style="margin-left: 37%; margin-top: 110px;">
      <div class="card-body">
        <a href="/registerAdmin"><button type="submit" class="btn btn-sm btn-block btn-primary">Registration</button>
        </a>
      </div>
      <div class="card-seperator">
        <span>or</span>
      </div>
       <div class="card-body">
         <form action="" method="POST">
          @csrf
           <div class="form-group">
             <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
             <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail1" placeholder="email@example.com">
           </div>
           <div class="form-group">
             <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
             <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword1" placeholder="Enter Password">
           </div>
           <button type="submit" class="btn btn-sm btn-block btn-primary">Log In</button>
         </form>
       </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
   <script src="{{ asset('dist/js/vendor.js') }}"></script>
   <script src="{{ asset('dist/js/adminx.js') }}"></script>
</body>
</html>