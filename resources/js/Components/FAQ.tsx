import React, { useState } from "react";
import { FaChevronDown } from "react-icons/fa6";

interface FAQItem {
    question: string;
    answer: React.ReactNode;
}

const faqData: FAQItem[] = [
    {
        question:
            "Can I still enroll in the Forgiveness program if I am currently in default?",
        answer: (
            <p>
                Yes, if your loans are in default or collections, you may still
                qualify to enroll in the Student Loan Forgiveness Program. Even
                if you have been contacted regarding wage garnishment, we may
                still be able to help you if you take action quickly. To reach
                us, please call{" "}
                <a href="tel:4074367933" className="text-blue-600">
                    (407) 436-7933
                </a>{" "}
                or email{" "}
                <a
                    href="mailto:info@fcanationalservice.org"
                    className="text-blue-600"
                >
                    info@fcanationalservice.org
                </a>{" "}
                today.
            </p>
        ),
    },
    {
        question: "How long does the enrollment process take?",
        answer: (
            <p>
                Your FCA Student Loan Advisor will process your application and
                answer all your questions. Approvals by the Department of
                Education can be decided within 10 business days. FCA will stay
                in touch through the process.
            </p>
        ),
    },
    {
        question:
            "What are the benefits of the FCA Student Loan Forgiveness program?",
        answer: (
            <>
                <p>
                    FCA National Service has successfully helped thousands of
                    individuals navigate the complexities of student loan debt
                    repayment and hundreds have received complete forgiveness
                    from the government.
                </p>
                <p className="mt-2">
                    Our trusted Student Loan Advisors help you take control of
                    your debt through a fully-managed student loan program.
                </p>
                <p className="mt-2 font-medium">
                    FCA National Service Management Services Include:
                </p>
                <ul className="list-disc pl-5 mt-2 space-y-1">
                    <li>
                        Direct access to speak with a solution-oriented Student
                        Loan Advisor
                    </li>
                    <li>
                        FCA Advisors audit & resolve Servicer posting errors for
                        forgiveness eligibility
                    </li>
                    <li>
                        Monthly payment drafting & tracking through the Client
                        Portal
                    </li>
                    <li>
                        Renewal team keeps your monthly payments low and in good
                        standing
                    </li>
                    <li>
                        Student Loan alert notifications for Dept. of Education
                        industry changes affecting you
                    </li>
                </ul>
            </>
        ),
    },
    {
        question:
            "What is the difference between FCA National Service and all the other companies that claim that they can help?",
        answer: (
            <img
                src="https://myedusolutions.com/wp-content/uploads/2023/07/student-loan-forgiveness-company-comparison-chart.png"
                alt="Student Loan Forgiveness Company Comparison Chart"
                className="w-full rounded-lg shadow-md"
            />
        ),
    },
    {
        question: "Can I do this myself?",
        answer: (
            <>
                <p>
                    Yes, you can try. Working directly with the Servicer can be
                    difficult, as you may not have the tools or knowledge to
                    navigate the complexities of Forgiveness programs. My
                    Education Solutions (FCA) has a 100% success rate in helping
                    clients complete Forgiveness programs, thanks to our
                    experienced Advisors. We act as your watchdogs, ensuring
                    that the Servicer gives you full credit for your payments.
                    You can have an experienced Advisor take care of your
                    student loans for you, freeing up your time and energy.
                </p>
                <p className="mt-2">
                    FCA's student loan management advisors ensure that your
                    paperwork and payments are properly recorded. Our auditors
                    fix any discrepancies with the servicer, and we ensure that
                    renewals and compliance are administered.
                </p>
            </>
        ),
    },
    {
        question:
            "Does FCA National Service offer other types of debt management services, debt settlement, credit counseling, or credit repair?",
        answer: (
            <p>
                FCA National Service specializes in student loan forgiveness and
                does not offer debt settlement, credit counseling, or credit
                repair services. We are focused solely on navigating Federal
                Student Loan Forgiveness programs to ensure our clients receive
                the full benefit they are eligible for.
            </p>
        ),
    },
    {
        question: "How do I apply for Student Loan Forgiveness?",
        answer: (
            <p>
                You can apply for Student Loan Forgiveness through My Education
                Solutions by speaking with one of our Student Loan Advisors.
                We’ll review your loan history, help you understand your
                options, and guide you through the application process to ensure
                compliance and maximize your benefit.
            </p>
        ),
    },
    {
        question: "How long does the enrollment process take?",
        answer: (
            <p>
                Your FCA Student Loan Advisor will process your application and
                answer all your questions. Approvals by the Department of
                Education can be decided within 10 business days. FCA will stay
                in touch through the process.
            </p>
        ),
    },
    {
        question:
            "What are the benefits of the FCA Student Loan Forgiveness program?",
        answer: (
            <p>
                Benefits include reduced or eliminated loan payments, expert
                guidance, ongoing support, audit assistance, compliance
                management, and a clear path to forgiveness. FCA clients benefit
                from time savings, stress reduction, and a proven track record
                of results.
            </p>
        ),
    },
    {
        question: "What are the requirements for Student Loan forgiveness?",
        answer: (
            <p>
                Requirements typically include having eligible federal loans,
                making qualifying payments under an income-driven repayment
                plan, and being employed in a qualifying job, such as public
                service. FCA helps ensure clients meet all eligibility and
                compliance standards.
            </p>
        ),
    },
    {
        question: "What does FCA National Service do?",
        answer: (
            <p>
                FCA National Service is a student loan management company that
                helps individuals navigate and complete Federal Student Loan
                Forgiveness programs. Our experienced advisors guide clients
                through every step, manage paperwork, track progress, and
                resolve issues with servicers.
            </p>
        ),
    },
    {
        question: "What is the cost of working with FCA National Service?",
        answer: (
            <p>
                The cost varies depending on the complexity of your case. FCA
                offers affordable monthly service plans with no large upfront
                fees, and a free consultation to determine your eligibility and
                estimated savings.
            </p>
        ),
    },
    {
        question: "What is the difference between Forgiveness and Refinance?",
        answer: (
            <p>
                Forgiveness involves reducing or eliminating your federal
                student loan debt through government programs. Refinance is a
                private loan solution that may lower your interest rate but
                disqualifies you from forgiveness. FCA helps clients retain
                access to federal benefits.
            </p>
        ),
    },
    {
        question:
            "What is the difference between FCA National Service and all the other companies that claim that they can help?",
        answer: (
            <p>
                Unlike many companies that overpromise and underdeliver, FCA has
                a proven track record, transparent pricing, and a team of expert
                advisors dedicated to student loan forgiveness. Our 100% success
                rate speaks to our commitment and professionalism.
            </p>
        ),
    },
    {
        question: "What is unique about FCA National Service?",
        answer: (
            <p>
                FCA is unique in offering a personal advisor for every client,
                continuous compliance monitoring, and audit support. We have a
                100% success rate with forgiveness applications and prioritize
                client outcoFCA above all else.
            </p>
        ),
    },
    {
        question: "Who does FCA National Service help?",
        answer: (
            <p>
                FCA helps individuals with federal student loans who are seeking
                relief through forgiveness programs. We work with educators,
                public servants, healthcare professionals, and others who
                qualify under federal guidelines.
            </p>
        ),
    },
    {
        question:
            "Will FCA National Service own my Federal student loans when I enroll in the Student Loan Forgiveness program?",
        answer: (
            <p>
                No, FCA does not own or take over your loans. Your loans remain
                with your federal servicer. We assist in managing the process to
                ensure you receive all the forgiveness benefits you’re entitled
                to.
            </p>
        ),
    },
];

function FAQ({ min = 4 }) {
    const [activeIndex, setActiveIndex] = useState<number | null>(null);

    const toggleIndex = (index: number) => {
        setActiveIndex((prev) => (prev === index ? null : index));
    };

    return (
        <section className="py-20 bg-white">
            <div className="container mx-auto px-4 max-w-4xl">
                <h2 className="text-3xl md:text-4xl font-bold text-center mb-6 text-gray-900">
                    QUESTIONS YOU MAY HAVE
                </h2>
                <p className="text-xl text-center text-gray-600 mb-12">
                    Find the answers and resources to navigate student loan debt
                    forgiveness
                </p>

                <div className="space-y-4">
                    {faqData.slice(0, min).map((item, index) => (
                        <div
                            key={index}
                            className="border-b border-gray-200 pb-4"
                        >
                            <button
                                onClick={() => toggleIndex(index)}
                                className="accordion-button flex justify-between items-center w-full text-left font-semibold text-lg focus:outline-none"
                            >
                                <span>{item.question}</span>
                                <FaChevronDown
                                    className={`transform transition-transform duration-300 ${
                                        activeIndex === index
                                            ? "rotate-180"
                                            : ""
                                    }`}
                                />
                            </button>

                            <div
                                className={`accordion-content overflow-hidden transition-all duration-300 ease-in-out mt-2 text-gray-600 ${
                                    activeIndex === index
                                        ? "max-h-[500px]"
                                        : "max-h-0"
                                }`}
                            >
                                <div className="pt-2">{item.answer}</div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}

export default FAQ;
