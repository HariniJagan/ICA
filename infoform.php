
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
            background-color: transparent;
            padding: 12%;
        }

        .form-group {
            color: white;
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-size: 18px;
            color: black;
            font-weight: 500;
            margin-bottom: 1px;
            text-transform: uppercase;
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
        .form-group input[type="file"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            padding: 10px 20px;
            margin-left: 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #2980b9;
            color: #fff;
            text-transform: uppercase;
            transition: background-color 0.2s ease-in-out;
            cursor: pointer;
            margin: 10PX;
        }

        .btn:hover {
            border-width: 2px;
            border-style: solid;
            border-color:  #2980b9;
            background-color: white;
            color: #2980b9;
        }
        #subbtn{
            margin-left: 40%;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="text-header">STUDENT INFORMATION</div>
        </div>
        <div class="card-body">
            <form action="" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input required="Name" class="form-control" name="name" id="name" type="text">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification:</label>
                    <input required="Qualification" class="form-control" name="qualification" id="qualification" type="text">
                </div>
                <div class="form-group">
                    <label for="qualification">Apply for:</label>
                    <input required="Apply for" class="form-control" name="apply" id="apply" type="text">
                </div>
                <div class="form-group">
                    <label for="qualification">Preferred Location:</label>
                    <input required="Preferred Location" class="form-control" name="preffered" id="preferred" type="text">
                </div>
                

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input required="Email" class="form-control" name="email" id="email" type="email">
                </div>
                <div class="form-group">
                    <label for="con">Contact No:</label>
                    <input required="Contact No" class="form-control" name="con" id="con" type="tel">
                </div>
                
                <input id="subbtn" type="submit" name="submit" class="btn" value="submit">
             
            </form>
        </div>
    </div>

</body>

</html>
