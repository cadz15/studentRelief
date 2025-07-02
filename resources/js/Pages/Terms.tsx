import Guest from "@/Layouts/GuestLayout";
import { Head, Link } from "@inertiajs/react";
import React from "react";

function Terms() {
    return (
        <Guest>
            <Head title="Privacy Policy" />

            <section className="bg-gradient-to-br from-blue-900 to-blue-600 text-white py-16 md:py-24">
                <div className="lg:container mx-auto px-4">
                    <div className=" mx-auto text-center">
                        <h1 className="text-4xl md:text-5xl font-bold mb-6">
                            Privacy Policy
                        </h1>
                        <span className="">Effective Date: July 01, 2025</span>
                        <p className="text-lg mt-6">
                            At FCA National Service Consulting Company ('we,'
                            'our,' or 'us'), your privacy is very important to
                            us. This Privacy Policy explains how we collect,
                            use, share, and protect your personal information
                            when you visit our website at
                            https://fcastudentforgiveness.org/ or use our
                            services related to student loan forgiveness and
                            financial consultation.
                        </p>

                        <a
                            href={route("get-file", "privacy-policy.pdf")}
                            target="_blank"
                            className="bg-yellow-400 hover:bg-yellow-500 text-blue-900 mt-6  font-bold py-3 px-8  transition duration-300 inline-block"
                        >
                            Download Privacy Policy
                        </a>
                    </div>
                </div>
            </section>

            <section className="py-24">
                <div className="bg-white lg:container mx-auto px-4 flex gap-4 flex-col">
                    <h2 className="font-bold text-2xl text-blue-900">
                        1. Information We Collect
                    </h2>
                    <ul className="list-disc px-10">
                        <li>Full Name</li>
                        <li>Email Address</li>
                        <li>Phone Number</li>
                        <li>State of Residence</li>
                        <li>Type of student loan (as provided voluntarily)</li>
                        <li>
                            IP address, browser type, and device information
                            (for analytics)
                        </li>
                    </ul>

                    <h2 className="font-bold text-2xl text-blue-900">
                        2. How We Use Your Information
                    </h2>
                    <ul className="list-disc px-10">
                        <li>
                            Provide student loan consultation and related
                            services
                        </li>
                        <li>Respond to inquiries and communicate with you</li>
                        <li>
                            Help assess possible federal relief or forgiveness
                            options
                        </li>
                        <li>Send service updates or reminders</li>
                        <li>
                            Improve our website functionality and user
                            experience
                        </li>
                        <li>Comply with legal or regulatory requirements</li>
                    </ul>

                    <h2 className="font-bold text-2xl text-blue-900">
                        3. How We Share Your Information
                    </h2>
                    <ul className="list-disc px-10">
                        <li>
                            Our authorized team and service providers assisting
                            in service delivery
                        </li>
                        <li>
                            Third-party platforms (e.g., CRM, email, SMS tools)
                            for communication purposes
                        </li>
                        <li>
                            Government agencies or legal authorities, when
                            required by law
                        </li>
                    </ul>

                    <h2 className="font-bold text-2xl text-blue-900">
                        4. Data Security
                    </h2>
                    <ul className="list-disc px-10">
                        <li>
                            We implement appropriate technical and
                            organizational measures to safeguard your
                            information from unauthorized access, disclosure, or
                            misuse.
                        </li>
                    </ul>

                    <h2 className="font-bold text-2xl text-blue-900">
                        5. Your Rights and Choices
                    </h2>
                    <ul className="list-disc px-10">
                        <li>Request access to your data</li>
                        <li>Correct or update your information</li>
                        <li>Request deletion of your data</li>
                        <li>Opt out of communications at any time</li>
                        <li>
                            To exercise any of these rights, contact us at
                            support@fcanationalservice.org.
                        </li>
                    </ul>

                    <h2 className="font-bold text-2xl text-blue-900">
                        6. Third-Party Links
                    </h2>
                    <ul className="list-disc px-10">
                        <li>
                            Our website may contain links to third-party
                            websites or services. We are not responsible for the
                            privacy practices of those external sites.
                        </li>
                    </ul>

                    <h2 className="font-bold text-2xl text-blue-900">
                        7. Changes to This Policy
                    </h2>
                    <ul className="list-disc px-10">
                        <li>
                            We reserve the right to update this Privacy Policy
                            from time to time. Changes will be posted here, with
                            an updated “Effective Date.”
                        </li>
                    </ul>

                    <h2 className="font-bold text-2xl text-blue-900">
                        8. Contact Us
                    </h2>
                    <ul className="list-disc px-10">
                        <li>
                            If you have any questions or concerns about this
                            Privacy Policy or your data, please contact:
                        </li>
                        <li>FCA National Service Consulting Company</li>
                        <li>Email: support@fcanationalservice.org</li>
                        <li>Website: https://fcastudentforgiveness.org/</li>
                        <li>Call us at : (407) 436-7933</li>
                    </ul>
                </div>
            </section>
        </Guest>
    );
}

export default Terms;
