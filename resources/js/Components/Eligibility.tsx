import { Link } from "@inertiajs/react";
import React from "react";
import {
    FaCheckCircle,
    FaExclamationCircle,
    FaQuestionCircle,
} from "react-icons/fa";
import { FaBriefcase, FaGraduationCap, FaUserGraduate } from "react-icons/fa6";
import CTAButton from "./CTAButton";

function Eligibility() {
    return (
        <>
            <section className="py-16 bg-blue-900 text-white">
                <div className="container mx-auto px-4">
                    <h2 className="text-3xl font-bold mb-12 text-center">
                        See if you're eligible for <br />
                        Student Loan Forgiveness
                    </h2>

                    <div className="grid md:grid-cols-3 gap-8 mb-12">
                        <div className="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                            <div className="text-4xl mb-4">
                                <FaGraduationCap />
                            </div>
                            <h3 className="text-xl font-bold mb-3">
                                Some College
                            </h3>
                            <p className="mb-4">
                                Started my journey but moved on in a different
                                direction
                            </p>
                            <div className="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                                <h4 className="font-bold mb-2">
                                    You may qualify for Forgiveness
                                </h4>
                                <p>
                                    Didn't complete a degree? You may still
                                    qualify for forgiveness.
                                </p>
                            </div>
                            <a
                                href={route("student.loan.forgiveness")}
                                className="inline-block bg-white text-blue-900 hover:bg-gray-100 px-4 py-2 rounded-sm font-medium transition-all"
                            >
                                Ask us how
                            </a>
                        </div>
                        <div className="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                            <div className="text-4xl mb-4">
                                <FaUserGraduate />
                            </div>
                            <h3 className="text-xl font-bold mb-3">
                                New Graduate
                            </h3>
                            <p className="mb-4">
                                Undergraduate and Post-graduate
                            </p>
                            <div className="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                                <h4 className="font-bold mb-2">
                                    You may qualify for Forgiveness
                                </h4>
                                <p>Jumpstart Forgiveness 6 months early.</p>
                            </div>
                            <a
                                href={route("student.loan.forgiveness")}
                                className="inline-block bg-white text-blue-900 hover:bg-gray-100 px-4 py-2 rounded-sm font-medium transition-all"
                            >
                                Learn More
                            </a>
                        </div>
                        <div className="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                            <div className="text-4xl mb-4">
                                <FaBriefcase />
                            </div>
                            <h3 className="text-xl font-bold mb-3">
                                Graduated Over 6 Months Ago
                            </h3>
                            <p className="mb-4">
                                Undergraduate and Post-graduate
                            </p>
                            <div className="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                                <h4 className="font-bold mb-2">
                                    Graduate Program
                                </h4>
                                <p>
                                    Don't Overpay! We Can Help Reduce Monthly
                                    Payments.
                                </p>
                            </div>
                            <a
                                href={route("student.loan.forgiveness")}
                                className="inline-block bg-white text-blue-900 hover:bg-gray-100 px-4 py-2 rounded-sm font-medium transition-all"
                            >
                                Ask us how
                            </a>
                        </div>
                    </div>

                    <div className="flex gap-4 mt-12 md:mt-24 md:flex-row flex-col justify-self-center">
                        <Link href={route("calculator")}>
                            <CTAButton className="border-blue-400 text-white bg-blue-500 hover:bg-white hover:text-yellow-900">
                                View your savings
                            </CTAButton>
                        </Link>
                        <CTAButton className="border-yellow-400 hover:bg-white bg-yellow-500 text-blue-900">
                            Speak to an advisor
                        </CTAButton>
                    </div>
                </div>
            </section>

            <section className="py-16 bg-gray-50">
                <div className="container mx-auto px-4">
                    <h2 className="text-3xl font-bold mb-12 text-center">
                        I'm concerned about...
                    </h2>

                    <div className="grid md:grid-cols-3 gap-8 mb-12">
                        <div className="bg-white p-8 rounded-xl shadow-md">
                            <div className="text-blue-600 text-4xl mb-4">
                                <FaQuestionCircle />
                            </div>
                            <h3 className="text-xl font-bold mb-3">
                                How does Student Loan Forgiveness Work?
                            </h3>
                            <p className="mb-4">Searching for clarity</p>
                            <div className="bg-blue-50 p-4 rounded-lg mb-4">
                                <h4 className="font-bold mb-2">
                                    See our step-by-step process
                                </h4>
                                <p>
                                    FCA's fully-managed student loan forgiveness
                                    process delivers amazing results & peace of
                                    mind.
                                </p>
                            </div>
                            <Link
                                href={route("howitworks")}
                                className="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-sm font-medium transition-all"
                            >
                                Discover More
                            </Link>
                        </div>
                        <div className="bg-white flex flex-col p-8 rounded-xl shadow-md">
                            <div className="text-blue-600 text-4xl mb-4">
                                <FaCheckCircle />
                            </div>
                            <h3 className="text-xl font-bold mb-3">
                                Is this program legit?
                            </h3>
                            <p className="mb-4">It absolutely is!</p>
                            <div className="bg-blue-50 p-4 rounded-lg mb-4">
                                <h4 className="font-bold mb-2">
                                    Trusted by Thousands
                                </h4>
                                <p>
                                    Learn how FCA can help you work towards
                                    Government Forgiveness
                                </p>
                            </div>
                            <Link
                                href="https://myedusolutions.com/reviews/"
                                className="inline-block w-fit justify-self-end bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-sm font-medium transition-all"
                            >
                                Watch Videos
                            </Link>
                        </div>
                        <div className="bg-white flex flex-col p-8 rounded-xl shadow-md">
                            <div className="text-blue-600 text-4xl mb-4">
                                <FaExclamationCircle />
                            </div>
                            <h3 className="text-xl font-bold mb-3">
                                Why Should You NOT Refinance?
                            </h3>
                            <p className="mb-4">
                                Refinancing can be a higher monthly payment & it
                                disqualifies you from future Government
                                Forgiveness.
                            </p>
                            <div className="bg-blue-50 p-4 rounded-lg mb-4">
                                <h4 className="font-bold mb-2">
                                    Find your best option
                                </h4>
                                <p>
                                    Refinancing will disqualify you from future
                                    Government Forgiveness of your debt which
                                    can eliminate outstanding principal and
                                    interest. Why pay more?
                                </p>
                            </div>
                            <Link
                                href="https://myedusolutions.com/advisor"
                                className="inline-block w-fit justify-self-end bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-sm font-medium transition-all"
                            >
                                Speak to an Advisor
                            </Link>
                        </div>
                    </div>
                </div>
            </section>
        </>
    );
}

export default Eligibility;
