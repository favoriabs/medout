<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-minimize">
      <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
      </button>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CWCCI MEDICAL OUTREACH</a>
    </div>
    <div class="collapse navbar-collapse">

      <form class="navbar-form navbar-left navbar-search-form" role="search">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <input type="text" value="" class="form-control" placeholder="Search...">
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{route('create_patient_record')}}">
            <i class="fa fa-plus"></i>
            <p>Create Record</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
