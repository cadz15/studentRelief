import Guest from "@/Layouts/GuestLayout";
import { Head, Link } from "@inertiajs/react";
import { FaStar } from "react-icons/fa6";

interface ReviewInterface {
    image: string;
    name: string;
    rating: number;
    title: string;
    description: string;
}

interface SuccessStoriesInterface extends ReviewInterface {
    video: string;
}

interface ClientReviewInterface extends ReviewInterface {
    link: string;
}

const successStories: SuccessStoriesInterface[] = [
    {
        image: "https://myedusolutions.com/wp-content/uploads/2023/08/4.png",
        name: "Ralph L.",
        rating: 5,
        title: '"A worthwhile experience!"',
        description: `   FCA National Service has been a godsend
                                    when it came to handling my financial
                                    educational debt repayment...`,
        video: "",
    },
    {
        image: "https://myedusolutions.com/wp-content/uploads/2023/08/3.png",
        name: "Angie V.",
        rating: 5,
        title: '"Exceptional"',
        description: `FCA National Service is a 5 Star company
                                    with exceptional customer service and
                                    support...`,
        video: "",
    },
    {
        image: "https://myedusolutions.com/wp-content/uploads/2023/08/6.png",
        name: "Debra M.",
        rating: 5,
        title: '"Friendly and supportive."',
        description: `I love FCA National Service because
                                    whenever I have questions about my account
                                    or provide updates...`,
        video: "",
    },
];

const clientReviews: ClientReviewInterface[] = [
    {
        image: "https://images.unsplash.com/photo-1502685104226-ee32379fefbe",
        name: "Debra Mitchell",
        rating: 5,
        title: '"Friendly and supportive."',
        description: `I love FCA National Service because whenever I have questions about my account or provide updates, they are always patient and helpful.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1607746882042-944635dfe10e",
        name: "Jason Lee",
        rating: 5,
        title: '"I finally have hope!"',
        description: `After struggling for years with my student loans, this program gave me a light at the end of the tunnel. So grateful!`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1524504388940-b1c1722653e1",
        name: "Alicia Rodriguez",
        rating: 4,
        title: '"Great customer service."',
        description: `They walked me through the process step-by-step and helped me understand how I qualify for forgiveness. I feel so much more confident now.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91",
        name: "Marcus Williams",
        rating: 5,
        title: '"A real financial relief!"',
        description: `I used to dread looking at my loan balance. Now I’m actually seeing progress and know I’m on the path to forgiveness.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1544005313-94ddf0286df2",
        name: "Janelle Kim",
        rating: 5,
        title: '"No more stress!"',
        description: `They made the paperwork so simple and kept me updated throughout the process. I feel like I can breathe again.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1603415526960-f7e0328fddb5",
        name: "Robert Thompson",
        rating: 4,
        title: '"Helpful and efficient."',
        description: `The team was responsive and really knew what they were doing. My payments are now manageable, and I’m on track for forgiveness.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1573497019414-fc2fbc1f0b7b",
        name: "Natalie Harris",
        rating: 5,
        title: '"Best decision I made."',
        description: `Signing up for this program was the smartest financial move I've made. I wish I had done it sooner!`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1554151228-14d9def656e4",
        name: "Tyrone Foster",
        rating: 5,
        title: '"Life-changing support."',
        description: `This service gave me peace of mind and a real plan. I can finally see an end to my student debt.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde",
        name: "Kimberly Baker",
        rating: 4,
        title: '"Very informative."',
        description: `They answered all my questions and helped me get on the right repayment plan. Everything feels so much more manageable now.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1584999734480-009f57f2f2b5",
        name: "Eric Davis",
        rating: 5,
        title: '"So thankful!"',
        description: `I was skeptical at first, but this program truly works. My monthly payments are way lower and I’m on track to be debt-free.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1542327897-8c1f4c3d1b91",
        name: "Jessica Martin",
        rating: 5,
        title: '"Highly recommended!"',
        description: `If you’re feeling overwhelmed by your student loans, don’t wait. They know what they’re doing and they care.`,
        link: "",
    },
    {
        image: "https://images.unsplash.com/photo-1595152772835-219674b2a8a6",
        name: "Dante Green",
        rating: 5,
        title: '"Honest and transparent."',
        description: `They laid everything out for me clearly and gave realistic timelines. No false promises—just real help.`,
        link: "",
    },
];

function Reviews() {
    return (
        <Guest>
            <Head title="Client Reviews" />

            <section className="bg-gradient-to-br from-blue-900 to-blue-600 text-white py-20 px-4">
                <div className="max-w-6xl mx-auto text-center">
                    <h1 className="text-4xl md:text-5xl font-bold mb-6">
                        Actual Client Experiences
                    </h1>
                    <p className="text-xl md:text-2xl mb-8">
                        With Our Student Loan Management Services
                    </p>
                    <div className="bg-white/20 backdrop-blur-sm rounded-lg p-6 inline-block">
                        <h2 className="text-2xl md:text-3xl font-semibold mb-4">
                            What Our Clients Say About Our Student Loan Debt
                            Solutions
                        </h2>
                        <p className="mb-6 max-w-3xl mx-auto">
                            Hundreds of individuals have placed their trust in
                            our experienced team and benefited from the
                            life-changing power of student loan freedom.
                        </p>
                    </div>
                </div>
            </section>

            <div className="bg-gray-100 py-4 px-4 text-center text-sm text-gray-600">
                <p>
                    *Results of loan forgiveness may vary among borrowers. All
                    testimonials were voluntarily provided without any
                    compensation in exchange for the said statements.
                </p>
            </div>

            <section className="py-16 px-4 bg-gray-50">
                <div className="max-w-6xl mx-auto">
                    <h2 className="text-3xl font-bold text-center mb-12">
                        Client Success Stories
                    </h2>
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {successStories?.map((story, i) => (
                            <div
                                key={i}
                                className=" rounded-xl overflow-hidden shadow-lg"
                            >
                                {story.video !== "" ? (
                                    <video
                                        src={story.image}
                                        className="w-full h-64 object-cover"
                                    />
                                ) : (
                                    <img
                                        src={story.image}
                                        alt="Client testimonial"
                                        className="w-full h-64 object-cover"
                                    />
                                )}

                                <div className="bg-white p-6">
                                    <div className="flex text-yellow-300 mb-2">
                                        {[...Array(story.rating)].map((e) => (
                                            <FaStar key={e} />
                                        ))}
                                    </div>
                                    <h3 className="font-bold text-lg mb-2">
                                        {story.title}
                                    </h3>
                                    <p className="text-gray-600 mb-4">
                                        {story.description}
                                    </p>
                                    <p className="font-medium">
                                        - {story.name}
                                    </p>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            <section
                className="py-16 px-4 relative bg-center bg-no-repeat bg-cover"
                style={{
                    backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0,0.7)), url('https://media.istockphoto.com/id/1324259302/photo/background-of-two-unequal-parts-of-colored-paper-blue-and-red-devided-by-a-sloping-border.jpg?s=612x612&w=0&k=20&c=XodHiZ6x8qA7AiQM3_PIoTgTA_g9eVdk3Twwii08FcQ=')`,
                }}
            >
                <div className="max-w-6xl mx-auto">
                    <h2 className="text-3xl font-bold text-center mb-12">
                        What Our Clients Are Saying
                    </h2>
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {clientReviews?.map((review, i) => (
                            <div
                                key={i}
                                className=" relative bg-gray-50 p-8 rounded-sm shadow-md transition duration-300"
                            >
                                <div className="flex items-center mb-4">
                                    <img
                                        src={review.image}
                                        alt={review.name}
                                        className="w-16 h-16 rounded-full object-cover mr-4"
                                    />
                                    <div>
                                        <h3 className="font-bold">
                                            {review.name}
                                        </h3>
                                        <div className="flex text-yellow-300 mb-2">
                                            {[...Array(review.rating)].map(
                                                (e) => (
                                                    <FaStar key={e} />
                                                )
                                            )}
                                        </div>
                                    </div>
                                </div>
                                <h4 className="font-semibold text-lg mb-2">
                                    {review.title}
                                </h4>
                                <p className="text-gray-600 mb-4">
                                    {review.description}
                                </p>
                                {review.link !== "" && (
                                    <a
                                        href={review.link}
                                        className="text-indigo-600 font-medium hover:underline"
                                    >
                                        Read More
                                    </a>
                                )}
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            <section className="py-16 px-4 bg-gradient-to-br from-blue-900 to-blue-600 text-white">
                <div className="max-w-6xl mx-auto">
                    <h2 className="text-3xl font-bold text-center mb-12">
                        Real Financial Transformations
                    </h2>
                    <div className="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div className="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                            <div className="text-4xl font-bold mb-2">$500</div>
                            <p>Monthly savings for Ember V.</p>
                        </div>
                        <div className="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                            <div className="text-4xl font-bold mb-2">$40K</div>
                            <p>Saved by the Del Posca family</p>
                        </div>
                        <div className="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                            <div className="text-4xl font-bold mb-2">$71</div>
                            <p>Jim's new monthly payment</p>
                        </div>
                        <div className="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                            <div className="text-4xl font-bold mb-2">$113K</div>
                            <p>Saved by Monica</p>
                        </div>
                    </div>
                </div>
            </section>

            <section className="py-16 px-4 bg-white">
                <div className="max-w-4xl mx-auto text-center">
                    <h2 className="text-3xl font-bold mb-6">
                        Ready to Begin Your Path Toward a Better Financial
                        Future?
                    </h2>
                    <p className="text-xl mb-8">
                        Contact us today to see how we can help with your
                        student loans!
                    </p>
                    <div className="flex flex-wrap justify-center gap-4">
                        <Link
                            href={route("speak-to-an-adviser")}
                            className="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-sm font-medium text-lg transition shadow-lg"
                        >
                            Speak to an Specialist
                        </Link>
                    </div>
                </div>
            </section>
        </Guest>
    );
}

export default Reviews;
