<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CompTime - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'navbar.php'; ?>

  <section class="hero">
    <div class= "my-container">
      <h1>Welcome to CompTime-Coffee</h1>
      <p>Cash in money, convert to time, enjoy gaming!</p>
    </div>
  </section>

  <div class="card-container my-5">
    <h2 class="service text-center mb-4">Our Services</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="assets/computers.jpg" class="card-img-top" alt="Computers">
          <div class="card-body">
            <h5 class="card-title">High-End PCs</h5>
            <p class="card-text">Play the latest games on powerful rigs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="assets/cashin.jpg" class="card-img-top" alt="Gaming">
          <div class="card-body">
            <h5 class="card-title">Cash-to-Time System</h5>
            <p class="card-text">Deposit money, get credits, and use them as time.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="assets/rfid.jpg" class="card-img-top" alt="Gaming">
          <div class="card-body">
            <h5 class="card-title">RFID Card</h5>
            <p class="card-text">We have RFID to use your credits easy</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="assets/aircon.jpg" class="card-img-top" alt="Gaming">
          <div class="card-body">
            <h5 class="card-title">Air Conditioner</h5>
            <p class="card-text">We have functional air conditioner in our computer shop</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="assets/chair.webp" class="card-img-top" alt="Gaming">
          <div class="card-body">
            <h5 class="card-title">Gaming Chair</h5>
            <p class="card-text">Gaming chair to give comfort to the customer</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="game-container my-5">
    <h1 class="text">Games</h1>
    <div class="row game">
      <div class="col-md-4">
        <div class="game-img">
          <img src="assets/roblox.png" alt="" class="roblox">
          <div class="game-body">
            <h1>Roblox</h1>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="game-img">
          <img src="assets/roblox.png" alt="" class="roblox">
          <div class="game-body">
            <h1>Roblox</h1>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="game">
          <img src="assets/roblox.png" alt="" class="roblox">
          <div class="game-body">
            <h1>Roblox</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
