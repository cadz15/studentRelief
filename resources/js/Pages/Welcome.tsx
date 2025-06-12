import { Link, Head } from "@inertiajs/react";
import { PageProps } from "@/types";
import Guest from "@/Layouts/GuestLayout";
import Hero from "@/Components/Hero";
import Stats from "@/Components/Stats";
import StressFree from "@/Components/StressFree";

export default function Welcome({
    auth,
    laravelVersion,
    phpVersion,
}: PageProps<{ laravelVersion: string; phpVersion: string }>) {
    return (
        <Guest>
            <Hero />
            <Stats />
            <StressFree />
        </Guest>
    );
}
