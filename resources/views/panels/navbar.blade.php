@if($configData["mainLayoutType"] == 'horizontal')
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarColor'] }} navbar-fixed" style="background-color: royalblue !important; box-shadow: 0px 2px 12px 3px rgba(0, 0, 0, 0.15);
">
  @else
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarClass'] }} navbar-light {{ $configData['navbarColor'] }}">
  @endif
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
              <div class="float-left bookmark-wrapper d-flex align-items-center" style="border-right: 1px dotted black;">

                <img src="https://pngimage.net/wp-content/uploads/2018/06/logo-uns-png-2.png" />
                <div class="col-lg" style="padding-left: 1px">
                  <div class="col-lg-12">
                      <h7 style="color: black; font-weight: bold;">FAKULTAS TEKNIK</h7>
                  </div>
                  <div class="col-lg-12">
                    <h7 style="color: black; font-weight: bold;">Universitas Sebelas Maret</h7>
                  </div>
                </div>

              </div>
                <div id="navbar-menu" class="mr-auto float-left bookmark-wrapper d-flex align-items-center" style="padding-left: 10px;">
                  <ul class="nav navbar-nav float-right" id="sidenav_bems">
                      <li class="nav-item d-none d-lg-block" data-toggle="tooltip" title="Building Energy Management System">
                        <a class="nav-link" data-toggle="modal" data-target="#bems-modal">BEMS</a>
                      </li>
                    </ul>

                    <ul class="nav navbar-nav float-right" id="sidenav">
                      <li class="nav-item d-none d-lg-block"><a class="nav-link" href="http://localhost/vuexy/public/dashboard">Dashboard</a></li>
                      <li class="nav-item d-none d-lg-block"><a class="nav-link" href="http://localhost/vuexy/public/usages">Usages</a></li>


                      @if(Auth::user())
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="http://localhost/vuexy/public/control">Control</a></li>
                      @endif

                      <li class="nav-item d-none d-lg-block"><a class="nav-link" href="http://localhost/vuexy/public/cost">Cost</a></li>
                      <li class="nav-item d-none d-lg-block"><a class="nav-link" href="http://localhost/vuexy/public/statistic">Statistic</a></li>
                  </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" data-toggle="tooltip" title="Fullscreen" id='full'><i class="ficon feather icon-maximize"></i></a></li>
                  @if(Auth()->user())
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <div class="user-nav d-sm-flex d-none"><span class="profile_name">{{ Auth()->user()->name }}</span></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="{{ route('logout') }}"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                    @endif

                    @if(!Auth()->user())
                    <li class="login-item" data-toggle="tooltip" title="Login">
                      <a type="button" data-toggle="modal" data-target="#login-modal" class="button-login"id="button-login">Login</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</nav>


<!-- MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="login-modal-title">LOGIN</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
          <label>Email: </label>
          <div class="form-group">
            <input name="email" type="text" placeholder="example@email.com" class="form-control">
          </div>

          <label>Password: </label>
          <div class="form-group">
            <input name="password" type="password" placeholder="********" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
  </div>
</div>
</div>

<!-- MODAL BEMS -->
<div class="modal fade" id="bems-modal" tabindex="-1" role="dialog" aria-labelledby="bems-modal" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="bems-modal-title">Building Energy Management System</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque totam aut similique minima voluptatem, explicabo nobis voluptate distinctio tempore modi id unde dolores vero, suscipit ipsum ab deserunt veritatis molestias.
        </div>
        <div class="modal-footer">

        </div>
  </div>
</div>
</div>

<!-- END: Header-->
