import { Link, InertiaLinkProps } from "@inertiajs/react";

export default function NavLink({
    active = false,
    className = "",
    children,
    ...props
}: InertiaLinkProps & { active: boolean }) {
    return (
        <Link
            {...props}
            className={
                "nav-link px-4 py-2 text-nowrap font-medium " +
                (active
                    ? "bg-white bg-opacity-10 "
                    : "hover:bg-white hover:bg-opacity-10 ") +
                className
            }
        >
            {children}
        </Link>
    );
}
