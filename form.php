<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Document</title>
  <style>
    .card {
      width: 650px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      margin: 10px;
      text-transform: uppercase;
      background-color: transparent;
    }

    .card-header {
      background-color: #2980b9;
      padding: 16px;
      text-align: center;
    }

    .card-header .text-header {
      margin: 0;
      font-size: 18px;
      color: rgb(255, 255, 255);
    }

    .card-body {
      padding: 12%;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      color: #333;
      font-weight: bold;
      margin-bottom: 1px;
    }

    .form-group select {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"],
    .form-group textarea,
    .form-group a {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn {
        margin-top: 10px;
      padding: 12px 24px;
      margin-left: 13px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      background-color:#2980b9;
      color: #fff;
      text-transform: uppercase;
      transition: background-color 0.2s ease-in-out;
      cursor: pointer
    }

    .btn:hover {
      background-color: white;
      color: #2980b9;
    }
  </style>
</head>

<body>
  <div class="card">
    <div class="card-header">
      <div class="text-header">BOOK YOUR SEAT</div>
    </div>
    <div class="card-body">
        <div class="form-group">
          <label for="cname">Student Name:</label>
          <input required="" class="form-control" name="cname" id="cname" type="text">
        </div>
        <div class="form-group">
          <label for="email">Course:</label>
          <input required="" class="form-control" name="course" id="email" type="course">
        </div>
        <div class="form-group">
          <label for="con">Contact No:</label>
          <input required="" class="form-control" name="con" id="con" type="tel">
        </div>

        <div class="form-group">
          <label for="payment">Payment:</label>
          <select class="form-select" name="payment" aria-label="Default select example">
            <option selected value="Advance">Advance</option>
            <option value="Full Amount">Full Amount</option>
            <option value="Register">Register</option>
            <option value="Renewal">Renewal</option>
            <option value="Others">Others..</option>
          </select>
        </div>
        <div class="form-group">
          <label for="amount">Amount:</label>
          <input required="" class="form-control" name="amount" id="amount" type="number">
        </div>

        <div class="form-group">
          <label for="payment">Payment Type:</label>
          <select onchange="paymentto()" class="form-select" id="paytype" name="paytype" aria-label="Default select example">
            <option value="G-Pay / Phone Pay">G-Pay / Phone Pay</option>
            <option value="Bank Transfer">Bank Transfer</option>
            <option value="UPI Payment">UPI Payment</option>
            <option value="QR Payment">QR Payment</option>
            <option value="PayPal">PayPal</option>
            <option selected value="Others">Others..</option>
          </select>
        </div>
        <div id="paytyp">

        </div>
        <div class="form-group">
          <label for="payment">Upload Transaction File:</label>
          <input type="file" name="screenshot" id="screenshot">
        </div>

        <input style="margin-left: 40%;" type="submit" name="submit" class="btn" value="make payment">
      </form>
    </div>
  </div>


</body>

</html>
