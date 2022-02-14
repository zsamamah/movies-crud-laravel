<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Movie</title>
  </head>
  <body>
    <div class="container">
      @foreach ($movie as $item)
      <h1>Edit {{$item['name']}} - {{$item['gener']}}</h1>
    <form method="POST" action="/movies/{{$id}}">
      @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Movie Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$item['name']}}" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Movie Image</label>
          <input type="text" class="form-control" id="image" name="image" value="{{$item['image']}}" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Movie Description</label>
          <input type="text" class="form-control" id="description" name="description" value="{{$item['description']}}" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
            <label for="gener" class="form-label">Movie Description</label>
            <select class="form-select" id="gener" name="gener" aria-label="Default select example">
                @foreach ($geners as $gener)
                    <option value="{{$gener['id']}}">{{$gener['gener']}}</option>
                @endforeach
              </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Movie</button>
      </form>
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