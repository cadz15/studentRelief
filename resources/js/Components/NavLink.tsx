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
                "nav-link px-4 py-2 text-nowrap flex flex-col justify-center font-medium border-b-2 hover:border-b-orange-300 hover:text-orange-300 transition duration-150 " +
                (active
                    ? " border-b-orange-300 "
                    : "hover:bg-white hover:bg-opacity-10 border-b-transparent ") +
                className
            }
        >
            {children}
        </Link>
    );
}
