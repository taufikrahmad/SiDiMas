<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Batch Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('Batch') }}"><i class="fa fa-circle-o"></i> Batch</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card"></i> <span>Reviewer Assignment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('Reviewer') }}"><i class="fa fa-circle-o"></i> Assignment</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-book"></i> <span>Proposal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('ProposalUpload') }}"><i class="fa fa-circle-o"></i> Upload</a></li>
            <li><a href="{{ url('ProposalReview') }}"><i class="fa fa-circle-o"></i> Review</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa fa-dollar"></i> <span>Payment Monitoring</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('Paymenr') }}"><i class="fa fa-circle-o"></i> Payment Records</a></li>
          </ul>
        </li>
        <li><a href="{{ url('Configurations') }}"><i class="fa fa-gear"></i> <span>Configurations</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>