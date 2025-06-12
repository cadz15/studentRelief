import { Link } from "@inertiajs/react";
import React from "react";
import {
    FaCheckCircle,
    FaCoins,
    FaHandHoldingUsd,
    FaSearchDollar,
    FaSync,
    FaSyncAlt,
    FaTasks,
    FaUniversalAccess,
} from "react-icons/fa";
import StressFreeCard from "./StressFreeCard";
import CTAButton from "./CTAButton";

function StressFree() {
    return (
        <section className="py-32 bg-gray-50">
            <div className="container mx-auto px-4">
                <div className="flex flex-col md:flex-row items-center">
                    {/* Left Side */}
                    <div className="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                            Eliminate the{" "}
                            <span className="text-blue-600">Stress</span> of
                            your Student Loans
                        </h2>
                        <p className="text-lg text-gray-600 mb-6">
                            My Education Solutions' goal is to help you navigate
                            the complexities of{" "}
                            <Link
                                href="https://myedusolutions.com/how-student-loan-debt-forgiveness-programs-work/"
                                className="text-blue-600 hover:underline"
                            >
                                student loan management
                            </Link>{" "}
                            and receive complete Forgiveness from the Department
                            of Education.
                        </p>
                        <div className="bg-blue-100 border-l-4 border-blue-500 p-4 mb-6">
                            <p className="text-blue-800 font-medium">
                                <Link
                                    href="https://caportal.myedusolutions.com/public/substantiation"
                                    className="hover:underline"
                                >
                                    <FaCheckCircle className="text-blue-600 inline-block mr-2" />
                                    100% MES Clients who have completed their
                                    required payments have received Student Loan
                                    Forgiveness
                                </Link>
                            </p>
                        </div>
                        <p className="text-lg text-gray-600">
                            We're dedicated to helping you find an effective
                            plan and achieve student loan forgiveness!
                        </p>
                    </div>

                    {/* Right side */}
                    <div className="md:w-1/2">
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <StressFreeCard
                                className="bg-blue-500"
                                title="We Can Help Reduce Monthly Payments"
                                url="https://caportal.myedusolutions.com/public/substantiation/"
                            >
                                <FaHandHoldingUsd className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-yellow-500"
                                title="MES Costs Pennies, Compared to Every Dollar
                                    Saved"
                                url="https://caportal.myedusolutions.com/public/substantiation/"
                            >
                                <FaCoins className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-green-500"
                                title="99% MES Clients Renew Annually"
                                url="https://caportal.myedusolutions.com/public/substantiation/"
                            >
                                <FaSyncAlt className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-purple-500"
                                title="We Fully Manage Your Forgiveness Program"
                                url="https://caportal.myedusolutions.com/public/substantiation/"
                            >
                                <FaTasks className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-red-500"
                                title="Pay $0 to Find Out If You're Eligible"
                                url="https://caportal.myedusolutions.com/public/substantiation/"
                            >
                                <FaSearchDollar className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-indigo-500"
                                title="All Income Levels and Credit Accepted"
                                url="https://caportal.myedusolutions.com/public/substantiation/"
                            >
                                <FaUniversalAccess className=" text-3xl" />
                            </StressFreeCard>
                        </div>
                    </div>
                </div>

                <div className="flex gap-4 mt-12 md:mt-24 md:flex-row flex-col justify-self-center">
                    <CTAButton className="border-blue-400 text-white bg-blue-500 hover:bg-white hover:text-yellow-900">
                        View your savings
                    </CTAButton>
                    <CTAButton className="border-yellow-400 hover:bg-white bg-yellow-500 text-blue-900">
                        Speak to an advisor
                    </CTAButton>
                </div>
            </div>
        </section>
    );
}

export default StressFree;
