<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <x-navbar />
    <br><br>
    
    <!-- Posts -->

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach($records as $records)
                <div class="card" id="{{$records->id}}">
                    <div class="card-header">
                        <h1>{{$records->title}}</h1>
                        <i>Posted by {{$records->updatedby}} on {{$records->created_at}}</i>
                    </div>
                    <div class="card-body">
                        <img src="storage/{{$records->image}}" width="100%" height="100%" alt="">
                        <h5>{{$records->subtitle}}</h5>
                        <p>{{$records->longdescription}}</p>
                    </div>
                    <div class="card-footer " style="display:flex;justify-content:space-around">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="fa fa-thumbs-up"></span> Like
                        </button>
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="fa fa-comments-o"></span> Comment
                        </button>
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="fa fa-share-alt"></span> Share
                        </button>
                    </div>
                </div>
                <br>
                @endforeach
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1>Recent Posts</h1>
                    </div>
                    <div class="card-body">
                        <ul>
                        @foreach($record as $rec)
                        <li><a href="#{{$rec->id}}">{{$rec->subtitle}}</a></li>

                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>