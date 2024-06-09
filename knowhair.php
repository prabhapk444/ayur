<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Hair</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        * {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9f9f9;
            font-size: 16px;
        }

        h3 {
            text-align: center;
            color: #272343;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: calc(100% - 22px); /* Adjusted width to accommodate padding and border */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .step {
            padding: 20px;
            border: 2px solid transparent;
            transition: border-color 0.3s ease;
        }

        .step.active {
            border-color: #ffd803;
        }

        button {
            padding: 12px 24px;
            background-color: #ffd803;
            color: #272343;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        @media (max-width: 992px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
<center><h3>Ayurvedic  Hair quiz</h3></center>
    <div class="container">
    <form id="hairForm" action="solution.php" method="post" autocomplete="off">

            <div class="step active" id="step1">
                <h2>Step 1</h2>
                <label for="name">Enter your Name</label>
                <input type="text" name="name" id="name"><br>
                <label for="gender">My Body Frame is</label>
                <select name="Body" required>
                    <option value=""></option>
                    <option value="Less">Less</option>
                    <option value="Normal">Normal</option>
                    <option value="A lot">A lot</option>
                </select>
                <label for="concern">I sweat</label>
                <select name="APPETITE" required>
                <option value=""></option>
                    <option value="Irregular">Irregular</option>
                    <option value="Strong">Strong</option>
                    <option value="Normal">Normal</option>
                </select>
                <button onclick="nextStep('step1', 'step2')">Next</button>
            </div>
            <div class="step" id="step2">
                <h2>HAIR  Profile</h2>
                <label for="describe">Hair Volume</label>
                <select name="HAIR VOLUME" required>
                <option value=""></option>
                    <option value="Wavy">Wavy</option>
                    <option value="Straight">Straight</option>
                    <option value="Curly">Curly</option>
                </select>
                <label for="skinfeel">Hair Texture</label>
                <select name="HAIR TEXTURE" required>
                <option value=""></option>
                    <option value="Rough and dry">Rough and dry</option>
                    <option value="Silky and smooth">Silky and smooth</option>
                    <option value="Full and lustrous">Full and lustrous</option>
                </select>
                <label for="dehydrated">Scalp Texture</label>
                <select name="SCALP TEXTURE" required>
                <option value=""></option>
                    <option value="Dry">Dry</option>
                    <option value="Oily">Oily</option>
                    <option value="Normal to Oily">Normal to Oily</option>
                </select>
                <label for="sunscreen">Dandruff</label>
                <select name="DANDRUFF">
                <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <label for="sunscreen">Secondary Hair Issue</label>
                <select name="SECONDARY HAIR ISSUE">
                <option value=""></option>
                    <option value="Split ends">Split ends</option>
                    <option value="Breakage">Breakage</option>
                    <option value="Balding">Balding</option>
                    <option value="Greasy hair">Greasy hair</option>
                </select>
                <button onclick="prevStep('step2', 'step1')">Previous</button>
                <button onclick="nextStep('step2', 'step3')">Next</button>
            </div>
            <!-- Step 3 -->
            <div class="step" id="step3">
                <h2>Lifestyle Profile</h2>
                <label for="physical">Physical Activity Or Exercise</label>
                <select name="physical" required>
                <option value=""></option>
                    <option value="regular">Regular</option>
                    <option value="sometimes">Sometimes</option>
                    <option value="rarely">Rarely</option>
                </select>
                <label for="sleeping">Sleeping Habits</label>
                <select name="sleeping" required>
                <option value=""></option>
                    <option value="sound_sleep">Sound Sleep</option>
                    <option value="moderate_sleep">Moderate Sleep</option>
                    <option value="disturbed_sleep">Disturbed Sleep</option>
                </select>
                <label for="bowel">Bowel Movements</label>
                <select name="bowel" required>
                <option value=""></option>
                    <option value="normal">Normal</option>
                    <option value="constipated">Constipated</option>
                    <option value="frequent">Frequent</option>
                </select>
                <label for="social">Social Skills</label>
                <select name="social" required>
                <option value=""></option>
                    <option value="large_circle_of_friends">Large Circle Of Friends</option>
                    <option value="small_circle_of_friends">Small Circle Of Friends</option>
                    <option value="private_person">Private Person</option>
                </select>
                <label for="treatment">Hair Styling Or Treatment</label>
                <select name="treatment" required>
                <option value=""></option>
                    <option value="Colour Or Henna">Colour Or Henna</option>
                    <option value="Keratin">Keratin</option>
                    <option value="Straightening Or Smoothing">Straightening Or Smoothing</option>
                </select>
                <button onclick="prevStep('step3', 'step2')">Previous</button>
                <button onclick="nextStep('step3', 'step4')">Next</button>
            </div>
            <!-- Step 4 -->  <br>
            <div class="step" id="step4">
                <label for="body">Enter Your Age</label>
                <input type="number" name="age" id="age">
                <label for="sweat">Select Your Gender</label>
                <select name="gender" required>
                <option value=""></option>
                    <option value="male">Male</option>
                    <option value="Female">Female</option>
                    <option value="others">Others</option>
                </select>
                <button onclick="prevStep('step4', 'step3')">Previous</button>
                <button type="submit" id="ans">Submit</button>
            </div>
        </form>
    </div>
   

    <script>
    function nextStep(currentStepId, nextStepId) {
        var currentStep = document.getElementById(currentStepId);
        var nextStep = document.getElementById(nextStepId);
        var inputs = currentStep.querySelectorAll('input[required], select[required]');
        var isValid = true;

        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                isValid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        });

        if (isValid) {
            currentStep.classList.remove('active');
            nextStep.classList.add('active');
        } else {
            swal("Error", "Please fill all required fields before proceeding.", "error");
        }
    }

    function prevStep(currentStepId, prevStepId) {
        document.getElementById(currentStepId).classList.remove('active');
        document.getElementById(prevStepId).classList.add('active');
    }

    document.getElementById('ans').addEventListener('click', function() {
        window.location.href = 'solution.php';
    });
</script>

</body>
</html>
