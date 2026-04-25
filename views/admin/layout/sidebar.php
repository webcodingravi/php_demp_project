<!-- Sidebar -->
<aside class="w-64 bg-white shadow-lg hidden md:flex flex-col">
    <!-- Logo -->
    <div class="h-20 flex items-center justify-center border-b border-gray-200">
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center"> <i
                    class="fas fa-building text-white text-xl"></i> </div> <span
                class="text-xl font-bold text-gray-800">Admin<span class="text-primary">Panel</span></span>
        </div>
    </div> <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto py-4">
        <div class="px-4 mb-2"> <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Main</span>
        </div> <a href="#" class="flex items-center px-4 py-3 bg-primary text-white"> <i
                class="fas fa-tachometer-alt w-6"></i> <span class="font-medium">Dashboard</span> </a> <a href="#"
            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 transition"> <i
                class="fas fa-chart-line w-6"></i> <span class="font-medium">Analytics</span> </a> <a href="#"
            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 transition"> <i
                class="fas fa-shopping-cart w-6"></i> <span class="font-medium">Orders</span> <span
                class="ml-auto bg-red-500 text-white text-xs px-2 py-0.5 rounded-full">12</span> </a> <a href="#"
            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 transition"> <i
                class="fas fa-box w-6"></i> <span class="font-medium">Products</span> </a> <a href="#"
            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 transition"> <i
                class="fas fa-users w-6"></i> <span class="font-medium">Customers</span> </a>
        <div class="px-4 mt-6 mb-2"> <span
                class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Settings</span> </div> <a href="#"
            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 transition"> <i
                class="fas fa-cog w-6"></i> <span class="font-medium">Settings</span> </a> <a
            href="<?= $base_url ?>/admin/logout" onclick="return confirm('Are you sure you want to logout?')"
            class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 transition"> <i
                class="fas fa-sign-out-alt w-6"></i> <span class="font-medium">Logout</span> </a>
    </nav> <!-- User Info -->
    <div class="p-4 border-t border-gray-200">
        <div class="flex items-center"> <img src="https://via.placeholder.com/40" alt="Admin"
                class="w-10 h-10 rounded-full">
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-800">
                    <?= $_SESSION['user']['name'] ?? '' ?></p>
                <p class="text-xs text-gray-500"><?= $_SESSION['user']['email'] ?? '' ?></p>
            </div>
        </div>
    </div>
</aside>

<!-- Main Wrapper -->
<div class="flex-1 flex flex-col overflow-hidden">

    <!-- Top Header -->
    <header class="h-20 bg-white shadow-sm flex items-center justify-between px-6">
        <div class="flex items-center"> <button class="md:hidden text-gray-600 hover:text-primary"> <i
                    class="fas fa-bars text-2xl"></i> </button>
            <h2 class="text-xl font-bold text-gray-800 ml-4">Dashboard Overview</h2>
        </div>
        <div class="flex items-center space-x-4">
            <!-- Search -->
            <div class="relative"> <input type="text" placeholder="Search..."
                    class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none w-64">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
            <!-- Notifications --> <button class="relative text-gray-600 hover:text-primary"> <i
                    class="fas fa-bell text-xl"></i> <span
                    class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
            </button> <!-- Messages --> <button class="relative text-gray-600 hover:text-primary"> <i
                    class="fas fa-envelope text-xl"></i> <span
                    class="absolute -top-1 -right-1 w-5 h-5 bg-primary text-white text-xs rounded-full flex items-center justify-center">5</span>
            </button>
        </div>
    </header>

    <!-- Content Start -->
    <main class="flex-1 overflow-y-auto p-6">