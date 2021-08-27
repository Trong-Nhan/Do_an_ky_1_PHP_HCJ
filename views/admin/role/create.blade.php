@extends('layouts.master')

@section('title')
Create Role | Wend Travel 
@endsection


@section('content')

<div class="row" ng-app="role" ng-controller="roleController">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Create Role</h4>
                @if (session('status-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status-success') }}
                    </div>
                @endif
                @if (session('status-danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status-danger') }}
                    </div>
                @endif
            </div>


            <div class="card-body">
                <form action="{{route('admin.role.store')}}" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="">Tên nhóm quyền</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group" style="height: 300px; overflow-y: auto">
                        <label for="">Routes</label>
                        
                        <input type="text" class="form-control" ng-model="rname" placeholder="Nhập từ khóa role" style="margin-bottom: 15px">
                        <label><input type="checkbox" id="check-all" ng-click="checkAll()"><b>Check All</b></label>
                        <div class="checkbox" ng-repeat="r in roles | filter:rname">
                            <label>
                                <input type="checkbox" class="role-item" name="route[]" value="@{{r}}">
                                @{{r}}
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Lưu Lại</button>
                </form>
            </div>
        </div>
    </div>
    
</div>

@endsection


@section('scripts')

<script type="text/javascript" src="{{url('public')}}/assets/js/angular.min.js"></script>
<script type="text/javascript">
    var app = angular.module('role',[]);

    app.controller('roleController', function($scope){
        var roles = '<?php echo json_encode($routes) ;?>';
        $scope.roles = angular.fromJson(roles);

    })

    //jquery check all
    $('#check-all').click(function(){
        var isChecked = $(this).is(':checked');
        $('.role-item').not(this).prop('checked',this.checked);
    })
</script>
@endsection