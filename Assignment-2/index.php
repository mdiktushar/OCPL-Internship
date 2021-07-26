
<?php
    require_once "pdo.php";
?>

<?php

    $sql1 = "SELECT * FROM draft ;";

    $stmt = $pdo->query($sql1);
    $name;
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $name = $row['name'];
        $fname = $row['fname'];
        $manme = $row['mname'];
        $dateofbirth = $row['dateofbirth'];
        $gender = $row['gender'];
        $email = $row['email'];
        $phone = $row['phone'];
        $SCH = $row['school'];
        $COLL = $row['collage'];
        $UNI = $row['university'];
        $about = $row['about'];

    }

?>

<?php

    if(isset($_POST['draft'])) {

        $delete = $pdo->prepare("DELETE FROM * draft;");
        $delete->execute();
    
        $sql = "UPDATE customer SET Connection_Error = :value1 WHERE ID=:id";
        $pdo->prepare($sql)->execute($data);
    
        $stmt = $pdo->prepare('INSERT INTO inquiry (name, fname, mname, dateofbirth, gender, email, phone, schooll, collage, university, about) VALUES ( :User_Name, :Phone_Number, :Address, :aria_no, :Connection_Number)');
        $stmt->execute(array(
                ':name' => $name,
                ':fname' => $fname,
                ':mname' => $manme,
                ':dateofbirth' => $dateofbirth,
                ':gender' => $gender,
                ':email' => $email,
                ':phone' => $phone,
                ':school' => $SCH,
                ':collage' => $COLL,
                ':university' => $UNI,
                ':about' => $about)
        );  
    
    } 

?>

<!DOCTYPE html>

<!-- Name: Md. Imrul Kayes
University: BAIUST
E-mail: imrul_kayes@baiust.edu.bd -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-2</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- googleapis -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> -->
    <!-- Bootstrap -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .input-with{
            width: auto;
        }
    </style>
</head>
<body>

    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>
    
    <form id="regForm" action='./thankyou.php' method="post">
        <h1>Your Information:</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <div>
                <p>
                    <!-- <label for="">Name:</label> -->
                    <input placeholder="Full Name..." value= <?php echo($name)?> oninput="this.className = ''" name="name" required>
                </p>
                <p>
                    <!-- <label for="">Father:</label> -->
                    <input placeholder="Father Name..." value= <?php echo($fname)?> oninput="this.className = ''" name="fname" required>
                </p>
                <p>
                    <!-- <label for="">Mother:</label> -->
                    <input placeholder="Mother Name..." value= <?php echo($manme)?> oninput="this.className = ''" name="mname" required>
                </p>
                <p>
                    <label for="birthday">Date of Birth:</label>
                    <input class="input-with" type="date" value= <?php echo($dateofbirth)?> id="birthday" name="birthday" required>
                </p>
                
            </div>
            
            <p>
                <h3>Gender</h3> 
                <input style="margin-bottom: 10px;" class="input-with" type="radio" id="html" name="Gender" value="Male" checked="checked">
                <label for="male">Male</label><br>
                <input style="margin-top: 10px;" class="input-with" type="radio" id="css" name="Gender" value="Female">
                <label for="female">Female</label><br>
            </p>
        </div>

        <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." value= <?php echo($email )?> oninput="this.className = ''" name="email" required></p>
            <p><input type="number" value= <?php echo($phone )?> placeholder="Phone..." oninput="this.className = ''" name="phone" required></p>
        </div>

        <div class="tab"> <h2>Study</h2>
            <p>
                <label for="Currebt Study">Currnet Study:</label>
                <select style=" width: 33%;" id="study" name="study" style="font-size: 13px;">
                    <option value="none">please select</option>
                    <option value="school">School</option>
                    <option value="collage">Collage</option>
                    <option value="universiyt">Universiyt</option>
                </select>
            </p>

            <p ><input id='Sch'  placeholder="School" value= <?php echo($SCH)?>oninput="this.className = ''" name="Sname" ></p>
            <p ><input id='Coll'  placeholder="Collage" value= <?php echo($COLL)?>oninput="this.className = ''" name="Cname" ></p>
            <p ><input id='Uni'  placeholder="Universiyt"value= <?php echo($UNI)?> oninput="this.className = ''" name="Uname" ></p>
        </div>

        <div class="tab">About you
            <p><textarea placeholder="Some thing about you" oninput="this.className = ''" name="about"  rows="5" cols="105" required>
                <?php echo($about)?>
            </textarea></p>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            <div style="float:left;">
                <button class="reset-button" type="reset" id= >Reset</button>
                <button style="background-color: blue;" type="button" id="" name='draft' >Draft</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            </div>
    </form>
    
    <script src="./script.js"></script>
    <script>

        $('#Sch').hide()
        $('#Coll').hide()
        $('#Uni').hide()
        $('#study').on('change', function() {
            if(this.value === 'school') {
                $('#Sch').show()
                $('#Coll').hide()
                $('#Uni').hide()
            } else if(this.value === 'collage') {
                $('#Coll').show()
                $('#Sch').hide()
                $('#Uni').hide()
            } else if(this.value === 'universiyt') {
                $('#Uni').show()
                $('#Sch').hide()
                $('#Coll').hide()
            }
        })

    </script>

</body>
</html>