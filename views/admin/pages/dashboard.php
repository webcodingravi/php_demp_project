<main class="flex-1 overflow-y-auto p-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Sales -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Sales</p>
                    <p class="text-2xl font-bold text-gray-900">$124,500</p>
                    <p class="text-sm text-green-500 mt-1">
                        <i class="fas fa-arrow-up"></i> 12.5% from last month
                    </p>
                </div>
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-dollar-sign text-primary text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Orders</p>
                    <p class="text-2xl font-bold text-gray-900">1,284</p>
                    <p class="text-sm text-green-500 mt-1">
                        <i class="fas fa-arrow-up"></i> 8.2% from last month
                    </p>
                </div>
                <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-shopping-bag text-green-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Customers -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Customers</p>
                    <p class="text-2xl font-bold text-gray-900">3,847</p>
                    <p class="text-sm text-green-500 mt-1">
                        <i class="fas fa-arrow-up"></i> 15.3% from last month
                    </p>
                </div>
                <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users text-purple-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Pending Requests -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Pending Requests</p>
                    <p class="text-2xl font-bold text-gray-900">28</p>
                    <p class="text-sm text-red-500 mt-1">
                        <i class="fas fa-arrow-up"></i> 3 new today
                    </p>
                </div>
                <div class="w-14 h-14 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clock text-orange-600 text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts & Tables Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Revenue Chart -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold text-gray-900">Revenue Overview</h3>
                <select class="border border-gray-300 rounded-lg px-3 py-1 text-sm">
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                    <option>Last 90 Days</option>
                </select>
            </div>
            <div class="h-64 bg-gradient-to-b from-blue-50 to-white rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-chart-line text-6xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">Chart placeholder - integrate Chart.js</p>
                </div>
            </div>
        </div>

        <!-- Top Products -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Top Products</h3>
            <div class="space-y-4">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/40" alt="Product" class="w-10 h-10 rounded-lg">
                    <div class="ml-3 flex-1">
                        <p class="text-sm font-medium text-gray-900">Product A</p>
                        <p class="text-xs text-gray-500">245 sales</p>
                    </div>
                    <span class="text-sm font-bold text-green-600">$12,450</span>
                </div>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/40" alt="Product" class="w-10 h-10 rounded-lg">
                    <div class="ml-3 flex-1">
                        <p class="text-sm font-medium text-gray-900">Product B</p>
                        <p class="text-xs text-gray-500">198 sales</p>
                    </div>
                    <span class="text-sm font-bold text-green-600">$9,890</span>
                </div>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/40" alt="Product" class="w-10 h-10 rounded-lg">
                    <div class="ml-3 flex-1">
                        <p class="text-sm font-medium text-gray-900">Product C</p>
                        <p class="text-xs text-gray-500">156 sales</p>
                    </div>
                    <span class="text-sm font-bold text-green-600">$7,820</span>
                </div>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/40" alt="Product" class="w-10 h-10 rounded-lg">
                    <div class="ml-3 flex-1">
                        <p class="text-sm font-medium text-gray-900">Product D</p>
                        <p class="text-xs text-gray-500">124 sales</p>
                    </div>
                    <span class="text-sm font-bold text-green-600">$6,200</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders Table -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-900">Recent Orders</h3>
            <a href="#" class="text-primary hover:text-blue-800 font-medium text-sm">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Order ID
                        </th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Customer
                        </th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Product</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Date</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Amount</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Status</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900">#ORD-001</td>
                        <td class="py-3 px-4 text-sm text-gray-900">John Doe</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Product A</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Apr 23, 2026</td>
                        <td class="py-3 px-4 text-sm font-medium text-gray-900">$1,250</td>
                        <td class="py-3 px-4"><span
                                class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">Completed</span>
                        </td>
                        <td class="py-3 px-4"><button class="text-primary hover:text-blue-800"><i
                                    class="fas fa-eye"></i></button></td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900">#ORD-002</td>
                        <td class="py-3 px-4 text-sm text-gray-900">Jane Smith</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Product B</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Apr 22, 2026</td>
                        <td class="py-3 px-4 text-sm font-medium text-gray-900">$890</td>
                        <td class="py-3 px-4"><span
                                class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full text-xs font-medium">Pending</span>
                        </td>
                        <td class="py-3 px-4"><button class="text-primary hover:text-blue-800"><i
                                    class="fas fa-eye"></i></button></td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900">#ORD-003</td>
                        <td class="py-3 px-4 text-sm text-gray-900">Mike Johnson</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Product C</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Apr 21, 2026</td>
                        <td class="py-3 px-4 text-sm font-medium text-gray-900">$2,100</td>
                        <td class="py-3 px-4"><span
                                class="bg-blue-100 text-blue-600 px-2 py-1 rounded-full text-xs font-medium">Processing</span>
                        </td>
                        <td class="py-3 px-4"><button class="text-primary hover:text-blue-800"><i
                                    class="fas fa-eye"></i></button></td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900">#ORD-004</td>
                        <td class="py-3 px-4 text-sm text-gray-900">Sarah Williams</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Product A</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Apr 20, 2026</td>
                        <td class="py-3 px-4 text-sm font-medium text-gray-900">$1,500</td>
                        <td class="py-3 px-4"><span
                                class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">Completed</span>
                        </td>
                        <td class="py-3 px-4"><button class="text-primary hover:text-blue-800"><i
                                    class="fas fa-eye"></i></button></td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900">#ORD-005</td>
                        <td class="py-3 px-4 text-sm text-gray-900">David Brown</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Product D</td>
                        <td class="py-3 px-4 text-sm text-gray-600">Apr 19, 2026</td>
                        <td class="py-3 px-4 text-sm font-medium text-gray-900">$750</td>
                        <td class="py-3 px-4"><span
                                class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">Cancelled</span>
                        </td>
                        <td class="py-3 px-4"><button class="text-primary hover:text-blue-800"><i
                                    class="fas fa-eye"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>