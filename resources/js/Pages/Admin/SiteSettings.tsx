import React, { useState } from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import { PageProps } from "@/types";

function SiteSettings({ auth, siteSetting }: PageProps<any>) {
    const [loading, setLoading] = useState<boolean>(false); // State to track loading status

    const [success, setSuccess] = useState(false);

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Site Settings
                </h2>
            }
        >
            <Head title="Site Settings" />

            <div className="py-12">
                <div className="max-w-5xl mx-auto sm:px-6 lg:px-8">
                    <div className="overflow-hidden ">
                        <form
                            className="bg-white rounded-sm shadow-xl p-6 md:p-8 text-gray-800"
                            // onSubmit={}
                        >
                            <div className="mb-6">
                                <label className="block font-medium mb-2">
                                    Site Name
                                </label>
                                <input
                                    type="text"
                                    id="first_name"
                                    value=""
                                    // onChange={}
                                    className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                />
                                {/* {errors.first_name && (
                                        <p className="text-red-500 text-sm">
                                            {errors.first_name}
                                        </p>
                                    )} */}
                            </div>

                            <div className="mb-6">
                                <label className="block font-medium mb-2">
                                    Address
                                </label>
                                <input
                                    type="text"
                                    id="address"
                                    value=""
                                    // onChange={handleChange}
                                    className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                />
                                {/* {errors.address && (
                                    <p className="text-red-500 text-sm">
                                        {errors.address}
                                    </p>
                                )} */}
                            </div>

                            <div className="mb-6">
                                <label className="block font-medium mb-2">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    value=""
                                    // onChange={handleChange}
                                    className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                />
                                {/* {errors.email && (
                                    <p className="text-red-500 text-sm">
                                        {errors.email}
                                    </p>
                                )} */}
                            </div>

                            <div className="mb-6">
                                <label className="block font-medium mb-2">
                                    Phone Number
                                </label>
                                <input
                                    type="tel"
                                    id="phone_number"
                                    value=""
                                    // onChange={handleChange}
                                    className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                />
                                {/* {errors.phone_number && (
                                    <p className="text-red-500 text-sm">
                                        {errors.phone_number}
                                    </p>
                                )} */}
                            </div>

                            <div className="mb-6">
                                <label className="block font-medium mb-2">
                                    Year
                                </label>
                                <input
                                    type="text"
                                    id="year"
                                    value=""
                                    // onChange={handleChange}
                                    className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                />
                                {/* {errors.phone_number && (
                                    <p className="text-red-500 text-sm">
                                        {errors.phone_number}
                                    </p>
                                )} */}
                            </div>

                            <div className="mb-6">
                                <label className="block font-medium mb-2">
                                    Site Details
                                </label>
                                <textarea
                                    id="last_name"
                                    value=""
                                    // onChange={handleChange}
                                    className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                ></textarea>
                                {/* {errors.last_name && (
                                        <p className="text-red-500 text-sm">
                                            {errors.last_name}
                                        </p>
                                    )} */}
                            </div>

                            <div className="mb-6">
                                <label className="block font-medium mb-2">
                                    Logo
                                </label>
                                <input
                                    type="text"
                                    id="logo"
                                    value=""
                                    // onChange={handleChange}
                                    className="w-full px-4 py-2 border rounded-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                />
                                {/* {errors.phone_number && (
                                    <p className="text-red-500 text-sm">
                                        {errors.phone_number}
                                    </p>
                                )} */}
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
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

export default SiteSettings;
