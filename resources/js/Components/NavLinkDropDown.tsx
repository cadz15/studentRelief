import React, { HtmlHTMLAttributes, useState } from "react";
import { FaChevronDown } from "react-icons/fa";

const NavLinkDropDown = ({
    title,
    children,
    ...props
}: HtmlHTMLAttributes<HTMLDivElement>) => {
    const [isOpen, setIsOpen] = useState(false);

    // Open dropdown on mouse enter (hover)
    const handleMouseEnter = () => setIsOpen(true);
    // Close dropdown on mouse leave only when not hovering dropdown itself
    const handleMouseLeave = () => setIsOpen(false);

    return (
        <div className="relative">
            <button
                className="nav-link gap-2 px-4 py-2 font-medium flex items-center hover:bg-white hover:bg-opacity-10"
                onMouseEnter={handleMouseEnter}
                onMouseLeave={handleMouseLeave}
                tabIndex={0}
                onFocus={handleMouseEnter}
                onBlur={handleMouseLeave}
            >
                {title} <FaChevronDown />
            </button>
            {isOpen && (
                <div
                    className="absolute bg-white w-fit py-2 shadow-lg z-50"
                    onMouseEnter={handleMouseEnter}
                    onMouseLeave={handleMouseLeave}
                    tabIndex={1}
                    onFocus={handleMouseEnter}
                    onBlur={handleMouseLeave}
                >
                    {children}
                </div>
            )}
        </div>
    );
};

export default NavLinkDropDown;
