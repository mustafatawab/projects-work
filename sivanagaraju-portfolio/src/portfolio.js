/* Change this file to get your personal Porfolio */

// Website related settings
const settings = {
  isSplash: true, // Change this to false if you don't want Splash screen.
};

//Home Page
const greeting = {
  title: "Sivanagaraju Kodali",
  logo_name: "Sivanagaraju Kodali",
  nickname: null,
  subTitle:
    "An aspiring developer who loves to take on new projects that challenges his analytical and technological capacities.",
  resumeLink:
    "https://drive.google.com/file/d/1EX5H6PglU5_ICnXLDQdsmUkdzZoixmPr/view",
  portfolio_repository: "",
};

const socialMediaLinks = [
  {
    name: "Github",
    link: "",
    fontAwesomeIcon: "fa-github", // Reference https://fontawesome.com/icons/github?style=brands
    backgroundColor: "#181717", // Reference https://simpleicons.org/?q=github
  },
  {
    name: "LinkedIn",
    link: "https://www.linkedin.com/in/sivanagaraju-kodali-52b121214/",
    fontAwesomeIcon: "fa-linkedin-in", // Reference https://fontawesome.com/icons/linkedin-in?style=brands
    backgroundColor: "#0077B5", // Reference https://simpleicons.org/?q=linkedin
  },
];

const skills = {
  data: [
    {
      title: "Full Stack Development",
      fileName: "FullStackImg",
      skills: [
        "⚡ Building resposive website using NextJs and React",
        "⚡ Implementing secure access to database",
        "⚡ Creating application backend in .Net Core",
        "⚡ Implementing dynamic script execution defined by user",
      ],
      softwareSkills: [
        {
          skillName: "ReactJS",
          fontAwesomeClassname: "simple-icons:react",
          style: {
            color: "#61DAFB",
          },
        },
        {
          skillName: "NextJs",
          fontAwesomeClassname: "akar-icons:nextjs-fill",
          style: {
            color: "#626262",
          },
        },
        {
          skillName: ".Net Core",
          fontAwesomeClassname: "mdi:dot-net",
          style: {
            color: "#5C2D91",
          },
        },
        {
          skillName: "NodeJS",
          fontAwesomeClassname: "simple-icons:node-dot-js",
          style: {
            color: "#339933",
          },
        },
        {
          skillName: "Redux",
          fontAwesomeClassname: "tabler:brand-redux",
          style: {
            color: "#7749bd",
          },
        },
        {
          skillName: "JavaScript",
          fontAwesomeClassname: "simple-icons:javascript",
          style: {
            color: "#F7DF1E",
          },
        },
        {
          skillName: "TypeScript",
          fontAwesomeClassname: "devicon:typescript",
          style: {
            color: "#3178c6",
          },
        },
        {
          skillName: "C#",
          fontAwesomeClassname: "teenyicons:c-sharp-solid",
          style: {
            color: "#953dac",
          },
        },
        {
          skillName: "MS SQL Server",
          fontAwesomeClassname: "tabler:sql",
          style: {
            color: "#c42626",
          },
        },
        {
          skillName: "MongoDB",
          fontAwesomeClassname: "vscode-icons:file-type-mongo",
          style: {
            color: "#c42626",
          },
        },
        {
          skillName: "Firebase",
          fontAwesomeClassname: "logos:firebase",
          style: {
            color: "#c42626",
          },
        },
        {
          skillName: "Docker",
          fontAwesomeClassname: "skill-icons:docker",
          style: {
            color: "#c42626",
          },
        },
        {
          skillName: "HTML5",
          fontAwesomeClassname: "simple-icons:html5",
          style: {
            color: "#E34F26",
          },
        },
        {
          skillName: "CSS3",
          fontAwesomeClassname: "fa-css3",
          style: {
            color: "#1572B6",
          },
        },
        {
          skillName: "Sass",
          fontAwesomeClassname: "simple-icons:sass",
          style: {
            color: "#CC6699",
          },
        },
        {
          skillName: "Tailwind CSS",
          fontAwesomeClassname: "file-icons:tailwind",
          style: {
            color: "#38bdf8",
          },
        },
      ],
    },
  ],
};

const techStack = {
  viewSkillBars: true, //Set it to true to show Proficiency Section
  experience: [
    {
      Stack: "DevOps", //Insert stack or technology you have experience in
      progressPercentage: "90%", //Insert relative proficiency in percentage
    },
    {
      Stack: "Backend",
      progressPercentage: "70%",
    },
    {
      Stack: "Programming",
      progressPercentage: "80%",
    },
  ],
};

//Language Skill
const sLanguage = {
  viewSkillBars: true, //Set it to true to show Proficiency Section
  experience: [
    {
      Stack: "Java",
      progressPercentage: "90%",
    },
    {
      Stack: "Golang",
      progressPercentage: "70%",
    },
    {
      Stack: "Python",
      progressPercentage: "80%",
    },
    {
      Stack: "Sprint Boot",
      progressPercentage: "70%",
    },
  ],
};

//Tools Skill
const tools = {
  viewSkillBars: true, //Set it to true to show Proficiency Section
  experience: [
    {
      Stack: "Git",
      progressPercentage: "80%",
    },
    {
      Stack: "Azure", //Insert stack or technology you have experience in
      progressPercentage: "70%", //Insert relative proficiency in percentage
    },
    {
      Stack: "AWS", //Insert stack or technology you have experience in
      progressPercentage: "70%", //Insert relative proficiency in percentage
    },
    {
      Stack: "Docker", //Insert stack or technology you have experience in
      progressPercentage: "66%", //Insert relative proficiency in percentage
    },
    {
      Stack: "Kubernetes", //Insert stack or technology you have experience in
      progressPercentage: "95%", //Insert relative proficiency in percentage
    },
    {
      Stack: "Terraform ", //Insert stack or technology you have experience in
      progressPercentage: "70%", //Insert relative proficiency in percentage
    },
    {
      Stack: "Jenkins", //Insert stack or technology you have experience in
      progressPercentage: "90%", //Insert relative proficiency in percentage
    },
    {
      Stack: "MySQL", //Insert stack or technology you have experience in
      progressPercentage: "70%", //Insert relative proficiency in percentage
    },
    {
      Stack: "Redis", //Insert stack or technology you have experience in
      progressPercentage: "60%", //Insert relative proficiency in percentage
    },
    {
      Stack: "Apache", //Insert stack or technology you have experience in
      progressPercentage: "60%", //Insert relative proficiency in percentage
    },
    {
      Stack: "RESTful APIs", //Insert stack or technology you have experience in
      progressPercentage: "80%", //Insert relative proficiency in percentage
    },

    {
      Stack: "CI/CID Pipelines", //Insert stack or technology you have experience in
      progressPercentage: "75%", //Insert relative proficiency in percentage
    },
  ],
};

// Education Page
const competitiveSites = {
  competitiveSites: [
    {
      siteName: "Codechef",
      iconifyClassname: "simple-icons:codechef",
      style: {
        color: "#5B4638",
      },
      profileLink: "https://www.codechef.com/users/tasin95",
    },
  ],
};

const degrees = {
  degrees: [
    {
      title: "Cleveland State University",
      subtitle: "Master in Management Information Systems",
      logo_path: "cleveland_state_university_logo.jpeg",
      alt_name: "Cleveland State University",
      duration: "Aug 2023 - May 2025",
      cgpa: "3.85 / 4.00",
      descriptions: [
        "⚡ I have studied management information systems subjects like database management, business intelligence, project management, and information security etc.",
        "⚡ Placed 2nd in my class.",
        "⚡ Elected as the team leader in all the group projects.",
      ],
      website_link: "https://www.csuohio.edu/",
    },

    {
      title: "Sir C.R. Reddy College",
      subtitle: "Bachelors in Electronics & Communications Engineering",
      logo_path: "Sir_cr_Reddy_College.jpeg",
      alt_name: "Sir C.R. Reddy College",
      duration: "Aug 2016 - May 2020",
      cgpa: "3.73 / 4.00",
      descriptions: [
        "⚡ I have studied management information systems subjects like database management, business intelligence, project management, and information security etc.",
        "⚡ Placed 4th in my class.",
        "⚡ Dean's List.",
        "⚡ I was selected for ITEE Training Program which comprised of 20 students in the  department.",
        "⚡ Elected as the team leader in all the group projects.",
      ],
      website_link: "https://www.sircrreddycollege.ac.in/",
    },
  ],
};

const certifications = {
  certifications: [
    {
      title: "AWS Certified Solutions Architect - Associate",
      subtitle: "AWS",
      logo_path: "aws.png",
      certificate_link: "#",
      alt_name: "aws",
      color_code: "white",
    },

    {
      title: "The complete javascript course",
      subtitle: "Udemy",
      logo_path: "udemy.png",
      certificate_link: "#",
      alt_name: "udemy",
      color_code: "#f2f3f5",
    },

    {
      title: "Introduction to Programming Using Python",
      subtitle: "Hacker Rank",
      logo_path: "hackerrank_logo.png",
      certificate_link: "#",
      alt_name: "Hacker Rank",
      color_code: "#fff",
    },

    {
      title: "Basic Problem Solving",
      subtitle: "Hacker Rank",
      logo_path: "hackerrank_logo.png",
      certificate_link: "#",
      alt_name: "Hacker Rank",
      color_code: "white",
    },
    {
      title: "Introduction to Cyber Security",
      subtitle: "Simplilearn",
      logo_path: "simplilearn.jpg",
      certificate_link: "#",
      alt_name: "simplilearn.",
      color_code: "#083e58",
    },
  ],
};

// Experience Page
const experience = {
  title: "Experience",
  subtitle: "Work and Volunteership",
  description:
    "Fullstack Developer with 3 years of experience working with Java, Spring Boot, Docker, Kubernetes, AWS, and GraphQL—supported by strong experience in automating deployments and optimizing cloud services.I led full-cycle development at CVK Technologies, where I designed microservices, built real-time data processing pipelines, and mentored junior developers.",
  header_image_path: "experience.svg",
  sections: [
    {
      title: "Work",
      experiences: [
        {
          title: "Java Developer Intern",
          company: "Kaiser Permanente",
          company_url: "https://www.kaiserpermanente.org/",
          logo_path: "kaiser-permanente.png",
          duration: "Dec 2024 - Present",
          location: "Remote",
          description:
            "Collaborated with cross-functional teams to enhance core backend modules using Java and Spring Boot, improving system reliability across healthcare platforms. Spearheaded the development of scalable RESTful APIs for smooth data exchange. Played a key role in migrating legacy apps to AWS, reducing deployment time by 30%. Integrated Docker containers and used Kubernetes to boost scalability and fault tolerance.",
          features: [
            "- Enhanced backend modules with Java and Spring Boot for improved system reliability.",
            "- Developed scalable REST APIs, enabling seamless integration between internal and third-party systems.",
            "- Migrated legacy applications to AWS, reducing deployment time by 30%.",
            "- Integrated Docker into CI/CD pipeline and orchestrated using Kubernetes for better scalability and resilience.",
          ],
          color: "#0879bf",
        },
        {
          title: "Full Stack Java Developer",
          company: "CVK Technologies",
          company_url: "https://www.cvktech.com/",
          logo_path: "CVK.jpg",
          duration: "Jan 2020 - Jul 2023",
          location: "Hyderabad, India",
          description:
            "Led full-cycle development of enterprise-grade applications using Java and Golang. Architected and deployed a microservices framework with Docker and Kubernetes. Built a high-throughput real-time data pipeline using Apache Kafka and Redis, cutting latency by 25%.",
          features: [
            "- Led full-cycle development of enterprise apps using Java and Golang.",
            "- Built microservices architecture using Docker & Kubernetes, enabling dynamic scaling.",
            "- Developed real-time data pipelines with Kafka and Redis, reducing latency by 25%.",
            "- Contributed to cloud-first digital transformation efforts across multiple departments.",
          ],
          color: "#0a66c2",
        },
      ],
    },
  ],
};

const research = {
  title: "On Going Research",
  subtitle: "",
  description: "On going researches",
  header_image_path: "experience.svg",
  sections: [
    {
      title: "Research",
      experiences: [
        {
          title:
            "Design and Implementation of a Scalable Microservices-Based Order Processing System with Event-Driven Architecture in AWS",
          description:
            "This paper presents the design, development, and deployment of a cloud-native order processing system using a microservices architecture. The system is implemented in Java with Spring Boot and utilizes Apache Kafka for asynchronous communication between services. Docker and Kubernetes are used for containerization and orchestration, while AWS services such as RDS, S3, and EC2 handle data storage and compute operations. The system simulates real-world e-commerce scenarios including order placement, inventory check, payment processing, and notification delivery. Testing includes unit tests, integration tests, and performance benchmarking under load conditions. The project demonstrates industry-relevant backend skills like REST API design, fault tolerance, CI/CD automation, and scalable service deployment.",

          technology: [
            "-Language & Frameworks: Java, Spring Boot, Spring Cloud",
            "-Architecture: Microservices, Event-driven (using Apache Kafka)",
            "-Cloud Platform: AWS (EC2, RDS, S3, CloudWatch)",
            "-DevOps: Docker, Kubernetes, Jenkins, GitHub Actions",
            "-Databases: MySQL or PostgreSQL on Amazon RDS",
            "-Monitoring: Prometheus + Grafana or AWS CloudWatch",
          ],
          highlights: [
            "-REST APIs for order creation, inventory management, and user service",
            "-Kafka topics to handle communication between loosely coupled services",
            "-Dockerized services deployed using Kubernetes on AWS EKS",
            "-Real-time logging, monitoring, and health checks",
            "-Testing: JUnit for unit tests, Postman for API testing, JMeter for load testing",
          ],

          outcomes: [
            "-Demonstrate proficiency in backend service design and deployment",
          ],
          color: "#0879bf",
        },
        {
          title:
            "Real-Time Predictive Maintenance Using Machine Learning and Event Streaming in AWS: A Cloud-Native Implementation",
          description:
            "This research presents the development and evaluation of a real-time predictive maintenance system designed for industrial equipment monitoring. The system leverages machine learning algorithms to predict potential equipment failures based on time-series sensor data. Kafka is used for ingesting and streaming data to a real-time analytics engine built with AWS Lambda and Amazon SageMaker. The backend infrastructure is implemented in Java using Spring Boot for API integration, while the ML model is developed using Python (or Java with DL4J if preferred). The system is containerized with Docker and deployed on AWS. The paper includes detailed testing of the model’s accuracy, system latency, and the impact on operational efficiency.",

          technology: [
            "-Programming Languages: Java (for backend), Python (for ML)",
            "-Frameworks: Spring Boot, Scikit-learn or XGBoost",
            "-Cloud Tools: AWS Lambda, Amazon SageMaker, S3, EC2",
            "-Event Streaming: Apache Kafka",
            "-Deployment: Docker, AWS ECS or EKS",
            "-Databases: Amazon RDS or DynamoDB",
            "-Monitoring: CloudWatch, Prometheus",
          ],

          highlights: [
            "-Build a pipeline that streams live sensor data via Kafka",
            "-Train and deploy a predictive model (e.g., Random Forest or XGBoost) to forecast equipment failures",
            "-Integrate predictions into a REST API backend using Spring Boot",
            "-Real-time alerts and analytics dashboard for decision support",
            "-Load testing, latency benchmarking, and model accuracy validation (e.g., precision, recall, F1-score)",
          ],

          outcomes: [
            "-Showcase full-stack AI integration with cloud-native infrastructure",
            "-Solve a real-world use case valued across industries (manufacturing, healthcare, logistics)",
            "-Deliver a deployable, job-ready system combining Java, ML, and cloud skills",
          ],

          color: "#0879bf",
        },
      ],
    },
  ],
};

// Projects Page
const projectsHeader = {
  title: "Projects",
  description:
    "My projects makes use of vast variety of latest technology tools. My best experience is to create Full Stack projects and deploy them to web applications using cloud infrastructure. Stil trying to gain experience by trying my hands on different projects.",
  avatar_image_path: "projects_image.svg",
};

// Contact Page
const contactPageData = {
  contactSection: {
    title: "Contact Me",
    profile_image_path: "user-rounded.png",
    description:
      "I am available on almost every social media. You can message me, I will reply within 24 hours. I can help you with Basic Programming, ML, AI, Android, Cloud and Opensource Development.",
  },
  blogSection: {
    title: "Blogs",
    subtitle:
      "I like to write about the projects I've worked on, my current work and discuss my latest foundings. You are most welcome to input your thoughts on my projects.",
    link: "https://miftaulmannan.wordpress.com/projects/",
    avatar_image_path: "blogs_image.svg",
  },
  addressSection: {
    title: "Email",
    subtitle: "kodalisiva695@gmail.com",
    avatar_image_path: "address_image.svg",
    location_map_link: "#",
  },
  phoneSection: {
    title: "Phone Number",
    subtitle: "+1-216-808-1976",
  },
};

export {
  settings,
  greeting,
  socialMediaLinks,
  skills,
  techStack,
  sLanguage,
  tools,
  competitiveSites,
  degrees,
  certifications,
  experience,
  projectsHeader,
  contactPageData,
  research,
};
