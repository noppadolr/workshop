
<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="" class="logo-light">
            <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
            <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="" class="logo-dark">
            <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('admin/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                       class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                    <form action="{{route('logout')}}" method="POST" id="logout-form" >
                        @csrf
                    </form>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Navigation</li>
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-view-dashboard-outline"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>


            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="apps-calendar.html" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-calendar"></i></span>
                    <span class="menu-text"> Calendar </span>
                </a>
            </li>



            <li class="menu-item">
                <a href="#menuSupplier" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-cart-outline"></i></span>
                    <span class="menu-text"> Supplier </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuSupplier">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{ route('supplier.') }}" class="menu-link">
                                <span class="menu-text">All Supplier</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="l" class="menu-link">
                                <span class="menu-text">Products</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-product-detail.html" class="menu-link">
                                <span class="menu-text">Product Detail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-product-edit.html" class="menu-link">
                                <span class="menu-text">Add Product</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-customers.html" class="menu-link">
                                <span class="menu-text">Customers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-orders.html" class="menu-link">
                                <span class="menu-text">Orders</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-order-detail.html" class="menu-link">
                                <span class="menu-text">Order Detail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-sellers.html" class="menu-link">
                                <span class="menu-text">Sellers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-cart.html" class="menu-link">
                                <span class="menu-text">Shopping Cart</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-checkout.html" class="menu-link">
                                <span class="menu-text">Checkout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-cart-outline"></i></span>
                    <span class="menu-text"> Ecommerce </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="ecommerce-dashboard.html" class="menu-link">
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-products.html" class="menu-link">
                                <span class="menu-text">Products</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-product-detail.html" class="menu-link">
                                <span class="menu-text">Product Detail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-product-edit.html" class="menu-link">
                                <span class="menu-text">Add Product</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-customers.html" class="menu-link">
                                <span class="menu-text">Customers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-orders.html" class="menu-link">
                                <span class="menu-text">Orders</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-order-detail.html" class="menu-link">
                                <span class="menu-text">Order Detail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-sellers.html" class="menu-link">
                                <span class="menu-text">Sellers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-cart.html" class="menu-link">
                                <span class="menu-text">Shopping Cart</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-checkout.html" class="menu-link">
                                <span class="menu-text">Checkout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="menu-item">
                <a href="apps-social-feed.html" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-rss"></i></span>
                    <span class="menu-text"> Social Feed </span>
                    <span class="badge bg-pink ms-auto">Hot</span>
                </a>
            </li>


            <li class="menu-title">Components</li>

            <li class="menu-item">
                <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-share-variant"></i></span>
                    <span class="menu-text"> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuMultilevel">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#menuMultilevel2" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Second Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMultilevel2">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="javascript: void(0);" class="menu-link">
                                            <span class="menu-text">Item 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript: void(0);" class="menu-link">
                                            <span class="menu-text">Item 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuMultilevel3" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text">Third Level</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMultilevel3">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="javascript: void(0);" class="menu-link">
                                            <span class="menu-text">Item 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#menuMultilevel4" data-bs-toggle="collapse" class="menu-link">
                                            <span class="menu-text">Item 2</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="menuMultilevel4">
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>
