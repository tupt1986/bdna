@extends('layouts.index')

@if(Session::has('msg'))
    {{Session::get('msg')}}
@endif
@section('title')
    QUẢN LÝ DANH MỤC BƯU GỬI VÔ THỪA NHẬN
@endsection

@section('content')
    <div class="headline">
        <h2 class="heading-sm">Nhập danh sách bưu gửi vô thừa nhận từ file từ file</h2>
    </div>
    <form action="{{route('vothuanhan.import')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label>Import file:</label>
        <input type="file" name="file">
        <button type="submit">Import</button>
    </form>
@endsection
