@extends('layout.app')

@section('style')

@endsection

@section('content')
<div>
    <form action="{{Route('coba.store')}}" method="post" class="flex flex-col items-center gap-3">
        @csrf
        <div>
            <label for="">nama</label>
            <input type="text" name="nama" placeholder="name" class="border-2">
        </div>
        <div>
            <label for="">nim</label>
            <input type="number" name="nim" placeholder="nim" class="border-2">
        </div>
        <div>
            <button type="submit" class=" bg-blue-600 text-white">
                submit
            </button>
        </div>
    </form>
</div>
@endsection

@section('script')
@endsection
