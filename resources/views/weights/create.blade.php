@extends('layout')

@section('content')

    <div class="card mt-5">
        <div class="card-header">
            Berat Baru
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
            <form method="post" action="{{ route('weights.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="tanggal">Tanggal</label>
                    <input class="date form-control" type="text" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="max">Max</label>
                    <input type="max" class="form-control" name="max" />
                </div>
                <div class="form-group">
                    <label for="min">Min</label>
                    <input type="min" class="form-control" name="min" />
                </div>
                <button type="submit" class="btn btn-block btn-primary">Add</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy-mm-dd'
        });

    </script>
@endsection
