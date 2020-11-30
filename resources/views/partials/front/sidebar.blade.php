<aside class="col-md-3">
    <!--   SIDEBAR   -->
    <ul class="list-group list-unstyled">
        <a class="list-group-item {{request()->routeIs('user.overview') ? 'active' : ''}}" href="{{route('user.overview')}}"> Account Overview</a>
        <a class="list-group-item {{request()->routeIs('user.orders') ? 'active' : ''}}" href="{{ route('user.orders') }}"> Orders </a>
        <a class="list-group-item" href="#"> Shipping Addresses </a>
        <a class="list-group-item" href="#"> Events </a>
    </ul>
    <br>
    <a class="btn btn-light btn-block" href="#" id="logoutBtn"> <i class="fa fa-power-off"></i> <span class="text">Log out</span> </a>
    <form id="formLogout" action="{{route('logout')}}" method="POST">
        @csrf
    </form>
    <!--   SIDEBAR .//END   -->
</aside>
