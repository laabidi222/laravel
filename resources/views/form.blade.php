@extends('Layout.main')

@push('title')
    <title> Register </title>
@endpush

@section('main-section')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{ $url }}" method="post" style="width:700px; margin-left:160px; ">
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
        {{-- @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif --}}

        @csrf
        <div class="container m-5">
            <h3><div class="text-center">{{ $title }}</div></h3>

            <div class="form-group m-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="1"
                    aria-describedby="helpId" placeholder="">
                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                <span class="text-danger">
                    @error('name')
                        {{ $message }};
                    @enderror
                </span>
            </div>

            <div class="form-group m-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="1"
                    aria-describedby="helpId" placeholder="">
                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <span class="text-danger">
                    @error('email')
                        {{ $message }};
                    @enderror
                </span>
            </div>
            <div class="form-group m-3">
                <label for="" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender" id="1"
                    aria-describedby="helpId" placeholder="">
                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                <span class="text-danger">
                    @error('gender')
                        {{ $message }};
                    @enderror
                </span>
            </div>

            

            <button class="btn btn-primary m-3">
                Register
            </button>
        </div>
    </form>

</body>

</html>

@endsection
