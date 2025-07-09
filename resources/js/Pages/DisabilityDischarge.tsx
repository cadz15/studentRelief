import Guest from "@/Layouts/GuestLayout";
import { Head, Link } from "@inertiajs/react";
import React from "react";

function DisabilityDischarge() {
    return (
        <Guest>
            <Head title="Disability Discharge" />

            <section className="bg-gradient-to-br from-blue-900 to-blue-600 text-white py-16 md:py-24">
                <div className="lg:container mx-auto px-4">
                    <div className=" mx-auto text-center">
                        <h1 className="text-4xl md:text-5xl font-bold mb-6">
                            Disability Discharge
                        </h1>
                        <p className="text-xl md:text-2xl mb-8 text-orange-400 uppercase font-semibold">
                            You have options
                        </p>
                        <Link
                            href={route("speak-to-an-adviser")}
                            className="bg-white text-blue-600 font-bold py-3 px-8 hover:bg-blue-100 transition duration-300 inline-block"
                        >
                            Speak to a Specialist
                        </Link>
                    </div>
                </div>
            </section>

            <section className="py-24">
                <div className="bg-white lg:container mx-auto px-4 flex gap-4 flex-col">
                    <h2 className="font-bold text-4xl">
                        Do you qualify for disability discharge of your student
                        debt?
                    </h2>
                    <p className="">
                        If you are totally and permanently disabled, you may
                        qualify for a discharge of your Federal Student Loans.
                        To show that you qualify for a disability discharge, you
                        will be asked to provide documentation from one of three
                        sources :
                    </p>
                    <ul className="list-disc px-10">
                        <li>
                            The U.S. Department of Veteran Affairs (VA) – This
                            can take up to 6 months before we receive
                            approval/denial) Need to be 100% disabled to receive
                            approval.
                        </li>
                        <li>
                            The Social Security Administration (SSA) is subject
                            to a 3-year post-discharge monitoring period that
                            begins on the date the discharge is approved.
                        </li>
                        <li>
                            An Authorized Medical Professional (Physician letter
                            is needed – 2nd pg of the application) is subject to
                            a 3-year post-discharge monitoring period that
                            begins on the date the discharge is approved.
                        </li>
                    </ul>

                    <p>
                        Speak with a FCA National Service Specialist who can
                        assist you with a list of proper documentation.
                    </p>
                    <p>
                        FCA will verify your application meets the requirements
                        before submitting it to the Department of Education for
                        approval on your behalf. As part of our services, we’ll
                        monitor your status throughout the review process
                        (average of 6 months) and assist with any further
                        information requests that may be made.
                    </p>
                    <p>
                        If your application is successful, your Federal Student
                        Loans will be discharged. There is a three-year
                        post-discharge monitoring period. Once your eligible
                        loans have been discharged, you may receive a refund for
                        the qualified payments you previously made for that
                        school.
                    </p>
                </div>
            </section>
        </Guest>
    );
}

export default DisabilityDischarge;
