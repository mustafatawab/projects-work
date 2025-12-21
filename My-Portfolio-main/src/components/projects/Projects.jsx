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
    title: "ShopEase",
    subtitle: "E-Commerce Site - Frontend",
    description:
      "Built a blazing-fast eCommerce site from scratch—streamlined product discovery and checkout for a seamless user journey. Achieved 90+ Lighthouse scores with sub-second load times.",
    tags: [
      "React",
      "JavaScript",
      "Redux Toolkit",
      "Tailwind CSS",
      "Material UI",
      "TanStack Query",
      "Axios",
      "React Router",
      "React Toastify",
      "React Slick",
    ],
    image: "/ecommerce.webp",
    liveDemo: "https://shopease-ecomm.netlify.app",
    githubRepo: "https://github.com/SachinPro007/ShopEase_E-Commerce",
    projectColor: "#d51243",
  },
  {
    title: "ClickTask",
    subtitle: "Employee Task Management",
    description:
      "Built a responsive task management app with role-based dashboards, real-time updates, and smart alerts—all running without a backend. Designed for a smooth UX with dark mode, toast notifications, and polished UI transitions.",
    tags: [
      "React",
      "JavaScript",
      "Tailwind CSS",
      "Context APi",
      "React Toastify",
    ],
    image: "/ems.webp",
    liveDemo: "https://click-task.netlify.app",
    githubRepo: "https://github.com/SachinPro007/ClickTask",
    projectColor: "#2563eb",
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
                  Next.js
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
