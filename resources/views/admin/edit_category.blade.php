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
                            <span class="pcoded-mtext">DANH M???C</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="active ">
                                <a href="{{URL::to('admin/add-category')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Th??m danh m???c</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{URL::to('admin/list-category')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Danh s??ch danh m???c</span>
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
                            <span class="pcoded-mtext">TH????NG HI???U</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{URL::to('admin/add-brand')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Th??m th????ng hi???u</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{URL::to('admin/list-brand')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Danh s??ch th????ng hi???u</span>
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
                                            <h5>Th??m danh m???c</h5>
                                            <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                        </div>
                                        @foreach($edit_category as $key => $value)
                                        <div class="card-block">
                                            <form action="{{URL::to('/update-category/'.$value -> category_id)}}" class="form-material" method="POST">
                                                {{csrf_field()}}
                                                <div class="form-group form-primary">
                                                    <input type="text" name="category_name" class="form-control" value="{{$value -> category_name}}">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">T??n danh m???c</label>
                                                </div>
                                                <div class="form-group form-primary">
                                                    <textarea style="height:200px" class="form-control" name="category_desc">{{$value -> category_desc}}</textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">M?? t??? danh m???c</label>
                                                </div>
                                                <div class="form-group form-primary">
                                                    <input type="text" name="keywords" class="form-control" value="{{$value -> keywords}}">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">T??? kho?? danh m???c</label>
                                                </div>
                                                <div class="form-group row" style="justify-content:end">
                                                    <button type="submit" name="add_category" class="btn btn-info waves-effect waves-light"><i class="fa-solid fa-circle-plus"></i>Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endforeach
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