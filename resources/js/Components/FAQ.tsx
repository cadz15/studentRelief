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
                <a href="tel:2108123200" className="text-blue-600">
                    210-812-3200
                </a>{" "}
                or email{" "}
                <a
                    href="mailto:Advisors@MyEduSolutions.com"
                    className="text-blue-600"
                >
                    Advisors@MyEduSolutions.com
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
                    repayment and{" "}
                    <a
                        href="https://caportal.myedusolutions.com/public/substantiation/clientresults.php"
                        className="text-blue-600"
                    >
                        hundreds have received complete forgiveness
                    </a>{" "}
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
];

function FAQ() {
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
                    {faqData.map((item, index) => (
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
