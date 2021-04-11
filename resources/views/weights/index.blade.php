@extends('layout')

@section('content')
    <div class="mt-5">
        <a href="{{ route('weights.create') }}" class="btn btn-primary">New</a>
        @if (session()->get('completed'))
            <div class="alert alert-success">
                {{ session()->get('completed') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <td>Tanggal</td>
                        <td>Max</td>
                        <td>Min</td>
                        <td>Perbedaan</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($weights as $weight)
                        <tr>
                            <td>{{ $weight->tanggal }}</td>
                            <td>{{ $weight->max }}</td>
                            <td>{{ $weight->min }}</td>
                            <td>{{ $weight->difference }}</td>
                            <td class="text-left">
                                <a href="{{ route('weights.show', $weight->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('weights.edit', $weight->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('weights.destroy', $weight->id) }}" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="table-dark">
                        <td>Rata-rata</td>
                        <td>{{ $avgmax }}</td>
                        <td>{{ $avgmin }}</td>
                        <td>{{ $avgdifference }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
        @endsection
