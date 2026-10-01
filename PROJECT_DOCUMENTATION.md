# PROJECT DOCUMENTATION
# Personal Portfolio - Alif Bai'atur Ridhwan El Habibie

> **Dokumen ini adalah Single Source of Truth (SSOT) untuk pengembangan project portfolio.**
>
> Semua AI/coding assistant yang membantu project wajib menggunakan dokumen ini sebagai acuan utama agar implementasi tidak keluar dari tujuan, scope, desain, arsitektur, dan keputusan project.

---

# 1. PROJECT IDENTITY

## 1.1 Project Name

**Alif Bai'atur Ridhwan El Habibie - Personal Portfolio**

## 1.2 Project Type

Personal portfolio website untuk kebutuhan profesional dan pencarian magang.

## 1.3 Primary Goal

Mendukung proses pencarian dan aplikasi magang dengan menampilkan identitas profesional, kemampuan, project, pengalaman organisasi, pendidikan, CV, dan informasi kontak secara jelas dan profesional.

## 1.4 Secondary Goal

Website ini juga merupakan **learning project untuk Laravel**.

Project harus dapat berkembang dari:

```text
Laravel + Blade + Tailwind + Vite
        ↓
Online Portfolio MVP
        ↓
MySQL + Eloquent + Dynamic Content
        ↓
Authentication + Admin Dashboard
        ↓
CRUD + Full Laravel Portfolio
```

## 1.5 Core Personal Message

Portfolio harus menyampaikan bahwa pemilik website adalah:

> Mahasiswa Informatika yang mampu membuat aplikasi web, memiliki kemauan belajar yang tinggi, terus mengembangkan kemampuan, dan sedang mempersiapkan diri untuk masuk ke dunia profesional.

Portfolio **tidak boleh** menggambarkan pemilik sebagai senior developer atau expert jika belum sesuai pengalaman sebenarnya.

---

# 2. PERSONAL BRANDING

## 2.1 Display Name

**Alif Bai'atur Ridhwan El Habibie**

## 2.2 Primary Positioning

**Web Developer & Informatics Student**

## 2.3 Professional Direction

Fokus utama:

- Web Development
- Software Development
- Pengembangan kemampuan Laravel

IoT **tidak menjadi fokus portfolio versi ini** karena target portfolio adalah kebutuhan melamar ke perusahaan dan posisi yang berkaitan dengan Web Development.

## 2.4 Personal Branding Principles

Website harus menggambarkan:

- Profesional
- Minimal
- Jujur
- Mau belajar
- Terus berkembang
- Memiliki pengalaman membuat project
- Tidak melebih-lebihkan kemampuan
- Cocok untuk mahasiswa yang sedang mencari kesempatan magang

---

# 3. SOURCE OF TRUTH: CV

CV menjadi sumber utama untuk data personal, pendidikan, pengalaman organisasi, skill, dan project.

Informasi CV yang digunakan:

### Pendidikan

- Universitas Trunojoyo Madura
- S1 Teknik Informatika
- 2024 - Sekarang
- IPK 3.43 / 4.00

### Pengalaman Organisasi

- Kepala Departemen Advokesma BEM FT
- Bendahara 1 Himpunan Mahasiswa Teknik Informatika

### Project

- Sistem Absensi Peserta Magang Berbasis Website
- JawaTrip - Platform Wisata dan Pemesanan
- Website Penambangan Data

### Skill

Programming:
- PHP
- JavaScript
- Python

Web Development:
- HTML
- CSS
- Tailwind CSS
- Next.js
- CodeIgniter 4

Database:
- MySQL
- Prisma ORM

Tools:
- Git
- GitHub
- Figma
- Node.js
- npm
- Composer
- XAMPP

API & Integration:
- REST API
- Geolocation API
- Cloudinary

Personal:
- Komunikasi
- Kerja Tim
- Problem Solving
- Manajemen Waktu

---

# 4. TARGET AUDIENCE

## Primary Audience

**HR / Recruiter perusahaan di Indonesia**

Website harus dapat dipahami dengan cepat oleh recruiter yang mungkin tidak membaca seluruh detail teknis.

## Secondary Audience

- Technical interviewer
- Developer
- Dosen
- Professional networking

## Recruiter Priority

Recruiter harus dapat menemukan informasi berikut dengan cepat:

1. Nama
2. Posisi/fokus
3. Profil singkat
4. Skills
5. Project
6. Kontribusi pada project
7. Pendidikan
8. Pengalaman
9. CV
10. Contact

---

# 5. USER JOURNEY

User utama adalah recruiter.

Alur yang diharapkan:

```text
Landing
   ↓
Hero
   ↓
Who is Alif?
   ↓
Skills
   ↓
Featured Project
   ↓
Sistem Absensi
   ↓
Other Projects
   ↓
Experience
   ↓
Education
   ↓
Contact
   ↓
Email / WhatsApp / GitHub / CV
```

Website harus meminimalkan pencarian informasi secara manual.

---

# 6. WEBSITE STRUCTURE

Website menggunakan **single-page architecture** untuk public portfolio.

## Public Structure

```text
/
│
├── Navbar
│
├── Hero
│
├── About
│
├── Skills
│
├── Projects
│   ├── Featured Project
│   │   └── Sistem Absensi
│   ├── JawaTrip
│   └── Website Penambangan Data
│
├── Experience
│
├── Education
│
├── Contact
│
└── Footer
```

## Navigation

Navbar menggunakan anchor navigation:

```text
Home
About
Skills
Projects
Experience
Education
Contact
```

Contoh:

```text
/#about
/#skills
/#projects
/#experience
/#education
/#contact
```

Tidak perlu membuat banyak halaman public untuk setiap section.

---

# 7. HERO SECTION

## Purpose

Dalam beberapa detik pertama recruiter harus mengetahui:

- siapa pemilik website
- apa bidangnya
- statusnya
- apa yang bisa dilakukan

## Content Structure

```text
ALIF BAI'ATUR RIDHWAN EL HABIBIE

Web Developer & Informatics Student

Short professional introduction

[View Projects]
[Download CV]

Email
WhatsApp
GitHub
```

## Visual

Desktop:

```text
Text                    Profile Photo
```

Mobile:

```text
Profile Photo
      ↓
Name
      ↓
Headline
      ↓
Description
      ↓
CTA
```

---

# 8. ABOUT SECTION

## Purpose

Memberikan konteks personal dan pendidikan secara singkat.

## Content

- Short introduction
- Status sebagai mahasiswa Informatika
- Fokus Web Development
- Continuous learning
- Universitas Trunojoyo Madura
- S1 Teknik Informatika
- IPK 3.43/4.00

Jangan menyalin CV secara mentah. Gunakan copywriting yang lebih natural untuk website.

---

# 9. SKILLS SECTION

Skills dikelompokkan agar mudah dipindai.

## Programming

- PHP
- JavaScript
- Python

## Web Development

- HTML
- CSS
- Tailwind CSS
- Next.js
- CodeIgniter 4
- Laravel

> Laravel merupakan teknologi yang sedang dikembangkan melalui project portfolio ini. Jangan memberikan klaim tingkat keahlian yang belum sesuai.

## Database

- MySQL
- Prisma ORM

## Tools

- Git
- GitHub
- Figma
- Node.js
- npm
- Composer
- XAMPP

## API & Integration

- REST API
- Geolocation API
- Cloudinary

Jangan menggunakan rating skill seperti:
- 90%
- Expert
- Master
- 5/5

kecuali terdapat alasan objektif untuk menampilkannya.

---

# 10. PROJECT STRATEGY

Portfolio menampilkan project dengan hierarchy yang berbeda.

## Featured Project

### Sistem Absensi Peserta Magang Berbasis Website

Status:

**Personal Project**

Role:

**Full-stack Web Developer**

Ini adalah project utama portfolio karena project tersebut benar-benar dikerjakan sendiri.

## Other Projects

### JawaTrip

Status:

**Academic Team Project**

Project dilakukan secara kelompok.

Portfolio hanya boleh menjelaskan kontribusi yang benar-benar dilakukan oleh pemilik portfolio.

### Website Penambangan Data

Status:

**Academic Project**

Website statis digunakan untuk menyajikan dokumentasi dan hasil project mata kuliah Penambangan Data.

### Omah ID

**Tidak dimasukkan ke portfolio versi ini.**

---

# 11. PROJECT DATA STRUCTURE

Setiap project idealnya memiliki informasi:

```text
Project Name
Project Type
Description
Role
My Contribution
Features
Tech Stack
Screenshots
Challenges
What I Learned
GitHub URL (optional)
Live Demo URL (optional)
```

## Important Ownership Rule

Screenshot dapat ditampilkan tanpa memberikan source code.

Tidak semua project wajib memiliki:

- GitHub link
- Live demo
- Source code

Jika project merupakan project kelompok dan source code tidak sepenuhnya milik pemilik portfolio, jangan memberikan kesan bahwa seluruh source code adalah hasil pekerjaan pribadi.

---

# 12. FEATURED PROJECT: SISTEM ABSENSI

## Project Type

Personal Project

## Role

Full-stack Web Developer

## Main Features

- Check-in
- Check-out
- GPS Location Validation
- Selfie Verification
- Pengajuan Izin
- Monitoring Absensi
- Pengelolaan data absensi

## Technology

Berdasarkan project yang sebelumnya digunakan:

- PHP
- CodeIgniter 4
- MySQL
- HTML
- CSS
- Tailwind CSS
- JavaScript
- Browser Geolocation API
- Cloudinary

## Project Presentation

Project tidak perlu menyediakan live demo jika aplikasi hanya berjalan di environment lokal.

Sebagai gantinya gunakan:

- Project overview
- Screenshots
- Feature explanation
- Contribution
- Challenges
- What I Learned

## Detail Page

URL yang disiapkan:

```text
/projects/sistem-absensi-peserta-magang
```

Struktur:

```text
Hero Image
Project Name
Project Type
Role
Overview
My Contribution
Features
Tech Stack
Screenshots
Challenges
What I Learned
Back to Projects
```

---

# 13. JAWATRIP

## Project Type

Academic Team Project

## Description

Platform wisata dan pemesanan berbasis web yang dikembangkan dalam proyek kelompok.

## Features yang tercatat di CV

- Authentication
- Destinasi wisata
- Booking
- Hotel
- Pembayaran
- Wishlist
- Review

## Important Rule

Portfolio tidak boleh menyatakan bahwa seluruh fitur dibuat oleh satu orang.

Bagian **My Contribution** harus diisi berdasarkan kontribusi sebenarnya.

## Presentation

Karena source code tidak sepenuhnya dimiliki pribadi:

- Screenshot: boleh
- Project description: boleh
- Contribution: wajib jelas
- GitHub: optional
- Live Demo: optional
- Full source code: tidak wajib

---

# 14. WEBSITE PENAMBANGAN DATA

## Project Type

Academic Project

## Purpose

Website digunakan untuk menyajikan dokumentasi dan hasil project mata kuliah Penambangan Data.

## Presentation

Karena tersedia website statis dan screenshot:

- tampilkan screenshot
- tampilkan overview
- tampilkan role
- tampilkan kontribusi
- tampilkan teknologi
- tampilkan challenge
- tampilkan what I learned

Live demo dapat ditampilkan jika memang tersedia dan aman untuk dibagikan.

---

# 15. PROJECT SCREENSHOTS

Screenshot merupakan bagian penting dari portfolio.

Screenshot yang tersedia:

- Sistem Absensi
- JawaTrip
- Website Penambangan Data

## Rules

- Gunakan screenshot yang paling jelas.
- Hindari screenshot terlalu kecil.
- Pastikan informasi sensitif tidak terlihat.
- Gunakan optimasi image agar website tetap ringan.
- Jangan menggunakan screenshot sebagai pengganti penjelasan project.

---

# 16. EXPERIENCE SECTION

Gunakan timeline sederhana.

## 2026 - Sekarang

**Kepala Departemen Advokesma BEM FT**

Responsibilities:

- Mengkoordinasikan kegiatan departemen dalam menyampaikan dan menindaklanjuti aspirasi mahasiswa Fakultas Teknik.
- Berkoordinasi dengan anggota organisasi dan pihak terkait dalam pelaksanaan program kerja departemen.

## 2025

**Bendahara 1 Himpunan Mahasiswa Teknik Informatika**

Responsibilities:

- Mengelola pencatatan dan administrasi keuangan organisasi.
- Membantu mengatur pemasukan, pengeluaran, serta kebutuhan keuangan kegiatan himpunan.

Pengalaman organisasi harus tetap ditampilkan, tetapi jangan mengambil porsi lebih besar daripada project Web Development.

---

# 17. EDUCATION SECTION

## Universitas Trunojoyo Madura

S1 Teknik Informatika

2024 - Sekarang

IPK:

**3.43 / 4.00**

Relevant coursework:

- Pemrograman Web
- Pengembangan Aplikasi Web
- Basis Data
- Rekayasa Perangkat Lunak
- Sistem Terdistribusi
- Pengolahan Citra
- Pemodelan Proses Bisnis

## Previous Education

SMA Negeri 1 Lamongan
2021 - 2024

SMP Negeri 12 Surabaya
2018 - 2021

Untuk portfolio, pendidikan tinggi harus mendapat visual priority lebih besar.

---

# 18. CONTACT SECTION

## Primary Contact

- Email
- WhatsApp
- GitHub

## GitHub

```text
https://github.com/alifbait
```

## Email

```text
alifbaiatur@gmail.com
```

## Contact CTA

Contoh:

```text
Tertarik berdiskusi atau memiliki kesempatan magang?

[Email Me]
[WhatsApp]
[GitHub]
```

---

# 19. CV

Portfolio wajib memiliki tombol:

```text
Download CV
```

CV versi pertama menggunakan CV terbaru yang menjadi sumber informasi project.

File CV dapat diperbarui tanpa mengubah struktur website.

---

# 20. DESIGN SYSTEM

## Design Direction

**Minimal & Professional**

## Theme

**Light only**

Dark mode tidak digunakan pada MVP.

## Color Palette

Primary reference palette:

```text
#F3EEEA
#EBE3D5
#B0A695
#776B5D
```

Recommended semantic usage:

```text
#F3EEEA
Background utama

#EBE3D5
Surface / secondary background

#B0A695
Muted elements / border / secondary accent

#776B5D
Primary accent

Dark neutral
Primary text / heading
```

Palette dapat dimodifikasi sedikit untuk accessibility dan contrast, tetapi karakter warm, neutral, beige, brown, cream harus dipertahankan.

## Visual Character

- Warm
- Calm
- Professional
- Clean
- Mature
- Minimal

Jangan mengubah desain menjadi:
- neon developer
- cyberpunk
- terminal-heavy
- excessive gradient
- overly colorful

---

# 21. TYPOGRAPHY

Typography harus:

- mudah dibaca
- modern
- profesional
- memiliki hierarchy jelas

Gunakan maksimal 1-2 font family.

Prioritas:

```text
Heading
↓
Subheading
↓
Body
↓
Caption
```

Jangan menggunakan terlalu banyak jenis font.

---

# 22. RESPONSIVE DESIGN

Website harus responsive.

Prioritas:

1. Mobile
2. Tablet
3. Desktop

## Mobile

Hero menjadi vertical.

Project card menjadi single column.

Navigation dapat berubah menjadi mobile menu.

## Desktop

Hero dapat menggunakan two-column layout.

Project featured dapat menggunakan larger visual area.

Other projects dapat menggunakan grid.

---

# 23. ANIMATION

Animation level:

**Moderate**

Animasi harus membantu user memahami interface, bukan menjadi dekorasi utama.

Allowed:

- section reveal
- hover
- button transition
- navbar transition
- smooth scroll
- image interaction

Avoid:

- heavy particle systems
- video background
- excessive parallax
- excessive JavaScript animation
- large animation libraries jika tidak diperlukan

Performance lebih penting daripada visual gimmick.

---

# 24. TECH STACK

## Backend

**Laravel**

## Language

**PHP**

## Frontend

**Blade**

**Tailwind CSS**

**JavaScript**

## Asset Bundler

**Vite**

## Database

**MySQL**

## Package Manager

**Composer**

**npm**

## Version Control

**Git**

**GitHub**

## Development Environment

Dapat menggunakan environment lokal yang sesuai untuk Laravel/PHP.

---

# 25. WHY THESE TECHNOLOGIES

## Laravel

Digunakan sebagai framework backend utama sekaligus learning focus.

Tujuan pembelajaran:

- Routing
- Controller
- Blade
- Model
- Eloquent
- Migration
- Seeder
- Validation
- Authentication
- Middleware
- CRUD
- File handling
- Deployment

## Blade

Digunakan sebagai template engine agar project tetap sederhana dan fokus pada Laravel.

## Tailwind CSS

Digunakan untuk membangun UI yang konsisten dan responsive.

## Vite

Digunakan sebagai asset bundler untuk frontend Laravel.

Vite bukan pengganti Tailwind.

Relationship:

```text
Laravel
   ↓
Vite
   ├── Tailwind CSS
   └── JavaScript
```

## MySQL

Digunakan ketika portfolio mulai dibuat dynamic.

## Eloquent

Digunakan untuk mempelajari ORM Laravel dan mengakses database secara idiomatis.

---

# 26. DEVELOPMENT PHASES

## PHASE 1 - MVP

Priority: HIGH

Target: Portfolio online minggu ini.

Technology:

```text
Laravel
Blade
Tailwind
Vite
```

Content dapat menggunakan static data terlebih dahulu.

Deliverables:

- Navbar
- Hero
- About
- Skills
- Projects
- Experience
- Education
- Contact
- Footer
- Responsive design
- CV download
- GitHub
- WhatsApp
- Email
- Screenshot project
- Online deployment

---

# 27. PHASE 2 - DYNAMIC CONTENT

Setelah MVP online:

```text
Laravel
+
MySQL
+
Migration
+
Models
+
Eloquent
+
Seeder
```

Data yang dapat dibuat dynamic:

```text
Projects
Skills
Experience
Education
```

---

# 28. PHASE 3 - ADMIN PANEL

Future scope.

```text
/admin
```

Features:

- Authentication
- Dashboard
- Project CRUD
- Skill CRUD
- Experience CRUD
- Education CRUD
- Image management
- Profile management

---

# 29. PHASE 4 - ADVANCED LARAVEL

Optional future scope.

Possible features:

- Form validation
- Contact message management
- Authorization
- Role/permission
- API
- Testing
- Caching
- Performance optimization
- SEO
- Analytics

Do not implement these before MVP unless there is a clear reason.

---

# 30. TECHNICAL ARCHITECTURE

## MVP

```text
Browser
   ↓
Laravel
   ↓
Route
   ↓
Controller
   ↓
Blade
   ↓
Tailwind CSS
   ↓
Vite
   ↓
Browser
```

## Dynamic Version

```text
Browser
   ↓
Route
   ↓
Controller
   ↓
Eloquent Model
   ↓
MySQL
   ↓
Controller
   ↓
Blade
   ↓
Browser
```

---

# 31. LARAVEL PROJECT STRUCTURE

Recommended:

```text
app/
├── Http/
│   └── Controllers/
│       ├── HomeController.php
│       └── ProjectController.php
│
└── Models/
    ├── Project.php
    ├── Skill.php
    ├── Experience.php
    └── Education.php

database/
├── migrations/
└── seeders/
    └── DatabaseSeeder.php

resources/
├── css/
│   └── app.css
├── js/
│   └── app.js
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── home.blade.php
    ├── projects/
    │   └── show.blade.php
    └── components/
        ├── navbar.blade.php
        ├── hero.blade.php
        ├── about.blade.php
        ├── skills.blade.php
        ├── project-card.blade.php
        ├── experience.blade.php
        ├── education.blade.php
        ├── contact.blade.php
        └── footer.blade.php

routes/
└── web.php
```

Components should be used to prevent one massive Blade file.

---

# 32. DATABASE ARCHITECTURE

Future database structure:

```text
users

projects

skills

experiences

education

messages
```

Possible project-related tables:

```text
projects
technologies
project_technology
project_screenshots
```

Do not over-engineer the database during MVP.

---

# 33. PROJECT TABLE CONCEPT

Future `projects` table:

```text
id
title
slug
description
project_type
role
contribution
features
challenges
what_i_learned
cover_image
github_url
demo_url
featured
created_at
updated_at
```

URLs must be nullable because not every project has a public GitHub repository or live demo.

---

# 34. PROJECT TYPE ENUMERATION

Use these conceptual categories:

```text
Personal Project
Academic Team Project
Academic Project
Collaborative Project
```

Current classification:

```text
Sistem Absensi
→ Personal Project

JawaTrip
→ Academic Team Project

Website Penambangan Data
→ Academic Project

Omah ID
→ Not included
```

---

# 35. PUBLIC ROUTES

MVP:

```text
GET /
```

Future project detail:

```text
GET /projects/{slug}
```

Future admin:

```text
GET /admin
GET /admin/projects
GET /admin/skills
GET /admin/experiences
GET /admin/education
```

Exact route naming can be adjusted to Laravel conventions during implementation.

---

# 36. ADMIN ARCHITECTURE

Future:

```text
/admin
   ↓
Authentication
   ↓
Dashboard
   ├── Projects
   ├── Skills
   ├── Experiences
   ├── Education
   └── Messages
```

Admin is NOT required for MVP.

---

# 37. DEPLOYMENT REQUIREMENT

The portfolio must eventually be accessible online so recruiters can open it directly.

## Deployment Goal

**Online and publicly accessible.**

## Cost Constraint

Prefer free or very low-cost infrastructure initially.

## Deployment Platform

Vercel may be considered, but the final deployment platform must be validated against the Laravel/PHP architecture before implementation is locked.

Do not change the application architecture merely to force an unsuitable hosting platform.

---

# 38. PERFORMANCE REQUIREMENTS

Portfolio must be lightweight.

Target principles:

- Optimized images
- Lazy-load non-critical images
- Avoid unnecessary JavaScript
- Avoid unnecessary packages
- Minimize animation overhead
- Use responsive images where appropriate
- Avoid video background
- Optimize screenshots

Recruiter should be able to access the portfolio without waiting unnecessarily long.

---

# 39. ACCESSIBILITY

Minimum requirements:

- readable contrast
- semantic HTML
- proper heading hierarchy
- alt text for images
- keyboard-accessible navigation
- buttons should look and behave like buttons
- links should be distinguishable
- avoid information conveyed only by color

---

# 40. SEO BASICS

MVP should include:

- Page title
- Meta description
- Semantic headings
- Descriptive URLs
- Open Graph metadata if practical
- Favicon
- Proper image alt text

Suggested title:

```text
Alif Bai'atur Ridhwan El Habibie | Web Developer & Informatics Student
```

---

# 41. SECURITY PRINCIPLES

Even for a portfolio:

- Do not expose `.env`
- Do not expose database credentials
- Validate form input
- Sanitize/escape user-generated content
- Use Laravel CSRF protection where applicable
- Do not expose private source code
- Do not upload sensitive screenshots
- Keep secret API keys out of frontend code

---

# 42. CONTENT RULES

AI/coding assistants must follow these rules:

1. Do not invent work experience.
2. Do not invent project contributions.
3. Do not claim ownership of team members' work.
4. Do not invent technologies used in old projects.
5. Do not invent project results or metrics.
6. Do not add IoT as a primary professional focus in this version.
7. Do not describe the owner as an expert/senior developer without evidence.
8. Keep project descriptions concise and recruiter-friendly.
9. Use Indonesian as the primary website language.
10. English technical terms are acceptable when standard in the industry.

---

# 43. LANGUAGE

Primary language:

**Bahasa Indonesia**

English can be used for:

- Job/role terminology
- Technology names
- Standard technical terminology
- GitHub labels
- Common CTA if desired

The website should remain natural for Indonesian recruiters.

---

# 44. NAVIGATION UX

Navbar should remain simple.

Desktop:

```text
Alif
Home
About
Skills
Projects
Experience
Education
Contact
```

Mobile:

```text
Alif
☰
```

Navigation should scroll smoothly to each section.

---

# 45. DESIGN DON'TS

Do NOT:

- use excessive gradients
- use dark mode
- overload the page with animations
- use huge decorative elements that hide content
- use too many fonts
- use excessive icons
- make project cards overly complex
- use fake statistics
- add fake client testimonials
- add fake work experience
- add fake certifications
- claim technologies that were not used

---

# 46. MVP ACCEPTANCE CRITERIA

MVP dianggap selesai jika:

## Content

- [ ] Name displayed correctly
- [ ] Professional headline displayed
- [ ] About section complete
- [ ] Skills section complete
- [ ] Projects section complete
- [ ] Experience section complete
- [ ] Education section complete
- [ ] Contact section complete
- [ ] CV downloadable

## Projects

- [ ] Absensi is featured
- [ ] JawaTrip included
- [ ] Penambangan Data included
- [ ] Screenshots included
- [ ] Project type clearly displayed
- [ ] Contribution is honest
- [ ] No unauthorized source code is exposed

## UI

- [ ] Minimal professional design
- [ ] Light theme
- [ ] Warm palette
- [ ] Responsive mobile
- [ ] Responsive tablet
- [ ] Responsive desktop
- [ ] Moderate animations
- [ ] No unnecessary heavy effects

## Technical

- [ ] Laravel runs correctly
- [ ] Blade works correctly
- [ ] Tailwind works
- [ ] Vite works
- [ ] Production build works
- [ ] No major console errors
- [ ] No broken links
- [ ] Images load correctly
- [ ] CV downloads correctly

## Deployment

- [ ] Public URL available
- [ ] HTTPS enabled if supported
- [ ] Production environment configured
- [ ] `.env` secrets not exposed

---

# 47. DEVELOPMENT ORDER

The development order is fixed unless there is a strong reason to change it.

```text
1. Project Setup
      ↓
2. Laravel Installation
      ↓
3. Tailwind + Vite
      ↓
4. Base Layout
      ↓
5. Navbar
      ↓
6. Hero
      ↓
7. About
      ↓
8. Skills
      ↓
9. Projects
      ↓
10. Experience
      ↓
11. Education
      ↓
12. Contact
      ↓
13. Footer
      ↓
14. Responsive
      ↓
15. Animation
      ↓
16. Optimization
      ↓
17. Deployment
      ↓
18. MVP COMPLETE
      ↓
19. Dynamic Database
      ↓
20. Admin Panel
```

---

# 48. AI DEVELOPMENT RULES

This section is especially important because this document is intended to guide AI coding assistants.

## Rule 1 - Respect Scope

Do not introduce features that are not in the current phase without explicit approval.

## Rule 2 - Do Not Rewrite Existing Architecture

Do not replace Laravel/Blade/Tailwind/Vite with another framework or stack unless explicitly requested.

## Rule 3 - Preserve Design

Do not change the warm minimal professional design into another visual style.

## Rule 4 - Explain Before Major Changes

For significant architectural changes, explain:

- what changes
- why it is needed
- what files are affected
- whether it affects future phases

## Rule 5 - MVP First

Prioritize making the public portfolio complete and deployable before implementing the admin system.

## Rule 6 - Keep Code Understandable

The owner is learning Laravel.

Avoid unnecessary abstractions and overly complex patterns when a simple Laravel solution is sufficient.

## Rule 7 - Use Laravel Conventions

Prefer standard Laravel conventions for:

- routes
- controllers
- models
- migrations
- validation
- Blade
- Eloquent
- middleware

## Rule 8 - Do Not Generate Blindly

When generating code, explain what the important parts do so the owner can learn from the project.

---

# 49. CURRENT PROJECT STATUS

```text
PRD
████████████████████ 100%

Architecture
████████████████████ 100%

Content Planning
████████████████████ 100%

Laravel Setup
░░░░░░░░░░░░░░░░░░░░ 0%

UI Development
░░░░░░░░░░░░░░░░░░░░ 0%

Responsive
░░░░░░░░░░░░░░░░░░░░ 0%

Deployment
░░░░░░░░░░░░░░░░░░░░ 0%

Dynamic Laravel
░░░░░░░░░░░░░░░░░░░░ 0%

Admin
░░░░░░░░░░░░░░░░░░░░ 0%
```

---

# 50. FINAL PROJECT DEFINITION

The project is a **minimal, professional, single-page personal portfolio website** for Alif Bai'atur Ridhwan El Habibie.

Its primary purpose is to support internship applications in Indonesia.

The website positions Alif as:

> **Web Developer & Informatics Student**

The primary featured project is:

> **Sistem Absensi Peserta Magang**

Other projects:

> **JawaTrip**  
> **Website Penambangan Data**

The public MVP is built using:

> **Laravel + Blade + Tailwind CSS + Vite**

The future application can be extended using:

> **MySQL + Eloquent + Authentication + Admin Dashboard + CRUD**

The visual direction is:

> **Minimal + Professional + Light + Warm Neutral Palette**

The website must be:

> **Responsive + Lightweight + Accessible + Recruiter-friendly + Online**

The most important principle is:

> **The portfolio should honestly represent the current abilities and work of its owner while demonstrating continuous growth toward professional Web Development.**

---

# 51. DECISION LOG

## Confirmed

- Portfolio target: internship
- Primary audience: HR/recruiter
- Positioning: Web Developer & Informatics Student
- Full name displayed
- IoT excluded from primary portfolio positioning
- Single-page public website
- Minimal professional design
- Light theme
- Moderate animation
- Featured project: Sistem Absensi
- JawaTrip: Academic Team Project
- Website Penambangan Data: Academic Project
- Omah ID excluded
- Screenshots will be used
- CV download included
- Contact: Email + WhatsApp + GitHub
- GitHub: github.com/alifbait
- Online deployment required
- Admin panel deferred
- Laravel learning is part of project goal
- MVP must be prioritized before advanced features

## Not Yet Finalized

- Exact hosting/deployment provider
- Exact typography/font
- Final copywriting
- Exact screenshot selection
- Final project contribution descriptions for team projects
- Final database relationships
- Exact admin authentication implementation
- Final domain

---

# 52. GOLDEN RULE

If a future AI assistant proposes something that conflicts with this document, the assistant must prioritize this document and explicitly identify the conflict before changing the project direction.

**This document is the project source of truth.**
