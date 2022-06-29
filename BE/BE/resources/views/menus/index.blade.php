@extends('layouts.admin')
       @section('title')
       <title>Dashboard</title>
       @endsection

       @php
       use App\Helper\Common;
       $arr = [
       'Dashboard'=>route('Dashboard'),
       'Categories'=>route('category.index'),
       ];
       $links = Common::autoCreateBreadCrumb($arr);

       @endphp

       @section('content')


       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Danh Mục Menus</h1>
            {{-- {!!$links!!} --}}
           <br>


           <!-- DataTales Example -->
           <div class="card shadow mb-4">
               <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary">Chi Tiết Sản Phẩm</h6>
               </div>
               <div class="div-col-md-12">
                   <a href="{{ route('menus.create') }}" class="btn btn-success float-right m-4">Thêm</a>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Tên Danh Mục</th>
                                   <th>Action</th>
                               </tr>
                           </thead>

                           <tfoot>

                           </tfoot>
                           <tbody>
                               @foreach($menus as $menu)
                               <tr>
                                   <td scope="row">{{ $menu->id }}</td>
                                   <td>{{ $menu->name }}</td>
                                   <td>
                                       <a href="{{ route('menus.edit', ['id' => $menu->id ]) }}" class="btn btn-success">Sửa</a>
                                       <a href="#" class="btn btn-danger">Xóa</a>
                                   </td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>
                       <div class="col-6" >
                            {{ $menus->links() }} 
                       </div>
                   </div>   
               </div>
           </div>

       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->

       </div>
       <!-- End of Main Content -->
       @endsection