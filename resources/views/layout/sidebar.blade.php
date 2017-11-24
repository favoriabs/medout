<div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="logo">
        <a href="http://www.creative-tim.com" class="logo-text">
            Creative Tim
        </a>
    </div>
<div class="logo logo-mini">
  <a href="http://www.creative-tim.com" class="logo-text">
    Ct
  </a>
</div>

  <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../assets/img/default-avatar.png" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{ Auth::user()->name }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <!-- <ul class="nav">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul> -->
                </div>
            </div>
        </div>

        <ul class="nav">
            <li class="@yield('dashboard')">
                <a href="{{route('patient_index')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="@yield('create_record')">
                <a href="{{route('create_patient_record')}}">
                    <i class="pe-7s-user"></i>
                    <p>Create Record</p>
                </a>
            </li>
        </ul>
  </div>
</div>
