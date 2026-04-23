<div class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen flex items-center justify-center">
    <!-- Animated Background Shapes -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-200 opacity-30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-200 opacity-30 rounded-full blur-3xl"></div>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-indigo-100 opacity-50 rounded-full blur-3xl">
        </div>
    </div>

    <div class="relative text-center px-4 max-w-2xl">
        <!-- 404 Number -->
        <div class="mb-8">
            <h1
                class="text-[150px] font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-purple-600 leading-none">
                404
            </h1>
        </div>

        <!-- Icon -->
        <div class="mb-6">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-white rounded-full shadow-xl">
                <i class="fas fa-ghost text-4xl text-gray-400"></i>
            </div>
        </div>

        <!-- Title -->
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Page Not Found</h2>

        <!-- Description -->
        <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto">
            Oops! The page you're looking for seems to have wandered off. Don't worry, let's get you back on track.
        </p>



        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?= $base_url ?>"
                class="inline-flex items-center px-8 py-3 bg-blue-800 text-white rounded-lg font-medium hover:bg-blue-700 transition shadow-lg">
                <i class="fas fa-home mr-2"></i>
                Go Home
            </a>

        </div>

    </div>
</div>