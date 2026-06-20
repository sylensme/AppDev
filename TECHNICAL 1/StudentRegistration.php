<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: lightgray;
            padding: 20px;
        }

        .container{
            max-width: 1000px;
            margin: auto;
            background: white;
            border: 2px solid #000;
            padding: 20px;
        }

        h1{
            text-align: center;
            margin-bottom: 20px;
        }

        .section-title{
            background: #000;
            color: white;
            padding: 8px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 15px;
        }

        .row{
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .form-group{
            flex: 1;
            min-width: 200px;
        }

        label{
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        input, select{
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
        }

        .btn{
            width: 100%;
            padding: 15px;
            background: black;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            font-size: 16px;
        }

        .btn:hover{
            background: #333;
        }

    </style>

</head>
<body>

<div class="container">

    <h1>Student Registration Form</h1>

    <?php

        $full_name = "Jin Matilac";
        $birthday = "2005-10-20";
        $gender = "Male";
        $current_school = "FEU Tech - Intsitute of Technology";
        $program = "BS Information Technology";
        $expected_graduation = "2028";
        $previous_school = "University of the East - Manila";

    ?>

    <form action="" method="post" onsubmit="return submitForm()">

        <div class="section-title">
            Student Information
        </div>

        <div class="row">

            <div class="form-group">
                <label>Full Legal Name</label>
                <input 
                    type="text" 
                    name="full_name"
                    value="<?= $full_name; ?>"
                >
            </div>

        </div>

        <div class="row">

            <div class="form-group">
                <label>Birthday</label>
                <input 
                    type="date" 
                    name="birthday"
                    value="<?= $birthday; ?>"
                >
            </div>

            <div class="form-group">
                <label>Gender</label>

                <select name="gender">

                    <option value="Male"
                        <?= ($gender == "Male") ? "selected" : ""; ?>>
                        Male
                    </option>

                    <option value="Female"
                        <?= ($gender == "Female") ? "selected" : ""; ?>>
                        Female
                    </option>

                </select>

            </div>

        </div>

        <div class="section-title">
            Educational Attainment
        </div>

        <div class="row">

            <div class="form-group">
                <label>Current School</label>
                <input 
                    type="text" 
                    name="current_school"
                    value="<?= $current_school; ?>"
                >
            </div>

            <div class="form-group">
                <label>Program / Course</label>
                <input 
                    type="text" 
                    name="program"
                    value="<?= $program; ?>"
                >
            </div>

        </div>

        <div class="row">

            <div class="form-group">
                <label>Expected Graduation Year</label>
                <input 
                    type="text" 
                    name="expected_graduation"
                    value="<?= $expected_graduation; ?>"
                >
            </div>

            <div class="form-group">
                <label>Previous School</label>
                <input 
                    type="text" 
                    name="previous_school"
                    value="<?= $previous_school; ?>"
                >
            </div>

        </div>

        <button type="submit" class="btn">
            Register Student
        </button>

    </form>

</div>

<script>

    function submitForm(){

        alert("Submitted Successfully!");

        window.location.href = "index.php";

        return false;
    }

</script>

</body>
</html>