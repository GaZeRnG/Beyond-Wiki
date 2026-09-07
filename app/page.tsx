"use client";

import { useEffect, useRef, useState } from 'react';
import { useInView } from '@app/hooks/inView';
import Image from 'next/image';
import Navbar from '@components/navbar';

function FadeSection({ children }: { children: React.ReactNode }) {
    const { ref, isInView } = useInView({ threshold: 0.15 });

    return (
        <main 
            ref={ref} 
            style={{ opacity: isInView ? 1 : 0, transform: isInView ? 'translateY(0)' : 'translateY(0)', transition: 'opacity 0.6s ease, transform 0.6s ease',}}
        >
            {children}
        </main>
    )
}

export default function Home() {
    return (
        <main className="hub-page">
            <Navbar page="hub" />

            <div className='h-20' />

            {/* Warning */}
            <section className="warning">
                <h2>This wiki is currently under development and will have LIMITED or NO INFO at all.</h2>
                <h3>The only feature that works is the links below and beyond depth.</h3>
            </section>

            {/* Logo */}
            <FadeSection>
                <section className="logo">
                    <Image src="/logo/Beyond_Wiki_logo_crop.png" alt="Beyond Wiki Logo" width={400} height={200} />
                </section>
            </FadeSection>

            {/* Main */}
            <section className="main">
                <FadeSection>
                    <section>Hero</section>
                </FadeSection>
                <FadeSection><section>Features</section></FadeSection>
                <FadeSection><section>About</section></FadeSection>
            </section>
        </main>
    );
}