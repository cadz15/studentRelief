<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Loan Solutions - My Education Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 1rem;
            color: white;
            font-size: 1.5rem;
        }
        .journey-step {
            border-left: 4px solid #3b82f6;
            padding-left: 1.5rem;
            position: relative;
        }
        .journey-step:before {
            content: '';
            position: absolute;
            left: -12px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #3b82f6;
            border: 4px solid white;
        }
        .testimonial-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }
        .testimonial-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Header/Navigation -->
    <header class="gradient-bg text-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <a href="https://myedusolutions.com/index.php/" class="flex items-center">
                    <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="My Education Solutions Logo" class="h-12">
                </a>
            </div>
            
            <div class="hidden lg:flex items-center space-x-1">
                <div class="dropdown relative">
                    <button class="nav-link px-4 py-2 rounded-lg font-medium flex items-center">
                        Programs <i class="fas fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute hidden mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                        <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Student Loan Forgiveness</a>
                        <a href="https://myedusolutions.com/programs/disability-discharge/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Disability Discharge</a>
                        <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Borrower Defense Program</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/calculator/" class="nav-link px-4 py-2 rounded-lg font-medium">Estimate Payments</a>
                
                <div class="dropdown relative">
                    <button class="nav-link px-4 py-2 rounded-lg font-medium flex items-center">
                        Client Success <i class="fas fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute hidden mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                        <a href={route('client-reviews')} class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Client Reviews</a>
                        <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Client Results</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/about-us/" class="nav-link px-4 py-2 rounded-lg font-medium">About</a>
                
                <div class="dropdown relative">
                    <button class="nav-link px-4 py-2 rounded-lg font-medium flex items-center">
                        Resources <i class="fas fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute hidden mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                        <a href="https://myedusolutions.com/important-updates/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Important Updates</a>
                        <a href="https://myedusolutions.com/blog/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Blogs</a>
                        <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">FAQs</a>
                        <a href="https://myedusolutions.com/referral-program/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Referral Program</a>
                        <a href="https://myedusolutions.com/in-the-news/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">In The Media</a>
                        <a href="https://myedusolutions.com/about-us/in-the-community/" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">In the Community</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/contact-us/" class="nav-link px-4 py-2 rounded-lg font-medium">Contact</a>
                
                <a href="https://caportal.myedusolutions.com/mes90/login.php" class="ml-2 px-4 py-2 rounded-lg font-medium">Portal Login</a>
                
                <a href="https://myedusolutions.com/advisor/" class="ml-2 bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold px-6 py-2 rounded-lg transition duration-300">
                    Speak to an Advisor
                </a>
            </div>
            
            <button class="lg:hidden focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="lg:hidden hidden bg-blue-900" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <div class="dropdown">
                    <button class="w-full text-left px-3 py-2 rounded-md text-base font-medium flex justify-between items-center">
                        Programs <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="hidden bg-blue-800 rounded-md mt-1 py-1" id="mobile-programs">
                        <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block px-4 py-2 text-white">Student Loan Forgiveness</a>
                        <a href="https://myedusolutions.com/programs/disability-discharge/" class="block px-4 py-2 text-white">Disability Discharge</a>
                        <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block px-4 py-2 text-white">Borrower Defense Program</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/calculator/" class="block px-3 py-2 rounded-md text-base font-medium">Estimate Payments</a>
                
                <div class="dropdown">
                    <button class="w-full text-left px-3 py-2 rounded-md text-base font-medium flex justify-between items-center">
                        Client Success <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="hidden bg-blue-800 rounded-md mt-1 py-1" id="mobile-success">
                        <a href={route('client-reviews')} class="block px-4 py-2 text-white">Client Reviews</a>
                        <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block px-4 py-2 text-white">Client Results</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/about-us/" class="block px-3 py-2 rounded-md text-base font-medium">About</a>
                
                <div class="dropdown">
                    <button class="w-full text-left px-3 py-2 rounded-md text-base font-medium flex justify-between items-center">
                        Resources <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="hidden bg-blue-800 rounded-md mt-1 py-1" id="mobile-resources">
                        <a href="https://myedusolutions.com/important-updates/" class="block px-4 py-2 text-white">Important Updates</a>
                        <a href="https://myedusolutions.com/blog/" class="block px-4 py-2 text-white">Blogs</a>
                        <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block px-4 py-2 text-white">FAQs</a>
                        <a href="https://myedusolutions.com/referral-program/" class="block px-4 py-2 text-white">Referral Program</a>
                        <a href="https://myedusolutions.com/in-the-news/" class="block px-4 py-2 text-white">In The Media</a>
                        <a href="https://myedusolutions.com/about-us/in-the-community/" class="block px-4 py-2 text-white">In the Community</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/contact-us/" class="block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                
                <a href="https://caportal.myedusolutions.com/mes90/login.php" class="block px-3 py-2 rounded-md text-base font-medium">Portal Login</a>
                
                <a href="https://myedusolutions.com/advisor/" class="block bg-yellow-400 text-blue-900 font-bold px-3 py-2 rounded-md text-center">
                    Speak to an Advisor
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20 md:py-32">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Fully-Managed Student Loan Programs for Complete Forgiveness</h1>
                <h2 class="text-2xl md:text-3xl font-semibold mb-8">Student Loan Solutions</h2>
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                    <a href="https://myedusolutions.com/calculator/" class="bg-white hover:bg-gray-100 text-blue-900 font-bold px-8 py-4 rounded-lg transition duration-300">
                        View your savings
                    </a>
                    <a href="https://myedusolutions.com/advisor/" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold px-8 py-4 rounded-lg transition duration-300">
                        Speak to an Advisor
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-blue-50 rounded-xl">
                    <div class="text-5xl font-bold text-blue-900 mb-2">784</div>
                    <p class="text-gray-600">Completed Clients with My Education Solutions</p>
                </div>
                <div class="p-6 bg-blue-50 rounded-xl">
                    <div class="text-5xl font-bold text-blue-900 mb-2">101%</div>
                    <p class="text-gray-600">Reduction of Our Clients' Student Loan Debt*</p>
                </div>
                <div class="p-6 bg-blue-50 rounded-xl">
                    <div class="text-5xl font-bold text-blue-900 mb-2">$81,797</div>
                    <p class="text-gray-600">MES Clients' average amount forgiven by the Dept. of Education*</p>
                </div>
                <div class="p-6 bg-blue-50 rounded-xl">
                    <div class="text-5xl font-bold text-blue-900 mb-2">$64M+</div>
                    <p class="text-gray-600">Saved with Forgiveness Programs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stress-Free Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Eliminate the <span class="text-blue-600">Stress</span> of your Student Loans
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">
                        My Education Solutions' goal is to help you navigate the complexities of <a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="text-blue-600 hover:underline">student loan management</a> and receive complete Forgiveness from the Department of Education.
                    </p>
                    <div class="bg-blue-100 border-l-4 border-blue-500 p-4 mb-6">
                        <p class="text-blue-800 font-medium">
                            <a href="https://caportal.myedusolutions.com/public/substantiation" class="hover:underline">
                                <i class="fas fa-check-circle mr-2 text-blue-500"></i> 100% MES Clients who have completed their required payments have received Student Loan Forgiveness
                            </a>
                        </p>
                    </div>
                    <p class="text-lg text-gray-600">
                        We're dedicated to helping you find an effective plan and achieve student loan forgiveness!
                    </p>
                </div>
                <div class="md:w-1/2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover transition duration-300">
                            <div class="feature-icon bg-blue-500">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">We Can Help Reduce Monthly Payments</h3>
                            <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">
                                <i class="fas fa-check-circle mr-1"></i> Learn More
                            </a>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover transition duration-300">
                            <div class="feature-icon bg-yellow-500">
                                <i class="fas fa-coins"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">MES Costs Pennies, Compared to Every Dollar Saved</h3>
                            <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">
                                <i class="fas fa-check-circle mr-1"></i> Learn More
                            </a>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover transition duration-300">
                            <div class="feature-icon bg-green-500">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">99% MES Clients Renew Annually</h3>
                            <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">
                                <i class="fas fa-check-circle mr-1"></i> Learn More
                            </a>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover transition duration-300">
                            <div class="feature-icon bg-purple-500">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">We Fully Manage Your Forgiveness Program</h3>
                            <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">
                                <i class="fas fa-check-circle mr-1"></i> Learn More
                            </a>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover transition duration-300">
                            <div class="feature-icon bg-red-500">
                                <i class="fas fa-search-dollar"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Pay $0 to Find Out If You're Eligible</h3>
                            <a href="#eligibility" class="text-blue-600 hover:underline">
                                <i class="fas fa-check-circle mr-1"></i> Learn More
                            </a>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover transition duration-300">
                            <div class="feature-icon bg-indigo-500">
                                <i class="fas fa-universal-access"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">All Income Levels and Credit Accepted</h3>
                            <a href="#eligibility" class="text-blue-600 hover:underline">
                                <i class="fas fa-check-circle mr-1"></i> Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                    <a href="https://myedusolutions.com/calculator/" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-lg transition duration-300">
                        View your savings
                    </a>
                    <a href="https://myedusolutions.com/advisor/" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold px-8 py-4 rounded-lg transition duration-300">
                        Speak to an Advisor
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-blue-900 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">TESTIMONIALS</h2>
            <h3 class="text-2xl text-center mb-12">I'm debt-free. The program works!</h3>
            <p class="text-center max-w-3xl mx-auto mb-12">
                Let our Clients' stories help you make an informed decision. We believe trust lies in the power of personal stories. See how we've helped Clients save money and time and reduce their stress.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="testimonial-card p-6 bg-white text-gray-800">
                    <div class="flex items-center mb-4">
                        <div class="mr-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                <i class="fas fa-user text-xl"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold">Sarah J.</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="italic">
                        "After years of struggling with my student loans, MES helped me navigate the forgiveness process. Now I'm debt-free and can focus on my future."
                    </p>
                </div>
                
                <div class="testimonial-card p-6 bg-white text-gray-800">
                    <div class="flex items-center mb-4">
                        <div class="mr-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                <i class="fas fa-user text-xl"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold">Michael T.</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="italic">
                        "The team at MES was incredibly knowledgeable and supportive. They saved me over $60,000 and took all the stress out of dealing with my loans."
                    </p>
                </div>
                
                <div class="testimonial-card p-6 bg-white text-gray-800">
                    <div class="flex items-center mb-4">
                        <div class="mr-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                <i class="fas fa-user text-xl"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold">Jennifer L.</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="italic">
                        "I didn't think loan forgiveness was possible for me. MES proved me wrong and handled everything from start to finish. Best decision I ever made."
                    </p>
                </div>
            </div>
            
            <div class="text-center">
                <a href={route('client-reviews')} class="inline-block bg-white hover:bg-gray-100 text-blue-900 font-bold px-8 py-3 rounded-lg transition duration-300">
                    See Client Testimonials
                </a>
            </div>
        </div>
    </section>

    <!-- CEO Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-10 md:mb-0 md:pr-10">
                    <img src="https://myedusolutions.com/wp-content/uploads/2023/05/ceo-my-education-solutions.png" alt="Christina Randell, CEO & Founder" class="rounded-lg shadow-lg w-full max-w-sm mx-auto">
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
                        We're dedicated to helping you live debt-free.
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        My Education Solutions' Mission is to help one million Americans successfully acquire the Student Loan Forgiveness they need to live their best lives. Improving yourself should never be a burden. Let our Advisors get you access to Government-funded relief.
                    </p>
                    
                    <div class="flex items-center mb-8">
                        <div class="mr-6">
                            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-user-tie text-2xl text-blue-600"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Christina Randell</h3>
                            <p class="text-gray-600">CEO & Founder</p>
                        </div>
                    </div>
                    
                    <div class="bg-blue-50 p-6 rounded-lg inline-block mb-8">
                        <div class="text-3xl font-bold text-blue-900 mb-1">$64,128,750 Saved*</div>
                        <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="text-blue-600 hover:underline">
                            See Clients' Results
                        </a>
                    </div>
                    
                    <div>
                        <a href="https://myedusolutions.com/about-us/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-lg transition duration-300">
                            More About Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-gray-900">Who We Are</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-20">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Experienced Student Loan Managers</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-eye text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Servicer Watchdog</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search-dollar text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Discrepancy Resolution Specialists</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Trusted Student Loan Advisors</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-shield text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Your Advocates</h3>
                </div>
            </div>
            
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-gray-900">Who We Aren't</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-exchange-alt text-gray-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Refinance Company</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-landmark text-gray-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Loan Servicer / Government</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone-alt text-gray-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Telemarketing Company</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-university text-gray-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Bank/Private Lender</h3>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-credit-card text-gray-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold">Credit Repair / Debt Settlement</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section id="eligibility" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-6">
                See if you're eligible for <span class="text-blue-600">Student Loan Forgiveness</span>
            </h2>
            <p class="text-xl text-center text-gray-600 mb-12">
                Take the first step toward financial freedom today
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-blue-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-book-open text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Some College</h3>
                    </div>
                    <div class="journey-step mb-6">
                        <p class="text-gray-600">Started my journey but moved on in a different direction</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-l-4 border-blue-500 mb-6">
                        <h4 class="font-semibold mb-2">You may qualify for Forgiveness</h4>
                        <p class="text-gray-600 text-sm">
                            Didn't complete a degree? You may still qualify for forgiveness.
                        </p>
                    </div>
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-lg transition duration-300">
                        Ask us how
                    </a>
                </div>
                
                <div class="bg-blue-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user-graduate text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">New Graduate</h3>
                    </div>
                    <div class="journey-step mb-6">
                        <p class="text-gray-600">Undergraduate and Post-graduate</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-l-4 border-blue-500 mb-6">
                        <h4 class="font-semibold mb-2">You may qualify for Forgiveness</h4>
                        <p class="text-gray-600 text-sm">
                            Jumpstart Forgiveness 6 months early.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <a href="https://myedusolutions.com/advisor/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-lg transition duration-300">
                            Ask us how
                        </a>
                        <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="inline-block bg-transparent hover:bg-blue-100 text-blue-600 font-bold px-6 py-2 rounded-lg border border-blue-600 transition duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
                
                <div class="bg-blue-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-briefcase text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Graduated Over 6 Months Ago</h3>
                    </div>
                    <div class="journey-step mb-6">
                        <p class="text-gray-600">Undergraduate and Post-graduate</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-l-4 border-blue-500 mb-6">
                        <h4 class="font-semibold mb-2">Graduate Program</h4>
                        <p class="text-gray-600 text-sm">
                            Don't Overpay! We Can Help Reduce Monthly Payments.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <a href="https://myedusolutions.com/advisor/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-lg transition duration-300">
                            Ask us how
                        </a>
                        <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="inline-block bg-transparent hover:bg-blue-100 text-blue-600 font-bold px-6 py-2 rounded-lg border border-blue-600 transition duration-300">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="p-6 border border-gray-200 rounded-xl hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-question-circle text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">How does Student Loan Forgiveness Work?</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        See our step-by-step process. MES' fully-managed student loan forgiveness process delivers amazing results & peace of mind.
                    </p>
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="text-blue-600 hover:underline font-medium">
                        Discover More
                    </a>
                </div>
                
                <div class="p-6 border border-gray-200 rounded-xl hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-check-circle text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Is this Program Legit?</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Trusted by hundreds. Learn how MES can help you work toward total Student Loan Forgiveness.
                    </p>
                    <a href={route('client-reviews')} class="text-blue-600 hover:underline font-medium">
                        Watch Videos
                    </a>
                </div>
                
                <div class="p-6 border border-gray-200 rounded-xl hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-exclamation-triangle text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Why Should You NOT Refinance?</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Don't disqualify yourself from future Forgiveness plans and get stuck with accruing interest.
                    </p>
                    <a href="https://myedusolutions.com/advisor/" class="text-blue-600 hover:underline font-medium">
                        Speak to an Advisor
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Badges -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-12">
                <div>
                    <img src="https://myedusolutions.com/wp-content/uploads/2024/06/2024-Best-Places-to-Work-Logo-Transparent.png" alt="Best Places to Work 2024" class="h-20 object-contain">
                </div>
                <div>
                    <img src="https://myedusolutions.com/wp-content/uploads/2024/03/Inc.-5000-Color-Medallion-Logo.png" alt="Inc 5000" class="h-20 object-contain">
                </div>
            </div>
            
            <div class="flex justify-center mt-12 space-x-4">
                <a href="https://myedusolutions.com/calculator/" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-lg transition duration-300">
                    View your savings
                </a>
                <a href="https://myedusolutions.com/programs/student-loan-forgiveness/#process" class="bg-transparent hover:bg-gray-200 text-gray-800 font-bold px-8 py-3 rounded-lg border border-gray-400 transition duration-300">
                    What's the process
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-6 text-gray-900">
                QUESTIONS YOU MAY HAVE
            </h2>
            <p class="text-xl text-center text-gray-600 mb-12">
                Find the answers and resources to navigate student loan debt forgiveness
            </p>
            
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <button class="accordion-button flex justify-between items-center w-full text-left font-semibold text-lg focus:outline-none">
                        <span>Can I still enroll in the Forgiveness program if I am currently in default?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300"></i>
                    </button>
                    <div class="accordion-content mt-2 text-gray-600">
                        <p>Yes, if your loans are in default or collections, you may still qualify to enroll in the Student Loan Forgiveness Program. Even if you have been contacted regarding wage garnishment, we may still be able to help you if take action quickly. To reach us, please call <a href="tel:2108123200" class="text-blue-600">210-812-3200</a> or email <a href="mailto:Advisors@MyEduSolutions.com" class="text-blue-600">Advisors@MyEduSolutions.com</a> today.</p>
                    </div>
                </div>
                
                <div class="border-b border-gray-200 pb-4">
                    <button class="accordion-button flex justify-between items-center w-full text-left font-semibold text-lg focus:outline-none">
                        <span>How long does the enrollment process take?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300"></i>
                    </button>
                    <div class="accordion-content mt-2 text-gray-600">
                        <p>Your MES Student Loan Advisor will process your application and answer all your questions. Approvals by the Department of Education can be decided within 10 business days. MES will stay in touch through the process.</p>
                    </div>
                </div>
                
                <div class="border-b border-gray-200 pb-4">
                    <button class="accordion-button flex justify-between items-center w-full text-left font-semibold text-lg focus:outline-none">
                        <span>What are the benefits of the MES Student Loan Forgiveness program?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300"></i>
                    </button>
                    <div class="accordion-content mt-2 text-gray-600">
                        <p>My Education Solutions has successfully helped thousands of individuals navigate the complexities of student loan debt repayment and <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="text-blue-600">hundreds have received complete forgiveness</a> from the government. MES Advisors audit & resolve Servicer posting errors on your behalf so your qualified payments will count toward forgiveness.</p>
                        <p class="mt-2">Our trusted Student Loan Advisors help you take control of your debt through a fully-managed student loan program.</p>
                        <p class="mt-2 font-medium">My Education Solutions Management Services Include:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Direct access to speak with a solution-oriented Student Loan Advisor</li>
                            <li>MES Advisors audit & resolve Servicer posting errors for forgiveness eligibility</li>
                            <li>Monthly payment drafting & tracking through the Client Portal</li>
                            <li>Renewal team keeps your monthly payments low and in good standing</li>
                            <li>Student Loan alert notifications for Dept. of Education industry changes affecting you</li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-b border-gray-200 pb-4">
                    <button class="accordion-button flex justify-between items-center w-full text-left font-semibold text-lg focus:outline-none">
                        <span>What is the difference between My Education Solutions and all the other companies that claim that they can help?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300"></i>
                    </button>
                    <div class="accordion-content mt-2 text-gray-600">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/07/student-loan-forgiveness-company-comparison-chart.png" alt="Student Loan Forgiveness Company Comparison Chart" class="w-full rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-gray-900">LATEST NEWS</h2>
            <p class="text-xl text-center text-gray-600 mb-12">Our Recent News About Student Loan Forgiveness</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="https://myedusolutions.com/blog/the-save-plan-is-not-saving-anyone/" class="group">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/12/pexels-karolina-grabowska-5900131-scaled.jpg" alt="Woman stressed about money" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-blue-600 transition duration-300">The SAVE Plan Is Not Saving Anyone</h3>
                            <p class="text-gray-600">Learn why the SAVE plan might not be the solution for your student loan debt.</p>
                        </div>
                    </div>
                </a>
                
                <a href="https://myedusolutions.com/blog/will-trump-be-the-savior-of-student-loan-forgiveness/" class="group">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/11/2a1fc72d33729a106b3e794d3102b0da81dcaea7.avif" alt="Trump and student loans" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-blue-600 transition duration-300">Will Trump Save Student Loan Forgiveness?</h3>
                            <p class="text-gray-600">Examining the potential impact of political changes on loan forgiveness programs.</p>
                        </div>
                    </div>
                </a>
                
                <a href="https://myedusolutions.com/blog/understanding-the-confusion-around-student-loan-forgiveness-what-borrowers-need-to-know-now/" class="group">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/10/pexels-vlada-karpovich-4050320-scaled.jpg" alt="Confused about student loans" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 group-hover:text-blue-600 transition duration-300">Understanding the Confusion Around Student Loan Forgiveness</h3>
                            <p class="text-gray-600">Cutting through the noise to help borrowers understand their options.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="gradient-bg text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div>
                    <a href="https://myedusolutions.com/index.php/" class="flex mb-6">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="My Education Solutions Logo" class="h-10">
                    </a>
                    <p class="mb-6">A Student Loan Management Firm dedicated to helping you live your best life.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.tiktok.com/@myeducationsolutions" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-tiktok text-xl"></i></a>
                        <a href="https://www.youtube.com/channel/UCRQ--t_JSVLKrCaHZhDX1-Q" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-youtube text-xl"></i></a>
                        <a href="https://www.instagram.com/myedusolutions_official/" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61560170915397" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="https://www.linkedin.com/company/myeducationsolutions/" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="https://twitter.com/MyEdu_Solutions" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-x-twitter text-xl"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Useful Links</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="hover:text-yellow-300 transition duration-300">How It Works</a></li>
                        <li><a href="https://myedusolutions.com/about-us/" class="hover:text-yellow-300 transition duration-300">About Us</a></li>
                        <li><a href={route('client-reviews')} class="hover:text-yellow-300 transition duration-300">Client Reviews</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="hover:text-yellow-300 transition duration-300">Client Results</a></li>
                        <li><a href="https://myedusolutions.com/contact-us/" class="hover:text-yellow-300 transition duration-300">Contact Us</a></li>
                        <li><a href="https://myedusolutions.com/careers/" class="hover:text-yellow-300 transition duration-300">Careers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="hover:text-yellow-300 transition duration-300">Student Loan Forgiveness Management</a></li>
                        <li><a href="https://myedusolutions.com/programs/disability-discharge/" class="hover:text-yellow-300 transition duration-300">Disability Discharge</a></li>
                        <li><a href="https://myedusolutions.com/programs/borrower-defense-program/" class="hover:text-yellow-300 transition duration-300">Borrower Defense Program</a></li>
                        <li><a href="https://myedusolutions.com/referral-program/" class="hover:text-yellow-300 transition duration-300">Referral Program</a></li>
                        <li><a href="https://myedusolutions.com/employee-assistance-program-benefit/" class="hover:text-yellow-300 transition duration-300">Employee Program</a></li>
                        <li><a href="https://myedusolutions.com/fundraising-opportunities/" class="hover:text-yellow-300 transition duration-300">Fundraising Program</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/" class="hover:text-yellow-300 transition duration-300">*Substantiation</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Find Your Savings</h3>
                    <p class="mb-4">Are you overpaying on your student loans? Use our calculator to see your potential savings.</p>
                    <a href="https://myedusolutions.com/calculator" class="inline-block bg-white hover:bg-gray-100 text-blue-900 font-bold px-6 py-2 rounded-lg mb-6 transition duration-300">
                        VIEW YOUR SAVINGS
                    </a>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-3"></i>
                            <a href="tel:2108123200" class="hover:text-yellow-300 transition duration-300">210-812-3200</a>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-user-lock mt-1 mr-3"></i>
                            <a href="https://caportal.myedusolutions.com/mes90/login.php" class="hover:text-yellow-300 transition duration-300">Access your Client Advocate Portal</a>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <a href="https://maps.app.goo.gl/T84Pba3XYtPf5wPp9" class="hover:text-yellow-300 transition duration-300">2700 Lockhill Selma San Antonio, TX 78230</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-blue-700 pt-6 mt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex space-x-4 mb-4 md:mb-0">
                        <a href="https://myedusolutions.com/terms-conditions/" class="text-sm hover:text-yellow-300 transition duration-300">Terms & Conditions</a>
                        <a href="https://myedusolutions.com/privacy-policy/" class="text-sm hover:text-yellow-300 transition duration-300">Privacy Policy</a>
                        <a href="https://myedusolutions.com/sitemap_index.xml/" class="text-sm hover:text-yellow-300 transition duration-300">Sitemap</a>
                        <a href="https://myedusolutions.com/accessibility/" class="text-sm hover:text-yellow-300 transition duration-300">Accessibility</a>
                    </div>
                    <p class="text-sm">© 2024 My Education Solutions. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Mobile dropdowns
        const mobileDropdowns = document.querySelectorAll('#mobile-menu .dropdown button');
        mobileDropdowns.forEach(button => {
            button.addEventListener('click', function() {
                const target = this.parentNode;
                let menuId = '';
                
                if (target.querySelector('#mobile-programs')) {
                    menuId = 'mobile-programs';
                } else if (target.querySelector('#mobile-success')) {
                    menuId = 'mobile-success';
                } else if (target.querySelector('#mobile-resources')) {
                    menuId = 'mobile-resources';
                }
                
                if (menuId) {
                    const menu = target.querySelector('#' + menuId);
                    menu.classList.toggle('hidden');
                    
                    const icon = this.querySelector('i');
                    if (menu.classList.contains('hidden')) {
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    } else {
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    }
                }
            });
        });

        // Accordion functionality
        const accordions = document.querySelectorAll('.accordion-button');
        accordions.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.classList.remove('rotate-180');
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.classList.add('rotate-180');
                }
            });
        });
    </script>
</body>
</html>