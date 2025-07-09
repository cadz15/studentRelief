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
        <section
            className="py-32 relative bg-fixed bg-center bg-no-repeat bg-cover"
            style={{
                backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0,0.7)), url('https://bodhiheart.com/wp-content/uploads/2022/06/letting-go-of-anxiety.jpeg')`,
            }}
        >
            <div className="container z-40 mx-auto px-4">
                <div className="flex flex-col md:flex-row items-center">
                    {/* Left Side */}
                    <div className="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <h2 className="text-3xl md:text-4xl font-bold text-white mb-6">
                            Eliminate the{" "}
                            <span className="text-blue-600">Stress</span> of
                            your Student Loans
                        </h2>
                        <p className="text-lg text-white mb-6">
                            FCA National Service' goal is to help you navigate
                            the complexities of{" "}
                            <Link
                                href={route("student.loan.forgiveness")}
                                className="text-blue-600 hover:underline"
                            >
                                student loan management
                            </Link>{" "}
                            and receive complete Forgiveness from the Department
                            of Education.
                        </p>
                        <div className="bg-blue-100 border-l-4 border-blue-500 p-4 mb-6">
                            <p className="text-blue-800 font-medium">
                                <FaCheckCircle className="text-blue-600 inline-block mr-2" />
                                100% FCA Clients who have completed their
                                required payments have received Student Loan
                                Forgiveness
                            </p>
                        </div>
                        <p className="text-lg text-white">
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
                                url="#"
                            >
                                <FaHandHoldingUsd className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-yellow-500"
                                title="FCA Costs Pennies, Compared to Every Dollar
                                    Saved"
                                url="#"
                            >
                                <FaCoins className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-green-500"
                                title="99% FCA Clients Renew Annually"
                                url="#"
                            >
                                <FaSyncAlt className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-purple-500"
                                title="We Fully Manage Your Forgiveness Program"
                                url="#"
                            >
                                <FaTasks className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-red-500"
                                title="Pay $0 to Find Out If You're Eligible"
                                url="#"
                            >
                                <FaSearchDollar className=" text-3xl" />
                            </StressFreeCard>

                            <StressFreeCard
                                className="bg-indigo-500"
                                title="All Income Levels and Credit Accepted"
                                url="#"
                            >
                                <FaUniversalAccess className=" text-3xl" />
                            </StressFreeCard>
                        </div>
                    </div>
                </div>

                <div className="flex gap-4 mt-12 md:mt-24 md:flex-row flex-col justify-self-center">
                    <Link href={route("calculator")}>
                        <CTAButton className="border-blue-400 text-white bg-blue-500 hover:bg-white hover:text-yellow-900">
                            View your savings
                        </CTAButton>
                    </Link>
                    <Link href={route("speak-to-an-adviser")}>
                        <CTAButton className="border-yellow-400 hover:bg-white bg-yellow-500 text-blue-900">
                            Speak to a Specialist
                        </CTAButton>
                    </Link>
                </div>
            </div>
        </section>
    );
}

export default StressFree;
