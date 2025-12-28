import React, { useState } from "react";
import { useSelector } from "react-redux";
import { motion } from "framer-motion";
import ProjectCard from "./ProjectCard";

const projects = [
  {
    title: "Upcoming MERN Stack Project",
    subtitle: "Coming Soon",
    description:
      "I'm currently architecting a new, full-stack MERN application with a Next.js 16 frontend. This project will focus on scalable real-time features and advanced backend architecture. The initial code will be pushed to GitHub soon — stay tuned!",
    tags: ["Ongoing", "MERN Stack", "Next.js", "TypeScript"],
    image: "/comingSoon.webp",
    liveDemo: "#",
    githubRepo: "#",
    projectColor: "#9333ea",
  },
  {
    title: "Farsight System",
    subtitle: "Agency Website",
    description:
      "Software Agency who provides different solutions in the software industry. From AI-powered applications to custom web development, we help businesses transform their operations and achieve their digital goals with cutting-edge technology. ",
    tags: [
      "Next.js 16",
      "React 19",
      "Tailwind CSS 4",
      "Shadcn UI",
      "TypeScript",
      "Docker",
    ],
    image: "/farsight.png",
    liveDemo: "https://farsightsystem.com/",
    githubRepo: "https://github.com/mustafatawab/farsightsystems",
    projectColor: "#10b981",
  },
  {
    title: "Elygance Ecommerce Store",
    subtitle: "Ecommerce Store",
    description:
      "A luxury e-commerce platform for premium fragrances with elegant design and seamless shopping experience. It is production ready and deployed on Vercel and integrated CI/CD pipeline. Also integrated the social login and JWT authentication for the secure login and multi-tenent system",
    tags: [
      "Next.js",
      "Typescript",
      "Auth.js",
      "Bcrypt",
      "Zod",
      "ESLint",
      "Prettier",
    ],
    image: "/elygance.png",
    liveDemo: "https://elygance.vercel.app/",
    githubRepo:
      "https://github.com/mustafatawab/Nextjs_projects/tree/main/elygance",
    projectColor: "#dd1d4a",
  },
  {
    title: "Modern Portfolio",
    subtitle: "Mustafa - Full Stack Developer",
    description:
      "Designed and built a fully custom, animation-rich portfolio to leave a strong first impression with custom theme controls: light/dark toggle + custom color, so visitors can personalize their experience...!",
    tags: [
      "React",
      "Tailwind CSS",
      "Framer Motion",
      "Context API",
      "Email Js",
      "AI",
    ],
    image: "/modern-portfolio.png",
    liveDemo: "https://mustafatawab.vercel.app/",
    githubRepo:
      "https://github.com/mustafatawab/projects-work/tree/main/My-Portfolio-main",
    projectColor: "#EA580C",
  },
  {
    title: "Portofolio Website",
    subtitle: "Mustafa - Full Stack Developer",
    description:
      "A modern, high-performance portfolio website built with Next.js, TypeScript, and Tailwind CSS, featuring a sleek UI powered by Shadcn UI. Integrated with Contentful CMS for dynamic project management and seamless content updates.",
    tags: [
      "Next.js",
      "TypeScript",
      "Tailwind CSS",
      "Shadcn UI",
      "Contentful",
      "TanStack Query",
      "Axios",
      "React Router",
      "React Toastify",
      "React Slick",
    ],
    image: "/portfolio.png",
    liveDemo: "https://mustafatawabb.vercel.app/",
    githubRepo:
      "https://github.com/mustafatawab/projects-work/tree/main/My-Portfolio-main",
    projectColor: "#2563eb",
  },

  {
    title: "Myscribe",
    subtitle: "AI Application for Speach to Text - Nodesol Corp",
    description:
      "An AI-powered speech-to-text application where I engineered the entire frontend during my tenure at Nodesol Corp. Developed using Quasar.js, Vue.js, and Bootstrap, the project features robust API integrations and leverages OpenAI models for advanced AI functionality, fully containerized with Docker.",
    tags: ["Quasar.js", "Vue.js", "Bootstrap", "OpenAI", "Docker"],
    image: "/myscribe.png",
    liveDemo: "https://app.myscribe.us/",
    githubRepo: "#",
    projectColor: "#2563ea",
  },
  {
    title: "Portfolio Website",
    subtitle: "Uswah Saeed - Game Designer",
    description:
      "A modern, high-performance portfolio website built with HTML, CSS, Javscript and Tailwind CSS using CDN. Deployed to the vercel",
    tags: ["html", "css", "javscript", "tailwind css", "cdn", "vercel"],
    image: "/uswah-saeed-portfolio.png",
    liveDemo: "https://uswah-saeed.vercel.app/",
    githubRepo:
      "https://github.com/mustafatawab/projects-work/tree/main/uswasaeed-portfolio",
    projectColor: "#5D3FD3",
  },

  {
    title: "Gallery Website",
    subtitle: "Upload Pictures just like a gallery",
    description:
      "A modern, high-performance gallery website built with Next.js, TypeScript, and Tailwind CSS, featuring a sleek UI powered by Shadcn UI. Integrated with Contentful CMS for dynamic project management and seamless content updates.",
    tags: [
      "Next.js",
      "TypeScript",
      "Tailwind CSS",
      "Shadcn UI",
      "React Toastify",
    ],
    image: "/user-gallery.png",
    liveDemo: "https://user-gallery-website.vercel.app/",
    githubRepo: "https://github.com/mustafatawab/user-gallery-website",
    projectColor: "#2563ea",
  },
  {
    title: "Pharmacy Management System",
    subtitle: "Manage Pharmacy Stocks and Sales",
    description: 
      "A comprehensive Pharmacy Management System built with a Next.js and TypeScript frontend, complemented by a FastAPI backend. The application features a sleek UI using Shadcn UI and Tailwind CSS, with React Toastify for notifications. It utilizes Neon DB and PostgreSQL for robust data management, ensuring efficient handling of pharmacy stocks and sales.",
    tags: [
      "Next.js",
      "TypeScript",
      "Tailwind CSS",
      "Shadcn UI",
      "React Toastify",
      "react-icons",
      "fastapi",
      "neon db",
      "postgresql",
    ],
    image: "/pharmacy_management_system.png",
    liveDemo: "https://pharmacy-management-system-beta.vercel.app/login",
    githubRepo: "https://github.com/mustafatawab/pharmacy-management-system",
    projectColor: "#2b7fff",
  },
];

const ProjectTimeline = () => {
  const { themeColors } = useSelector((state) => state.themeReducer);

  const [hoveredProject, setHoveredProject] = useState(null);

  return (
    <section
      id="projects"
      className="relative py-20 overflow-hidden"
      style={{ backgroundColor: themeColors.bg }}
    >
      {/* Animated background elements */}
      <div className="absolute inset-0 overflow-hidden pointer-events-none">
        {projects.map((project, i) => (
          <motion.div
            key={i}
            className="absolute rounded-full opacity-10"
            style={{
              backgroundColor: project.projectColor,
              width: `${Math.random() * 300 + 100}px`,
              height: `${Math.random() * 300 + 100}px`,
              left: `${Math.random() * 100}%`,
              top: `${Math.random() * 100}%`,
              filter: "blur(60px)",
            }}
            animate={{
              x: [0, Math.random() * 100 - 50],
              y: [0, Math.random() * 100 - 50],
            }}
            transition={{
              duration: Math.random() * 30 + 20,
              repeat: Infinity,
              repeatType: "reverse",
              ease: "easeInOut",
            }}
          />
        ))}
      </div>

      <div className="max-w-screen-xl mx-auto px-4 relative z-10">
        {/* Section header */}
        <motion.div
          className="text-center mb-16"
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
          viewport={{ once: true, margin: "-50px" }}
        >
          <motion.h2
            className="text-4xl md:text-5xl font-bold inline-block px-6 py-2 relative z-10"
            style={{
              color: themeColors.primaryColor,
              backgroundColor: themeColors.bg,
            }}
            whileHover={{ scale: 1.02 }}
          >
            <span className="relative z-10">Latest Works</span>
            <motion.span
              className="absolute bottom-0 left-0 right-0 h-1 mx-auto"
              style={{ backgroundColor: themeColors.primaryColor }}
              initial={{ scaleX: 0 }}
              whileInView={{ scaleX: 1 }}
              transition={{ delay: 0.2, duration: 0.6 }}
            />
          </motion.h2>
        </motion.div>

        {/* Vertical timeline line */}
        <div
          className="w-0.5 hidden sm:block absolute top-0 bottom-0 left-1/2 -translate-x-1/2"
          style={{ backgroundColor: themeColors.primaryColor }}
        ></div>

        {/* Projects */}
        <div className="space-y-24 sm:space-y-32">
          {projects.map((project, index) => {
            const isHovered = hoveredProject === index;

            return (
              <ProjectCard
                key={index}
                project={project}
                index={index}
                isHovered={isHovered}
                setHoveredProject={setHoveredProject}
              />
            );
          })}
        </div>
      </div>

      {/*Note for Read... */}
      <motion.div
        className="max-w-2xl mx-auto mt-20 px-6 relative group"
        initial={{ opacity: 0, y: 20 }}
        whileInView={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.6, delay: 0.2 }}
        viewport={{ once: true, margin: "-50px" }}
      >
        <div
          className="absolute inset-0 rounded-xl pointer-events-none"
          style={{
            backgroundColor: themeColors.cardBg,
            border: `1px solid ${themeColors.borderLight}`,
            boxShadow: `0 4px 20px ${themeColors.shadow}`,
            opacity: 0.7,
          }}
        />

        <div className="relative z-10 p-6 md:p-8">
          <div className="flex items-start gap-4">
            {/* <div
              className="flex-shrink-0 mt-1 w-3 h-3 rounded-full"
              style={{ backgroundColor: themeColors.accentGold }}
            /> */}

            <div>
              <motion.p
                className="text-lg md:text-xl leading-relaxed"
                style={{ color: themeColors.text }}
                whileHover={{
                  x: 4,
                  transition: { duration: 0.3 },
                }}
              >
                <span
                  className="font-bold"
                  style={{ color: themeColors.primaryColor }}
                >
                  Project Selection:{" "}
                </span>
                During my learning journey, I built several practice projects
                including{" "}
                <span
                  className="font-medium"
                  style={{ color: themeColors.accentBlue }}
                >
                  calculator
                </span>
                ,{" "}
                <span
                  className="font-medium"
                  style={{ color: themeColors.accentBlue }}
                >
                  watches
                </span>
                ,{" "}
                <span
                  className="font-medium"
                  style={{ color: themeColors.accentBlue }}
                >
                  website clones
                </span>
                , and{" "}
                <span
                  className="font-medium"
                  style={{ color: themeColors.accentBlue }}
                >
                  many more
                </span>{" "}
                to sharpen my skills. The projects shown above represent my{" "}
                <span
                  className="font-semibold"
                  style={{ color: themeColors.accentGreen }}
                >
                  best work
                </span>{" "}
                — fully designed and developed from scratch, showcasing complete{" "}
                <span
                  className="font-semibold"
                  style={{ color: themeColors.accentGold }}
                >
                  UI/UX ownership
                </span>{" "}
                and{" "}
                <span
                  className="font-semibold"
                  style={{ color: themeColors.accentGold }}
                >
                  project building logic
                </span>
                .
              </motion.p>

              <motion.div
                className="mt-6 pt-4 flex flex-wrap items-center justify-between gap-4 border-t"
                style={{ borderColor: themeColors.borderLight }}
                initial={{ opacity: 0 }}
                whileInView={{ opacity: 1 }}
                transition={{ delay: 0.4 }}
              >
                <div className="flex items-center gap-2">
                  <div
                    className="w-2 h-2 rounded-full animate-pulse"
                    style={{ backgroundColor: themeColors.accentRed }}
                  />
                  <span
                    className="text-xs uppercase tracking-wider"
                    style={{ color: themeColors.summeryText }}
                  >
                    Currently Mastering
                  </span>
                </div>

                <div
                  className="px-3 py-1 rounded-full text-xs font-medium"
                  style={{
                    backgroundColor: themeColors.cardSecondary,
                    color: themeColors.secondary,
                    border: `1px solid ${themeColors.border}`,
                  }}
                >
                  Agentic AI
                </div>
              </motion.div>
            </div>
          </div>
        </div>
      </motion.div>
    </section>
  );
};

export default ProjectTimeline;
