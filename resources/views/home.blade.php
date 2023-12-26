<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6 mx-auto">
              <h2 class="text-center">Book Your Bus Seat</h2>
                <form method="post" action="{{ url('/') }}/show">
                    @csrf
                    <div class="mb-3">
                      <label for="from" class="form-label">From</label>
                      <input type="text" name="from" class="form-control" id="from" >
                      
                    </div>
                    <div class="mb-3">
                      <label for="to" class="form-label">To</label>
                      <input type="text" name="to" class="form-control" id="to" >
                      
                    </div>
                    <div class="mb-3">
                      <label for="doj" class="form-label">Date of Journey</label>
                      <input type="date" name="doj" class="form-control" id="doj" >
                      
                    </div>
                    
                    <button  type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>