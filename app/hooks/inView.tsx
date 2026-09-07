import { useEffect, useRef, useState } from "react";

export function useInView(options?: IntersectionObserverInit) {
    const ref = useRef<HTMLElement>(null);
    const [isInView, setIsInView] = useState(false);

    useEffect(() => {
        const el = ref.current;
        if (!el) return;

        const observer = new IntersectionObserver(([entry]) => {
            setIsInView(entry.isIntersecting);
        }, { threshold: 0.2, ...options });

        observer.observe(el);
        return () => { observer.disconnect(); };
    }, [options]);

    return { ref, isInView };
}