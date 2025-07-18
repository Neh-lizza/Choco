<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCO - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f0f2f5; /* Light gray background */
        }
        .sidebar {
            background-color: white;
            height: 100vh;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed; /* Fixed sidebar */
            overflow-y: auto; /* Scrollable if content overflows */
        }
        .sidebar .nav-link {
          color: black;
        }
        .main-content {
            margin-left: 250px; /* Adjust based on sidebar width */
            padding: 20px;
        }
        .card {
            border: none;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-weight: bold;
        }
        .floating-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .chart-container{
          height: 300px; /* Set a fixed height for charts */
        }
    </style>
</head>
<body>
    <br><br><br>


    
    <div class="sidebar">
        <nav class="nav flex-column">
            <a class="nav-link" href="#">
              
            </a>
            <i class="fas fa-user-circle fa-3x"></i><a class="nav-link" href="admin.php">Manage Magazine</a>
            <i class="fas fa-user-circle fa-3x"></i><a class="nav-link" href="#">[Manipulate activity Here]</a>
            <i class="fas fa-user-circle fa-3x"></i><a class="nav-link" href="#">[Manipulate activity Here]</a>
            <i class="fas fa-user-circle fa-3x"></i> <a class="nav-link" href="#">[Manipulate activity Here]</a>
        </nav>
    </div>

    <div class="main-content">
      <header>
        <div><?php include("header.html") ?></div>
      </header>
      <br><br><br>
        <h1>Admin Dashboard</h1>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">New Orders</h5>
                        <h2>150</h2>
                        <a href="#" class="text-white">More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Lat Bounce Rate</h5>
                        <h2>53%</h2>
                        <a href="#" class="text-white">More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title">Av. Order Registrations</h5>
                        <h2>44</h2>
                        <a href="#" class="text-white">More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h5 class="card-title">Unique Visitor</h5>
                        <h2>65</h2>
                        <a href="#" class="text-white">More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Doughnut Chart</h5>
                <div class="chart-container">
                    <canvas id="doughnutChart"></canvas>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bar Chart</h5>
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <button class="floating-button"><a href="donate.php">+</a></button>

    <footer>
        <div><?php include("footer.html") ?></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const doughnutChartCanvas = document.getElementById('doughnutChart');
      new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false, // Allow chart to resize to container
        }
      });

      const barChartCanvas = document.getElementById('barChart');
      new Chart(barChartCanvas, {
        type: 'bar',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
            label: 'Sales',
            data: [12, 19, 3, 5, 2, 3, 10],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
          responsive: true,
          maintainAspectRatio: false,
        }
      });
    </script>
</body>
</html>