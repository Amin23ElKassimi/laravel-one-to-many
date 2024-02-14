@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            @include('partials.errors')

            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="mb-3 input-group">
                    <label for="name" class="input-group-text">Name Project:</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                </div>


                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text">Status:</label>
                    <select class="form-select" aria-label="Default select example" name="author" id="author" value="{{ old('author') }}" >
                        <option selected>Select Priority</option>
                        <option value="off">Off</option>
                        <option value="blocked">Blocked</option>
                        <option value="hold">Hold</option>
                        <option value="ready">Ready</option>
                        <option value="done">Done</option>
                    </select>
                </div>

                <div class="mb-3 input-group">
                    <label for="budget" class="input-group-text">Budget:</label>
                    <input class="form-control" type="number" name="budget" id="budget" value="{{ old('budget') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="start_date" class="input-group-text">Start Date:</label>
                    <input class="form-control" type="date" name="start_date" id="start_date" value="{{ old('start_date') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="end_date" class="input-group-text">End Date:</label>
                    <input class="form-control" type="date" name="end_date" id="end_date" value="{{ old('end_date') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="view" class="input-group-text">Post image url:</label>
                    <input class="form-control" type="text" name="view" id="view" value="{{ old('view') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Post content:</label>
                    <textarea class="form-control"  name="description" id="description" cols="30" rows="10">{{ old('description')  }}</textarea>
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn-primary">
                        Create new post
                    </button>
                    <button type="reset" class="btn btn-xl btn-warning">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection