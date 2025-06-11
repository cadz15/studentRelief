import { ButtonHTMLAttributes } from "react";

export default function PrimaryButton({
    className = "",
    disabled,
    children,
    ...props
}: ButtonHTMLAttributes<HTMLButtonElement>) {
    return (
        <button
            {...props}
            className={
                `ml-2 bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold px-6 py-2 rounded-sm transition duration-300 ${disabled} ` +
                className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
