@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <h5 class="card-title">
                    Add Borrowing
                </h5>
            </div>
            <div class="card-body">
                <form action="/books/create" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author" autofocus value="">

                        {{-- @error('author')
                            {{ $message }}
                        @enderror --}}
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="">

                        {{-- @error('title')
                            {{ $message }}
                        @enderror --}}
                    </div>
                    <div class="form-group mb-3">
                        <label for="availability" class="form-label">Quantity</label>
                        <input type="numeric" class="form-control" id="availability" name="availability" value="">

                    </div>
                    <div class="form-group mb-3">
                        <label for="cover" class="form-label">Cover:</label>
                        <input type="file" class="form-control" id="cover" name="cover">

                    </div>
                    <div class="justify-content-end d-flex">
                        <a href="/books/index" class="btn btn-warning back-button me-2"><span>Back</span></a>
                        <button type="submit" class="btn btn-primary add-button"><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


{{-- <div style="margin-top: 100px;">
    <form action="/books/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" autofocus value="{{ old('author') }}">

            @error('author')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">

            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">

            @error('slug')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Cover:</label>
            <input type="file" class="form-control" id="cover" name="cover">

            @error('cover')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script type="module">
    let slug = document.querySelector("#slug");
    let input = document.querySelector("#title");

    input.addEventListener("change", async function() {
        if (!input.value) {
            slug.value = "";
        } else {
            fetch(`/books/checkSlug?title=${input.value}`)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    slug.value = data.slug;
                });
        }
    });
</script> --}}
