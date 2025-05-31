// Configurações do Site - Fábio Schunig
// Edite este arquivo para personalizar as informações do site

const siteConfig = {
    // Informações Pessoais
    personal: {
        name: "Fábio Schunig",
        title: "Desenvolvedor & Designer",
        subtitle: "Desenvolvedor Full Stack & Designer apaixonado por criar experiências digitais incríveis",
        description: "Sou um desenvolvedor apaixonado por tecnologia com mais de X anos de experiência criando soluções digitais inovadoras. Especializado em desenvolvimento full stack, combino habilidades técnicas sólidas com um olhar criativo para design.",
        location: "São Paulo, Brasil",
        email: "contato@fabioschunig.com",
        phone: "+55 (11) 99999-9999"
    },

    // Redes Sociais
    social: {
        linkedin: "https://linkedin.com/in/seu-perfil",
        github: "https://github.com/seu-usuario",
        twitter: "https://twitter.com/seu-usuario",
        instagram: "https://instagram.com/seu-usuario",
        behance: "https://behance.net/seu-perfil"
    },

    // Habilidades por Categoria
    skills: {
        frontend: ["JavaScript", "TypeScript", "React", "Vue.js", "Next.js", "CSS3", "SASS", "Tailwind CSS", "HTML5"],
        backend: ["PHP", "Laravel", "Symfony", "Node.js", "Python", "Django", "MySQL", "PostgreSQL", "MongoDB", "Redis"],
        tools: ["Git", "Docker", "AWS", "Linux", "Nginx", "Apache", "Composer", "npm", "Webpack", "Vite"],
        design: ["Figma", "Adobe XD", "Photoshop", "Illustrator", "Sketch"]
    },

    // Projetos do Portfólio
    projects: [
        {
            id: 1,
            title: "E-commerce Laravel",
            description: "Plataforma completa de vendas online com Laravel",
            category: "web",
            image: "assets/images/project1.jpg",
            demoUrl: "https://demo-link.com",
            githubUrl: "https://github.com/seu-usuario/projeto1",
            technologies: ["Laravel", "PHP", "MySQL", "Vue.js", "Tailwind CSS"]
        },
        {
            id: 2,
            title: "Sistema de Gestão",
            description: "ERP completo para pequenas empresas",
            category: "web",
            image: "assets/images/project2.jpg",
            demoUrl: "https://demo-link.com",
            githubUrl: "https://github.com/seu-usuario/projeto2",
            technologies: ["PHP", "Symfony", "PostgreSQL", "Docker"]
        },
        {
            id: 3,
            title: "API RESTful",
            description: "API robusta para aplicações mobile",
            category: "web",
            image: "assets/images/project3.jpg",
            demoUrl: "https://demo-link.com",
            githubUrl: "https://github.com/seu-usuario/projeto3",
            technologies: ["PHP", "Laravel", "JWT", "Redis", "MySQL"]
        },
        {
            id: 4,
            title: "Dashboard Analytics",
            description: "Painel de controle com visualização de dados",
            category: "web",
            image: "assets/images/project4.jpg",
            demoUrl: "https://demo-link.com",
            githubUrl: "https://github.com/seu-usuario/projeto4",
            technologies: ["React", "PHP", "Chart.js", "MySQL"]
        }
    ],

    // Experiência Profissional
    experience: [
        {
            id: 1,
            title: "Desenvolvedor Full Stack Senior",
            company: "Tech Company Inc.",
            period: "2022 - Presente",
            description: "Liderança técnica em projetos de grande escala, desenvolvimento de arquiteturas escaláveis com PHP/Laravel e React. Mentoria de desenvolvedores júnior e implementação de melhores práticas.",
            skills: ["Laravel", "PHP", "React", "AWS", "Docker", "MySQL"]
        },
        {
            id: 2,
            title: "Desenvolvedor PHP Pleno",
            company: "Digital Solutions",
            period: "2020 - 2022",
            description: "Desenvolvimento de sistemas web robustos com Laravel e Symfony. Criação de APIs RESTful, integração com serviços externos e otimização de performance de banco de dados.",
            skills: ["PHP", "Laravel", "Symfony", "MySQL", "Redis", "Vue.js"]
        },
        {
            id: 3,
            title: "Desenvolvedor Web Júnior",
            company: "Web Agency",
            period: "2018 - 2020",
            description: "Desenvolvimento de sites e sistemas web com PHP vanilla e frameworks. Criação de interfaces responsivas e integração com CMSs como WordPress.",
            skills: ["PHP", "MySQL", "JavaScript", "WordPress", "Bootstrap"]
        }
    ],

    // Configurações de Tema Dark
    theme: {
        primaryColor: "#818cf8",
        secondaryColor: "#fbbf24",
        accentColor: "#34d399",
        isDark: true
    },

    // Configurações de Analytics (opcional)
    analytics: {
        googleAnalyticsId: "", // Seu GA4 ID
        facebookPixelId: "",   // Seu Facebook Pixel ID
        hotjarId: ""          // Seu Hotjar ID
    },

    // Configurações de SEO
    seo: {
        siteName: "Fábio Schunig - Desenvolvedor & Designer",
        siteDescription: "Site pessoal de Fábio Schunig - Desenvolvedor Full Stack e Designer com experiência em projetos inovadores",
        keywords: "desenvolvedor, designer, full stack, portfolio, Fábio Schunig",
        author: "Fábio Schunig",
        siteUrl: "https://fabioschunig.com" // Seu domínio
    }
};

// Função para aplicar configurações dinamicamente
function applySiteConfig() {
    // Aplicar informações pessoais
    const heroTitle = document.querySelector('.hero-title');
    if (heroTitle) {
        heroTitle.innerHTML = `Olá, eu sou <span class="gradient-text">${siteConfig.personal.name}</span>`;
    }

    const heroSubtitle = document.querySelector('.hero-subtitle');
    if (heroSubtitle) {
        heroSubtitle.textContent = siteConfig.personal.subtitle;
    }

    // Aplicar links sociais
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach((link, index) => {
        const socialNetworks = Object.values(siteConfig.social);
        if (socialNetworks[index]) {
            link.href = socialNetworks[index];
        }
    });

    // Aplicar informações de contato
    const contactDetails = document.querySelectorAll('.contact-details p');
    if (contactDetails.length >= 3) {
        contactDetails[0].textContent = siteConfig.personal.email;
        contactDetails[1].textContent = siteConfig.personal.phone;
        contactDetails[2].textContent = siteConfig.personal.location;
    }

    // Aplicar meta tags SEO
    document.title = siteConfig.seo.siteName;
    
    const metaDescription = document.querySelector('meta[name="description"]');
    if (metaDescription) {
        metaDescription.content = siteConfig.seo.siteDescription;
    }

    const metaKeywords = document.querySelector('meta[name="keywords"]');
    if (metaKeywords) {
        metaKeywords.content = siteConfig.seo.keywords;
    }
}

// Aplicar configurações quando o DOM estiver carregado
document.addEventListener('DOMContentLoaded', applySiteConfig);

// Exportar configurações (se usando módulos)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = siteConfig;
}
