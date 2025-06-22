import CTAButton from "./CTAButton";
import { Link } from "@inertiajs/react";

import video from "@/../../resources/video/video.mp4";

function Hero() {
    return (
        <section className="pt-32 pb-12 bg-gradient-to-br from-blue-900 to-blue-600">
            <div className="2xl:container mx-auto w-full flex flex-col gap-8 items-center justify-center">
                <p className="text-white uppercase text-center font-extrabold text-4xl md:text-5xl max-w-4xl">
                    Fully-Managed Student Loan Programs for Complete Forgiveness
                </p>
                <p className="text-2xl md:text-3xl font-bold text-yellow-400">
                    Student Loan Solutions
                </p>
                <div className="flex gap-4 mt-6 md:flex-row flex-col">
                    <Link href={route("calculator")}>
                        <CTAButton className="border-yellow-400 text-white  hover:bg-yellow-500 hover:text-blue-900">
                            View your savings
                        </CTAButton>
                    </Link>
                    <Link href={route("speak-to-an-adviser")}>
                        <CTAButton className="border-yellow-400 hover:bg-white hover:border-white bg-yellow-500 text-blue-900">
                            Speak to an advisor
                        </CTAButton>
                    </Link>
                </div>

                <video
                    className="mt-12 w-11/12 md:w-8/12"
                    controls
                    loop
                    src={video}
                ></video>
            </div>
        </section>
    );
}

export default Hero;
