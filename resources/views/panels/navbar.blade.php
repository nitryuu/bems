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
                        <a class="nav-link" data-toggle="modal" data-target=".bems-modal">BEMS</a>
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
                          <a class="dropdown-item" href="{{ route('setting') }}"><i class="feather icon-settings"></i>Settings</a> 
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
<div class="modal fade bd-example-modal-lg bems-modal" tabindex="-1" role="dialog" aria-labelledby="bems-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Building Energy Management System</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: justify; line-height: 2">
        <div style="text-align:center">
        Building Energy Management Systems (BEMS) are integrated and computerised systems
        for monitoring and controlling energy-related on the building such as lighting,
        power systems, air conditioning system, and so on. Real time remote monitoring
        and controlling  as two key pillars to achieve the energy efficiency goals.
        We use several types of IoT communication protocols such as LoRa and WiFi.
        </div>

        BEMS is one of the excellent researches in the field of IoT developed
         by the Electrical Engineering Study Program, Faculty of Engineering,
         Universitas Sebelas Maret. This research was sponsored by the Program
         of Penelitian Unggulan (PU PNBP UNS) 2019-2020. Researchers and students
          involved in this research include:
          <br />
          <br />
          <div style="text-align: center">
          <strong>Researchers:</strong>
              <br />
            <a href="https://www.linkedin.com/in/feri-adriyanto-%E9%A3%9B%E7%91%9E-236a3178/?originalSubdomain=id" target="_blank" data-toggle="tooltip" title="Click to see Linkedin Profile">
              Feri Adriyanto, Ph.D.</a>
              <br />
            <a href="https://www.linkedin.com/in/agus-ramelan/" target="_blank" data-toggle="tooltip" title="Click to see Linkedin Profile">
              Agus Ramelan, S.Pd., MT. </a>
              <br />
            <a href="https://www.linkedin.com/in/muhammad-hamka-ibrahim-14703b2a/" target="_blank" data-toggle="tooltip" title="Click to see Linkedin Profile">
              Muhammad Hamka Ibrahim, ST., M.Eng. </a>
              <br />
            <a href="https://forlap.ristekdikti.go.id/dosen/detail/NERFRTlCOEItODFGMy00NzVDLUE2NUYtOTNBREUyQjNCNzdB/0" target="_blank" data-toggle="tooltip" title="Click to see Linkedin Profile">
              Chico Hermanu B.A., ST., M. Eng., </a>
              <br />
              <br />
          <strong>Students:</strong>
              <br />
              <a href="#" target="_blank">Kevin Sebastian Arief</a>
              <br />
            <a href="#" target="_blank">Oki Setiawan</a>
              <br />
            <a href="#" target="_blank">Muhammad Rizqi Subeno</a>
              <br />
            <a href="#" target="_blank">Nanda Hafidz Rivanda</a>
              <br />
            <a href="#" target="_blank">Sony Adyatama</a>
              <br />
            <a href="#" target="_blank">Gilang Satria Ajie</a>
              <br />
            <a href="#" target="_blank">Hisbullah Ahmad Fathoni</a>
              <br />
          </div>
          <br />
          <div style="text-align: center">
          <strong>Contact Us:</strong>
          <br>
          Laboratorium Internet of Things (IoT) <br />
          Gedung III Lantai 2 Fakultas Teknik UNS <br />
          Jl. Ir. Sutami 36A Kentingan Surakarta Jawa Tengah <br />
          Email : iotlab@ft.uns.ac.id
          </div>
          <br />
      </div>
    </div>
  </div>
</div>
</div>

<!-- END: Header-->
