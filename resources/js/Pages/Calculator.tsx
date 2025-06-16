import CTAButton from "@/Components/CTAButton";
import Guest from "@/Layouts/GuestLayout";
import { Head, Link } from "@inertiajs/react";
import React, { useState } from "react";
import { FaHandHoldingUsd, FaSearchDollar } from "react-icons/fa";
import {
    FaDollarSign,
    FaStar,
    FaUniversalAccess,
    FaUserTie,
} from "react-icons/fa6";

export default function Calculator() {
    const [selections, setSelections] = useState({
        dependents: "",
        debt: "",
        income: "",
    });

    const [errors, setErrors] = useState({
        dependents: false,
        debt: false,
        income: false,
    });

    const [showResults, setShowResults] = useState(false);
    const [showMonthlyPayment, setShowMonthlyPayment] = useState(true);

    const [monthlyPayment, setMonthlyPayment] = useState(null);

    function selectOption(category: any, value: any) {
        setSelections((prev) => ({ ...prev, [category]: value }));
        setErrors((prev) => ({ ...prev, [category]: false }));
    }

    const calculatePayment = () => {
        const { dependents, income } = selections;

        let payment: any = null;

        if (income === "150k+") {
            setShowMonthlyPayment(false);
            return;
        }

        setShowMonthlyPayment(true);

        if (dependents === "1-2") {
            switch (income) {
                case "0-32k":
                    payment = 0;
                    break;
                case "32k-60k":
                    payment = "$68 - $363";
                    break;
                case "60k-100k":
                    payment = "$301";
                    break;
                case "100k-150k":
                    payment = "$634";
                    break;
            }
        } else if (dependents === "3-5") {
            switch (income) {
                case "0-32k":
                    payment = 0;
                    break;
                case "32k-60k":
                    payment = "$0 - $249";
                    break;
                case "60k-100k":
                    payment = "$145";
                    break;
                case "100k-150k":
                    payment = "$478";
                    break;
            }
        } else if (dependents === "6+") {
            switch (income) {
                case "0-32k":
                    payment = 0;
                    break;
                case "32k-60k":
                    payment = "$0 - $93";
                    break;
                case "60k-100k":
                    payment = "$93";
                    break;
                case "100k-150k":
                    payment = "$426";
                    break;
            }
        }

        setMonthlyPayment(payment);
        setShowResults(true);
    };

    return (
        <Guest>
            <Head title="Calculator" />
            {/* Hero Section */}
            <section className="bg-gradient-to-br from-blue-900 to-blue-600 text-white py-16">
                <div className="container mx-auto px-4">
                    <div className="max-w-4xl mx-auto text-center">
                        <h1 className="text-4xl md:text-5xl font-bold mb-6">
                            Calculate Your Lower Student Loan Payments and
                            Forgiveness Options
                        </h1>
                        <p className="text-xl mb-8 text-yellow-300">
                            See your estimated new payment instantly.
                        </p>
                        <p className="mb-8">
                            Answer a few questions here on our calculator to see
                            your options for an{" "}
                            <Link
                                href={route("student.loan.forgiveness")}
                                className="underline hover:text-blue-200"
                                target="_blank"
                                rel="noreferrer"
                            >
                                effective student loan debt plan
                            </Link>
                            .
                        </p>
                    </div>
                </div>
            </section>

            {/* Calculator Section */}
            <section className="py-12 bg-gray-50">
                <div className="container mx-auto px-4">
                    <div
                        className="max-w-4xl mx-auto bg-white rounded-xl overflow-hidden"
                        style={{ boxShadow: "0 10px 25px rgba(0, 0, 0, 0.1)" }}
                    >
                        <div className="p-8">
                            {/* Dependents */}
                            <div className="mb-8">
                                <h2 className="text-2xl font-bold mb-4">
                                    How many people do you live with or support
                                    51%?
                                </h2>
                                <p className="text-gray-600 mb-4">
                                    (They don't have to be on your tax return.)
                                </p>
                                <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    {["1-2", "3-5", "6+"].map((option) => (
                                        <button
                                            key={option}
                                            type="button"
                                            className={`option-btn  rounded-lg py-4 px-6 text-center font-medium ${
                                                selections.dependents === option
                                                    ? "bg-blue-500 text-white hover:bg-blue-600"
                                                    : " bg-gray-100 hover:bg-gray-200"
                                            }`}
                                            onClick={() =>
                                                selectOption(
                                                    "dependents",
                                                    option
                                                )
                                            }
                                        >
                                            {option}
                                        </button>
                                    ))}
                                </div>
                                {errors.dependents && (
                                    <p className="text-red-500 mt-2">
                                        This field is required.
                                    </p>
                                )}
                            </div>

                            {/* Debt */}
                            <div className="mb-8">
                                <h2 className="text-2xl font-bold mb-4">
                                    How much student loan debt do you estimate
                                    you have?
                                </h2>
                                <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    {[
                                        "$10,000 - $49,999",
                                        "$50,000 - $199,999",
                                        "$200,000+",
                                    ].map((option, idx) => {
                                        // Use simpler keys like 10k-50k etc.
                                        const value =
                                            idx === 0
                                                ? "10k-50k"
                                                : idx === 1
                                                ? "50k-200k"
                                                : "200k+";
                                        return (
                                            <button
                                                key={option}
                                                type="button"
                                                className={`option-btn  rounded-lg py-4 px-6 text-center font-medium ${
                                                    selections.debt === value
                                                        ? "bg-blue-500 text-white hover:bg-blue-600"
                                                        : " bg-gray-100 hover:bg-gray-200"
                                                }`}
                                                onClick={() =>
                                                    selectOption("debt", value)
                                                }
                                            >
                                                {option}
                                            </button>
                                        );
                                    })}
                                </div>
                                {errors.debt && (
                                    <p className="text-red-500 mt-2">
                                        This field is required.
                                    </p>
                                )}
                            </div>

                            {/* Income */}
                            <div className="mb-8">
                                <h2 className="text-2xl font-bold mb-4">
                                    How much individual income do you estimate
                                    you make annually?
                                </h2>
                                <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    {[
                                        {
                                            label: "$0 - $31,999",
                                            value: "0-32k",
                                        },
                                        {
                                            label: "$32,000 - $59,999",
                                            value: "32k-60k",
                                        },
                                        {
                                            label: "$60,000 - $99,999",
                                            value: "60k-100k",
                                        },
                                        {
                                            label: "$100,000 - $149,999",
                                            value: "100k-150k",
                                        },
                                        { label: "$150,000+", value: "150k+" },
                                    ].map(({ label, value }) => (
                                        <button
                                            key={value}
                                            type="button"
                                            className={`option-btn  rounded-lg py-4 px-6 text-center font-medium ${
                                                selections.income === value
                                                    ? " bg-blue-500 text-white hover:bg-blue-600"
                                                    : " bg-gray-100 hover:bg-gray-200"
                                            }`}
                                            onClick={() =>
                                                selectOption("income", value)
                                            }
                                        >
                                            {label}
                                        </button>
                                    ))}
                                </div>
                                {errors.income && (
                                    <p className="text-red-500 mt-2">
                                        This field is required.
                                    </p>
                                )}
                            </div>

                            <div className="text-center">
                                <button
                                    type="button"
                                    onClick={calculatePayment}
                                    className="border border-blue-900 bg-white text-black hover:bg-blue-700 hover:text-white font-bold py-3 px-8 rounded-sm transition"
                                >
                                    Calculate My Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Results Section */}
            {showResults && (
                <section id="results-section" className="py-12 bg-gray-100">
                    <div className="container mx-auto px-4">
                        {showMonthlyPayment && (
                            <>
                                <h2 className="text-3xl font-bold text-center mb-12">
                                    Your Estimated Monthly Payment is:
                                </h2>

                                <div className="flex justify-center">
                                    <div className="result-card bg-white w-full md:w-2/6 p-6 rounded-xl shadow-md">
                                        <div className="text-center">
                                            {monthlyPayment !== null ? (
                                                <h3 className="text-5xl font-bold text-blue-600 mb-4">
                                                    {monthlyPayment}
                                                </h3>
                                            ) : (
                                                <p className="text-red-500">
                                                    Not eligible for a payment
                                                    estimate.
                                                </p>
                                            )}
                                        </div>
                                    </div>
                                </div>
                            </>
                        )}

                        <div className="mt-12 text-center flex justify-center">
                            <div className="bg-blue-50 p-6 rounded-xl flex flex-col max-w-2xl">
                                <h3 className="text-xl font-bold mb-4">
                                    Give us a Call we can help.{" "}
                                    <a
                                        href="tel:4074367933"
                                        className="text-blue-600 hover:underline"
                                    >
                                        (407) 436-7933
                                    </a>
                                </h3>
                                <Link
                                    className="mt-4"
                                    href={route("speak-to-an-adviser")}
                                    target="_blank"
                                    rel="noreferrer"
                                >
                                    <CTAButton className="border-yellow-400 hover:bg-white bg-yellow-500 text-blue-900">
                                        Schedule a Free Consultation
                                    </CTAButton>
                                </Link>
                            </div>
                        </div>
                    </div>
                </section>
            )}

            {/* Benefits Section */}
            <section className="py-16 bg-white">
                <div className="container mx-auto px-4">
                    <h2 className="text-3xl font-bold text-center mb-12">
                        Speak with an Advisor to check your eligibility.
                    </h2>
                    <p className="text-xl text-center mb-12">
                        We're dedicated to helping you Live Your Best Life!
                    </p>

                    <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                        {[
                            {
                                iconClass: <FaHandHoldingUsd />,
                                title: "We Can Help Reduce Monthly Payments",
                                description:
                                    "Our experts can help lower your payments through various programs.",
                            },
                            {
                                iconClass: <FaDollarSign />,
                                title: "FCA Costs Pennies, Compared to Every Dollar Saved",
                                description:
                                    "Our services pay for themselves with the savings we find for you.",
                            },
                            {
                                iconClass: <FaStar />,
                                title: "99% FCA Clients Renew Annually",
                                description:
                                    "Our clients stay with us because we deliver real results.",
                            },
                            {
                                iconClass: <FaUserTie />,
                                title: "We Fully Manage Your Forgiveness Program",
                                description:
                                    "From paperwork to follow-ups, we handle everything for you.",
                            },
                            {
                                iconClass: <FaSearchDollar />,
                                title: "Pay $0 to Find Out If You're Eligible",
                                description:
                                    "Our free consultation costs you nothing but could save you thousands.",
                            },
                            {
                                iconClass: <FaUniversalAccess />,
                                title: "All Income Levels and Credit Accepted",
                                description:
                                    "We can help regardless of your financial situation.",
                            },
                        ].map(({ iconClass, title, description }) => (
                            <div
                                key={title}
                                className="bg-gray-50 p-6 rounded-xl"
                            >
                                <div className="text-blue-600 text-3xl mb-4">
                                    {iconClass}
                                </div>
                                <h3 className="text-xl font-bold mb-2">
                                    {title}
                                </h3>
                                <p className="text-gray-600">{description}</p>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* CTA Section */}
            <section className="py-16 bg-gradient-to-br from-blue-900 to-blue-600 text-white">
                <div className="container mx-auto px-4 text-center">
                    <div className="max-w-4xl mx-auto">
                        <h2 className="text-3xl font-bold mb-8">
                            Ready to take control of your student loans?
                        </h2>
                        <div className="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                            {[
                                {
                                    href: route("howitworks"),
                                    label: "What's The Process",
                                },
                                {
                                    href: route("client-reviews"),
                                    label: "See Clients' Results",
                                },
                                {
                                    href: "/",
                                    label: "See My Options",
                                },
                                {
                                    href: route("speak-to-an-adviser"),
                                    label: "Speak to an Advisor",
                                },
                            ].map(({ href, label }) => (
                                <a
                                    key={label}
                                    href={href}
                                    target="_blank"
                                    rel="noreferrer"
                                    className="bg-white text-blue-600 py-3 px-4 rounded-sm font-medium hover:bg-blue-50 transition"
                                >
                                    {label}
                                </a>
                            ))}
                        </div>
                    </div>
                </div>
            </section>
        </Guest>
    );
}
