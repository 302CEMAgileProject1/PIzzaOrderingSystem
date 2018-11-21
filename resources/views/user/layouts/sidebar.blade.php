<div class="col-lg-3 mt-4 mt-lg-0">
    <!-- CUSTOMER MENU -->
    <div class="panel panel-default sidebar-menu">
        <div class="panel-heading">
            <h3 class="h4 panel-title">Your section</h3>
        </div>
        <div class="panel-body">
            <ul class="nav nav-pills flex-column text-sm">
                <li class="nav-item">
                    <a href="{{ route('profile.show', [Auth::user()]) }}" class="nav-link"><i class="fa fa-list"></i> My Profile</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-heart"></i> My Order History</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
