<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>computer/elect library-Admin</title>
  <link rel="stylesheet" href="css/new.css">
  <link rel="icon" href="./image/logonow.png">
  <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body class="admin-document">
  <header class="admin-header">
    <div class="page-title-wrapper">Dashboard</div>
    <div class="profile-manager">
      <a href="javascript:void(0)" class="profile-link">Hi, Admin</a>
    </div>
  </header>
  <div class="admin-nav">
    <div class="admin-logo-wrapper"></div>
    <nav class="nav4admin">
      <ul class="admin-menu">
        <li class="admin-menu-item"><a href="javascript:void(0)" class="admin-menu-link" onclick="openSection('dashboard')">Dashboard</a></li>
        <li class="admin-menu-item"><a href="javascript:void(0)" class="admin-menu-link" onclick="openSection('users')">Manage Users</a></li>
        <li class="admin-menu-item"><a href="javascript:void(0)" class="admin-menu-link" onclick="openSection('uploads')">Manage Uploads</a></li>
      </ul>
    </nav>
  </div>
  <main class="admin-body">
    <!-- <div class="admin-body-header">
      <div id="search-wrapper">
        <input type="search" name="" id="">
        <button type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div> -->
    <div class="admin-dashboard-body section">
      <div class="manage-users-btn">
        <a class="btn-link" href="javascript:void(0)" onclick="openSection('users')">Manage Users</a>
      </div>
      <div class="manage-uploads-btn">
        <a class="btn-link" href="javascript:void(0)" onclick="openSection('uploads')">Manage Uploads</a>
      </div>
    </div>
    <div class="admin-users-body section">
      <div class="users-table">
        <div class="users-table-head">
          <div class="table-head-data">ID</div>
          <div class="table-head-data">Name</div>
          <div class="table-head-data">Email</div>
          <div class="table-head-data">Created At</div>
          <div class="table-head-data">Modified At</div>
        </div>
        <div class="users-table-row">
          <div class="table-row-data">1</div>
          <div class="table-row-data">Name Name</div>
          <div class="table-row-data">Email@email.com</div>
          <div class="table-row-data">12/06/2021</div>
          <div class="table-row-data">12/06/2021</div>
          <div class="table-row-data">
            <i class="fas fa-user-alt-slash"></i>
          </div>
          <div class="table-row-data">
            <i class="fas fa-trash-alt"></i>
          </div>
        </div>
        <div class="users-table-row"></div>
        <div class="users-table-row"></div>
        <div class="users-table-row"></div>
        <div class="users-table-row"></div>
        <div class="users-table-row"></div>
        <div class="users-table-row"></div>
        <div class="users-table-row"></div>
      </div>
    </div>
    <div class="admin-uploads-body section">
      <div class="uploads-table">
        <div class="uploads-table-head">
          <div class="table-head-data">ID</div>
          <div class="table-head-data">Uploads</div>
          <div class="table-head-data">Status</div>
          <div class="table-head-data">Uploaded By</div>
          <div class="table-head-data">Approved By</div>
          <div class="table-head-data">Created At</div>
          <div class="table-head-data">Modified At</div>
        </div>
        <div class="uploads-table-row">
          <div class="table-row-data"></div>
          <div class="table-row-data"></div>
          <div class="table-row-data"></div>
          <div class="table-row-data"></div>
          <div class="table-row-data"></div>
          <div class="table-row-data"></div>
          <div class="table-row-data"></div>
          <div class="table-row-data">
            <i class="fas fa-edit"></i>
          </div>
          <div class="table-row-data">
            <i class="fas fa-trash-alt"></i>
          </div>
        </div>
        <div class="uploads-table-row"></div>
        <div class="uploads-table-row"></div>
        <div class="uploads-table-row"></div>
        <div class="uploads-table-row"></div>
        <div class="uploads-table-row"></div>
        <div class="uploads-table-row"></div>
        <div class="uploads-table-row"></div>
        <div class="uploads-table-row"></div>
      </div>
    </div>
  </main>

  <script src="js/new.js"></script>
</body>

</html>