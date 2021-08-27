@extends('layouts.app')
@section('content')
    <div class="container card">
        <table class="table table-bordered ">
            <thead>
              <tr>
                <th scope="col">SN</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $serial = 1;
                @endphp
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$serial++}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td style="display: inline-block">
                        <a href="#"><i class="bi bi-eye"></i></a>
                        <a href="#"><i class="bi bi-pencil-square"></i></a>
                        <a href="#"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
    </div>
@endsection
