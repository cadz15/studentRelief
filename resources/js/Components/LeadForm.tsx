import React, { useState, ChangeEvent, FormEvent } from "react";

// Define interfaces for form data and error messages
interface FormData {
    firstName: string;
    lastName: string;
    address: string;
    email: string;
    phone: string;
    enrolled: string;
}

interface FormErrors {
    firstName: string;
    lastName: string;
    address: string;
    email: string;
    phone: string;
    enrolled: string;
}

function LeadForm({ title = "" }) {
    // State for form data and errors
    const [formData, setFormData] = useState<FormData>({
        firstName: "",
        lastName: "",
        address: "",
        email: "",
        phone: "",
        enrolled: "",
    });

    const [errors, setErrors] = useState<FormErrors>({
        firstName: "",
        lastName: "",
        address: "",
        email: "",
        phone: "",
        enrolled: "",
    });

    const [loading, setLoading] = useState<boolean>(false); // State to track loading status

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
            firstName: "",
            lastName: "",
            address: "",
            email: "",
            phone: "",
            enrolled: "",
        };

        // First Name Validation
        if (!formData.firstName) {
            newErrors.firstName = "First Name is required.";
            isValid = false;
        }

        // Last Name Validation
        if (!formData.lastName) {
            newErrors.lastName = "Last Name is required.";
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

        // Phone Validation
        const phoneRegex = /^\d{10}$/; // Only 10-digit numbers (you can modify this based on requirements)
        if (!formData.phone || !phoneRegex.test(formData.phone)) {
            newErrors.phone = "Please enter a valid phone number (10 digits).";
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
            setLoading(true); // Set loading to true when submission starts

            // Simulate form submission delay
            setTimeout(() => {
                // Simulate successful form submission
                console.log("Form Submitted Successfully:", formData);

                // Reset loading state
                setLoading(false);
            }, 2000); // Simulating a 2-second delay for submission
        }
    };

    return (
        <div className="mx-auto">
            <h2 className="text-3xl md:text-4xl font-bold mb-8 text-center">
                {title}
            </h2>

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
                            id="firstName"
                            value={formData.firstName}
                            onChange={handleChange}
                            className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        />
                        {errors.firstName && (
                            <p className="text-red-500 text-sm">
                                {errors.firstName}
                            </p>
                        )}
                    </div>
                    <div>
                        <label className="block font-medium mb-2">
                            Last Name
                        </label>
                        <input
                            type="text"
                            id="lastName"
                            value={formData.lastName}
                            onChange={handleChange}
                            className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        />
                        {errors.lastName && (
                            <p className="text-red-500 text-sm">
                                {errors.lastName}
                            </p>
                        )}
                    </div>
                </div>

                <div className="mb-6">
                    <label className="block font-medium mb-2">Address</label>
                    <input
                        type="text"
                        id="address"
                        value={formData.address}
                        onChange={handleChange}
                        className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    {errors.address && (
                        <p className="text-red-500 text-sm">{errors.address}</p>
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
                        <p className="text-red-500 text-sm">{errors.email}</p>
                    )}
                </div>

                <div className="mb-6">
                    <label className="block font-medium mb-2">
                        Phone Number
                    </label>
                    <input
                        type="tel"
                        id="phone"
                        value={formData.phone}
                        onChange={handleChange}
                        className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    {errors.phone && (
                        <p className="text-red-500 text-sm">{errors.phone}</p>
                    )}
                </div>

                <div className="mb-6">
                    <label className="block font-medium mb-2">
                        Are you enrolled in any student forgiveness loan program
                        currently?
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
        </div>
    );
}

export default LeadForm;
