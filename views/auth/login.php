<div class="bg-gradient-to-br from-blue-900 via-primary to-blue-800 min-h-screen flex items-center justify-center">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white opacity-10 rounded-full"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white opacity-10 rounded-full"></div>
    </div>

    <div class="relative w-full max-w-md px-4">
        <!-- Logo & Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl shadow-lg mb-4">
                <i class="fas fa-building text-primary text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-white">Business<span class="text-blue-300">Corp</span></h1>
            <p class="text-blue-200 mt-2">Admin Dashboard Login</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Welcome Back</h2>

            <form class="space-y-6" method="post" action="<?= $base_url ?>/admin/auth">
                <!-- Email Field -->
                <div>
                    <label class=" block text-gray-700 font-medium mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" name="email"
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition"
                            placeholder="admin@example.com">
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" name="password"
                            class="w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition"
                            placeholder="••••••••">
                        <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-600 cursor-pointer"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                        <span class="ml-2 text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-primary hover:text-blue-800 font-medium">Forgot password?</a>
                </div>

                <!-- Login Button -->
                <button type="submit" name="login"
                    class="w-full bg-blue-800 text-white py-3 rounded-lg font-bold text-lg hover:bg-blue-600 transition shadow-lg cursor-pointer">
                    Sign In <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500">Or continue with</span>
                </div>
            </div>

            <!-- Social Login -->
            <div class="grid grid-cols-2 gap-4">
                <button type="button"
                    class="flex items-center justify-center py-2.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                    <i class="fab fa-google text-red-500 mr-2"></i>
                    <span class="text-gray-700 font-medium">Google</span>
                </button>
                <button type="button"
                    class="flex items-center justify-center py-2.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                    <i class="fab fa-facebook text-blue-600 mr-2"></i>
                    <span class="text-gray-700 font-medium">Facebook</span>
                </button>
            </div>
        </div>

        <!-- Back to Website -->
        <div class="text-center mt-6">
            <a href="<?= $base_url ?>" class="text-blue-200 hover:text-white transition">
                <i class="fas fa-arrow-left mr-2"></i>Back to Website
            </a>
        </div>

        <!-- Footer -->
        <p class="text-center text-blue-300 text-sm mt-6">
            &copy; 2026 BusinessCorp. All rights reserved.
        </p>
    </div>
</div>