# Meme Generator Gallery

A full-stack web application for creating, customizing, and storing memes with a MySQL-backed gallery.

## Overview

Meme Generator Gallery allows users to create memes from the browser and store generated memes in a centralized gallery.

The project demonstrates end-to-end web development across the frontend, backend, database, and file-handling layers.

## Features

* Create and customize memes
* Upload and manage meme images
* Store generated memes using MySQL
* Browse memes through a gallery
* Responsive web interface
* Server-side processing with PHP

## Tech Stack

**Frontend**
HTML5 · CSS3 · Bootstrap · JavaScript

**Backend**
PHP

**Database**
MySQL

**Development**
XAMPP · Git · GitHub

## Architecture

```text
User
 ↓
Frontend
(HTML / CSS / JavaScript)
 ↓
PHP Backend
 ↓
MySQL Database
 ↓
Meme Gallery
```

## Project Structure

```text
├── frontend
├── backend
├── database
├── assets
└── screenshots
```

## Screenshots

### Meme Generator

![Meme Generator](screenshots/editor.png)

### Gallery

![Gallery](screenshots/gallery.png)

## Local Setup

### 1. Clone the repository

```bash
git clone https://github.com/B241561/meme-generator-gallery.git
```

### 2. Start the environment

Run Apache and MySQL using XAMPP.

### 3. Configure the database

Import:

```text
database/schema.sql
```

into MySQL.

### 4. Place the project

Move the project into the XAMPP `htdocs` directory.

### 5. Run

Open the application through the local Apache server.

## What I Learned

* Building a full-stack web application
* Connecting PHP applications with MySQL
* Handling file uploads and server-side processing
* Designing responsive interfaces
* Structuring a small web application for deployment

## Future Improvements

* User authentication
* Meme template library
* Social sharing
* AI-assisted caption generation
* Improved input validation and security

---

**Author:** Arman Kaushik
