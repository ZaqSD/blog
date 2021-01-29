@extends('layout.app')
@section('content')
<h1 class="text-center">Blog erfassen</h1>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="/blog">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="lead" class="form-label">Lead</label>
                <textarea class="form-control" id="lead" rows="5" name="lead"></textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="5" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
