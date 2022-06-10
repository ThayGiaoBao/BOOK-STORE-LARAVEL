       <!-- resources/views/child.blade.php -->

       @extends('layouts.admin')

       @section('title')
       <title>Dashboard</title>
       @endsection

       <!-- @section('sidebar')
     @parent
  
     <p>This is appended to the master sidebar.</p>
 @endsection     -->

       @section('content')
       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
               <h1 class="h3 mb-0 text-gray-800">PROFOND XIN CHÀO</h1>
               <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
           </div>

           <!-- Content Row -->
           <div class="row">

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                       Tổng Giao Dịch (Monthly)</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                       Tổng bài đăng (Annual)</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800">215</div>
                               </div>
                               <div class="col-auto">
                                   <i class="fa fa-file fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-info shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Lượt
                                       tiếp cận (Monthly)</div>
                                   <div class="row no-gutters align-items-center">
                                       <div class="col-auto">
                                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                       </div>
                                       <div class="col">
                                           <div class="progress progress-sm mr-2">
                                               <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-auto">
                                   <i class="fa fa-eye fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Pending Requests Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-warning shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                       Bình luận</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-comments fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Chart Content -->

           <div class="row">

               <!-- Area Chart -->
               <div class="col-xl-8 col-lg-7">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Tổng quan giao dịch</h6>
                           <div class="dropdown no-arrow">
                               <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                               </a>
                               <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                   <div class="dropdown-header">Dropdown Header:</div>
                                   <a class="dropdown-item" href="#">Action</a>
                                   <a class="dropdown-item" href="#">Another action</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="#">Something else here</a>
                               </div>
                           </div>
                       </div>
                       <!-- Card Body -->
                       <div class="card-body">
                           <div class="chart-area">
                               <canvas id="myAreaChart"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Pie Chart -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Nhóm sản phẩm ưa chuộng </h6>
                           <div class="dropdown no-arrow">
                               <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                               </a>
                               <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                   <div class="dropdown-header">Dropdown Header:</div>
                                   <a class="dropdown-item" href="#">Action</a>
                                   <a class="dropdown-item" href="#">Another action</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="#">Something else here</a>
                               </div>
                           </div>
                       </div>
                       <!-- Card Body -->
                       <div class="card-body">
                           <div class="chart-pie pt-4 pb-2">
                               <canvas id="myPieChart"></canvas>
                           </div>
                           <div class="mt-4 text-center small">
                               <span class="mr-2">
                                   <i class="fas fa-circle text-primary"></i> anime
                               </span>
                               <span class="mr-2">
                                   <i class="fas fa-circle text-success"></i> sketches
                               </span>
                               <span class="mr-2">
                                   <i class="fas fa-circle text-info"></i> nft
                               </span>
                               <span class="mr-2">
                                   <i class="fas fa-circle text-info"></i> illustrator
                               </span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>



           <div class="row">

               <!-- Subcriber List  -->
               <div class="col-lg-7 mb-4">

                   <!-- Project Card Example -->
                   <div class="card shadow mb-4">
                       <div class="card-header pb-0 bg-white border-bottom-0 d-flex flex-row align-items-center justify-content-between">
                           <div class="d-flex flex-column w-100 align-items-start">
                               <h6 style="color: #000;" class="m-0 font-weight-bold text-dark">
                                   Tỷ lệ giữ chân sản phẩm
                               </h6>
                               <p style="font-size: 14px;">Thống kê theo tuần</p>

                           </div>

                       </div>
                       <div class="card-body pt-0">
                           <table class="table table-borderless">
                               <thead>
                                   <tr>
                                       <th class="pl-0 pt-0 pt-0  text-primary">Browser</th>
                                       <th class="pl-0 pt-0 text-primary text-center">Sessions</th>
                                       <th class="pl-0 pt-0 text-primary text-center">Bounce Rate</th>
                                       <th class="pl-0 pt-0 text-primary text-center">Conversion Rate</th>
                                   </tr>
                               </thead>
                               <tbody>

                                   <tr>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               Google Chrome
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,345
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,57 %
                                           </p>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               Google Chrome
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,345
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,57 %
                                           </p>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               Google Chrome
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,345
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,57 %
                                           </p>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               Google Chrome
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,345
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0 text-center">
                                               12,57 %
                                           </p>
                                       </td>
                                   </tr>

                               </tbody>
                           </table>

                       </div>

                   </div>

               </div>

               <!-- End Subcriber List  -->

               <!-- Total Vist -->

               <div class="col-lg-5 mb-4">

                   <!-- Project Card Example -->
                   <div class="card shadow mb-4">
                       <div class="card-header pb-0 bg-white border-bottom-0 d-flex flex-row align-items-center justify-content-between">
                           <div class="d-flex flex-column w-100 align-items-start">
                               <h6 style="color: #000;" class="m-0 font-weight-bold text-dark">Xem nhiều trên
                                   thiết bị</h6>
                               <p style="font-size: 14px;">Thống kê theo tuần</p>
                           </div>
                       </div>

                       <div class="card-body pt-0">
                           <table class="table table-borderless">
                               <thead>
                                   <tr>
                                       <th class="pl-0 pt-0 text-primary ">Link</th>
                                       <th class="pl-0 pt-0 text-primary ">Page Title</th>
                                       <th class="pl-0 pt-0 text-primary text-right">Percents</th>
                                       <th class="pl-0 pt-0 text-primary text-center">Value</th>
                                   </tr>
                               </thead>
                               <tbody>

                                   <tr>
                                       <td class="pl-0 pb-0" width="5%">
                                           <a href="#" class="p-0 h-24">
                                               <i class="fa fa-link" aria-hidden="true"></i>
                                           </a>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               HomePages
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0" width="35%">
                                           <div class="h-24 d-flex align-items-center">
                                               <div style="height: 10px !important;" class="progress w-100">
                                                   <div class="progress-bar progress-bar-primary bg-primary" style="width: 40%;">
                                                   </div>
                                               </div>
                                           </div>
                                       </td>

                                       <td class="pl-0 pb-0 h-24">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td class="pl-0 pb-0" width="5%">
                                           <a href="#" class="p-0 h-24">
                                               <i class="fa fa-link" aria-hidden="true"></i>
                                           </a>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               HomePages
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0" width="35%">
                                           <div class="h-24 d-flex align-items-center">
                                               <div style="height: 10px !important;" class="progress w-100">
                                                   <div class="progress-bar progress-bar-primary bg-primary" style="width: 40%;">
                                                   </div>
                                               </div>
                                           </div>
                                       </td>

                                       <td class="pl-0 pb-0 h-24">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td class="pl-0 pb-0" width="5%">
                                           <a href="#" class="p-0 h-24">
                                               <i class="fa fa-link" aria-hidden="true"></i>
                                           </a>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               HomePages
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0" width="35%">
                                           <div class="h-24 d-flex align-items-center">
                                               <div style="height: 10px !important;" class="progress w-100">
                                                   <div class="progress-bar progress-bar-primary bg-primary" style="width: 40%;">
                                                   </div>
                                               </div>
                                           </div>
                                       </td>

                                       <td class="pl-0 pb-0 h-24">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td class="pl-0 pb-0" width="5%">
                                           <a href="#" class="p-0 h-24">
                                               <i class="fa fa-link" aria-hidden="true"></i>
                                           </a>
                                       </td>
                                       <td class="pl-0 pb-0">
                                           <p class="p-0">
                                               HomePages
                                           </p>
                                       </td>
                                       <td class="pl-0 pb-0" width="35%">
                                           <div class="h-24 d-flex align-items-center">
                                               <div style="height: 10px !important;" class="progress w-100">
                                                   <div class="progress-bar progress-bar-primary bg-primary" style="width: 40%;">
                                                   </div>
                                               </div>
                                           </div>
                                       </td>

                                       <td class="pl-0 pb-0 h-24">
                                           <p class="p-0 text-center">
                                               40,12 %
                                           </p>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>

                       </div>

                   </div>

               </div>

               <!-- End Total Vist -->

               <!-- Content Row -->
               <div class="row">

                   <!-- Content Column -->
                   <div class="col-lg-6 mb-4">

                       <!-- Project Card Example -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Mức độ tương tác</h6>
                           </div>
                           <div class="card-body">
                               <h4 class="small font-weight-bold">Nhóm sản phẩm 1<span class="float-right">20%</span></h4>
                               <div class="progress mb-4">
                                   <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                               <h4 class="small font-weight-bold">Nhóm sản phẩm 2<span class="float-right">40%</span></h4>
                               <div class="progress mb-4">
                                   <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                               <h4 class="small font-weight-bold">Nhóm sản phẩm 3<span class="float-right">60%</span></h4>
                               <div class="progress mb-4">
                                   <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                               <h4 class="small font-weight-bold">Nhóm sản phẩm 4<span class="float-right">80%</span></h4>
                               <div class="progress mb-4">
                                   <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                               <h4 class="small font-weight-bold">Nhóm sản phẩm 5<span class="float-right">Complete!</span></h4>
                               <div class="progress">
                                   <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-6 mb-4">

                       <!-- Illustrations -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Hướng dẫn sử dụng</h6>
                           </div>
                           <div class="card-body">
                               <div class="text-center">
                                   <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../admin/assets/img/howtouse.png" alt="...">
                               </div>
                               <p>Nhằm tăng độ hiệu quả cho việc seo các admin hãy cân nhắc kỹ trong việc
                                   lựa chọn từ khóa và chủ đề cho mỗi sự kiện được tổ chức !
                                   <br>Tham khảo link ở dưới để biết thêm thông tin chi tiết
                               </p>
                               <a target="_blank" rel="nofollow" href="https://undraw.co/">deepforesttutorial.com
                                   &rarr;</a>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
           <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->
       @endsection