import { Link } from "@inertiajs/react";
import React, { HTMLAttributes } from "react";
import { FaCheckCircle, FaHandHoldingUsd } from "react-icons/fa";

function StressFreeCard({
    title,
    children,
    url,
    className,
}: HTMLAttributes<HTMLDivElement> & { url: string }) {
    return (
        <div className="bg-white p-6 rounded-xl shadow-md hover:-translate-y-[5px] hover:shadow-[0_10px_25px_rgba(0,0,0,0.1)] transition duration-300">
            <div
                className={`feature-icon w-[60px] h-[60px] flex items-center justify-center rounded-full mb-1 text-white ${className}`}
            >
                {children}
            </div>
            <h3 className="text-xl mt-4 font-semibold mb-3">{title}</h3>
            <Link href={url} className="text-blue-600 hover:underline">
                <FaCheckCircle className="inline-block mr-2" />
                Learn More
            </Link>
        </div>
    );
}

export default StressFreeCard;
