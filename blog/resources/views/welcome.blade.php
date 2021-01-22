@extends('layout.app')
@section('content')
<h1 class="text-center">ISO Blog</h1>
<div class="list-group">
    <a href="/blog" class="list-group-item list-group-item-action active btn btn-success btn-lg text-center">Create Blog</a>
    <a href="#" onclick="doSomething()" class="btn btn-danger btn-lg col-md-12">Pointless Button</a>
    @foreach($blogs as $blog)
    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $blog->title }}</h5>
            <small>3 days ago</small>
        </div>
        <p class="mb-1"> {{ $blog->content}} </p>
        <small>Donec id elit non mi porta.</small>
    </a>
    @endforeach
</div>

<script src="{{ asset('js/app.js') }}"></script>
@endsection
