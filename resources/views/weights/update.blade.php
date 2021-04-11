@extends('layout')

@section('content')


    <div class="card mt-5">
        <div class="card-header">
            Update
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('weights.store', $weight->id) }}">
                <div class="form-group">
                    @csrf
                    <label for="tanggal">Tanggal</label>
                    <input class="date form-control" type="text" name="tanggal" value="{{ $weight->tanggal }}">
                </div>
                <div class=" form-group">
                    <label for="max">Max</label>
                    <input type="max" class="form-control" name="max" value="{{ $weight->max }}" />
                </div>
                <div class="form-group">
                    <label for="min">Min</label>
                    <input type="min" class="form-control" name="min" value="{{ $weight->min }}" />
                </div>

                <button type="submit" class="btn btn-block btn-danger">Update</button>
            </form>
        </div>
    </div>
@endsection
