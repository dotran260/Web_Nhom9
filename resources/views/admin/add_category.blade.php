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
                            <li class="active ">
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
                            <li class="">
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
                                            <h5>Thêm danh mục</h5>
                                            <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                        </div>
                                        <div class="card-block">
                                            <form action="{{URL::to('/save-category')}}" class="form-material" method="POST">
                                                {{csrf_field()}}
                                                <div class="form-group form-primary">
                                                    <input type="text" name="category_name" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Tên danh mục</label>
                                                </div>
                                                <div class="form-group form-primary">
                                                    <textarea style="height:200px" class="form-control" name="category_desc"></textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Mô tả danh mục</label>
                                                </div>
                                                <div class="form-group form-primary">
                                                    <input type="text" name="keywords" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Từ khoá danh mục</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Hiển thị</label>
                                                    <div class="col-sm-10">
                                                        <select name="category_value" class="form-control fill" style="border-left:4px solid blue; background-color: #ddffff;">
                                                            <option value="0">Hidden</option>
                                                            <option value="1">Active</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row" style="justify-content:end">
                                                    <button type="submit" name="add_category" class="btn btn-info waves-effect waves-light"><i class="fa-solid fa-circle-plus"></i>Thêm</button>
                                                </div>
                                            </form>
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