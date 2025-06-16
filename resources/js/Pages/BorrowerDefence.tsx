import Guest from "@/Layouts/GuestLayout";
import { Head, Link } from "@inertiajs/react";
import React from "react";

function BorrowerDefence() {
    return (
        <Guest>
            <Head title="Borrower Defense Program" />

            <section className="bg-gradient-to-br from-blue-900 to-blue-600 text-white py-16 md:py-24">
                <div className="lg:container mx-auto px-4">
                    <div className=" mx-auto text-center">
                        <h1 className="text-4xl md:text-5xl font-bold mb-6">
                            Borrower Defense Program
                        </h1>
                        <p className="text-xl md:text-2xl mb-8 text-orange-400 uppercase font-semibold">
                            DON’T LET STUDENT LOANS HOLD YOU BACK
                        </p>
                        <Link
                            href={route("speak-to-an-adviser")}
                            className="bg-white text-blue-600 font-bold py-3 px-8 hover:bg-blue-100 transition duration-300 inline-block"
                        >
                            Speak to advisor
                        </Link>
                    </div>
                </div>
            </section>

            <section className="py-24">
                <div className="bg-white lg:container mx-auto px-4 flex gap-4 flex-col">
                    <h2 className="font-bold text-4xl">
                        Let us advocate on your behalf.
                    </h2>
                    <p>
                        The borrower defense program is for borrowers who have
                        Federal Student Loans and can demonstrate that they
                        enrolled in a school or continued to attend a school
                        based on misleading information from the school or other
                        misconduct covered by the regulation, and suffered a
                        detriment that is of a nature and degree warranting a
                        full discharge of their applicable Federal Student
                        Loans.
                    </p>
                    <p>
                        FCA will verify that your application is filled out
                        accurately and completely and submit it to the
                        Department of Education on your behalf. We’ll monitor
                        your status throughout the review process (average of 6
                        months) and assist with any further information requests
                        that may be made.
                    </p>
                    <p>
                        On August 7, 2023, a federal court issued an injunction
                        delaying the regulations governing borrower defense and
                        closed school loan discharges until at least November.
                        While the injunction is in effect, borrowers may still
                        apply for borrower defense forgiveness. The Department
                        of Education will not use the latest rules until the
                        injunction has been lifted by the courts. Depending on
                        the jurisdiction, certain borrower defense cases will
                        proceed to forgiveness under the previous regulations.
                        Either way, now is the best time to apply, get your
                        application in as early as possible and be in the front
                        of the line.
                    </p>

                    <p>
                        If your application is successful, your Federal Student
                        Loans will be discharged. Once your eligible loans have
                        been discharged, you may receive a refund for the
                        qualified payments you previously made for that school.
                    </p>
                </div>
            </section>
        </Guest>
    );
}

export default BorrowerDefence;
