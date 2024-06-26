<ul class="menu">
            <li class="sidebar-title">Menu</li>    
            <li
                class="sidebar-item active ">
                <a href="/" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a> 
            </li>
            <li
                class="sidebar-item">
                <a href="/customer" class='sidebar-link'>
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <span>Customer</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="/merk" class='sidebar-link'>
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    <span>Merk</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="/barang" class='sidebar-link'>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>Barang</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="/data_customer " class='sidebar-link'>
                <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    <span>Data Customer</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="/transaksi" class='sidebar-link'>
                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                    <span>Transaksi</span>
                </a>
            </li>
            @guest
                
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endguest

            @auth
            <li class="sidebar-item" aria-labelledby="navbarDropdown">
                <a class="sidebar-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endauth
        </ul>