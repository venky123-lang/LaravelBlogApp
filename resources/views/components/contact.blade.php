<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<x-navbar />
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <center>Contact Us</center>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ url('/') }}/register" method="post">
                        @csrf
                        <label for="">name</label>
                        <input type="text" name="username" placeholder="Enter your name" id="" class="form-control" />
                        <label for="">Email</label>
                        <input type="Email" name="email" placeholder="Enter your mail Id" id="" class="form-control" />
                        <label for="">Mobile Number</label>
                        <input type="text" name="mobile" placeholder="Enter your mobile number" id="" class="form-control" />
                        <label for="">Query</label>
                        <textarea class="form-control" name="query" id="" cols="30" rows="10"></textarea>
                        <br>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
    
</body>
</html>