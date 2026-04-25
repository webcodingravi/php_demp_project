<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Work</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#1e40af',
                    secondary: '#64748b',
                    accent: '#f59e0b',
                }
            }
        }
    }
    </script>

</head>

<body>
    <?php 
       $errors = getErrors();
    
    
    ?>
    <div class="absolute top-2 right-4">
        <?php  include_once $root."/views/alertMessage.php"; ?>
    </div>
    <div class=" bg-gradient-to-br from-blue-900 via-primary to-blue-800 min-h-screen flex items-center
        justify-center">
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
                            <input type="email" name="email" value="<?= old('email') ?>" class=" w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2
                                focus:ring-primary focus:border-transparent outline-none transition"
                                placeholder="admin@example.com">

                        </div>

                        <?php if(isset($errors['email'])): ?>
                        <span class="text-rose-500"> <?= $errors['email'] ?></span>
                        <?php endif; ?>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Password</label>
                        <div class="relative" x-data="{show:false}">
                            <div class=" absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input :type="show ? 'text' : 'password'" name="password"
                                class="w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition"
                                placeholder="••••••••">
                            <div @click="show = !show" class="absolute right-4 top-4 text-gray-500 cursor-pointer">
                                <!-- Eye (show password) -->
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>

                                <!-- Eye Off (hide password) -->
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    viewBox="0 0 24 24" view stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M10.733 5.076A10.744 10.744 0 0 1 12 5c5 0 9.27 3.11 10.938 7a1 1 0 0 1 0 .696 10.75 10.75 0 0 1-4.043 4.568" />
                                    <path d="M14.12 14.12a3 3 0 1 1-4.243-4.243" />
                                    <path d="M2 2l20 20" />
                                    <path
                                        d="M4.94 4.94A10.75 10.75 0 0 0 1.062 12c1.668 3.89 5.938 7 10.938 7 1.44 0 2.82-.29 4.06-.82" />
                                </svg>
                            </div>
                        </div>

                        <?php if(isset($errors['password'])): ?>
                        <span class="text-rose-500"> <?= $errors['password'] ?></span>
                        <?php endif; ?>

                    </div>

                    <!-- Remember & Forgot -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
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

</body>

</html>