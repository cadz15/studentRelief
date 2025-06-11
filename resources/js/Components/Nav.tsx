import { Link } from "@inertiajs/react";
import NavLink from "./NavLink";
import NavLinkDropDown from "./NavLinkDropDown";

const Nav = ({ className = "", ...props }) => {
    return (
        <header
            className={`gradient-bg h-24 text-white sticky top-0 z-50 shadow-md bg-gradient-to-br from-blue-900 to-blue-600 ${className}`}
        >
            <nav className="2xl:container mx-auto px-4 h-full flex justify-between items-center">
                <div className="flex items-center">
                    <Link href="/">
                        <img src="" alt="Student Loan Relief" />
                    </Link>
                </div>

                <div className="hidden lg:flex items-center space-x-1">
                    <NavLinkDropDown title="Programs">
                        <Link
                            href="https://myedusolutions.com/programs/student-loan-forgiveness/"
                            className="block px-4 py-2 text-nowrap text-gray-800 hover:bg-blue-50"
                        >
                            Student Loan Forgiveness
                        </Link>
                        <Link
                            href="https://myedusolutions.com/programs/disability-discharge/"
                            className="block px-4 py-2 text-nowrap text-gray-800 hover:bg-blue-50"
                        >
                            Disability Discharge
                        </Link>
                        <Link
                            href="https://myedusolutions.com/programs/borrower-defense-program/"
                            className="block px-4 py-2 text-nowrap text-gray-800 hover:bg-blue-50"
                        >
                            Borrower Defense Program
                        </Link>
                    </NavLinkDropDown>

                    <NavLink
                        href="https://myedusolutions.com/calculator/"
                        active={false}
                    >
                        Estimate Payments
                    </NavLink>

                    <NavLink
                        href="https://myedusolutions.com/reviews/"
                        active={false}
                    >
                        Reviews
                    </NavLink>

                    <NavLink
                        href="https://myedusolutions.com/about-us/"
                        active={false}
                    >
                        About Us
                    </NavLink>

                    <NavLink
                        href="https://myedusolutions.com/faqs/"
                        active={false}
                    >
                        FAQs
                    </NavLink>

                    <NavLink
                        href="https://myedusolutions.com/contact-us/"
                        active={false}
                    >
                        Contact Us
                    </NavLink>

                    <Link
                        href="https://myedusolutions.com/advisor/"
                        className="ml-2 bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold px-6 py-2 rounded-sm transition duration-300"
                    >
                        Speak to an Advisor
                    </Link>
                </div>

                <button
                    className="lg:hidden focus:outline-none"
                    id="mobile-menu-button"
                >
                    <i className="fas fa-bars text-2xl"></i>
                </button>
            </nav>
        </header>
    );
};

export default Nav;
