import { Link } from "@inertiajs/react";
import React from "react";

const Nav = ({ className = "", ...props }) => {
    return (
        <header
            className={`gradient-bg text-white sticky top-0 z-50 shadow-md ${className}`}
        >
            <nav className="container mx-auto px-4 py-3 flex justify-between items-center">
                <div className="flex items-center">
                    <Link href="/">
                        <img src="" alt="Student Loan Relief" />
                    </Link>
                </div>

                <div className="hidden lg:flex items-center space-x-1">
                    <div className="dropdown relative">
                        <button className="nav-link px-4 py-2 rounded-lg font-medium flex items-center">
                            Programs
                            <i className="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div className="dropdown-menu absolute hidden mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                            <Link
                                href="https://myedusolutions.com/programs/student-loan-forgiveness/"
                                className="block px-4 py-2 text-gray-800 hover:bg-blue-50"
                            >
                                Student Loan Forgiveness
                            </Link>
                            <Link
                                href="https://myedusolutions.com/programs/disability-discharge/"
                                className="block px-4 py-2 text-gray-800 hover:bg-blue-50"
                            >
                                Disability Discharge
                            </Link>
                            <Link
                                href="https://myedusolutions.com/programs/borrower-defense-program/"
                                className="block px-4 py-2 text-gray-800 hover:bg-blue-50"
                            >
                                Borrower Defense Program
                            </Link>
                        </div>
                    </div>

                    <Link
                        href="https://myedusolutions.com/calculator/"
                        className="nav-link px-4 py-2 rounded-lg font-medium"
                    >
                        Estimate Payments
                    </Link>
                </div>
            </nav>
        </header>
    );
};

export default Nav;
