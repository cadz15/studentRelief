import React from "react";
import {
    FaExchangeAlt,
    FaPhoneAlt,
    FaSearchDollar,
    FaUniversity,
} from "react-icons/fa";
import {
    FaCreditCard,
    FaEye,
    FaGraduationCap,
    FaHandshake,
    FaLandmark,
    FaUserShield,
} from "react-icons/fa6";

function WhoAreWe() {
    return (
        <section className="py-20 bg-gray-50">
            <div className="container mx-auto px-4">
                <h2 className="text-3xl md:text-4xl font-bold text-center mb-16 text-gray-900">
                    Who <span className="text-blue-600 underline">We Are</span>
                </h2>

                <div className="grid grid-cols-1 md:grid-cols-5 gap-6 mb-20">
                    <div className="text-center">
                        <div className="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaGraduationCap className="text-blue-600 text-2xl" />
                        </div>
                        <h3 className="font-semibold">
                            Experienced Student Loan Managers
                        </h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaEye className="text-blue-600 text-2xl" />
                        </div>
                        <h3 className="font-semibold">Servicer Watchdog</h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaSearchDollar className="text-blue-600 text-2xl" />
                        </div>
                        <h3 className="font-semibold">
                            Discrepancy Resolution Specialists
                        </h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaHandshake className="text-blue-600 text-2xl" />
                        </div>
                        <h3 className="font-semibold">
                            Trusted Student Loan Advisors
                        </h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaUserShield className="text-blue-600 text-2xl" />
                        </div>
                        <h3 className="font-semibold">Your Advocates</h3>
                    </div>
                </div>

                <h2 className="text-3xl md:text-4xl font-bold text-center mb-16 text-gray-900">
                    Who{" "}
                    <span className="text-red-500 underline">We Aren't</span>
                </h2>

                <div className="grid grid-cols-1 md:grid-cols-5 gap-6">
                    <div className="text-center">
                        <div className="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaExchangeAlt className="text-red-500 text-2xl" />
                        </div>
                        <h3 className="font-semibold">Refinance Company</h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaLandmark className="text-red-500 text-2xl" />
                        </div>
                        <h3 className="font-semibold">
                            Loan Servicer / Government
                        </h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaPhoneAlt className="text-red-500 text-2xl" />
                        </div>
                        <h3 className="font-semibold">Telemarketing Company</h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaUniversity className="text-red-500 text-2xl" />
                        </div>
                        <h3 className="font-semibold">Bank/Private Lender</h3>
                    </div>
                    <div className="text-center">
                        <div className="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <FaCreditCard className="text-red-500 text-2xl" />
                        </div>
                        <h3 className="font-semibold">
                            Credit Repair / Debt Settlement
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    );
}

export default WhoAreWe;
