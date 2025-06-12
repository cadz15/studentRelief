import React, { HTMLAttributes } from "react";

function StatCard({
    title,
    children,
    className,
    ...props
}: HTMLAttributes<HTMLDivElement>) {
    return (
        <div className={`p-6 bg-blue-50 rounded-xl ${className}`}>
            <div className="text-5xl font-bold text-blue-900 mb-2">{title}</div>
            <p className="text-gray-600">{children}</p>
        </div>
    );
}

export default StatCard;
