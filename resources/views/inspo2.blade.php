<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Loan Solutions - My Education Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        }
        .aspect-w-16 {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        }
        .aspect-w-16 iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .journey-card {
            transition: all 0.3s ease;
        }
        .journey-card:hover {
            transform: translateY(-5px);
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .active-tab {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
        }
    </style>
</head>
<body>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed inset-0 bg-white z-50 hidden transform transition-transform duration-300 ease-in-out">
        <div class="flex justify-between items-center p-4 border-b">
            <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="MES Logo" class="h-10"> 
            <button id="closeMobileMenu" class="text-gray-700">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <div class="p-4 space-y-4 overflow-y-auto h-full">
            <a href="https://caportal.myedusolutions.com/mes90/login.php" class="block py-2 px-4 rounded bg-blue-600 text-white font-medium">Portal Login</a>
            
            <div class="dropdown relative">
                <button class="dropdown-btn flex items-center justify-between w-full py-3 px-4 text-left bg-gray-100 rounded-lg font-medium">
                    Programs <i class="fas fa-chevron-down ml-2 text-sm"></i>
                </button>
                <div class="dropdown-menu hidden pl-4 mt-2 space-y-3">
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block py-2">Student Loan Forgiveness</a>
                    <a href="https://myedusolutions.com/programs/disability-discharge/" class="block py-2">Disability Discharge</a>
                    <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block py-2">Borrower Defense Program</a>
                </div>
            </div>

            <a href="https://myedusolutions.com/calculator/" class="block py-3 px-4 rounded-lg font-medium">Estimate Payments</a>
            
            <div class="dropdown relative">
                <button class="dropdown-btn flex items-center justify-between w-full py-3 px-4 text-left bg-gray-100 rounded-lg font-medium">
                    Client Success <i class="fas fa-chevron-down ml-2 text-sm"></i>
                </button>
                <div class="dropdown-menu hidden pl-4 mt-2 space-y-3">
                    <a href="https://myedusolutions.com/reviews/" class="block py-2">Client Reviews</a>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block py-2">Client Results</a>
                </div>
            </div>

            <a href="https://myedusolutions.com/about-us/" class="block py-3 px-4 rounded-lg font-medium">About</a>
            
            <div class="dropdown relative">
                <button class="dropdown-btn flex items-center justify-between w-full py-3 px-4 text-left bg-gray-100 rounded-lg font-medium">
                    Resources <i class="fas fa-chevron-down ml-2 text-sm"></i>
                </button>
                <div class="dropdown-menu hidden pl-4 mt-2 space-y-3">
                    <a href="https://myedusolutions.com/important-updates/" class="block py-2">Important Updates</a>
                    <a href="https://myedusolutions.com/blog/" class="block py-2">Blogs</a>
                    <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block py-2">FAQs</a>
                    <a href="https://myedusolutions.com/referral-program/" class="block py-2">Referral Program</a>
                    <a href="https://myedusolutions.com/in-the-news/" class="block py-2">In The Media</a>
                    <a href="https://myedusolutions.com/about-us/in-the-community/" class="block py-2">In the Community</a>
                </div>
            </div>

            <a href="https://myedusolutions.com/contact-us/" class="block py-3 px-4 rounded-lg font-medium">Contact</a>
            <a href="https://myedusolutions.com/advisor/" class="block py-2 px-4 rounded bg-blue-600 text-white font-medium">Speak to an Advisor</a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-40">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="https://myedusolutions.com/index.php/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="MES Logo" class="h-10">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-6">
                    <div class="dropdown relative">
                        <button class="dropdown-btn flex items-center font-medium text-gray-700 hover:text-blue-600">
                            Programs <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-10">
                            <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Student Loan Forgiveness</a>
                            <a href="https://myedusolutions.com/programs/disability-discharge/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Disability Discharge</a>
                            <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Borrower Defense Program</a>
                        </div>
                    </div>

                    <a href="https://myedusolutions.com/calculator/" class="font-medium text-gray-700 hover:text-blue-600">Estimate Payments</a>

                    <div class="dropdown relative">
                        <button class="dropdown-btn flex items-center font-medium text-gray-700 hover:text-blue-600">
                            Client Success <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-10">
                            <a href="https://myedusolutions.com/reviews/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Client Reviews</a>
                            <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Client Results</a>
                        </div>
                    </div>

                    <a href="https://myedusolutions.com/about-us/" class="font-medium text-gray-700 hover:text-blue-600">About</a>

                    <div class="dropdown relative">
                        <button class="dropdown-btn flex items-center font-medium text-gray-700 hover:text-blue-600">
                            Resources <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg py-1 z-10">
                            <a href="https://myedusolutions.com/important-updates/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Important Updates</a>
                            <a href="https://myedusolutions.com/blog/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Blogs</a>
                            <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FAQs</a>
                            <a href="https://myedusolutions.com/referral-program/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Referral Program</a>
                            <a href="https://myedusolutions.com/in-the-news/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">In The Media</a>
                            <a href="https://myedusolutions.com/about-us/in-the-community/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">In the Community</a>
                        </div>
                    </div>

                    <a href="https://myedusolutions.com/contact-us/" class="font-medium text-gray-700 hover:text-blue-600">Contact</a>
                </div>
                
                <!-- CTA Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="https://caportal.myedusolutions.com/mes90/login.php" class="px-4 py-2 text-blue-600 font-medium border border-blue-600 rounded-lg hover:bg-blue-50">Portal Login</a>
                    <a href="https://myedusolutions.com/advisor/" class="px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">Speak to an Advisor</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuButton" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Video -->
    <section class="hero-gradient text-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">Fully-Managed Student Loan Programs for Complete Forgiveness</h1>
                    <p class="text-xl mb-8">We help you navigate the complexities of student loan management and receive complete forgiveness from the Department of Education.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="https://myedusolutions.com/calculator/" class="px-6 py-3 bg-white text-blue-600 font-bold rounded-lg hover:bg-gray-100 transition duration-300 text-center">View Your Savings</a>
                        <a href="https://myedusolutions.com/advisor/" class="px-6 py-3 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-blue-600 transition duration-300 text-center">Speak to an Advisor</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="w-full max-w-2xl">
                        <!-- Video Embed Container -->
                        <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" title="Student Loan Forgiveness Explained" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!-- Video Stats Below - Optional -->
                        <div class="grid grid-cols-3 gap-4 mt-4 bg-white/10 backdrop-blur-sm rounded-xl p-4">
                            <div class="text-center p-2">
                                <div class="text-2xl font-bold">784</div>
                                <p class="text-sm">Completed Clients</p>
                            </div>
                            <div class="text-center p-2">
                                <div class="text-2xl font-bold">101%</div>
                                <p class="text-sm">Debt Reduction*</p>
                            </div>
                            <div class="text-center p-2">
                                <div class="text-2xl font-bold">$81K+</div>
                                <p class="text-sm">Average Forgiveness*</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Rate Section -->
    <section class="py-12 bg-blue-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">100% of MES Clients Who Completed Their Payments Received Forgiveness</h2>
            <a href="https://caportal.myedusolutions.com/public/substantiation" class="text-blue-600 font-medium hover:underline">See Substantiation</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">How We Help You Achieve Student Loan Forgiveness</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">We Can Help Reduce Monthly Payments</h3>
                    <p class="text-gray-600">Our advisors help lower your monthly payments while keeping you qualified for forgiveness.</p>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="feature-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">MES Costs Pennies Compared to Every Dollar Saved</h3>
                    <p class="text-gray-600">Our fees are minimal compared to the thousands we help you save on your student loans.</p>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">See How <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="feature-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">99% of MES Clients Renew Annually</h3>
                    <p class="text-gray-600">Our clients see the value in our service and continue their journey toward forgiveness with us.</p>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Client Results <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="feature-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">We Fully Manage Your Forgiveness Program</h3>
                    <p class="text-gray-600">From paperwork to payment tracking, we handle everything so you don't have to.</p>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Our Process <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="feature-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pay $0 to Find Out If You're Eligible</h3>
                    <p class="text-gray-600">Our free eligibility check helps you understand your options without any commitment.</p>
                    <a href="https://myedusolutions.com/advisor/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Check Eligibility <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="feature-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">All Income Levels and Credit Accepted</h3>
                    <p class="text-gray-600">We help clients from all financial backgrounds qualify for forgiveness programs.</p>
                    <a href="https://myedusolutions.com/calculator/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">View Your Savings <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="https://myedusolutions.com/advisor/" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition duration-300 inline-block">Speak to an Advisor</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Testimonials</h2>
            <p class="text-xl text-center text-gray-600 mb-12">I'm debt-free. The program works! Let our clients' stories help you make an informed decision.</p>
            
            <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8">
                <div class="bg-white p-8 rounded-xl shadow-md flex-1">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 italic mb-6">"My Education Solutions made the process so easy. They handled everything and now my $47,000 student loan debt is completely forgiven!"</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 w-12 h-12 rounded-full flex items-center justify-center text-gray-500">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Sarah J.</p>
                            <p class="text-gray-600 text-sm">San Antonio, TX</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md flex-1">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 italic mb-6">"I was skeptical at first, but MES helped me qualify for forgiveness that I didn't even know I was eligible for. Now my monthly payments are half of what they were!"</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 w-12 h-12 rounded-full flex items-center justify-center text-gray-500">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Michael T.</p>
                            <p class="text-gray-600 text-sm">Austin, TX</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md flex-1">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 italic mb-6">"The peace of mind MES gave me was worth every penny. They kept me updated every step of the way and now I can finally see the light at the end of the tunnel."</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 w-12 h-12 rounded-full flex items-center justify-center text-gray-500">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Jessica L.</p>
                            <p class="text-gray-600 text-sm">Houston, TX</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="https://myedusolutions.com/reviews/" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition duration-300 inline-block">See Client Testimonials</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">We're dedicated to helping you live debt-free</h2>
                    <p class="text-gray-600 mb-6">My Education Solutions' Mission is to help one million Americans successfully acquire the Student Loan Forgiveness they need to live their best lives. Improving yourself should never be a burden. Let our Advisors get you access to Government-funded relief.</p>
                    <div class="mb-6">
                        <div class="text-4xl font-bold text-blue-600 mb-2">$64,128,750</div>
                        <p class="text-gray-600">Saved* by our clients</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="px-4 py-2 border border-blue-600 text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition duration-300">See Clients' Results</a>
                        <a href="https://myedusolutions.com/about-us/" class="px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">More About Us</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/05/ceo-my-education-solutions.png" alt="Christina Randell - CEO" class="rounded-xl shadow-xl w-full max-w-md">
                        <div class="absolute -bottom-4 -right-4 bg-white p-4 rounded-lg shadow-md">
                            <p class="font-bold text-gray-800">Christina Randell</p>
                            <p class="text-gray-600">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Who We Are vs. Who We Aren't</h2>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check-circle text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Experienced Student Loan Managers</h3>
                                <p class="text-gray-600">We have deep expertise in all federal student loan forgiveness programs and can guide you to the right solution.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Servicer Watchdog</h3>
                                <p class="text-gray-600">We monitor your loan servicer to ensure they're accurately tracking your progress toward forgiveness.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-search-dollar text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Discrepancy Resolution Specialists</h3>
                                <p class="text-gray-600">If your loan servicer makes mistakes, we'll identify and correct them to keep you on track for forgiveness.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-hands-helping text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Your Advocates</h3>
                                <p class="text-gray-600">We fight for your rights as a borrower and ensure you get all the benefits you're entitled to.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-times-circle text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Refinance Company</h3>
                                <p class="text-gray-600">We don't refinance loans - in fact, we recommend against it as it disqualifies you from forgiveness.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-times-circle text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Loan Servicer / Government</h3>
                                <p class="text-gray-600">We're not affiliated with the government or loan servicers - we work independently for your benefit.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-times-circle text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Credit Repair / Debt Settlement</h3>
                                <p class="text-gray-600">We don't settle debt or repair credit - we help you participate in official federal forgiveness programs.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-times-circle text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Bank/Private Lender</h3>
                                <p class="text-gray-600">We don't lend money - we help you navigate existing federal student loan programs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Journey Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">See if you're eligible for Student Loan Forgiveness</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="journey-card bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="text-blue-600 text-5xl mb-4">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Some College</h3>
                    <p class="text-gray-600 mb-4">Started my journey but moved on in a different direction</p>
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <p class="text-blue-600 font-medium mb-2">You may qualify for Forgiveness</p>
                        <p class="text-gray-700 text-sm">Didn't complete a degree? You may still qualify for forgiveness.</p>
                    </div>
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Ask us how <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="journey-card bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="text-blue-600 text-5xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">New Graduate</h3>
                    <p class="text-gray-600 mb-4">Undergraduate and Post-graduate</p>
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <p class="text-blue-600 font-medium mb-2">You may qualify for Forgiveness</p>
                        <p class="text-gray-700 text-sm">Jumpstart Forgiveness 6 months early.</p>
                    </div>
                    <a href="https://myedusolutions.com/advisor/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Ask us how <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="journey-card bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="text-blue-600 text-5xl mb-4">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Graduated Over 6 Months Ago</h3>
                    <p class="text-gray-600 mb-4">Undergraduate and Post-graduate</p>
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <p class="text-blue-600 font-medium mb-2">Graduate Program</p>
                        <p class="text-gray-700 text-sm">Don't Overpay! We Can Help Reduce Monthly Payments.</p>
                    </div>
                    <a href="https://myedusolutions.com/advisor/" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Ask us how <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Concerns Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Common Concerns</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="text-blue-600 text-5xl mb-4">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">How does Student Loan Forgiveness Work?</h3>
                    <p class="text-gray-600 mb-4">Searching for clarity</p>
                    <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-100">
                        <p class="text-yellow-700 font-medium">See our step-by-step process</p>
                        <p class="text-gray-700 text-sm mt-1">MES's fully-managed student loan forgiveness process delivers amazing results & peace of mind.</p>
                    </div>
                    <a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">Discover More</a>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="text-blue-600 text-5xl mb-4">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Is this program legit?</h3>
                    <p class="text-gray-600 mb-4">It absolutely is!</p>
                    <div class="bg-green-50 p-4 rounded-lg border border-green-100">
                        <p class="text-green-700 font-medium">Trusted by Thousands</p>
                        <p class="text-gray-700 text-sm mt-1">Learn how MES can help you work towards Government Forgiveness.</p>
                    </div>
                    <a href="https://myedusolutions.com/reviews/" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">Watch Videos</a>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="text-blue-600 text-5xl mb-4">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Why Should You NOT Refinance?</h3>
                    <p class="text-gray-600 mb-4">Refinancing can disqualify you from future Government Forgiveness.</p>
                    <div class="bg-red-50 p-4 rounded-lg border border-red-100">
                        <p class="text-red-700 font-medium">Find your best option</p>
                        <p class="text-gray-700 text-sm mt-1">Refinancing will disqualify you from future Government Forgiveness of your debt which can eliminate outstanding principal and interest. Why pay more?</p>
                    </div>
                    <a href="https://myedusolutions.com/advisor" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">Speak to an Advisor</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center text-center">
                <p class="text-gray-600 mb-8">Trusted by thousands of clients</p>
                <div class="flex flex-col md:flex-row items-center justify-center gap-8">
                    <img src="https://myedusolutions.com/wp-content/uploads/2024/06/2024-Best-Places-to-Work-Logo-Transparent.png" alt="Best Places to Work" class="h-20">
                    <img src="https://myedusolutions.com/wp-content/uploads/2024/03/Inc.-5000-Color-Medallion-Logo.png" alt="Inc 5000" class="h-20">
                </div>
                <div class="mt-12 flex flex-col sm:flex-row gap-4">
                    <a href="https://myedusolutions.com/calculator/" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition duration-300">View Your Savings</a>
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="px-6 py-3 border-2 border-blue-600 text-blue-600 font-bold rounded-lg hover:bg-blue-50 transition duration-300">What's the Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Questions You May Have</h2>
            <p class="text-xl text-center text-gray-600 mb-12">Find the answers and resources to navigate student loan debt forgiveness</p>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="faq-toggle flex items-center justify-between w-full">
                        <h3 class="text-lg font-bold text-gray-800 text-left">Can I still enroll in the Forgiveness program if I am currently in default?</h3>
                        <i class="fas fa-chevron-down ml-4 text-blue-600 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <p class="text-gray-700">Yes, if your loans are in default or collections, you may still qualify to enroll in the Student Loan Forgiveness Program. Even if you have been contacted regarding wage garnishment, we may still be able to help you if take action quickly. To reach us, please call <a href="tel:210-812-3200" class="text-blue-600 hover:underline">210-812-3200</a> or email <a href="mailto:Advisors@MyEduSolutions.com" class="text-blue-600 hover:underline">Advisors@MyEduSolutions.com</a> today.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="faq-toggle flex items-center justify-between w-full">
                        <h3 class="text-lg font-bold text-gray-800 text-left">How long does the enrollment process take?</h3>
                        <i class="fas fa-chevron-down ml-4 text-blue-600 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <p class="text-gray-700">Your MES Student Loan Advisor will process your application and answer all your questions. Approvals by the Department of Education can be decided within 10 business days. MES will stay in touch through the process.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="faq-toggle flex items-center justify-between w-full">
                        <h3 class="text-lg font-bold text-gray-800 text-left">What are the benefits of the MES Student Loan Forgiveness program?</h3>
                        <i class="fas fa-chevron-down ml-4 text-blue-600 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <p class="text-gray-700">My Education Solutions has successfully helped thousands of individuals navigate the complexities of student loan debt repayment and <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="text-blue-600 hover:underline">hundreds have received complete forgiveness</a> from the government. MES Advisors audit & resolve Servicer posting errors on your behalf so your qualified payments will count toward forgiveness.</p>
                        <p class="text-gray-700 mt-3">Our trusted Student Loan Advisors help you take control of your debt through a fully-managed student loan program.</p>
                        <p class="font-bold mt-4">My Education Solutions Management Services Include:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Direct access to speak with a solution-oriented Student Loan Advisor</li>
                            <li>MES Advisors audit & resolve Servicer posting errors for forgiveness eligibility</li>
                            <li>Monthly payment drafting & tracking through the Client Portal</li>
                            <li>Renewal team keeps your monthly payments low and in good standing</li>
                            <li>Student Loan alert notifications for Dept. of Education industry changes affecting you</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="faq-toggle flex items-center justify-between w-full">
                        <h3 class="text-lg font-bold text-gray-800 text-left">What is the difference between My Education Solutions and all the other companies that claim that they can help?</h3>
                        <i class="fas fa-chevron-down ml-4 text-blue-600 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/07/student-loan-forgiveness-company-comparison-chart.png" alt="Company Comparison Chart" class="w-full rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Latest News</h2>
            <p class="text-xl text-center text-gray-600 mb-12">Our Recent News About Student Loan Forgiveness</p>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <a href="https://myedusolutions.com/blog/the-save-plan-is-not-saving-anyone/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/12/pexels-karolina-grabowska-5900131-scaled.jpg" alt="Woman stressed about money" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            <a href="https://myedusolutions.com/blog/the-save-plan-is-not-saving-anyone/" class="hover:text-blue-600">The SAVE Plan Is Not Saving Anyone</a>
                        </h3>
                        <a href="https://myedusolutions.com/blog/the-save-plan-is-not-saving-anyone/" class="inline-block mt-3 text-blue-600 hover:underline">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <a href="https://myedusolutions.com/blog/will-trump-be-the-savior-of-student-loan-forgiveness/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/11/2a1fc72d33729a106b3e794d3102b0da81dcaea7.avif" alt="Trump" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            <a href="https://myedusolutions.com/blog/will-trump-be-the-savior-of-student-loan-forgiveness/" class="hover:text-blue-600">Will Trump Save Student Loan Forgiveness?</a>
                        </h3>
                        <a href="https://myedusolutions.com/blog/will-trump-be-the-savior-of-student-loan-forgiveness/" class="inline-block mt-3 text-blue-600 hover:underline">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <a href="https://myedusolutions.com/blog/understanding-the-confusion-around-student-loan-forgiveness-what-borrowers-need-to-know-now/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/10/pexels-vlada-karpovich-4050320-scaled.jpg" alt="Woman working" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            <a href="https://myedusolutions.com/blog/understanding-the-confusion-around-student-loan-forgiveness-what-borrowers-need-to-know-now/" class="hover:text-blue-600">Understanding the Confusion Around Student Loan Forgiveness</a>
                        </h3>
                        <a href="https://myedusolutions.com/blog/understanding-the-confusion-around-student-loan-forgiveness-what-borrowers-need-to-know-now/" class="inline-block mt-3 text-blue-600 hover:underline">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="https://myedusolutions.com/blog/" class="px-6 py-3 border-2 border-blue-600 text-blue-600 font-bold rounded-lg hover:bg-blue-50 transition duration-300 inline-block">View All News</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Stay Updated on Student Loan Relief</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Sign up for our newsletter to receive the latest updates on student loan forgiveness programs and relief options.</p>
            
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-l-lg focus:outline-none text-gray-800">
                <button type="submit" class="px-6 py-3 bg-yellow-400 text-gray-900 font-bold rounded-r-lg hover:bg-yellow-300 transition duration-300">Subscribe</button>
            </form>
            
            <p class="text-sm mt-4 text-blue-100">We respect your privacy. Unsubscribe at any time.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <a href="https://myedusolutions.com/index.php/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="MES Logo" class="h-10 mb-4">
                    </a>
                    <p class="text-gray-400 mb-4">A Student Loan Management Firm dedicated to helping you live your best life.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.tiktok.com/@myeducationsolutions" class="text-gray-400 hover:text-white transition duration-300" title="Follow on TikTok"><i class="fab fa-tiktok text-xl"></i></a>
                        <a href="https://www.youtube.com/channel/UCRQ--t_JSVLKrCaHZhDX1-Q" class="text-gray-400 hover:text-white transition duration-300" title="Follow on Youtube"><i class="fab fa-youtube text-xl"></i></a>
                        <a href="https://www.instagram.com/myedusolutions_official/" class="text-gray-400 hover:text-white transition duration-300" title="Follow on Instagram"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61560170915397" class="text-gray-400 hover:text-white transition duration-300" title="Follow on Facebook"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="https://www.linkedin.com/company/myeducationsolutions/" class="text-gray-400 hover:text-white transition duration-300" title="Follow on LinkedIn"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="https://twitter.com/MyEdu_Solutions" class="text-gray-400 hover:text-white transition duration-300" title="Follow on X"><i class="fab fa-twitter text-xl"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Useful Links</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="text-gray-400 hover:text-white transition duration-300">How It Works</a></li>
                        <li><a href="https://myedusolutions.com/about-us/" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                        <li><a href="https://myedusolutions.com/reviews/" class="text-gray-400 hover:text-white transition duration-300">Client Reviews</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="text-gray-400 hover:text-white transition duration-300">Client Results</a></li>
                        <li><a href="https://myedusolutions.com/contact-us/" class="text-gray-400 hover:text-white transition duration-300">Contact Us</a></li>
                        <li><a href="https://myedusolutions.com/careers/" class="text-gray-400 hover:text-white transition duration-300">Careers</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="text-gray-400 hover:text-white transition duration-300">Student Loan Forgiveness Management</a></li>
                        <li><a href="https://myedusolutions.com/programs/disability-discharge/" class="text-gray-400 hover:text-white transition duration-300">Disability Discharge</a></li>
                        <li><a href="https://myedusolutions.com/programs/borrower-defense-program/" class="text-gray-400 hover:text-white transition duration-300">Borrower Defense Program</a></li>
                        <li><a href="https://myedusolutions.com/referral-program/" class="text-gray-400 hover:text-white transition duration-300">Referral Program</a></li>
                        <li><a href="https://myedusolutions.com/employee-assistance-program-benefit/" class="text-gray-400 hover:text-white transition duration-300">Employee Program</a></li>
                        <li><a href="https://myedusolutions.com/fundraising-opportunities/" class="text-gray-400 hover:text-white transition duration-300">Fundraising Program</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-gray-400 hover:text-white transition duration-300">*Substantiation</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Find Your Savings</h3>
                    <p class="text-gray-400 mb-4">Are you overpaying on your student loans? Use our calculator to see your potential savings.</p>
                    <a href="https://myedusolutions.com/calculator" class="inline-block px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 mb-6">View Your Savings</a>

                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt text-gray-400 mr-3"></i>
                            <a href="tel:2108123200" class="text-gray-400 hover:text-white transition duration-300">210-812-3200</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user-lock text-gray-400 mr-3"></i>
                            <a href="https://caportal.myedusolutions.com/mes90/login.php" class="text-gray-400 hover:text-white transition duration-300">Client Login</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-gray-400 mr-3"></i>
                            <a href="https://maps.app.goo.gl/T84Pba3XYtPf5wPp9" class="text-gray-400 hover:text-white transition duration-300">2700 Lockhill Selma San Antonio, TX 78230</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-400 text-sm mb-4 md:mb-0">
                        © <span id="currentYear"></span> My Education Solutions. All rights reserved.
                    </div>
                    <div class="flex space-x-4">
                        <a href="https://myedusolutions.com/terms-conditions/" class="text-gray-400 hover:text-white transition duration-300 text-sm">Terms & Conditions</a>
                        <a href="https://myedusolutions.com/privacy-policy/" class="text-gray-400 hover:text-white transition duration-300 text-sm">Privacy Policy</a>
                        <a href="https://myedusolutions.com/sitemap_index.xml/" class="text-gray-400 hover:text-white transition duration-300 text-sm">Sitemap</a>
                        <a href="https://myedusolutions.com/accessibility/" class="text-gray-400 hover:text-white transition duration-300 text-sm">Accessibility</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobileMenu = document.getElementById('closeMobileMenu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Dropdown toggle functionality
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.closest('.dropdown');
                const menu = dropdown.querySelector('.dropdown-menu');
                
                if(menu.classList.contains('hidden')) {
                    // Close all other open dropdowns first
                    document.querySelectorAll('.dropdown-menu').forEach(m => {
                        if(m !== menu) m.classList.add('hidden');
                    });
                    menu.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                }
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if(!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.add('hidden');
                });
            }
        });

</script>
</body>
</html>