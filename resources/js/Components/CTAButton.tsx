import React, { ButtonHTMLAttributes } from "react";

function CTAButton({
    className = "",
    disabled,
    children,
    ...props
}: ButtonHTMLAttributes<HTMLButtonElement>) {
    return (
        <button
            {...props}
            className={
                `ml-2 border font-semibold px-8 py-4 uppercase transition duration-300 ${disabled} ` +
                className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}

export default CTAButton;
