@extends('layouts.app')
@section('content')
@can('post/create', Auth::user())

<div class="container">
    <div class="card">
        <div class="card-header">
            Create Post
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titile</label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Posst title">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button class="btn btn-primary">Post Now</button>
            </form>
        </div>
    </div>
</div>
@endcan
@endsection
