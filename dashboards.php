<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard </title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      background: #f5f6fa;
    }

    .sidebar {
      width: 250px;
      background: #2c3e50;
      color: #fff;
      padding: 20px;
      position: fixed;
      height: 100%;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin: 15px 0;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: #fff;
      display: block;
      padding: 10px;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .sidebar ul li a:hover {
      background: #34495e;
    }

    .main-content {
      margin-left: 250px;
      padding: 20px;
      width: 100%;
    }

    header {
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    header h1 {
      font-size: 24px;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .card h3 {
      margin-bottom: 10px;
    }

    .card p {
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>My Dashboard</h2>
    <ul>
      <li><a href="view.php">🏠 view</a></li>
      <li><a href="update.php">📊 update</a></li>
      <li><a href="form.php">👥 Users</a></li>
      <li><a href="#">⚙️ Settings</a></li>
      <li><a href="loging.php">🚪 Logout</a></li>
    </ul>
  </div>

  <div class="main-content">
    <header>
      <h1>Welcome, Vishal 👋</h1>
    </header>

    <div class="cards">
      <div class="card">
        <h3>Users</h3>
        <p>1,240 Active Users</p>
      </div>
      <div class="card">
        <h3>Sales</h3>
        <p>₹85,000 This Month</p>
      </div>
      <div class="card">
        <h3>Messages</h3>
        <p>320 New Messages</p>
      </div>
      <div class="card">
        <h3>Tasks</h3>
        <p>18 Pending Tasks</p>
      </div>
    </div>
  </div>

</body>
</html>