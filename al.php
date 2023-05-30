<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/logo4.png">
    <title>Registration Form</title>
    <style>
        body {
            background-image: url('bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .form-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .form-group label {
            flex: 0 0 180px;
            text-align: right;
            margin-right: 10px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            flex: 1;
            max-width: 400px;
        }
        .form-group button {
            margin-left: 190px;
        }
        @media (max-width: 600px) {
            .form-group label {
                flex: 1;
                text-align: left;
                margin-right: 0;
                margin-bottom: 5px;
            }
            .form-group input,
            .form-group select,
            .form-group textarea {
                max-width: none;
            }
            .form-group button {
                margin-left: 0;
            }
        }
    body{
        background-color:#2F3C7E;
        color:white;
    }
    div{
        margin-bottom: 6px;
        align-items:center;
        justify-content: space-evenly;
    }
    div > label{
        float: left;

    }
    div > input,div > select{
        margin:3px;
        width:100%;
    }

    div > label{
        font-weight:450;
    }
    textarea{
        width:100%;
    }
    .card{
        background-color:#FBEAEB;
        color:black;
        align-items:center;
        /* height:80vh; */
        margin:0px auto;
        border:1px black solid;
        border-radius:8px ;
        box-shadow:5px -5px -5px 5px black ;
        padding:20px;
        margin:0px auto;
        min-width:350px;
        max-width:400px;
        opacity:0.9;
    }
    </style>
</head>
<body bgcolor="gray">
    <h1 style="text-align: center;">Alumni Registration</h1>
    <div class="card">
        <div><h2>Registration Form</h2></div>
        <form action="Registration.php" method="post">
            <div class="form-group">
                <label for="Rno">Regd.No:</label>
                <input type="text" placeholder="Enter Regd.No" required name="Rno">
            </div>
            <div class="form-group">
                <label for="join">Year of Joining:</label>
                <select id="year" name="year"></select>
            </div>
            <div class="form-group">
                <label for="branches">Select a branch:</label>
                <select id="branches" name="branches">
                    <option value="">--Select a branch--</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="ECE">Electronics and Communication Engineering</option>
                    <option value="Mech">Mechanical Engineering</option>
                    <option value="CE">Chemical Engineering</option>
                    <option value="ME">Metallurgical Engineering</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" max="2005-12-31" required>
            </div>
            <h3>Personal Details</h3>
            <div class="form-group">
                <label for="photo">Upload a photo:</label>
                <input type="file" id="photo" name="photo">
            </div>
            <div class="form-group">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first_name" required>
            </div>
            <label for="middle-name">Middle Name:</label>
            <input type="text" id="middle-name" name="middle-name">
            </div>
            <div class="form-group">
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
            <label for="aadhaar-number">Aadhaar Number:</label>
            <input type="number" maxlength="12" id="aadhaar-number" name="aadhaar-number">
            </div>
            <div class="form-group">
            <label for="currentcity">Current City:</label>
            <input type="text" id="currentcity" name="currentcity" placeholder="Vijaywada..">
            </div>
            <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="tel" id="mobile" name="mobile">
            </div>
            <div class="form-group">
            <label for="address">Complete Address:</label>
            <textarea id="address" name="address"></textarea>
            </div>

            <!-- Rest of the form elements -->

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
            </form>
            </div>
            </body>
</html>

