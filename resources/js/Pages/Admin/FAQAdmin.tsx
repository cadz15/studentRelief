import { PageProps } from "@/types";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

function FAQAdmin({ auth, leads }: PageProps<any>) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Frequently Asked Questions
                </h2>
            }
        >
            <Head title="FAQ" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="overflow-hidden "></div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

export default FAQAdmin;
