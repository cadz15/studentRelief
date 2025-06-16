import { Link } from "@inertiajs/react";
import React from "react";
import { FaStar, FaUser } from "react-icons/fa";
import CTAButton from "./CTAButton";

function Testimonials({ className = "" }) {
    return (
        <section className={`py-20 bg-blue-900 text-white ${className}`}>
            <div className="container mx-auto px-4">
                <h2 className="text-3xl md:text-4xl font-bold text-center mb-4">
                    TESTIMONIALS
                </h2>
                <h3 className="text-2xl text-center mb-12">
                    I'm debt-free. The program works!
                </h3>
                <p className="text-center max-w-3xl mx-auto mb-12">
                    Let our Clients' stories help you make an informed decision.
                    We believe trust lies in the power of personal stories. See
                    how we've helped Clients save money and time and reduce
                    their stress.
                </p>

                <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div className="hover:shadow-2xl rounded-sm shadow-md transition-all duration-300 ease-in-out p-6 bg-white text-gray-800">
                        <div className="flex items-center mb-4">
                            <div className="mr-4">
                                <div className="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                    <FaUser />
                                </div>
                            </div>
                            <div>
                                <h4 className="font-bold">Sarah J.</h4>
                                <div className="flex text-yellow-400">
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                </div>
                            </div>
                        </div>
                        <p className="italic">
                            "After years of struggling with my student loans,
                            FCA helped me navigate the forgiveness process. Now
                            I'm debt-free and can focus on my future."
                        </p>
                    </div>

                    <div className="hover:shadow-2xl rounded-sm shadow-md transition-all duration-300 ease-in-out p-6 bg-white text-gray-800">
                        <div className="flex items-center mb-4">
                            <div className="mr-4">
                                <div className="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                    <FaUser />
                                </div>
                            </div>
                            <div>
                                <h4 className="font-bold">Michael T.</h4>
                                <div className="flex text-yellow-400">
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                </div>
                            </div>
                        </div>
                        <p className="italic">
                            "The team at FCA was incredibly knowledgeable and
                            supportive. They saved me over $60,000 and took all
                            the stress out of dealing with my loans."
                        </p>
                    </div>

                    <div className="hover:shadow-2xl  rounded-sm shadow-md transition-all duration-300 ease-in-out p-6 bg-white text-gray-800">
                        <div className="flex items-center mb-4">
                            <div className="mr-4">
                                <div className="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                    <FaUser />
                                </div>
                            </div>
                            <div>
                                <h4 className="font-bold">Jennifer L.</h4>
                                <div className="flex text-yellow-400">
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                    <FaStar />
                                </div>
                            </div>
                        </div>
                        <p className="italic">
                            "I didn't think loan forgiveness was possible for
                            me. FCA proved me wrong and handled everything from
                            start to finish. Best decision I ever made."
                        </p>
                    </div>
                </div>

                <div className="text-center">
                    <Link href={route("client-reviews")} className="">
                        <CTAButton className="border-blue-400 text-white bg-blue-500 hover:bg-blue-700 hover:text-white">
                            See Client Testimonials
                        </CTAButton>
                    </Link>
                </div>
            </div>
        </section>
    );
}

export default Testimonials;
