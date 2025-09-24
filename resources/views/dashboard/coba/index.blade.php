@extends('layout.app')

@section('style')

@endsection

@section('content')
<div>
    <a href="{{route('coba.create')}}">tambah</a>
    <table border="1" cellspacing="0" cellpadding="8">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coba as $index => $item)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->nim}}</td>
                        <td>
                            <a href="{{Route('coba.edit', $item->id)}}">
                                <button>Edit</button>
                            </a>
                            <form action="{{Route('coba.destroy', $item->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection

@section('script')
@endsection
