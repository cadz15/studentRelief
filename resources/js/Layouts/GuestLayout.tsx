import Footer from "@/Components/Footer";
import Nav from "@/Components/Nav";
import { PropsWithChildren } from "react";

export default function Guest({ children }: PropsWithChildren) {
    return (
        <>
            <Nav />
            {children}
            <Footer />
        </>
    );
}
