import "./bootstrap";
import LocomotiveScroll from "locomotive-scroll";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const scroll = new LocomotiveScroll({
    el: document.querySelector("[data-scroll-container]"),
    smooth: true,
});

gsap.from("h1", { opacity: 0, duration: 1, y: -50 });
gsap.from("h2", {
    opacity: 0,
    duration: 1,
    y: 50,
    scrollTrigger: {
        trigger: "h2",
        start: "top 80%",
    },
});
