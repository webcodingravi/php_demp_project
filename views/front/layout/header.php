   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title><?= $title ?? 'My Website' ?></title>
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
       <!-- Header -->
       <header class="bg-white shadow-sm fixed w-full z-50">
           <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
               <div class="flex justify-between items-center h-20">
                   <!-- Logo -->
                   <div class="flex-shrink-0 flex items-center">
                       <a href="<?= $root ?>" class=" flex items-center space-x-2">
                           <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                               <i class="fas fa-building text-white text-xl"></i>
                           </div>
                           <span class="text-2xl font-bold text-gray-800">Business<span
                                   class="text-primary">Corp</span></span>
                       </a>
                   </div>

                   <!-- Desktop Navigation -->
                   <nav class="hidden md:flex space-x-8">

                       <a href="<?= $base_url ?>"
                           class="<?= $url === '' ? 'text-primary font-bold' : 'text-gray-700' ?>">
                           Home
                       </a>

                       <a href="<?= $base_url . '/about' ?>"
                           class="<?= $url === 'about' ? 'text-primary font-bold' : 'text-gray-700' ?>">
                           About
                       </a>

                       <a href="<?= $base_url . '/services' ?>"
                           class="<?= $url === 'services' ? 'text-primary font-bold' : 'text-gray-700' ?>">
                           Services
                       </a>

                       <a href="<?= $base_url . '/portfolio' ?>"
                           class="<?= $url === 'portfolio' ? 'text-primary font-bold' : 'text-gray-700' ?>">
                           Portfolio
                       </a>

                       <a href="<?= $base_url . '/contact' ?>"
                           class="<?= $url === 'contact' ? 'text-primary font-bold' : 'text-gray-700' ?>">
                           Contact
                       </a>

                   </nav>
                   <!-- CTA Button -->
                   <div class="hidden md:flex items-center space-x-4">
                       <a href="#" class="text-gray-600 hover:text-primary transition">
                           <i class="fas fa-search text-lg"></i>
                       </a>
                       <a href="#"
                           class="bg-primary text-white px-5 py-2.5 rounded-lg font-medium hover:bg-blue-800 transition">
                           Get Quote
                       </a>
                   </div>

                   <!-- Mobile Menu Button -->
                   <div class="md:hidden flex items-center">
                       <button class="text-gray-700 hover:text-primary p-2">
                           <i class="fas fa-bars text-2xl"></i>
                       </button>
                   </div>
               </div>
           </div>
       </header>
       <a href="#" class="text-gray-700 hover:text-primary transition">Home</a>
       <a href="#" class="text-gray-700 hover:text-primary transition">About</a>
       <a href="#" class="text-gray-700 hover:text-primary transition">Services</a>
       <a href="#" class="text-gray-700 hover:text-primary transition">Contact</a>
       <a href="#" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Get Started</a>
       </div>
       <div class="md:hidden flex items-center">
           <button class="text-gray-700 hover:text-primary">
               <i class="fas fa-bars text-2xl"></i>
           </button>
       </div>
       </div>
       </div>
       </nav>