@extends('layouts.index')

@if(Session::has('msg'))
    {{Session::get('msg')}}
@endif
@section('title')
    QUẢN LÝ DANH MỤC BƯU GỬI VÔ THỪA NHẬN
@endsection

@section('content')
    <div class="headline">
        <h2 class="heading-sm">Danh sách bưu gửi vô thừa nhận</h2>
    </div>
    <div class="row" align="right">
        <button class="btn-u btn-brd rounded-4x" onclick="window.open('{{url('/vothuanhan/create')}}', '_self')">
            Thêm mới
        </button>
        <button class="btn-u btn-brd rounded-4x" onclick="window.open('{{url('/vothuanhan/import')}}', '_self')">
            Import
        </button>
        <button class="btn-u btn-brd rounded-4x" onclick="window.open('/bdna/mau_import.xls', '_self')">
            Tải mẫu file import
        </button>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>STT</th>
            <th>Số hiệu</th>
            <th>Ngày gửi</th>
            <th>Người gửi</th>
            <th>Người nhận</th>
            <th>Trọng lượng</th>
            <th>Loại BG</th>
            <th>Nội dung</th>
            <th>Ghi chú</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bg_vothuanhans as $vothuanhan)
            <tr>
                    <td>{{$stt++}}</td>
                    <td>{{$vothuanhan->sohieu}}</td>
                    <td>{{$vothuanhan->ngaythang}}</td>
                    <td>{{$vothuanhan->nguoigui}}</td>
                    <td>{{$vothuanhan->nguoinhan}}</td>
                    <td>{{$vothuanhan->trongluong}}</td>
                    <td>{{$vothuanhan->loaibuugui}}</td>
                    <td>{{$vothuanhan->noidung}}</td>
                    <td>{{$vothuanhan->ghichu}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        function ConfirmDelete() {
            var x = confirm("Chắc chắn muốn xóa người dùng?");
            if (x)
                return true;
            else
                return false;
        }

    </script>
@endsection
