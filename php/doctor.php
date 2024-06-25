<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Management</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    height: 100vh;
}

.container {
    display: flex;
    width: 100%;
}

.sidebar {
    width: 250px;
    background-color: #9b59b6;
    padding: 20px;
    color: #fff;
}

.sidebar h2 {
    margin: 0 0 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
}

.sidebar ul li a i {
    margin-right: 10px;
}

.main-content {
    flex-grow: 1;
    background-color: #f4f4f4;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    border-bottom: 1px solid #ccc;
}

.header h1 {
    margin: 0;
}

.profile {
    display: flex;
    align-items: center;
}

.profile img {
    margin-left: 10px;
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.doctor-management {
    padding: 20px;
}

.doctor-management .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.add-doctor-btn {
    padding: 10px 20px;
    background-color: #9b59b6;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.add-doctor-btn i {
    margin-right: 5px;
}

.search-bar {
    display: flex;
    margin-bottom: 20px;
}

.search-bar input {
    flex-grow: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
    outline: none;
}

.search-bar .search-btn {
    padding: 10px;
    background-color: #ccc;
    border: none;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.search-bar .search-btn i {
    color: #555;
}

.doctor-table {
    width: 100%;
    border-collapse: collapse;
}

.doctor-table th, .doctor-table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
}

.doctor-table .status.active {
    color: green;
}

.doctor-table .status.inactive {
    color: red;
}

.edit {
    display: flex;
    gap: 10px;
}

.edit button {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.edit button i {
    color: #fff;
}

.view-btn {
    background-color: #3498db;
}

.edit-btn {
    background-color: #f39c12;
}

.delete-btn {
    background-color: #e74c3c;
}

    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container">
        <aside class="sidebar">
            <h2>ADMIN</h2>
            <nav>
                <ul>
                    <li><a href="#"><i class="fas fa-user-md"></i> Doctor</a></li>
                    <li><a href="#"><i class="fas fa-user"></i> Patient</a></li>
                    <li><a href="#"><i class="fas fa-calendar-alt"></i> Doctor Schedules</a></li>
                    <li><a href="#"><i class="fas fa-calendar-check"></i> Appointments</a></li>
                    <li><a href="#"><i class="fas fa-user-cog"></i> Profile</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Patient Appointment</h1>
                <div class="profile">
                    <span>Hor Sonoeun</span>
                    <img src="profile-icon.png" alt="Profile Icon">
                </div>
            </header>
            <section class="doctor-management">
                <div class="header">
                    <h2>Doctor Management</h2>
                    <button class="add-doctor-btn"><i class="fas fa-plus"></i> Add New Doctor</button>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search doctor's name here">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
                <?php
                    include ('dbCon.php');
                    $qwAll = 'SELECT * FROM tbldep td INNER JOIN tblcareer tc ON td.DepId=tc.DepId ORDER BY AddedDate ASC';
                    $rwAll = $dbCon->query($qwAll);
                    if ($rwAll->num_rows > 0) {
                        echo '<table class="doctor-table">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Id</th>';
                        echo '<th>Title</th>';
                        echo '<th>Department</th>';
                        echo '<th>Description</th>';
                        echo '<th>RevisionDate</th>';
                        echo '<th>AddedDate</th>';
                        echo '<th>Image</th>';
                        echo '<th colspan="3">Editing</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        while($row = $rwAll->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row["Id"] . '</td>';
                            echo '<td>' . $row["Title"] . '</td>';
                            echo '<td>' . $row["Department"] . '</td>';
                            echo '<td>' . $row["Description"] . '</td>';
                            echo '<td>' . $row["RevisionDate"] . '</td>';
                            echo '<td>' . $row["AddedDate"] . '</td>';
                            echo '<td><img src="' . $row["Image"] . '" width="150px" /></td>';
                            echo '<td><a class="btnedit" href="Update.php?fdId=' . $row["Id"] . '"><i class="fas fa-edit"></i> Edit Info</a></td>';
                            echo '<td><a class="btneditimg" href="UpdateImage.php?fdId=' . $row["Id"] . '"><i class="fas fa-image"></i> Edit Image</a></td>';
                            echo '<td><a class="btndel" href="Delete.php?fdId=' . $row["Id"] . '"><i class="fas fa-trash"></i> Delete</a></td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } else {
                        echo '0 results';
                    }
                    $dbCon->close();
                ?>
            </section>
        </main>
    </div>
</body>
</html>