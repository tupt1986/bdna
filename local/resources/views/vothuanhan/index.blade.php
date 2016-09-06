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
            <i class="icon-user-follow"></i> Thêm mới
        </button>
        <button class="btn-u btn-brd rounded-4x" onclick="window.open('{{url('/vothuanhan/import')}}', '_self')">
            <i class="icon-user-follow"></i> Import
        </button>
        <button class="btn-u btn-brd rounded-4x" onclick="window.open('/bdna/mau_import.xls', '_self')">
            <i class="icon-user-follow"></i> Tải mẫu file import
        </button>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>STT</th>
            <th>Số hiệu bưu gửi</th>
            <th>Ngày gửi</th>
            <th>Thông tin người gửi</th>
            <th>Thông tin người nhận</th>
            <th>Trọng lượng</th>
            <th>Loại bưu gửi</th>
            <th>Nội dung bưu gửi</th>
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
