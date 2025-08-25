import axios from "axios";
import React, { useState, ChangeEvent, FormEvent } from "react";

// Define interfaces for form data and error messages
interface FormData {
    first_name: string;
    last_name: string;
    address: string;
    email: string;
    phone_number: string;
    enrolled: string;
}

interface FormErrors {
    first_name: string;
    last_name: string;
    address: string;
    email: string;
    phone_number: string;
    enrolled: string;
}

function LeadForm({ title = "" }) {
    // State for form data and errors
    const [formData, setFormData] = useState<FormData>({
        first_name: "",
        last_name: "",
        address: "",
        email: "",
        phone_number: "",
        enrolled: "",
    });

    const [errors, setErrors] = useState<FormErrors>({
        first_name: "",
        last_name: "",
        address: "",
        email: "",
        phone_number: "",
        enrolled: "",
    });

    const [loading, setLoading] = useState<boolean>(false); // State to track loading status

    const [success, setSuccess] = useState(false);

    // Handle input changes
    const handleChange = (
        e: ChangeEvent<HTMLInputElement | HTMLSelectElement>
    ) => {
        const { id, value } = e.target;
        setFormData((prevData) => ({
            ...prevData,
            [id]: value,
        }));
    };

    // Validation function
    const validate = (): boolean => {
        let isValid = true;
        const newErrors: FormErrors = {
            first_name: "",
            last_name: "",
            address: "",
            email: "",
            phone_number: "",
            enrolled: "",
        };

        // First Name Validation
        if (!formData.first_name) {
            newErrors.first_name = "First Name is required.";
            isValid = false;
        }

        // Last Name Validation
        if (!formData.last_name) {
            newErrors.last_name = "Last Name is required.";
            isValid = false;
        }

        // Address Validation
        if (!formData.address) {
            newErrors.address = "Address is required.";
            isValid = false;
        }

        // Email Validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!formData.email || !emailRegex.test(formData.email)) {
            newErrors.email = "Please enter a valid email address.";
            isValid = false;
        }

        // phone_number Validation
        const phone_numberRegex = /^\d{10}$/; // Only 10-digit numbers (you can modify this based on requirements)
        if (
            !formData.phone_number ||
            !phone_numberRegex.test(formData.phone_number)
        ) {
            newErrors.phone_number =
                "Please enter a valid phone number (10 digits).";
            isValid = false;
        }

        // Enrollment Validation
        if (!formData.enrolled) {
            newErrors.enrolled = "Please select an option.";
            isValid = false;
        }

        setErrors(newErrors);
        return isValid;
    };

    // Handle form submission
    const handleSubmit = (e: FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        if (validate()) {
            setLoading(true);
            axios
                .post(route("lead.store"), formData)
                .then((response) => {
                    setSuccess(true);
                    setLoading(false);
                })
                .catch((error) => {
                    console.log(error);
                    setLoading(false);
                });
        }
    };

    return (
        <div className="mx-auto">
            <h2 className="text-3xl md:text-4xl font-bold mb-8 text-center">
                {title}
            </h2>
            {!success ? (
                <form
                    className="bg-white rounded-sm shadow-xl p-6 md:p-8 text-gray-800"
                    onSubmit={handleSubmit}
                >
                    <div className="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label className="block font-medium mb-2">
                                First Name
                            </label>
                            <input
                                type="text"
                                id="first_name"
                                value={formData.first_name}
                                onChange={handleChange}
                                className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            />
                            {errors.first_name && (
                                <p className="text-red-500 text-sm">
                                    {errors.first_name}
                                </p>
                            )}
                        </div>
                        <div>
                            <label className="block font-medium mb-2">
                                Last Name
                            </label>
                            <input
                                type="text"
                                id="last_name"
                                value={formData.last_name}
                                onChange={handleChange}
                                className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            />
                            {errors.last_name && (
                                <p className="text-red-500 text-sm">
                                    {errors.last_name}
                                </p>
                            )}
                        </div>
                    </div>

                    <div className="mb-6">
                        <label className="block font-medium mb-2">
                            Address
                        </label>
                        <input
                            type="text"
                            id="address"
                            value={formData.address}
                            onChange={handleChange}
                            className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        />
                        {errors.address && (
                            <p className="text-red-500 text-sm">
                                {errors.address}
                            </p>
                        )}
                    </div>

                    <div className="mb-6">
                        <label className="block font-medium mb-2">Email</label>
                        <input
                            type="email"
                            id="email"
                            value={formData.email}
                            onChange={handleChange}
                            className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        />
                        {errors.email && (
                            <p className="text-red-500 text-sm">
                                {errors.email}
                            </p>
                        )}
                    </div>

                    <div className="mb-6">
                        <label className="block font-medium mb-2">
                            Phone Number
                        </label>
                        <input
                            type="tel"
                            id="phone_number"
                            value={formData.phone_number}
                            onChange={handleChange}
                            className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        />
                        {errors.phone_number && (
                            <p className="text-red-500 text-sm">
                                {errors.phone_number}
                            </p>
                        )}
                    </div>

                    <div className="mb-6">
                        <label className="block font-medium mb-2">
                            Are you enrolled in any student forgiveness loan
                            program currently?
                        </label>
                        <select
                            id="enrolled"
                            value={formData.enrolled}
                            onChange={handleChange}
                            className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="">Select an option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        {errors.enrolled && (
                            <p className="text-red-500 text-sm">
                                {errors.enrolled}
                            </p>
                        )}
                    </div>
                    <div className="mb-6">
                        <input type="checkbox" name="" id="check" required />
                        <label htmlFor="check" className="text-sm ml-2">
                            By checking this box, I consent to receive
                            transactional messages from FCA National related to
                            my account, orders, or services I have requested.
                            These messages may include appointment reminders,
                            order confirmations, and account notifications among
                            others. Message frequency may vary. Message & Data
                            rates may apply. Reply HELP for help or STOP to
                            opt-out.
                        </label>
                    </div>
                    <div className="mb-6">
                        <input type="checkbox" name="" id="check2" required />
                        <label htmlFor="check2" className="text-sm ml-2">
                            By checking this box, I consent to receive marketing
                            and promotional messages, including special offers,
                            discounts, new product updates among others. Message
                            frequency may vary. Message & Data rates may apply.
                            Reply HELP for help or STOP to opt-out.
                        </label>
                    </div>

                    <div className="mb-6">
                        <hr />
                        <div>
                            You may also read our{" "}
                            <a
                                href={route("terms-of-use")}
                                target="_blank"
                                className="font-bold"
                            >
                                <u>Terms of Use</u>
                            </a>{" "}
                            and{" "}
                            <a
                                href={route("privacy-policy")}
                                target="_blank"
                                className="font-bold"
                            >
                                <u>Privacy Policy</u>
                            </a>
                        </div>
                    </div>

                    <div className="text-center">
                        <button
                            type="submit"
                            disabled={loading} // Disable button while loading
                            className="bg-blue-600 text-white font-bold py-3 px-8 rounded-sm hover:bg-blue-700 transition duration-300"
                        >
                            {loading ? (
                                <span className="flex items-center justify-center">
                                    <svg
                                        className="w-5 h-5 animate-spin mr-3"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        strokeWidth="2"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                    >
                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="10"
                                            stroke="currentColor"
                                            strokeWidth="4"
                                        ></circle>
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            strokeWidth="4"
                                            d="M4 12h1a5 5 0 1 1 5 5V8a5 5 0 1 1 5 5h1"
                                        ></path>
                                    </svg>
                                    Loading...
                                </span>
                            ) : (
                                "Submit Request"
                            )}
                        </button>
                    </div>
                </form>
            ) : (
                <div className="flex items-center justify-center min-h-screen bg-gray-500 ">
                    <div className="bg-white shadow-xl rounded-lg p-8 max-w-sm text-center">
                        <div className="text-5xl mb-4">🎉</div>
                        <h1 className="text-2xl font-bold text-gray-800 mb-2">
                            You're all set!
                        </h1>
                        <p className="text-gray-600">
                            Thank you for reaching out! 🙏 We've received your
                            information, and you're now a priority for us. Our
                            team is reviewing your request and will get in touch
                            with you shortly to assist you in your journey to
                            debt relief. Please know that we're here to help
                            you, and your request is very important to us. 💙
                        </p>
                    </div>
                </div>
            )}
        </div>
    );
}

export default LeadForm;
