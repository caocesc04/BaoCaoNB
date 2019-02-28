<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <span>
                                <img alt="image" class="img-circle" src=" {{ asset('img/profile_small.jpg') }} " />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Quản lý báo cáo</strong>
                                 </span> <span class="text-muted text-xs block"> Admin <b class="caret"></b></span> </span> </a>
                                <!-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>-->                   
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-navicon"></i> <span class="nav-label">Danh Mục</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li ><a href="/doanhnghiep" >Danh Mục Doanh Nghiệp</a></li>
                            <li ><a href="{{ url('/kybaocao') }} " >Danh Mục Kỳ Báo Cáo</a></li>
                            <li ><a href="{{ url('/danhmucnhomthuoctinh') }} "  >Danh Mục Nhóm Thuộc Tính</a></li>
                            <li ><a href="{{ url('/danhmucphuluc01') }} ">Danh Mục Phụ Lục 01</a></li>
                            <li class="active"><a href="/danhmucphuluc04">Danh Mục Phụ Lục 04</a></li> 
                        </ul>
                    </li>
                    <li >
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Nhập báo cáo</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li  ><a href="{{ url('/home') }}" >Báo Cáo Phụ Lục 01</a></li>
                            <li ><a href="{{ url('/baocaophuluc04') }}" >Báo Cáo Phụ Lục 04</a></li> 
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>