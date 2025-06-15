import FAQ from "@/Components/FAQ";
import Guest from "@/Layouts/GuestLayout";
import { Head } from "@inertiajs/react";
import React from "react";

function FAQPage() {
    return (
        <Guest>
            <Head title="Frequently Asked Questions" />
            <FAQ min={18} />
        </Guest>
    );
}

export default FAQPage;
