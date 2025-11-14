<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Home")</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>


    <div class="d-flex">
        <aside class="side-bar" id="sidebar">
            <div class="logo text-center px-3 pt-1 d-flex ">
                <a class="logo ps-2" href="/">
                    <img src="{{ asset('propertia-logo.png') }}" style="width: 120px;" alt="">
                </a>
                <i class="fa-solid fa-xmark fw-bolder fs-4 pt-3 ms-auto" id="closeSidebar"></i>

            </div>
            {{-- profile img --}}
            <div>


                {{-- Sidebar Menu --}}
                <div class="sidebar-menu">
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('/') ? 'active' : '' }}" href="/">
                                <span class="me-auto">Dashboard</span>
                                <i class="fa-solid fs-5 fa-chart-column"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('properties*') ? 'active' : '' }}"
                                href="/properties">
                                <span class="me-auto">Properties</span>
                                <i class="fa-solid fa-city fs-5"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('rental*') ? 'active' : '' }}" href="/rental">
                                <span class="me-auto">Rentals</span>
                                <i class="fa-solid fa-house-user fs-5"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('sales*') ? 'active' : '' }}" href="/sales">
                                <span class="me-auto">Sales</span>
                                <i class="fa-solid fs-5 fa-sack-dollar"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('projects*') ? 'active' : '' }}"
                                href="/projects">
                                <span class="me-auto">Projects</span>
                                <i class="fa-solid fs-5 fa-person-digging"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('tenants*') ? 'active' : '' }}" href="/tenants">
                                <span class="me-auto">Tenants</span>
                                <i class="fa-solid fa-user-plus fs-5"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('users*') ? 'active' : '' }}" href="/users">
                                <span class="me-auto">Users</span>
                                <i class="fa-solid fs-5 fa-user-tie"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex {{ request()->is('employees*') ? 'active' : '' }}"
                                href="/employees">
                                <span class="me-auto">Employees</span>
                                <i class="fa-solid fs-5 fa-users"></i>
                            </a>
                        </li>

                    </ul>
                </div>


        </aside>
        <div class="main">

            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
                <div class="container-fluid">

                    <!-- Sidebar Toggle -->
                    <i class="fa-solid fa-bars fs-4 me-3" id="openSidebar" style="cursor:pointer;"></i>



                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- LEFT MENU ITEMS -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link nav-hover" href="/">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-hover" href="#" data-bs-toggle="dropdown">
                                    Properties
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/properties/create">Add New Property</a></li>
                                    <li><a class="dropdown-item" href="/properties/sell">Sell a Property</a></li>
                                    <li><a class="dropdown-item" href="/rent">Rent an Apartment</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-hover" href="#" data-bs-toggle="dropdown">
                                    Projects
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/projects/create">Add New Projects</a></li>
                                    <li><a class="dropdown-item" href="/materials">Materials & Costs</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover" href="/messages">Messages</a>
                            </li>

                        </ul>

                        <!-- RIGHT MENU -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown d-flex">
                                <a class="nav-link dropdown-toggle p-0" href="#" data-bs-toggle="dropdown">
                                    <img src="{{ asset('default-profile.jpg') }}" class="rounded-circle border"
                                        style="width: 35px; height: 35px; object-fit: cover;">
                                </a> 
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user me-2"></i>View
                                            Profile</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-gear me-2"></i>Settings</a>
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="/login"><i
                                                class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="container-fluid content-area">
                @yield("content")
            </div>


        </div>







    </div>




    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

@yield('scripts')
</body>

</html>