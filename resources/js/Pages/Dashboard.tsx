import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, router } from "@inertiajs/react";
import { PageProps } from "@/types";

//typescript with any?
export default function Dashboard({ auth, leads }: PageProps<any>) {
    const handleExport = () => {
        window.location.href = route("leads.export");
    };
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Leads
                </h2>
            }
        >
            <Head title="Leads" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="overflow-hidden  sm:rounded-lg">
                        <button
                            onClick={handleExport}
                            className="mb-4 px-4 py-2 bg-green-600 text-white rounded"
                        >
                            Export to Excel
                        </button>
                        <table className="bg-white shadow-sm w-full border">
                            <thead>
                                <tr className="bg-gray-300">
                                    <th className="border px-4 py-2">Name</th>
                                    <th className="border px-4 py-2">
                                        Address
                                    </th>
                                    <th className="border px-4 py-2">Email</th>
                                    <th className="border px-4 py-2">
                                        Phone Numbber
                                    </th>
                                    <th className="border px-4 py-2">
                                        Is Currently Enrolled
                                    </th>
                                    <th className="border px-4 py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                {leads.data.map((leads: any) => (
                                    <tr key={leads.id}>
                                        <td className="border px-4 py-2">
                                            {leads.full_name}
                                        </td>
                                        <td className="border px-4 py-2">
                                            {leads.address}
                                        </td>
                                        <td className="border px-4 py-2">
                                            {leads.email}
                                        </td>
                                        <td className="border px-4 py-2">
                                            {leads.phone_number}
                                        </td>
                                        <td className="border px-4 py-2">
                                            {leads.enrolled}
                                        </td>
                                        <td className="border px-4 py-2">
                                            {leads.formatted_date}
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>

                        <div className="mt-4">
                            {leads.links.map((link: any, index: number) => (
                                <button
                                    key={index}
                                    disabled={!link.url}
                                    onClick={() =>
                                        link.url && router.visit(link.url)
                                    }
                                    className={`mx-1 px-3 py-1 rounded ${
                                        link.active
                                            ? "bg-blue-500 text-white"
                                            : "bg-gray-200"
                                    }`}
                                    dangerouslySetInnerHTML={{
                                        __html: link.label,
                                    }}
                                />
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
