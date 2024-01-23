@extends('template.template')

@section('body')

@endsection

@section('head')
    <div class="p-5">
        <h1>Create News</h1>

        <form action="{{route('storeNews')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title">
            </div>

            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" name="image">
            </div>

            <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="mb-3">
                <label for="">Author</label>
                <input type="text" name="author" id="">
            </div>

            <div class="mb-3">
                <label for="">Date</label>
                <input type="date" name="date">
            </div>

            <button type="submit">Create</button>

        </form>

    </div>
@endsection
