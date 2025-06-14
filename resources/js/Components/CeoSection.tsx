import { Link } from "@inertiajs/react";
import React from "react";
import { FaUserTie } from "react-icons/fa";
import CTAButton from "./CTAButton";

function CeoSection() {
    return (
        <section className="py-20 bg-white">
            <div className="container mx-auto px-4">
                <div className="flex flex-col md:flex-row items-center">
                    <div className="md:w-1/3 mb-10 md:mb-0 md:pr-10">
                        <img
                            src="https://myedusolutions.com/wp-content/uploads/2023/05/ceo-my-education-solutions.png"
                            alt="Christina Randell, CEO & Founder"
                            className="rounded-lg shadow-lg w-full max-w-sm mx-auto"
                        />
                    </div>
                    <div className="md:w-2/3">
                        <h2 className="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
                            We're dedicated to helping you live debt-free.
                        </h2>
                        <p className="text-lg text-gray-600 mb-8">
                            FCA National Service' Mission is to help one million
                            Americans successfully acquire the Student Loan
                            Forgiveness they need to live their best lives.
                            Improving yourself should never be a burden. Let our
                            Advisors get you access to Government-funded relief.
                        </p>

                        <div className="flex items-center mb-8">
                            <div className="mr-6">
                                <div className="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                                    <FaUserTie className="text-2xl text-blue-600" />
                                </div>
                            </div>
                            <div>
                                <h3 className="text-xl font-bold">
                                    Christina Randell
                                </h3>
                                <p className="text-gray-600">CEO & Founder</p>
                            </div>
                        </div>

                        <div className="bg-blue-50 p-6 rounded-lg inline-block mb-8">
                            <div className="text-4xl font-bold text-green-600 mb-1">
                                $64,128,750 Saved*
                            </div>
                            <a
                                href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php"
                                className="text-blue-600 hover:underline"
                            >
                                See Clients' Results
                            </a>
                        </div>

                        <div>
                            <Link href="https://myedusolutions.com/about-us/">
                                <CTAButton className="border-blue-400 text-white bg-blue-500 hover:bg-blue-700 hover:text-white">
                                    More About Us
                                </CTAButton>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}

export default CeoSection;
