<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .movies_container{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1em;
            padding: 2em;
        }
        .movies_container>div{
            min-width: 25%;
        }
    </style>
    <title>Netflix</title>
  </head>
  <body>
    <h1>This is movies page</h1>
    <div class="movies_container" style="display: flex;flex-direction: row">
          @foreach ($movies as $movie)
          <div class="card" style="width: 18rem;">
            <img src="{{$movie['image']}}" class="card-img-top" alt="{{$movie['name']}}">
            <div class="card-body">
              <h5 class="card-title">{{$movie['name']}}</h5>
              <p class="card-text">{{$movie['description']}}</p>
              <form method="POST" action="/movies/{{$movie['id']}}/edit">
                @method('GET')
                @csrf
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
              <br>
              <form method="POST" action="{{route('movie.destroy',$movie['id'])}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
          @endforeach
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>