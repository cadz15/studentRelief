import React from "react";
import StatCard from "./StatCard";

function Stats() {
    return (
        <section className="bg-white py-16">
            <div className="2xl:container mx-auto px-4">
                <div className="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                    <StatCard title="784">
                        Completed Clients with My Education Solutions
                    </StatCard>
                    <StatCard title="101%">
                        Reduction of Our Clients' Student Loan Debt*
                    </StatCard>
                    <StatCard title="$81,797">
                        FCA Clients' average amount forgiven by the Dept. of
                        Education*
                    </StatCard>
                    <StatCard title="$64M+">
                        Saved with Forgiveness Programs
                    </StatCard>
                </div>
            </div>
        </section>
    );
}

export default Stats;
