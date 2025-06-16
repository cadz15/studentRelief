<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See How Student Loan Forgiveness Works | Free Consultation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        }
        .step-card {
            transition: all 0.3s ease;
        }
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .nav-link:hover {
            color: #3b82f6;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Top Bar -->
    <div class="bg-blue-900 text-white py-2 px-4 flex justify-between items-center text-sm">
        <div>
            <a href="https://caportal.myedusolutions.com/mes90/login.php" class="hover:text-blue-300 transition">Portal Login</a>
        </div>
        <div class="flex space-x-4">
            <a href="tel:2108123200" class="hover:text-blue-300 transition"><i class="fas fa-phone mr-1"></i> 210-812-3200</a>
            <a href="tel:18006181170" class="hover:text-blue-300 transition"><i class="fas fa-phone mr-1"></i> Toll Free: 1-800-618-1170</a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <a href="https://myedusolutions.com/index.php/">
                    <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="MES Logo" class="h-12">
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-blue-900 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6">
                <div class="dropdown relative">
                    <button class="nav-link text-blue-900 font-medium hover:text-blue-600 flex items-center">
                        Programs <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 py-2 w-48 z-50">
                        <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block px-4 py-2 hover:bg-blue-50">Student Loan Forgiveness</a>
                        <a href="https://myedusolutions.com/programs/disability-discharge/" class="block px-4 py-2 hover:bg-blue-50">Disability Discharge</a>
                        <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block px-4 py-2 hover:bg-blue-50">Borrower Defense Program</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/calculator/" class="nav-link text-blue-900 font-medium hover:text-blue-600">Estimate Payments</a>
                
                <div class="dropdown relative">
                    <button class="nav-link text-blue-900 font-medium hover:text-blue-600 flex items-center">
                        Client Success <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 py-2 w-48 z-50">
                        <a href={route('client-reviews')} class="block px-4 py-2 hover:bg-blue-50">Client Reviews</a>
                        <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block px-4 py-2 hover:bg-blue-50">Client Results</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/about-us/" class="nav-link text-blue-900 font-medium hover:text-blue-600">About</a>
                
                <div class="dropdown relative">
                    <button class="nav-link text-blue-900 font-medium hover:text-blue-600 flex items-center">
                        Resources <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 py-2 w-48 z-50">
                        <a href="https://myedusolutions.com/important-updates/" class="block px-4 py-2 hover:bg-blue-50">Important Updates</a>
                        <a href="https://myedusolutions.com/blog/" class="block px-4 py-2 hover:bg-blue-50">Blogs</a>
                        <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block px-4 py-2 hover:bg-blue-50">FAQs</a>
                        <a href="https://myedusolutions.com/referral-program/" class="block px-4 py-2 hover:bg-blue-50">Referral Program</a>
                        <a href="https://myedusolutions.com/in-the-news/" class="block px-4 py-2 hover:bg-blue-50">In The Media</a>
                        <a href="https://myedusolutions.com/about-us/in-the-community/" class="block px-4 py-2 hover:bg-blue-50">In the Community</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/contact-us/" class="nav-link text-blue-900 font-medium hover:text-blue-600">Contact</a>
                
                <a href="https://myedusolutions.com/advisor/" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition">Speak to an Advisor</a>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white py-2 px-4 shadow-lg">
            <div class="flex flex-col space-y-3">
                <div class="dropdown">
                    <button class="nav-link text-blue-900 font-medium hover:text-blue-600 flex items-center justify-between w-full">
                        Programs <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="dropdown-content hidden pl-4 mt-2 space-y-2">
                        <a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="block">Student Loan Forgiveness</a>
                        <a href="https://myedusolutions.com/programs/disability-discharge/" class="block">Disability Discharge</a>
                        <a href="https://myedusolutions.com/programs/borrower-defense-program/" class="block">Borrower Defense Program</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/calculator/" class="nav-link text-blue-900 font-medium hover:text-blue-600">Estimate Payments</a>
                
                <div class="dropdown">
                    <button class="nav-link text-blue-900 font-medium hover:text-blue-600 flex items-center justify-between w-full">
                        Client Success <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="dropdown-content hidden pl-4 mt-2 space-y-2">
                        <a href={route('client-reviews')} class="block">Client Reviews</a>
                        <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="block">Client Results</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/about-us/" class="nav-link text-blue-900 font-medium hover:text-blue-600">About</a>
                
                <div class="dropdown">
                    <button class="nav-link text-blue-900 font-medium hover:text-blue-600 flex items-center justify-between w-full">
                        Resources <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="dropdown-content hidden pl-4 mt-2 space-y-2">
                        <a href="https://myedusolutions.com/important-updates/" class="block">Important Updates</a>
                        <a href="https://myedusolutions.com/blog/" class="block">Blogs</a>
                        <a href="https://myedusolutions.com/student-loan-forgiveness-faqs/" class="block">FAQs</a>
                        <a href="https://myedusolutions.com/referral-program/" class="block">Referral Program</a>
                        <a href="https://myedusolutions.com/in-the-news/" class="block">In The Media</a>
                        <a href="https://myedusolutions.com/about-us/in-the-community/" class="block">In the Community</a>
                    </div>
                </div>
                
                <a href="https://myedusolutions.com/contact-us/" class="nav-link text-blue-900 font-medium hover:text-blue-600">Contact</a>
                
                <a href="https://myedusolutions.com/advisor/" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium text-center">Speak to an Advisor</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">How does student loan forgiveness work?</h1>
                <h2 class="text-2xl md:text-3xl font-semibold mb-6">THE DEPARTMENT OF EDUCATION Offers OPTIONS</h2>
                <p class="text-lg mb-8">Rest assured, there's a solution to your mounting student loan debt. Let the MES advisor who specializes in student loan debt management leverage their experience to help you successfully achieve financial freedom.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="https://myedusolutions.com/more-info" class="bg-white text-blue-900 hover:bg-gray-100 font-bold py-3 px-6 rounded-md text-center transition">Request More Info</a>
                    <a href="https://myedusolutions.com/advisor" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-900 font-bold py-3 px-6 rounded-md text-center transition">Speak to an Advisor</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="MES Logo" class="w-64 h-auto">
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Achieve Complete Debt Forgiveness Through a Fully-Managed Program</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="step-card bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 text-blue-900 rounded-full w-10 h-10 flex items-center justify-center font-bold mr-4">1</div>
                        <h3 class="text-xl font-semibold">Speak to an Advisor</h3>
                    </div>
                    <p class="text-gray-600">Speak to one of our friendly knowledgeable Advisors today regarding your student loan debt and Forgiveness options.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="step-card bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 text-blue-900 rounded-full w-10 h-10 flex items-center justify-center font-bold mr-4">2</div>
                        <h3 class="text-xl font-semibold">Get Approved</h3>
                    </div>
                    <p class="text-gray-600">The Department of Education approves <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">99% of the applications that we submit for enrollment</a>.*</p>
                </div>
                
                <!-- Step 3 -->
                <div class="step-card bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 text-blue-900 rounded-full w-10 h-10 flex items-center justify-center font-bold mr-4">3</div>
                        <h3 class="text-xl font-semibold">Track Your Progress</h3>
                    </div>
                    <p class="text-gray-600">Your Client Portal provides full transparency of your payment history, archives documents, and counts eligible forgiveness payments.</p>
                </div>
                
                <!-- Step 4 -->
                <div class="step-card bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 text-blue-900 rounded-full w-10 h-10 flex items-center justify-center font-bold mr-4">4</div>
                        <h3 class="text-xl font-semibold">Achieve Forgiveness</h3>
                    </div>
                    <p class="text-gray-600">Upon the completion of your eligible Forgiveness payments, you will be released from any Federal Student Loan debt!</p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="https://myedusolutions.com/wp-content/uploads/2024/03/TheMESProvenProcess-V2.pdf" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition">See Full Process</a>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="py-12 bg-blue-900 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <a href="https://myedusolutions.com/advisor/" class="flex flex-col items-center p-4 hover:bg-blue-800 rounded-md transition">
                    <i class="fas fa-headset text-3xl mb-2"></i>
                    <span class="text-center">Speak to an Advisor</span>
                </a>
                <a href="https://myedusolutions.com/important-updates/" class="flex flex-col items-center p-4 hover:bg-blue-800 rounded-md transition">
                    <i class="fas fa-bell text-3xl mb-2"></i>
                    <span class="text-center">Important Updates</span>
                </a>
                <a href="https://myedusolutions.com/calculator" class="flex flex-col items-center p-4 hover:bg-blue-800 rounded-md transition">
                    <i class="fas fa-calculator text-3xl mb-2"></i>
                    <span class="text-center">View Your Savings</span>
                </a>
                <a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work" class="flex flex-col items-center p-4 hover:bg-blue-800 rounded-md transition">
                    <i class="fas fa-list-check text-3xl mb-2"></i>
                    <span class="text-center">What's The Process</span>
                </a>
                <a href="https://myedusolutions.com/reviews" class="flex flex-col items-center p-4 hover:bg-blue-800 rounded-md transition">
                    <i class="fas fa-star text-3xl mb-2"></i>
                    <span class="text-center">See Clients' Results</span>
                </a>
                <a href="https://myedusolutions.com/programs" class="flex flex-col items-center p-4 hover:bg-blue-800 rounded-md transition">
                    <i class="fas fa-search text-3xl mb-2"></i>
                    <span class="text-center">See My Options</span>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 flex justify-center">
                    <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="MES Logo" class="w-64 h-auto">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold mb-6">Who is MES?</h2>
                    <p class="text-xl mb-6">A Student Loan Management Firm dedicated to helping you live your best life.</p>
                    
                    <h3 class="text-2xl font-semibold mb-4">Student Loan Advisors</h3>
                    <p class="mb-6">We'll help you understand your student loan debt repayment options and help you manage it easily.</p>
                    
                    <a href="https://myedusolutions.com/programs/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition">Research More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4 text-center">
            <p class="text-xl mb-8">If you're ready to begin your path toward a better financial future, contact us today!</p>
            
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8 mb-8">
                <a href="tel:2108123200" class="flex items-center text-2xl font-bold hover:text-blue-600 transition">
                    <i class="fas fa-phone mr-3"></i> 210-812-3200
                </a>
                <span class="hidden md:block">|</span>
                <a href="tel:18006181170" class="flex items-center text-2xl font-bold hover:text-blue-600 transition">
                    <i class="fas fa-phone mr-3"></i> Toll Free: 1-800-618-1170
                </a>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md inline-block mb-8">
                <p class="text-2xl font-bold text-blue-900">$64,128,750 Saved*</p>
            </div>
            
            <p class="mb-8">
                <a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="text-blue-600 hover:underline">To see the results of other successful MES Clients that have received Forgiveness click here.</a>
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="https://myedusolutions.com/calculator" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition">View your Savings</a>
                <a href="https://myedusolutions.com/advisor" class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-bold py-3 px-6 rounded-md transition">Speak to an Advisor</a>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-6">Stop Overpaying on Your Student Loans. Trust our Proven Process.</h2>
            <h3 class="text-xl text-center mb-12">Why hire MES to manage your Student Loan Forgiveness program?</h3>
            
            <p class="text-center text-xl mb-12">Reassurance. My Education Solutions delivers results for pennies on the dollar.</p>
            
            <p class="text-center text-lg mb-12">
                <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">100% of MES Clients have received Student Loan Forgiveness after completing their required payments.*</a>
            </p>
            
            <div class="flex justify-center space-x-4 mb-12">
                <a href="https://myedusolutions.com/calculator" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition">View Your Savings</a>
                <a href="https://myedusolutions.com/about-us" class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-bold py-3 px-6 rounded-md transition">Who we are</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-hand-holding-usd text-blue-600 text-3xl mr-4"></i>
                        <h3 class="text-xl font-semibold">We Can Help Reduce Monthly Payments</h3>
                    </div>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-dollar-sign text-blue-600 text-3xl mr-4"></i>
                        <h3 class="text-xl font-semibold">MES Costs Pennies, Compared to Every Dollar Saved</h3>
                    </div>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">Learn more</a>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-sync-alt text-blue-600 text-3xl mr-4"></i>
                        <h3 class="text-xl font-semibold">99% MES Clients Renew Annually</h3>
                    </div>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">Learn more</a>
                </div>
                
                <!-- Benefit 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-tasks text-blue-600 text-3xl mr-4"></i>
                        <h3 class="text-xl font-semibold">We Fully Manage Your Forgiveness Program</h3>
                    </div>
                    <a href="https://caportal.myedusolutions.com/public/substantiation/" class="text-blue-600 hover:underline">Learn more</a>
                </div>
                
                <!-- Benefit 5 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-search-dollar text-blue-600 text-3xl mr-4"></i>
                        <h3 class="text-xl font-semibold">Pay $0 to Find Out If You're Eligible</h3>
                    </div>
                </div>
                
                <!-- Benefit 6 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-users text-blue-600 text-3xl mr-4"></i>
                        <h3 class="text-xl font-semibold">All Income Levels and Credit Accepted</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between mb-12">
                <!-- Logo and Description -->
                <div class="md:w-1/4 mb-8 md:mb-0">
                    <a href="https://myedusolutions.com/index.php/" class="inline-block mb-6">
                        <img src="https://myedusolutions.com/wp-content/uploads/2023/05/MES-LOGO-ALLWHITE.png" alt="MES Logo" class="h-12">
                    </a>
                    <p class="mb-6">A Student Loan Management Firm dedicated to helping you live your best life.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.tiktok.com/@myeducationsolutions" class="hover:text-blue-400 transition" title="Follow on TikTok"><i class="fab fa-tiktok text-xl"></i></a>
                        <a href="https://www.youtube.com/channel/UCRQ--t_JSVLKrCaHZhDX1-Q" class="hover:text-blue-400 transition" title="Follow on Youtube"><i class="fab fa-youtube text-xl"></i></a>
                        <a href="https://www.instagram.com/myedusolutions_official/" class="hover:text-blue-400 transition" title="Follow on Instagram"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61560170915397" class="hover:text-blue-400 transition" title="Follow on Facebook"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="https://www.linkedin.com/company/myeducationsolutions/" class="hover:text-blue-400 transition" title="Follow on LinkedIn"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="https://twitter.com/MyEdu_Solutions" class="hover:text-blue-400 transition" title="Follow on X"><i class="fab fa-twitter text-xl"></i></a>
                    </div>
                </div>
                
                <!-- Useful Links -->
                <div class="md:w-1/4 mb-8 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Useful Links</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/" class="hover:text-blue-400 transition" title="How does student loan debt work">How It Works</a></li>
                        <li><a href="https://myedusolutions.com/about-us/" class="hover:text-blue-400 transition" title="About My Education Solutions">About Us</a></li>
                        <li><a href={route('client-reviews')} class="hover:text-blue-400 transition" title="My education solutions reviews">Client Reviews</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php" class="hover:text-blue-400 transition" title="client actual results">Client Results</a></li>
                        <li><a href="https://myedusolutions.com/contact-us/" class="hover:text-blue-400 transition" title="free advising for student loans">Contact Us</a></li>
                        <li><a href="https://myedusolutions.com/careers/" class="hover:text-blue-400 transition" title="careers at MES">Careers</a></li>
                    </ul>
                </div>
                
                <!-- Our Services -->
                <div class="md:w-1/4 mb-8 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                        <li><a href="https://myedusolutions.com/programs/student-loan-forgiveness/" class="hover:text-blue-400 transition" title="student loan debt forgiveness program">Student Loan Forgiveness Management</a></li>
                        <li><a href="https://myedusolutions.com/programs/disability-discharge/" class="hover:text-blue-400 transition" title="disability student loan forgiveness">Disability Discharge</a></li>
                        <li><a href="https://myedusolutions.com/programs/borrower-defense-program/" class="hover:text-blue-400 transition" title="student loan forgiveness">Borrower Defense Program</a></li>
                        <li><a href="https://myedusolutions.com/referral-program/" class="hover:text-blue-400 transition" title="referral program">Referral Program</a></li>
                        <li><a href="https://myedusolutions.com/employee-assistance-program-benefit/" class="hover:text-blue-400 transition" title="employee benefits for student debt forgiveness">Employee Program</a></li>
                        <li><a href="https://myedusolutions.com/fundraising-opportunities/" class="hover:text-blue-400 transition" title="fundraising program">Fundraising Program</a></li>
                        <li><a href="https://caportal.myedusolutions.com/public/substantiation/" class="hover:text-blue-400 transition" title="substantiation">*Substantiation</a></li>
                    </ul>
                </div>
                
                <!-- Find Your Savings -->
                <div class="md:w-1/4">
                    <h3 class="text-xl font-bold mb-4">Find Your Savings</h3>
                    <p class="mb-4">Are you overpaying on your student loans? Use our calculator to see your potential savings.</p>
                    <a href="https://myedusolutions.com/calculator" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition mb-6">VIEW YOUR SAVINGS</a>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt text-blue-400 mr-3"></i>
                            <a href="tel:2108123200" class="hover:text-blue-400 transition" title="call student loan forgiveness advisors">210-812-3200</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user-lock text-blue-400 mr-3"></i>
                            <a href="https://caportal.myedusolutions.com/mes90/login.php" class="hover:text-blue-400 transition" title="client login">Access your Client Advocate Portal</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-blue-400 mr-3"></i>
                            <a href="https://maps.app.goo.gl/T84Pba3XYtPf5wPp9" class="hover:text-blue-400 transition" title="My Education Solutions Address">2700 Lockhill Selma San Antonio, TX 78230</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p>&copy; 2023 My Education Solutions. All rights reserved.</p>
                </div>
                <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 text-center">
                    <a href="https://myedusolutions.com/terms-conditions/" class="hover:text-blue-400 transition" title="terms and conditions">Terms & Conditions</a>
                    <a href="https://myedusolutions.com/privacy-policy/" class="hover:text-blue-400 transition" title="privacy policy">Privacy Policy</a>
                    <a href="https://myedusolutions.com/sitemap_index.xml/" class="hover:text-blue-400 transition" title="sitemap">Sitemap</a>
                    <a href="https://myedusolutions.com/accessibility/" class="hover:text-blue-400 transition" title="Accessibility">Accessibility</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Dropdown toggle for mobile
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('button');
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                content.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>