<!doctype html>
<html lang="en">

<head>
  <title>upload</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{url('/')}}/upload" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="mb-3">
              <label for="" class="form-label">File</label>
              <input type="file" name="images" id="" class="form-control" placeholder="" aria-describedby="helpId">
              {{-- <small id="helpId" class="text-muted">Help text</small> --}}
            </div>
            <button class="btn btn-primary">Upload</button>
        </div>
    </form>
</body>

</html>