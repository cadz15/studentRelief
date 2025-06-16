import { Link, Head } from "@inertiajs/react";
import { PageProps } from "@/types";
import Guest from "@/Layouts/GuestLayout";
import Hero from "@/Components/Hero";
import Stats from "@/Components/Stats";
import StressFree from "@/Components/StressFree";
import Testimonials from "@/Components/Testimonials";
import CeoSection from "@/Components/CeoSection";
import WhoAreWe from "@/Components/WhoAreWe";
import Eligibility from "@/Components/Eligibility";
import FAQ from "@/Components/FAQ";

export default function Welcome({
    auth,
    laravelVersion,
    phpVersion,
}: PageProps<{ laravelVersion: string; phpVersion: string }>) {
    return (
        <Guest>
            <Head title="Student Loan Forgiveness" />
            <Hero />
            <Stats />
            <StressFree />
            <Testimonials />
            {/* <CeoSection /> */}
            <WhoAreWe />
            <Eligibility />
            <FAQ />
        </Guest>
    );
}
