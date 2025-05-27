# CP3402-U3A-Project

# U3A Townsville WordPress Child Theme Deployment

Welcome to the U3A Townsville WordPress child theme project. This project was created as part of the CP3402 Content Management Systems subject at James Cook University. It demonstrates full theme customization, content design, version control using GitHub, and automated deployment to a live server hosted on AWS Lightsail using GitHub Actions.

---

## Project Overview

The purpose of this website is to provide a rich, informative, and visually modern online presence for U3A Townsville, an organization dedicated to lifelong learning and community engagement for seniors.

This project involved:

- Designing and building a custom child theme (`u3a_child`) based on the `twentytwentyfive` WordPress parent theme
- Creating numerous static and dynamic content templates (e.g., About, Membership, Events, News, Contact)
- Managing development and deployment through GitHub, with full automation via GitHub Actions
- Hosting the site publicly on an AWS Lightsail WordPress instance

---

## Technologies Used

| Tool                | Purpose                            |
|---------------------|-------------------------------------|
| WordPress           | CMS and theme engine               |
| AWS Lightsail       | Production hosting server          |
| Git & GitHub        | Version control                    |
| GitHub Actions      | Continuous Deployment workflow     |
| SSH/SCP             | Secure remote access & deployments |
| VS Code             | Development editor                 |

---

## Folder Structure

```
wp-content/
├── themes/
│   └── u3a_child/
│       ├── style.css
│       ├── functions.php
│       ├── front-page.php
│       ├── about-u3a.php
│       ├── events.php
│       ├── membership.php
│       ├── news-resources.php
│       ├── support.php
│       ├── contact.php
│       ├── custom.css
│       ├── header.php
│       ├── footer.php
│       └── assets/, images/, etc.
```

---

## Theme Features

- Fully responsive layout using modern CSS
- Custom header, footer, and navigation menu
- Dropdown menu with multi-level items
- Sectioned homepage with call-to-action buttons
- Pre-built templates for:
  - Home page
  - About U3A
  - Membership (Benefits, FAQs)
  - Course & Activities (Academic, Special Interests, Health & Wellbeing, program Overview)
  - Events (Talks, Special Events, Outings)
  - News (Updates, Newsletters)
  - Support (Donate, Volunteer, Sponsor)
  - Contact Page with form section
- Hero image sections with overlay text

---

## Deployment Workflow (GitHub Actions + AWS)

The live production server is hosted on AWS Lightsail. Deployment is triggered automatically when changes are pushed to the `main` branch of the GitHub repo.

### GitHub Secrets Used:

| Secret Name   | Value (example)                                             |
|---------------|-------------------------------------------------------------|
| `DEPLOY_KEY`  | Private SSH key (for GitHub Actions access)                |
| `REMOTE_USER` | `bitnami`                                                   |
| `REMOTE_HOST` | Your Lightsail instance IP                                  |
| `REMOTE_PATH` | `/opt/bitnami/wordpress/wp-content/themes/u3a_child`        |

### Sample `.github/workflows/deploy.yml`

```yaml
name: Deploy U3A Theme to Lightsail

on:
  push:
    branches:
      - main

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout Code
        uses: actions/checkout@v3

      - name: Deploy to AWS
        uses: appleboy/scp-action@v0.1.4
        with:
          host: ${{ secrets.REMOTE_HOST }}
          username: ${{ secrets.REMOTE_USER }}
          key: ${{ secrets.DEPLOY_KEY }}
          source: "wp-content/themes/u3a_child"
          target: "/opt/bitnami/wordpress/wp-content/themes"
```

---

## Development Summary and Reflection

This project taught me to develop and deploy a real-world WordPress website through a custom theme and an automated cloud-based deployment pipeline. The process was complex and rewarding, requiring careful attention to file structure, template headers, GitHub Actions configuration, and remote server management.

### Key Learning Outcomes:
- Gained practical experience using WordPress themes and PHP templates
- Learned how to deploy code securely using SSH and GitHub Actions
- Solved nested deployment issues using `scp-action` strategies
- Applied DevOps principles to simplify updates via Git push

---

## Future Improvements

- Add search functionality
- Integrate real-time event calendar or newsletter plugin
- Add interactive contact forms with reCAPTCHA
- Implement custom post types for “Events” and “News”
- Add WP plugin for managing member-only content

---

## License

This project is part of a university assessment (CP3402 - JCU). Source code is available for academic evaluation.

---

## Author

Jeomin Gimmi  
Bachelor of Information Technology – James Cook University  
GitHub: [@jeomin12](https://github.com/jeomin12)
