import LeadForm from "@/Components/LeadForm";
import Stats from "@/Components/Stats";
import Testimonials from "@/Components/Testimonials";
import Guest from "@/Layouts/GuestLayout";
import { Head } from "@inertiajs/react";
import React from "react";
import { FaCheckCircle } from "react-icons/fa";

function LeadPage() {
    return (
        <Guest>
            <Head title="Speak to an Adviser" />

            <section className="bg-gradient-to-br from-blue-900 to-blue-600 text-white py-16 md:py-24">
                <div className="container mx-auto px-4 flex flex-col md:flex-row items-center">
                    <div className="md:w-1/2 mb-12 md:mb-0">
                        <h2 className="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                            Could You Qualify for Student Loan Forgiveness?
                        </h2>
                        <p className="text-xl mb-8 text-purple-100">
                            Millions of Americans are eligible for loan
                            forgiveness programs they don't know about. Find out
                            if you qualify in just 2 minutes.
                        </p>
                        <div className="flex flex-col space-y-4 mb-8">
                            <div className="flex items-center">
                                <span className="checkmark">
                                    <FaCheckCircle className="text-green-500 mr-4" />
                                </span>
                                <span>Pre-qualification offers</span>
                            </div>
                            <div className="flex items-center">
                                <span className="checkmark">
                                    <FaCheckCircle className="text-green-500 mr-4" />
                                </span>
                                <span>Government-approved programs</span>
                            </div>
                            <div className="flex items-center">
                                <span className="checkmark">
                                    <FaCheckCircle className="text-green-500 mr-4" />
                                </span>
                                <span>
                                    Over $64M Saved with Forgiveness Programs
                                </span>
                            </div>
                        </div>
                    </div>
                    <div className="md:w-1/2">
                        <LeadForm />
                    </div>
                </div>
            </section>
            <Stats />
            <Testimonials />
        </Guest>
    );
}

export default LeadPage;
