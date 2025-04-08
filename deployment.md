# Deployment Documentation

This document outlines the development and deployment workflow for the Baizonn Learning Center website, including setup details, version control practices, and the tools used to manage collaboration and progress.

---

## Local Development Environments

Each team member set up their own local environment to begin WordPress theme development.

### Johns - XAMPP
- Used **XAMPP** to run a local server with Apache and MySQL
- Installed WordPress in the `htdocs` folder
- Began development using the Underscores starter theme

### Aubiene - Docker
- Used a **Docker-based** local environment for containerized WordPress setup
- Created Docker containers for WordPress, MySQL, and phpMyAdmin
- Synced local files to a shared development folder for editing and testing
- Installed and activated the custom Underscores-based theme

---

##  Theme Development


We are building a custom theme using [_s (Underscores)](https://underscores.me) as the base.

### Theme Name:
`baizonn-theme`

### Theme Modifications:
- Customized:
  - `style.css` – Theme header + styling
  - `header.php` – Site title, logo, and dynamic navigation
  - `footer.php` – Compliant with WordPress standards
  - `functions.php` – Registered `main-menu`, `footer-menu`, logo, and theme supports


---

## GitHub & Version Control

We are using GitHub Classroom for version control.

### 📍 Repo:
[https://github.com/cp3402-students/project-2025-tr1-jcua-team7](https://github.com/cp3402-students/project-2025-tr1-jcua-team7)


##  Project Management & Communication

### Trello
We use Trello to track all tasks across the development process:
- Columns: Backlog, Actions, In Progress, Ready for Review, Completed
- Cards are assigned to members and updated daily
- Labels are used for task type (e.g., Dev, Content, Docs, Deploy)

### Discord
Our Discord server is used for daily communication:
- Channels include: `#general`, `#project-links`, `#content`, and `#team-availability`
- We hold quick check-ins and post links, issues, and GitHub updates
- Used to coordinate meetings and record decisions made

---

##  Testing (Coming Soon)



---

##  Deployment (Coming Soon)


---

##  Summary

We are maintaining consistent development standards using GitHub, Trello, and Discord while building our theme locally in parallel environments (XAMPP and Docker). Updates to this document will continue as we progress to staging, testing, and final deployment.

