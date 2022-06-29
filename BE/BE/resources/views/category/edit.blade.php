<!-- resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
<title>Dashboard</title>
@endsection

<!-- @section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection     -->
@php
use App\Helper\Common;
$arr = [
 'Dashboard'=>route('Dashboard'),
 'Categories'=>route('category.index'),
 'CategoriesAdd'=>route('create'),
];
$links = Common::autoCreateBreadCrumb($arr);

@endphp
@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sửa Sản Phẩm</h1>
    {!!$links!!}
    <!-- <h6>Dashboard / <a style="text-decoration: none; color: #434349" href="{{ route('category.index') }}">Category</a></h6> -->
    <!-- <br> -->


    <!-- DataTales Example -->
    <div class="card shadow-none border-0 mb-4">
        <form action="{{ route('update', ['id' => $category->id]) }}" method="post" style="background-color: #f8f9fc">
             @csrf
            <div class="form-group">
                <label>Tên Danh Mục</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="Nhập tên danh mục">
            </div>
            <div class="form-group">
                <label>Chọn danh mục cha</label>
                <select class="form-control" name="parent_id">
                    <option value="0" selected>Chọn danh mục cha</option>
                    {!! $categorys !!}
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Main Content -->
@endsection