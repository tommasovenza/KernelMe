<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/scss/app.scss' , 'resources/js/app.js'])
  <title>Test Colori Tema</title>
  <style>
    :root {
        --bg-color: #e5e7eb;
        --text-color: #0f172a;
        --accent-color: #3b82f6;
        --text-secondary-color: #64748b; 
        /* 475569 */
        --heading-color: #1E293B;
    }
    
    /* Dark theme */
    body.dark-theme {
      --bg-color: #0f172a;
      --text-color: #94a3b8;
      --accent-color: #3b82f6   ;
      --text-secondary-color: #cbd5e1;
      --border-color: #cbd5e1;
    }

    body {
      background-color: var(--bg-color);
      color: var(--text-color);
       font-family: "Inter", sans-serif;
      transition: background-color 0.3s, color 0.3s;
      padding: 2rem;
    }

    h1 {
      color: var(--accent-color);
    }

    p {
      color: var(--text-secondary-color);
    }

    button {
      margin-top: 2rem;
      padding: 0.5rem 1rem;
      background-color: var(--accent-color);
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1 class="text-3xl font-semibold mb-4">Hey there 👋,
I'm Tommaso Venza</h1>
  <p>A Full Stack Web Developer based in the Netherlands
With a passion for Laravel, Tailwind CSS, Javascript. Previously worked extensively with Wordpress, still valuing its approach, now focused on Laravel for new projects.</p>
  <button onclick="toggleTheme()">Change Theme</button>

  <script>
    function toggleTheme() {
      document.body.classList.toggle('dark-theme');
    }
  </script>
</body>
</html>
