<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="Admin-dashboard/Admin-dashboard/side.css">
<style>
  .aside {
    background-color: #ffff;
  }

  .aside a {
    color: gray;
  }

  .aside a:hover {
    color: #fff;
    /* white text color on hover */
  }

  .aside .nav-link {
    /* background-color: white; */
    /* remove default background color */
    /* border: 3px solid black; */
    margin: 1px;
  }

  .aside .nav-link:hover {
    border: 1px solid black;


  }

  a.nav-link.link-dark {
    background-color: whitesmoke;
    color: white;
  }
</style>
<div class="d-flex flex-column flex-shrink-0 p-3 aside bg-gray mb-3" style=" height :  vh; background-color: #4d774e;border-radius:10px ">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32">
      <use xlink:href="#bootstrap" />
    </svg>
    <span class="fs-4 dash text-white">Dashboard</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="profile.php" class="nav-link  link-dark " aria-current="page">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="charts" />
        </svg>
        Home
      </a>
    </li>
    <li>
      <a href="chart.php" class="nav-link link-dark ">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#chart" />
        </svg>
        Charts
      </a>
    </li>
    <li>
      <a href="orders.php" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#table" />
        </svg>
        Orders
      </a>
    </li>
    <li>
      <a href="http://localhost/rerice_final_version2/dashboard/product.php" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#grid" />
        </svg>
        Products
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#people-circle" />
        </svg>
        Chats
      </a>
    </li>
  </ul>

</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->