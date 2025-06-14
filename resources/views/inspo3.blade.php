<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Loan Solutions - My Education Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .testimonial-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
        }
        .nav-link:hover {
            color: #3b82f6;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Top Bar -->
    <div class="bg-blue-900 text-white text-sm py-2 px-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="tel:2108123200" class="hover:text-blue-200"><i class="fas fa-phone-alt mr-1"></i> 210-812-3200</a>
            </div>
            <div>
                <a href="https://caportal.myedusolutions.com/mes90/login.php" class="hover:text-blue-200"><i class="fas fa-user-circle mr-1"></i> Portal Login</a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="https://myedusolutions.com/index.php/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="My Education Solutions" class="h-12">
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-blue-900 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <div class="dropdown relative">
                        <a href="https://myedusolutions.com/programs/" class="nav-link font-medium hover:text-blue-600">Programs <i class="fas fa-chevron-down text-xs ml-1"></i></a>
                        <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 py-2 w-48 z-50">
                            <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block px-4 py-2 hover:bg-blue-50">Student Loan Forgiveness</a>
                            <a href="https://myedusolutions.com/programs/disability-discharge/" class="block px-4 py-2 hover:bg-blue-50">Disability Discharge</a>
                            <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block px-4 py-2 hover:bg-blue-50">Borrower Defense Program</a>
                        </div>
                    </div>
                    <a href="https://myedusolutions.com/calculator/" class="nav-link font-medium hover:text-blue-600">Estimate Payments</a>
                    <div class="dropdown relative">
                        <a href="#" class="nav-link font-medium hover:text-blue-600">Client Success <i class="fas fa-chevron-down text-xs ml-1"></i></a>
                        <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 py-2 w-48 z-50">
                            <a href="https://myedusolutions.com/reviews/" class="block px-4 py-2 hover:bg-blue-50">Client Reviews</a>
                            <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block px-4 py-2 hover:bg-blue-50">Client Results</a>
                        </div>
                    </div>
                    <a href="https://myedusolutions.com/about-us/" class="nav-link font-medium hover:text-blue-600">About</a>
                    <div class="dropdown relative">
                        <a href="#" class="nav-link font-medium hover:text-blue-600">Resources <i class="fas fa-chevron-down text-xs ml-1"></i></a>
                        <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 py-2 w-48 z-50">
                            <a href="https://myedusolutions.com/important-updates/" class="block px-4 py-2 hover:bg-blue-50">Important Updates</a>
                            <a href="https://myedusolutions.com/blog/" class="block px-4 py-2 hover:bg-blue-50">Blogs</a>
                            <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block px-4 py-2 hover:bg-blue-50">FAQs</a>
                            <a href="https://myedusolutions.com/referral-program/" class="block px-4 py-2 hover:bg-blue-50">Referral Program</a>
                            <a href="https://myedusolutions.com/in-the-news/" class="block px-4 py-2 hover:bg-blue-50">In The Media</a>
                            <a href="https://myedusolutions.com/about-us/in-the-community/" class="block px-4 py-2 hover:bg-blue-50">In the Community</a>
                        </div>
                    </div>
                    <a href="https://myedusolutions.com/contact-us/" class="nav-link font-medium hover:text-blue-600">Contact</a>
                    <a href="https://myedusolutions.com/advisor/" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition-all">Speak to an Advisor</a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <div class="space-y-2">
                    <div>
                        <button class="w-full flex justify-between items-center px-4 py-2 bg-gray-100 rounded-md">
                            <span>Programs</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="pl-4 mt-2 space-y-2 hidden">
                            <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block px-4 py-2 hover:bg-blue-50">Student Loan Forgiveness</a>
                            <a href="https://myedusolutions.com/programs/disability-discharge/" class="block px-4 py-2 hover:bg-blue-50">Disability Discharge</a>
                            <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block px-4 py-2 hover:bg-blue-50">Borrower Defense Program</a>
                        </div>
                    </div>
                    <a href="https://myedusolutions.com/calculator/" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Estimate Payments</a>
                    <div>
                        <button class="w-full flex justify-between items-center px-4 py-2 bg-gray-100 rounded-md">
                            <span>Client Success</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="pl-4 mt-2 space-y-2 hidden">
                            <a href="https://myedusolutions.com/reviews/" class="block px-4 py-2 hover:bg-blue-50">Client Reviews</a>
                            <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block px-4 py-2 hover:bg-blue-50">Client Results</a>
                        </div>
                    </div>
                    <a href="https://myedusolutions.com/about-us/" class="block px-4 py-2 hover:bg-gray-100 rounded-md">About</a>
                    <div>
                        <button class="w-full flex justify-between items-center px-4 py-2 bg-gray-100 rounded-md">
                            <span>Resources</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="pl-4 mt-2 space-y-2 hidden">
                            <a href="https://myedusolutions.com/important-updates/" class="block px-4 py-2 hover:bg-blue-50">Important Updates</a>
                            <a href="https://myedusolutions.com/blog/" class="block px-4 py-2 hover:bg-blue-50">Blogs</a>
                            <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block px-4 py-2 hover:bg-blue-50">FAQs</a>
                            <a href="https://myedusolutions.com/referral-program/" class="block px-4 py-2 hover:bg-blue-50">Referral Program</a>
                            <a href="https://myedusolutions.com/in-the-news/" class="block px-4 py-2 hover:bg-blue-50">In The Media</a>
                            <a href="https://myedusolutions.com/about-us/in-the-community/" class="block px-4 py-2 hover:bg-blue-50">In the Community</a>
                        </div>
                    </div>
                    <a href="https://myedusolutions.com/contact-us/" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Contact</a>
                    <a href="https://myedusolutions.com/advisor/" class="block bg-blue-600 text-white px-4 py-2 rounded-md text-center">Speak to an Advisor</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">FULLY-MANAGED STUDENT LOAN PROGRAMS FOR COMPLETE FORGIVENESS</h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-8">Student Loan Solutions</h2>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="https://myedusolutions.com/calculator/" class="bg-white text-blue-900 hover:bg-gray-100 px-6 py-3 rounded-md font-bold text-center transition-all">View your savings</a>
                        <a href="https://myedusolutions.com/advisor/" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-900 px-6 py-3 rounded-md font-bold text-center transition-all">Speak to an Advisor</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white bg-opacity-20 p-6 rounded-lg backdrop-blur-sm">
                            <div class="text-4xl font-bold mb-2">784</div>
                            <div class="text-sm">Completed Clients with My Education Solutions</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-6 rounded-lg backdrop-blur-sm">
                            <div class="text-4xl font-bold mb-2">101%</div>
                            <div class="text-sm">Reduction of Our Clients' Student Loan Debt*</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-6 rounded-lg backdrop-blur-sm">
                            <div class="text-4xl font-bold mb-2">$81,797</div>
                            <div class="text-sm">MES Clients' average amount forgiven by the Dept. of Education*</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-6 rounded-lg backdrop-blur-sm">
                            <div class="text-4xl font-bold mb-2">$64M+</div>
                            <div class="text-sm">Saved with Forgiveness Programs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eliminate Stress Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Eliminate the <span class="text-blue-600">Stress</span> of your Student Loans</h2>
                <p class="text-lg max-w-3xl mx-auto">My Education Solutions' goal is to help you navigate the complexities of <a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="text-blue-600 hover:underline">student loan management</a> and receive complete Forgiveness from the Department of Education.</p>
            </div>
            
            <div class="text-center mb-12">
                <div class="inline-block bg-blue-100 text-blue-800 px-4 py-2 rounded-full mb-4">
                    <a href="https://caportal.myedusolutions.com/public/substantiation" class="font-bold">100% MES Clients who have completed their required payments have received Student Loan Forgiveness</a>
                </div>
                <p class="text-xl font-medium">We're dedicated to helping you find an effective plan and achieve student loan forgiveness!</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="feature-card bg-white p-8 rounded-xl shadow-md transition-all">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">We Can Help Reduce Monthly Payments</h3>
                    <p class="text-gray-600">Our experts will work to lower your monthly payments while keeping you on track for forgiveness.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-xl shadow-md transition-all">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">MES Costs Pennies, Compared to Every Dollar Saved</h3>
                    <p class="text-gray-600">The small cost of our service is insignificant compared to the thousands you'll save in the long run.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-xl shadow-md transition-all">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">99% MES Clients Renew Annually</h3>
                    <p class="text-gray-600">Our clients see the value in our service and continue with us year after year.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-xl shadow-md transition-all">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">We Fully Manage Your Forgiveness Program</h3>
                    <p class="text-gray-600">From paperwork to payments, we handle everything so you don't have to worry.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-xl shadow-md transition-all">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-search-dollar"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Pay $0 to Find Out If You're Eligible</h3>
                    <p class="text-gray-600">Our free consultation will determine if you qualify for loan forgiveness programs.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-xl shadow-md transition-all">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-universal-access"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">All Income Levels and Credit Accepted</h3>
                    <p class="text-gray-600">No matter your financial situation, we can help you find the right solution.</p>
                </div>
            </div>

            <div class="text-center">
                <a href="https://myedusolutions.com/calculator/" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md font-bold inline-block mr-4 mb-4 transition-all">View your savings</a>
                <a href="https://myedusolutions.com/advisor/" class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-md font-bold inline-block transition-all">Speak to an Advisor</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">TESTIMONIALS</h2>
                <h3 class="text-2xl text-blue-600 font-medium">I'm debt-free. The program works!</h3>
                <p class="max-w-2xl mx-auto mt-4">Let our Clients' stories help you make an informed decision. We believe trust lies in the power of personal stories. See how we've helped Clients save money and time and reduce their stress.</p>
                <a href="https://myedusolutions.com/reviews/" class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-medium transition-all">See Client Testimonials</a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="testimonial-card p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-gray-500 text-sm">Verified Client</div>
                    </div>
                    <p class="text-gray-700 mb-4">"I was skeptical at first, but MES made the process so easy. They handled everything and now my loans are completely forgiven!"</p>
                    <div class="font-medium">- Sarah J.</div>
                </div>
                <div class="testimonial-card p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-gray-500 text-sm">Verified Client</div>
                    </div>
                    <p class="text-gray-700 mb-4">"My monthly payments were cut in half and I'm on track for complete forgiveness. Worth every penny!"</p>
                    <div class="font-medium">- Michael T.</div>
                </div>
                <div class="testimonial-card p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-gray-500 text-sm">Verified Client</div>
                    </div>
                    <p class="text-gray-700 mb-4">"The peace of mind knowing my loans are being handled properly is priceless. Thank you MES team!"</p>
                    <div class="font-medium">- Jessica L.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CEO Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-8 md:mb-0">
                    <img src="https://myedusolutions.com/wp-content/uploads/2023/05/ceo-my-education-solutions.png" alt="Christina Randell" class="rounded-lg shadow-lg w-full max-w-md mx-auto">
                </div>
                <div class="md:w-2/3 md:pl-12">
                    <h2 class="text-3xl font-bold mb-6">We're dedicated to helping you live debt-free.</h2>
                    <p class="text-lg mb-6">My Education Solutions' Mission is to help one million Americans successfully acquire the Student Loan Forgiveness they need to live their best lives. Improving yourself should never be a burden. Let our Advisors get you access to Government-funded relief.</p>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-2">Christina Randell</h3>
                        <p class="text-blue-600 mb-4">CEO & Founder</p>
                        <div class="text-2xl font-bold">$64,128,750 Saved*</div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-medium text-center transition-all">See Clients' Results</a>
                        <a href="https://myedusolutions.com/about-us/" class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-md font-medium text-center transition-all">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-8 text-center md:text-left">Who We Are</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="text-blue-600 text-2xl mr-4 mt-1">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Experienced Student Loan Managers</h3>
                                <p class="text-gray-600">Our team has extensive knowledge of all federal student loan programs and forgiveness options.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-600 text-2xl mr-4 mt-1">
                                <i class="fas fa-search"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Servicer Watchdog</h3>
                                <p class="text-gray-600">We monitor your loan servicer to ensure they're properly crediting your payments toward forgiveness.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-600 text-2xl mr-4 mt-1">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Discrepancy Resolution Specialists</h3>
                                <p class="text-gray-600">We identify and correct errors in your payment counts and loan status with your servicer.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-600 text-2xl mr-4 mt-1">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Trusted Student Loan Advisors</h3>
                                <p class="text-gray-600">We provide personalized guidance to help you navigate the complex student loan landscape.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-600 text-2xl mr-4 mt-1">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Your Advocates</h3>
                                <p class="text-gray-600">We fight for your rights as a borrower and ensure you receive all the benefits you're entitled to.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-8 text-center md:text-left">Who We Aren't</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="text-red-500 text-2xl mr-4 mt-1">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Refinance Company</h3>
                                <p class="text-gray-600">We don't refinance loans - we help you get forgiveness on your existing federal loans.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-red-500 text-2xl mr-4 mt-1">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Loan Servicer / Government</h3>
                                <p class="text-gray-600">We're an independent company that helps you navigate the government's forgiveness programs.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-red-500 text-2xl mr-4 mt-1">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Telemarketing Company</h3>
                                <p class="text-gray-600">We don't cold call or use high-pressure sales tactics - we provide honest, transparent advice.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-red-500 text-2xl mr-4 mt-1">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Bank/Private Lender</h3>
                                <p class="text-gray-600">We don't lend money - we help you manage and ultimately eliminate your existing student debt.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-red-500 text-2xl mr-4 mt-1">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Credit Repair / Debt Settlement</h3>
                                <p class="text-gray-600">We don't negotiate settlements - we help you qualify for legitimate government forgiveness programs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section class="py-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">See if you're eligible for <br>Student Loan Forgiveness</h2>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Some College</h3>
                    <p class="mb-4">Started my journey but moved on in a different direction</p>
                    <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                        <h4 class="font-bold mb-2">You may qualify for Forgiveness</h4>
                        <p>Didn't complete a degree? You may still qualify for forgiveness.</p>
                    </div>
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="inline-block bg-white text-blue-900 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-all">Ask us how</a>
                </div>
                <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">New Graduate</h3>
                    <p class="mb-4">Undergraduate and Post-graduate</p>
                    <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                        <h4 class="font-bold mb-2">You may qualify for Forgiveness</h4>
                        <p>Jumpstart Forgiveness 6 months early.</p>
                    </div>
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="inline-block bg-white text-blue-900 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-all">Learn More</a>
                </div>
                <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Graduated Over 6 Months Ago</h3>
                    <p class="mb-4">Undergraduate and Post-graduate</p>
                    <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                        <h4 class="font-bold mb-2">Graduate Program</h4>
                        <p>Don't Overpay! We Can Help Reduce Monthly Payments.</p>
                    </div>
                    <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="inline-block bg-white text-blue-900 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-all">Ask us how</a>
                </div>
            </div>
            
            <div class="text-center">
                <a href="https://myedusolutions.com/calculator/" class="bg-white hover:bg-gray-100 text-blue-900 px-8 py-3 rounded-md font-bold inline-block mr-4 mb-4 transition-all">View your savings</a>
                <a href="https://myedusolutions.com/advisor/" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-900 px-8 py-3 rounded-md font-bold inline-block transition-all">Speak to an Advisor</a>
            </div>
        </div>
    </section>

    <!-- Concerns Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">I'm concerned about...</h2>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">How does Student Loan Forgiveness Work?</h3>
                    <p class="mb-4">Searching for clarity</p>
                    <div class="bg-blue-50 p-4 rounded-lg mb-4">
                        <h4 class="font-bold mb-2">See our step-by-step process</h4>
                        <p>MES's fully-managed student loan forgiveness process delivers amazing results & peace of mind.</p>
                    </div>
                    <a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition-all">Discover More</a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Is this program legit?</h3>
                    <p class="mb-4">It absolutely is!</p>
                    <div class="bg-blue-50 p-4 rounded-lg mb-4">
                        <h4 class="font-bold mb-2">Trusted by Thousands</h4>
                        <p>Learn how MES can help you work towards Government Forgiveness</p>
                    </div>
                    <a href="https://myedusolutions.com/reviews/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition-all">Watch Videos</a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Why Should You NOT Refinance?</h3>
                    <p class="mb-4">Refinancing can be a higher monthly payment & it disqualifies you from future Government Forgiveness.</p>
                    <div class="bg-blue-50 p-4 rounded-lg mb-4">
                        <h4 class="font-bold mb-2">Find your best option</h4>
                        <p>Refinancing will disqualify you from future Government Forgiveness of your debt which can eliminate outstanding principal and interest. Why pay more?</p>
                    </div>
                    <a href="https://myedusolutions.com/advisor" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition-all">Speak to an Advisor</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-16">
                <img src="https://myedusolutions.com/wp-content/uploads/2024/06/2024-Best-Places-to-Work-Logo-Transparent.png" alt="Best Places to Work" class="h-24 object-contain">
                <img src="https://myedusolutions.com/wp-content/uploads/2024/03/Inc.-5000-Color-Medallion-Logo.png" alt="Inc 5000" class="h-24 object-contain">
            </div>
            
            <div class="text-center mt-12">
                <a href="https://myedusolutions.com/calculator/" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md font-bold inline-block mr-4 mb-4 transition-all">View your savings</a>
                <a href="https://myedusolutions.com/programs/student-loan-forgiveness/#process" class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-md font-bold inline-block transition-all">What's the process</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-2 text-center">QUESTIONS YOU MAY HAVE</h2>
            <p class="text-xl text-center mb-12 max-w-3xl mx-auto">Find the answers and resources to navigate student loan debt forgiveness</p>
            
            <div class="max-w-4xl mx-auto space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-toggle w-full flex justify-between items-center text-left">
                        <h3 class="text-lg font-bold">Can I still enroll in the Forgiveness program if I am currently in default?</h3>
                        <i class="fas fa-chevron-down ml-4 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <p>Yes, if your loans are in default or collections, you may still qualify to enroll in the Student Loan Forgiveness Program. Even if you have been contacted regarding wage garnishment, we may still be able to help you if take action quickly. To reach us, please call <a href="tel:2108123200" class="text-blue-600">210-812-3200</a> or email <a href="mailto:Advisors@MyEduSolutions.com" class="text-blue-600">Advisors@MyEduSolutions.com</a> today.</p>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-toggle w-full flex justify-between items-center text-left">
                        <h3 class="text-lg font-bold">How long does the enrollment process take?</h3>
                        <i class="fas fa-chevron-down ml-4 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <p>Your MES Student Loan Advisor will process your application and answer all your questions. Approvals by the Department of Education can be decided within 10 business days. MES will stay in touch through the process.</p>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-toggle w-full flex justify-between items-center text-left">
                        <h3 class="text-lg font-bold">What are the benefits of the MES Student Loan Forgiveness program?</h3>
                        <i class="fas fa-chevron-down ml-4 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <p>My Education Solutions has successfully helped thousands of individuals navigate the complexities of student loan debt repayment and <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="text-blue-600">hundreds have received complete forgiveness</a> from the government. MES Advisors audit & resolve Servicer posting errors on your behalf so your qualified payments will count toward forgiveness.</p>
                        <p class="mt-2">Our trusted Student Loan Advisors help you take control of your debt through a fully-managed student loan program.</p>
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
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-toggle w-full flex justify-between items-center text-left">
                        <h3 class="text-lg font-bold">What is the difference between My Education Solutions and all the other companies that claim that they can help?</h3>
                        <i class="fas fa-chevron-down ml-4 transition-transform"></i>
                    </button>
                    <div class="faq-content mt-4 hidden">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/07/student-loan-forgiveness-company-comparison-chart.png" alt="Company Comparison Chart" class="w-full rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-2 text-center">LATEST NEWS</h2>
            <p class="text-xl text-center mb-12">Our Recent News About Student Loan Forgiveness</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all hover:shadow-lg">
                    <a href="https://myedusolutions.com/blog/the-save-plan-is-not-saving-anyone/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/12/pexels-karolina-grabowska-5900131-scaled.jpg" alt="Woman stressed about money" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">The SAVE Plan Is Not Saving Anyone</h3>
                            <p class="text-gray-600">Learn why the SAVE plan might not be the best option for your student loans.</p>
                        </div>
                    </a>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all hover:shadow-lg">
                    <a href="https://myedusolutions.com/blog/will-trump-be-the-savior-of-student-loan-forgiveness/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/11/2a1fc72d33729a106b3e794d3102b0da81dcaea7.avif" alt="Political news" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Will Trump Save Student Loan Forgiveness?</h3>
                            <p class="text-gray-600">Exploring potential changes to student loan forgiveness programs.</p>
                        </div>
                    </a>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all hover:shadow-lg">
                    <a href="https://myedusolutions.com/blog/understanding-the-confusion-around-student-loan-forgiveness-what-borrowers-need-to-know-now/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2024/10/pexels-vlada-karpovich-4050320-scaled.jpg" alt="Confused about loans" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Understanding the Confusion Around Student Loan Forgiveness</h3>
                            <p class="text-gray-600">Cut through the noise and understand your options.</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="https://myedusolutions.com/blog/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-medium transition-all">View All News</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <a href="https://myedusolutions.com/index.php/">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="My Education Solutions" class="h-12 mb-4">
                    </a>
                    <p class="mb-4">A Student Loan Management Firm dedicated to helping you live your best life.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.tiktok.com/@myeducationsolutions" class="text-white hover:text-blue-200 text-xl"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.youtube.com/channel/UCRQ--t_JSVLKrCaHZhDX1-Q" class="text-white hover:text-blue-200 text-xl"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/myedusolutions_official/" class="text-white hover:text-blue-200 text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61560170915397" class="text-white hover:text-blue-200 text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/company/myeducationsolutions/" class="text-white hover:text-blue-200 text-xl"><i class="fab fa-linkedin"></i></a>
                        <a href="https://twitter.com/MyEdu_Solutions" class="text-white hover:text-blue-200 text-xl"><i class="fab fa-x-twitter"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Useful Links</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="hover:text-blue-200">How It Works</a></li>
                        <li><a href="https://myedusolutions.com/about-us/" class="hover:text-blue-200">About Us</a></li>
                        <li><a href="https://myedusolutions.com/reviews/" class="hover:text-blue-200">Client Reviews</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="hover:text-blue-200">Client Results</a></li>
                        <li><a href="https://myedusolutions.com/contact-us/" class="hover:text-blue-200">Contact Us</a></li>
                        <li><a href="https://myedusolutions.com/careers/" class="hover:text-blue-200">Careers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="hover:text-blue-200">Student Loan Forgiveness Management</a></li>
                        <li><a href="https://myedusolutions.com/programs/disability-discharge/" class="hover:text-blue-200">Disability Discharge</a></li>
                        <li><a href="https://myedusolutions.com/programs/borrower-defense-program/" class="hover:text-blue-200">Borrower Defense Program</a></li>
                        <li><a href="https://myedusolutions.com/referral-program/" class="hover:text-blue-200">Referral Program</a></li>
                        <li><a href="https://myedusolutions.com/employee-assistance-program-benefit/" class="hover:text-blue-200">Employee Program</a></li>
                        <li><a href="https://myedusolutions.com/fundraising-opportunities/" class="hover:text-blue-200">Fundraising Program</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/" class="hover:text-blue-200">*Substantiation</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Find Your Savings</h3>
                    <p class="mb-4">Are you overpaying on your student loans? Use our calculator to see your potential savings.</p>
                    <a href="https://myedusolutions.com/calculator" class="inline-block bg-white text-blue-900 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-all">VIEW YOUR SAVINGS</a>
                    
                    <div class="mt-6 space-y-3">
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt mr-3"></i>
                            <a href="tel:2108123200" class="hover:text-blue-200">210-812-3200</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user-circle mr-3"></i>
                            <a href="https://caportal.myedusolutions.com/mes90/login.php" class="hover:text-blue-200">Access your Client Advocate Portal</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3"></i>
                            <a href="https://maps.app.goo.gl/T84Pba3XYtPf5wPp9" class="hover:text-blue-200">2700 Lockhill Selma San Antonio, TX 78230</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-blue-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <p>&copy; 2024 My Education Solutions. All rights reserved.</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="https://myedusolutions.com/terms-conditions/" class="hover:text-blue-200">Terms & Conditions</a>
                        <a href="https://myedusolutions.com/privacy-policy/" class="hover:text-blue-200">Privacy Policy</a>
                        <a href="https://myedusolutions.com/sitemap_index.xml/" class="hover:text-blue-200">Sitemap</a>
                        <a href="https://myedusolutions.com/accessibility/" class="hover:text-blue-200">Accessibility</a>
                    </div>
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

        // FAQ toggle functionality
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                // Toggle content
                content.classList.toggle('hidden');
                
                // Rotate icon
                if (content.classList.contains('hidden')) {
                    icon.classList.remove('rotate-180');
                } else {
                    icon.classList.add('rotate-180');
                }
            });
        });

        // Mobile submenu toggle
        document.querySelectorAll('#mobile-menu button').forEach(button => {
            button.addEventListener('click', function() {
                const submenu = this.nextElementSibling;
                submenu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>