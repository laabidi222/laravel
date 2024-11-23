@extends('Layout.main')

@push('title')
    <title> Home </title>
@endpush

@section('main-section')
    <!doctype html>
    <html lang="en">

    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    </head>

    <body>

        <div class="container mt-5">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="table-responsive ">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr class="">
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->gender }}</td>
                                <td>
                                    <a href="{{ url('/customer/delete/') }}/{{ $customer->customer_id }}"><button
                                            class="btn btn-danger">Delete</button></a>

                                </td>
                                <td>
                                    <a href="{{ url('/customer/edit/') }}/{{ $customer->customer_id }}"><button
                                            class="btn btn-success">Edit</button></a>
                                </td>
                                <td>
                                    <a href="{{ url('/upload') }}"><button class="btn btn-primary">upload</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </body>

    </html>
@endsection
