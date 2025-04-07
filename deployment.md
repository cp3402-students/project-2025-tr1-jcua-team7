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

We selected the **Underscores (_s)** starter theme to create a fully custom WordPress theme called `baizonn-theme`.

### Steps:
- Downloaded Underscores from [https://underscores.me](https://underscores.me)
- Customized `style.css`, `header.php`, `footer.php`, and added `index.php`

---

##  Version Control with GitHub

We are using **GitHub** for version control and collaboration.

### Repository:
- Created via GitHub Classroom 
- Only the `baizonn-theme` folder is under version control

### Workflow:
- Abuince initialized the repo and pushed the first theme structure
- Other team members clone the repo and push updates to the theme

---

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

