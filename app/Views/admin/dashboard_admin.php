<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bansosku Dashboard</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', 'Roboto', sans-serif;
    }

    :root {
      --green: #14532d; /* hijau tua */
      --white: #fff;
      --gray: #f4f4f4;
      --dark: #222;
    }

    body {
      background: var(--gray);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 20px;
      left: 20px;
      width: 250px;
      height: calc(100% - 40px);
      background: var(--green);
      border-radius: 20px;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
      transition: 0.4s ease;
      overflow: hidden;
      z-index: 100;
    }

    .sidebar.hide {
      width: 70px;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .sidebar ul li a {
      display: flex;
      align-items: center;
      padding: 14px 20px;
      color: var(--white);
      text-decoration: none;
      transition: 0.3s;
      font-weight: 500;
    }

    .sidebar ul li a:hover {
      background: var(--white);
      color: var(--green);
      border-radius: 10px;
      margin: 4px 10px;
    }

    .sidebar ul li a ion-icon {
      font-size: 1.6rem;
      margin-right: 14px;
      min-width: 25px;
      text-align: center;
    }

    .sidebar ul li.logo {
      margin-bottom: 30px;
      font-size: 1.3rem;
      font-weight: 600;
      text-align: center;
      color: var(--white);
      letter-spacing: 1px;
      padding-top: 20px;
    }

    .sidebar ul li.logout {
      margin-bottom: 20px;
    }

    /* Main Content */
    .main {
      position: relative;
      margin-left: 270px;
      transition: 0.4s ease;
      padding: 30px;
    }

    .sidebar.hide ~ .main {
      margin-left: 90px;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .toggle {
      font-size: 2rem;
      color: var(--green);
      cursor: pointer;
    }

    .user {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

    .user span {
      font-weight: 500;
      color: var(--dark);
    }

    /* Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .card {
      background: var(--white);
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .card h3 {
      font-size: 1rem;
      color: var(--dark);
      margin-bottom: 10px;
      font-weight: 500;
    }

    .card p {
      font-size: 1.4rem;
      color: var(--green);
      font-weight: 600;
    }

    /* Table Section */
    table {
      width: 100%;
      border-collapse: collapse;
      background: var(--white);
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
      animation: fadeIn 0.5s ease;
    }

    table th, table td {
      padding: 14px;
      text-align: left;
      border-bottom: 1px solid #eee;
      font-size: 0.95rem;
    }

    table th {
      background: var(--green);
      color: var(--white);
      font-weight: 500;
    }

    table tbody tr:hover {
      background: #f1f1f1;
      transition: 0.3s;
    }

    .aksi button {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1.1rem;
      margin-right: 5px;
    }

    .aksi .edit {
      color: #1b5e20;
    }

    .aksi .delete {
      color: #c62828;
    }

    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive */
    @media (max-width: 992px) {
      .sidebar {
        left: -270px;
      }
      .sidebar.show {
        left: 20px;
      }
      .main {
        margin-left: 0;
        padding: 20px;
      }
      .sidebar.hide ~ .main {
        margin-left: 0;
      }
    }

  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <ul>
      <div>
        <li class="logo">Bansosku</li>
        <li><a href="#"><ion-icon name="grid-outline"></ion-icon><span>Dashboard</span></a></li>
        <li><a href="#"><ion-icon name="document-text-outline"></ion-icon><span>Dokumentasi</span></a></li>
        <li><a href="#"><ion-icon name="people-outline"></ion-icon><span>Penerima</span></a></li>
      </div>
      <li class="logout"><a href="#"><ion-icon name="log-out-outline"></ion-icon><span>Sign Out</span></a></li>
    </ul>
  </div>

  <!-- Main -->
  <div class="main">
    <div class="topbar">
      <div class="toggle" id="toggle"><ion-icon name="menu-outline"></ion-icon></div>
      <h2>Dashboard</h2>
      <div class="user">
        <img src="https://i.pravatar.cc/40" alt="user">
        <span>Admin</span>
      </div>
    </div>

    <div class="cards">
      <div class="card"><h3>Total Penerima</h3><p>2,409</p></div>
      <div class="card"><h3>Status Pending</h3><p>182</p></div>
      <div class="card"><h3>Ditolak</h3><p>56</p></div>
      <div class="card"><h3>Total Permohonan</h3><p>2,647</p></div>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Permohonan</th>
          <th>NIK</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>101</td>
          <td>Enzy Madona Ika Sofitri</td>
          <td>3312345678910001</td>
          <td><span class="status">Pending</span></td>
          <td>2025-01-27</td>
          <td class="aksi"><button class="edit">✏️</button><button class="delete">🗑️</button></td>
        </tr>
        <tr>
          <td>102</td>
          <td>Hendriyan Asyiq W.A</td>
          <td>3312345678910001</td>
          <td><span class="status">Pending</span></td>
          <td>2025-01-27</td>
          <td class="aksi"><button class="edit">✏️</button><button class="delete">🗑️</button></td>
        </tr>
        <tr>
          <td>103</td>
          <td>Genica Alexa Wibowo</td>
          <td>3312345678910001</td>
          <td><span class="status">Pending</span></td>
          <td>2025-01-27</td>
          <td class="aksi"><button class="edit">✏️</button><button class="delete">🗑️</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script>
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('toggle');

    toggle.onclick = () => {
      if (window.innerWidth <= 992) {
        sidebar.classList.toggle('show');
      } else {
        sidebar.classList.toggle('hide');
      }
    };
  </script>

</body>
</html>
