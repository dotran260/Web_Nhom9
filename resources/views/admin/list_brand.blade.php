@extends('admin_index')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                <a href="#!"><i class="ti-settings"></i>Settings</a>
                                <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 p-b-0">
                    <form class="form-material">
                        <div class="form-group form-primary">
                            <input type="text" name="footer-email" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                        </div>
                    </form>
                </div>
                <div class="pcoded-navigation-label">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="index.html" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
                <div class="pcoded-navigation-label">UI Element</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                            <span class="pcoded-mtext">DANH MỤC</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{URL::to('admin/add-category')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Thêm danh mục</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{URL::to('admin/list-category')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Danh sách danh mục</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                            <span class="pcoded-mtext">THƯƠNG HIỆU</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{URL::to('admin/add-brand')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Thêm thương hiệu</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{URL::to('admin/list-brand')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Danh sách thương hiệu</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="pcoded-content">
           
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-body start -->
                        <div class="page-body button-page">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Danh sách thương hiệu</h5>
                                            <span>List <code>brand</code></span>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-dark">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Tên thương hiệu</th>
                                                            <th>Mô tả thương hiệu</th>
                                                            <th>Hiển thị</th>
                                                            <th>≧◉◡◉≦</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($list_brand as $key => $value)
                                                        <tr>
                                                            <th scope="row">{{$value -> brand_id}}</th>
                                                            <td>{{$value -> brand_name}}</td>
                                                            <td>{{$value -> brand_desc}}</td>
                                                            <td>
                                                                <?php
                                                                if ($value->brand_value == 1) {
                                                                ?>
                                                                    <a href="{{URL::to('/hidden-brand/'.$value -> brand_id)}}"><i style="font-size:30px;" class="fa-solid fa-toggle-on"></i></span></a>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <a href="{{URL::to('/active-brand/'.$value -> brand_id)}}"><i style="font-size:30px;" class="fa-solid fa-toggle-off"></i></span></a>
                                                                <?php
                                                                }
                                                                ?>
                                                            </td>
                                                            <td style="display: flex;">
                                                                <a href="{{URL::to('admin/edit-brand/'.$value -> brand_id)}}" ui-toggle-class="">
                                                                    <i style="font-size:30px;margin-right:12px;" class="fas fa-edit text-success text-active"></i>
                                                                </a>
                                                                <a href="{{URL::to('/delete-brand/'.$value -> brand_id)}}" onclick="return confirm('Bạn có chắc là muốn xóa thương hiệu này không?')" ui-toggle-class="">
                                                                    <i style="font-size:30px;margin-right:12px;" class="fas fa-trash-alt text-danger text"></i>
                                                                </a>
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

                        </div>
                        <!-- Page-body end -->
                    </div>
                </div>
                <!-- Warning Section Starts -->

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection