@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title">{{ __('Create a Trip') }}</h1>

        <form action="{{ route('trips.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="field">
                <label class="label" for="name">{{ __('Trip name') }}</label>
                <p class="control">
                    <input type="text" class="input" name="name" id="name" value="{{ old('name') }}">
                </p>
            </div>
            <div class="field">
                <label class="label" for="description">{{ __('Description') }}</label>
                <textarea name="description" id="description" class="textarea">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="button is-primary">Submit</button>
        </form>
    </div>
@endsection