<img width="100" height="100" alt="logo png" src="https://github.com/user-attachments/assets/0642efd7-2370-4150-ba8f-0a5c7f3e7d28" /> 

# Meme Generator Gallery



A browser-based meme generator that renders uploaded images with captions and stores PNG memes in a PHP and MySQL gallery.




## Overview

The editor uses the browser Canvas API to draw an uploaded image and optional top and bottom text. The resulting PNG data URL is sent as JSON to PHP, stored in MySQL, and displayed by the gallery page.

## Features

- Upload an image and add top and bottom captions
- Generate and download a PNG meme in the browser
- Save generated memes and captions to MySQL
- Display saved memes in reverse chronological order

## Tech Stack

- HTML5, CSS3, and JavaScript
- Bootstrap 5.3.3 via jsDelivr
- PHP with MySQLi
- MySQL
- XAMPP for local Apache and MySQL services
- 
  ## 📸 Application Preview
  
  <img width="1247" height="592" alt="image" src="https://github.com/user-attachments/assets/342fab16-7991-4f6f-987a-9c42c68c01dd" />

## Architecture

<img width="1024" height="572" alt="cdfbad63-3353-4528-a9cb-11318d4eda2f" src="https://github.com/user-attachments/assets/6d700815-2753-4b6a-a091-10eb7a52a53b" />

## Project Structure

```text
.
├── assets/
│   └── logo.png
├── database/
│   └── schema.sql
├── .gitignore
├── db.php
├── LICENSE
├── meme.html
├── README.md
├── save_meme.php
└── show_meme.php
```

## Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/B241561/MEME-GENERATOR-WITH-GALLERY-USING-MYSQL.git
   ```

2. Install XAMPP and start Apache and MySQL from the XAMPP Control Panel.
3. Copy this repository into XAMPP's `htdocs` directory.
4. Import `database/schema.sql` using phpMyAdmin or the MySQL client. It creates the `meme_db` database and `memes` table.
5. If your local MySQL credentials differ from XAMPP's default `root` user with no password, configure `MEME_DB_HOST`, `MEME_DB_USER`, `MEME_DB_PASSWORD`, and `MEME_DB_NAME` in the Apache/PHP environment.
6. Open `http://localhost/MEME-GENERATOR-WITH-GALLERY-USING-MYSQL/meme.html` in a browser.

## Usage

Choose an image, enter optional captions, and select **Generate Meme**. Use **Download Meme** for a local PNG or **Save Meme to DB** to store it. Open `show_meme.php` in the same local URL to view saved memes.

## Security Notes

- Database credentials can be supplied through environment variables and should not be committed.
- Meme writes use a prepared SQL statement.
- Uploaded image data is restricted to PNG data URLs and a 16 MB decoded payload.
- Caption and timestamp output in the gallery is HTML-escaped.

## Future Improvements

- Add CSRF protection and clearer server-side content-type inspection for image payloads.
- Add pagination and deletion controls to the gallery.
- Move inline editor styles and scripts into dedicated files.

## Author

Arman Kaushik
