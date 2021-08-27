@extends('layouts.master')

@section('title')
Booking | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Danh sách Booking</h4>
                @if (session('status-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status-success') }}
                    </div>
                @endif
                <form class="form-inline" role="form" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control" name="key" placeholder="Search Key">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>


            <div class="card-body">
                <div class="table-hover">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Khách hàng</th>
                            <th>Tour</th>
                            <th>Trạng thái</th>
                            <th>Số lượng người lớn</th>
                            <th>Số lượng trẻ em</th>
                            <th>Tổng tiền</th>
                            <th>Ghi chú</th>
                            <th>Ở tại khách sạn?</th>
                            <th>Ngày tạo</th>
                            <th>Hành Động</th>
                        </thead>
                        <tbody>
                            @foreach($booking as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->customers->l_name}} {{$book->customers->f_name}}</td>
                                <td>{{$book->tours->name}}</td>
                                <td>
                                    <span class="badge badge-{{$book->getStatus($book->status)['class']}}">
                                        {{$book->getStatus($book->status)['name']}}
                                    </span>
                                </td>
                                <td>{{$book->adult_number}}</td>
                                <td>{{$book->children_number}}</td>
                                <td>{{$book->total_price}}</td>
                                <td>{{$book->note}}</td>
                                <td>{{$book->hotel_status}}</td>
                                <td>{{$book->created_at}}</td>
                                <td>
                                    <div class="dropdown open">
                                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Hành Động
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <form action="{{route('admin.booking.destroy',$book->id)}}" method="POST" class="dropdown-item">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                            <a class="dropdown-item" href="{{route('admin.booking.status',['process',$book->id])}}">
                                                <span class="badge badge-secondary">Chờ Xử Lý</span>
                                            </a>
                                            <a class="dropdown-item" href="{{route('admin.booking.status',['success',$book->id])}}">
                                                <span class="badge badge-success">Đã Thanh Toán</span>
                                            </a>
                                            <a class="dropdown-item" href="{{route('admin.booking.status',['danger',$book->id])}}">
                                                <span class="badge badge-danger">Đã Hủy</span>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection


@section('scripts')

@endsection