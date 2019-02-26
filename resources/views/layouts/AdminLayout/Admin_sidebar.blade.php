
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="{{asset('images/backend_images/profile_small.jpg')}}"  />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> 
                                    @if(empty(Auth::check()))
                                        <span class="block m-t-xs">  @else
                                            <strong class="font-bold">
                                               Tên Đăng Nhập: <?php echo Auth::User()['name'];?> 

                                            </strong>
                                            <br>
                                        </span> @endif
                                    <span class="text-muted text-xs block">Thông Tin Của Bạn 
                                        <b class="caret"></b>
                                    </span> 
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li >
                                    <a  href="{{ url('/admin/settings') }}">
                                        <i class="icon icon-cog"></i>
                                        <span class="text">Cài Đặt</span>
                                    </a>
                                </li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ url('/logout') }}" >
                                        <i class="fa fa-sign-out"></i> Đăng Xuất
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            Sở Tài Nguyên
                        </div>
                    </li>
                    <li class="active" >
                        <a href="{{url('/admin/view-users-donhang') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Đăng Ký Đơn Hàng</span></a>
                    </li>
                    <li >
                        <a href="{{url('/admin/view-users') }}"><i class="fa fa-address-card-o"></i> <span class="nav-label">Đăng Ký Users</span></a>
                    </li>
                </ul>

            </div>
        </nav>