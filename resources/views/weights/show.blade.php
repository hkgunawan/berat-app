@extends('layout')

@section('content')
    <div class="mt-5">
        <a href="{{ route('weights.index') }}" class="btn btn-light">Back</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <td>Tanggal</td>
                        <td>{{ $weight->tanggal }}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Max</td>
                        <td>{{ $weight->max }}</td>
                    </tr>
                    <tr>
                        <td>Min</td>
                        <td>{{ $weight->min }}</td>
                    </tr>
                    <tr>
                        <td>Perbedaan</td>
                        <td>{{ $weight->difference }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
        @endsection
