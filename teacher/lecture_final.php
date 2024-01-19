<?php
// display_info.php

if(isset($_GET['section']) && isset($_GET['subject'])) {
    $section = $_GET['section'];
    $subject = $_GET['subject'];

    // Display the section and subject on the new page
    echo "<h1 style='color: white;'> $subject</h1>";
    echo "<h1 style='color: white;'> $section</h1>";

    // Add the rest of your code to display information based on section and subject
} else {
    echo "<h1>Section or subject parameter is missing</h1>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lecture Final</title>
    <style>
        
        body {
            background-color: #198754;;
            color: rgb(0, 0, 0); /* Set text color to contrast with the background */
            font-family: Arial, sans-serif; /* Example font */
            /* Add other styles as needed */
        }
        /* ... (other styles) ... */
        /* Add your CSS styles here */
        /* For demonstration purposes, some basic styles are included */
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 2px;
            text-align: left;
        }
        input[type="text"] {
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100px;
            padding: 8px;
        }
        input[type="number"] {
            text-align: center;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-top: 50px;
            text-shadow: 5px 5px 7px rgba(0, 0, 0, 1);
        }
        .hidden {
            display: none;
        }
        #section5 {
            margin-top: 20px;
            padding: 20px;
            background-color: #333;
            color: white;

        }
        form{
            margin: 0;
             padding: 0;
        }
        .title {
    text-align: center;
    color: #fff;
    font-size: 48px;
    font-weight: bold;
    padding: 20px;
    margin-top: 40px;
    background-color: #4CAF50;
    border: 6px solid #2E7D32;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    text-transform: uppercase;
    letter-spacing: 2px;
}
.button-container {
    display: flex;
    justify-content: space-around;
    width: 100%;
    overflow-x: auto;
    padding: 10px;
    background-color: #4CAF50; /* Change as per your background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    white-space: nowrap;
}

.custom-button {
    flex: 0 0 auto;
    padding: 10px 20px;
    font-size: 16px;
    border: 2px solid #ffffff;
    border-radius: 4px;
    cursor: pointer;
    margin: 5px;
    transition: all 0.3s ease;
    color: #2E7D32; /* Set the text color to white */
}
.custom-button a {
    color: white; /* Set the text color to white for the anchor tag inside the button */
    text-decoration: none; /* Remove default underline for the anchor tag */
}




.black-button {
    background-color:#134f16;
    color: white;
}

.custom-button:hover {
    transform: scale(1.05);
}

.custom-button:focus {
    outline: none;
}
.custom-submit {
    padding: 10px 20px;
    font-size: 16px;
    background-color: green;
    color: #fffdfd;
    border: 3px solid  #000000;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.custom-submit:hover {
    background-color: rgb(0, 80, 0); /* Darker shade on hover */
}
.hidden {
        display: none;
    }

        
    </style>
    <script>
        function toggleGradeSections(grade) {
            var sections = ['gradeAttendance', 'gradeQuizzesExams', 'gradeOutputPortfolio', 'gradeMidtermExam'];
            
            sections.forEach(function(sectionId) {
                var section = document.getElementById(sectionId);
                if (sectionId === grade) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }
    
        function toggleAllSections(grade) {
            toggleGradeSections(grade);
        }
    
        function hideAllSections() {
            var allSections = document.querySelectorAll('.hidden');
            
            allSections.forEach(function(section) {
                section.style.display = 'none';
            });
        }
    </script>
    
    
    
    
    
    <div class="button-container">
        <img src="logo.png" width="296" height="64" alt="Logo">
        <button class="custom-button black-button">
        <a href="lecture_midterm.php?section=<?php echo urlencode($section); ?>&subject=<?php echo urlencode($subject); ?>">
        LECTURE MIDTERM
    </a>
    </button>
        <button class="custom-button black-button">
    <a href="lecture_final.php?section=<?php echo urlencode($section); ?>&subject=<?php echo urlencode($subject); ?>">
        LECTURE FINAL
    </a>
    </button>
    <button class="custom-button black-button">
    <a href="laboratory_midterm.php?section=<?php echo urlencode($section); ?>&subject=<?php echo urlencode($subject); ?>">
        LABORATORY MIDTERM
    </a>
    </button>
    <button class="custom-button black-button">
    <a href="laboratory_final.php?section=<?php echo urlencode($section); ?>&subject=<?php echo urlencode($subject); ?>">
    LABORATORY FINAL
    </a>
    </button>
        <button  class="custom-button black-button"><a href="consolidated.html">CONSOLIDATED</a></button>
        <button  class="custom-button black-button"><a href="grading_sheet.html">GRADING SHEET</a></button>
        <button  class="custom-button black-button"><a href="transmutation_table.html">TRANSMUTATION TABLE</a></button>
    </div>
    
    
    
</head>
<body>

<div id="section1">

    <h1 class="title">LECTURE FINAL</h1>

<div style="display: flex; justify-content: space-around; margin-top: 20px; border: 1px solid #ccc; padding: 10px; border-radius: 6px; background-color: #74ec66; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
    <button onclick="toggleGradeSections('gradeAttendance')" style="flex: 1; padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: line 20px; border-radius: 4px; cursor: pointer;">Grade Attendance &amp; Participation</button>
    <div style="width: 2px; background-color: #000000;"></div>
    <button onclick="toggleGradeSections('gradeQuizzesExams')" style="flex: 1; padding: 10px 20px; font-size: 16px; background-color: #008CBA; color: white; border: line 20px; border-radius: 4px; cursor: pointer;">Grade Quizzes/Long Examination</button>
    <div style="width: 2px; background-color: #000000;"></div>
    <button onclick="toggleGradeSections('gradeOutputPortfolio')" style="flex: 1; padding: 10px 20px; font-size: 16px; background-color: #f44336; color: white; border: line 20px; border-radius: 4px; cursor: pointer;">Grade Output/Portfolio</button>
    <div style="width: 2px; background-color: #000000;"></div>
    <button onclick="toggleGradeSections('gradeMidtermExam')" style="flex: 1; padding: 10px 20px; font-size: 16px; background-color: #FF9800; color: white; border: line 20px; border-radius: 4px; cursor: pointer;">Grade Final Exam</button>
</div>







<form id="gradeAttendance" method="post" action="process_grades.php">
    <div style="margin: 0; padding: 0; display: flex; justify-content: flex-start;">
        <div style="width: 100%;">
            <label for="numRows">Number of Students:</label>
            <input type="number" id="numRows" min="1" oninput="validity.valid||(value='');" max="100" value="30">
            <button onclick="generateRows()">Generate</button>
            <button onclick="addRow()">+ Row</button>
            <button onclick="removeRow()">- Row</button>
            
            <table style="font-size: 22px; width: 75.6%; margin-left: 24.4%; margin-right: auto; border-collapse: collapse;">
                <tr>
                    <td style="text-align: center; background-color: green; color: white;" colspan="50"> Performance After Midterm</td>
                </tr>
                <tr>
                    <th style="text-align: center; background-color: green; color: white;width: 50%">ATTENDANCE</th>
                    <th style="text-align: center; background-color: green; color: white;width: 50%">PARTICIPATION</th>
                </tr>
            </table>
            
            <table style="font-size: 12px; width: 100%; border-collapse: collapse;">
                <colgroup>
                    <col style="width: 1%;">
                    <col style="width: 10%;">
                    <col style="width: 8.3%;">
                    <col style="width: 15%;">
                    <col style="width: 15%;">
                    <col style="width: 15%;">
                    <col style="width: 15%;">
                </colgroup>
                <tr>
                    <th style="text-align: left;">#</th>
                    <th style="text-align: center;">Student Name</th>
                    <th style="text-align: center;">Student Number</th>
                    <th style="text-align: center;">Total Attendance during Midterm</th>
                    <th style="text-align: center;">Total Attendance after Midterm</th>
                    <th style="text-align: center;">TOTAL</th>
                    <th style="text-align: center;">WEIGHTED</th>
                    <th style="text-align: center;">Total Participation during Midterm</th>
                    <th style="text-align: center;">Total Participation after Midterm</th>
                    <th style="text-align: center;">TOTAL</th>
                    <th style="text-align: center;">WEIGHTED</th>
                </tr>

                <button onclick="populateFromTable()">Populate from Table</button>
<button onclick="removeFormData()">Remove Data</button>

<script>
let originalFormData;

function populateFromTable() {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let data = JSON.parse(xhr.responseText);
            originalFormData = data;
            populateFormWithData(data);
        }
    };
    xhr.open('GET', 'populate_attendance_participation.php', true);
    xhr.send();
}

function populateFormWithData(data) {
    let sectionValue = document.getElementsByName('section')[0].value;
    let subjectValue = document.getElementsByName('subject')[0].value;
    let numRows = data.length;
    document.getElementById('numRows').value = numRows;
    for (let i = 0; i < numRows; i++) {
        if (data[i].section === sectionValue && data[i].subject === subjectValue) {
            document.getElementsByName(`student_name_${i + 1}`)[0].value = data[i].student_name;
            document.getElementsByName(`student_number_${i + 1}`)[0].value = data[i].student_number;
            document.getElementsByName(`section`)[0].value = data[i].section;
            document.getElementsByName(`subject`)[0].value = data[i].subject;
            document.getElementsByName(`total_attendance_duringmidterm${i + 1}`)[0].value = data[i].attendance_total;
            document.getElementsByName(`total_participation_duringmidterm${i + 1}`)[0].value = data[i].participation_total;
            document.getElementsByName(`HPSattendanceTotal`)[0].value = data[i].HPSattendanceTotal;
            document.getElementsByName(`HPSparticipationTotal`)[0].value = data[i].HPSparticipationTotal;
        }
    }
    calculateWeightedScores();
}

function removeFormData() {
    let numRows = document.getElementById('numRows').value;
    let sectionValue = document.getElementsByName('section')[0].value;
    let subjectValue = document.getElementsByName('subject')[0].value;
    for (let i = 1; i <= numRows; i++) {
        if (
            document.getElementsByName(`section`)[0].value === sectionValue &&
            document.getElementsByName(`subject`)[0].value === subjectValue &&
            document.getElementsByName(`student_name_${i}`)[0].value !== ''
        ) {
            document.getElementsByName(`student_name_${i}`)[0].value = '';
            document.getElementsByName(`student_number_${i}`)[0].value = '';
            document.getElementsByName(`section`)[0].value = '0';
            document.getElementsByName(`subject`)[0].value = '0';
            document.getElementsByName(`total_attendance_duringmidterm${i}`)[0].value = '0';
            document.getElementsByName(`total_participation_duringmidterm${i}`)[0].value = '0';
            document.getElementsByName(`HPSattendanceTotal`)[0].value = '0';
            document.getElementsByName(`HPSparticipationTotal`)[0].value = '0';
        }
    }
    calculateWeightedScores();
}

function calculateWeightedScores() {
    // Add your logic to calculate weighted scores here
}
</script>

                <tr>
                    <tr>
                        <th colspan="3" style="text-align: center;"></th>
                        <th style="text-align: center;">
                            <input type="number" name="HPSattendanceTotal" value="0" min="0" required>
                        </th>  
                        <th style="text-align: center;">
                            <input type="number" name="total_attendance_aftermidterm_" id="total_attendance_aftermidterm" value="0" min="0" required></th>
                            <th style="text-align: center;">
                            
                                <div style="display: flex; align-items: center; justify-content: center;">
                                    <input type="number" name="total_attendance" value="10" min="0" max="100" style="width: 45%;">
                                    <span style="margin-left: 3px;">%</span>
                                </div>
                            </th>
                            <th style="text-align: center;">
                            
                                <div style="display: flex; align-items: center; justify-content: center;">
                                    <input type="number" name="attendance_weighted" value="10" min="0" max="100" style="width: 45%;">
                                    <span style="margin-left: 3px;">%</span>
                                </div>
                            </th>
                            <th style="text-align: center;">
                                <input type="number" name="HPSparticipationTotal" value="0" min="0" required>
                            </th>  
                            <th style="text-align: center;">
                                <input type="number" name="Total_after_midterm" value="0" min="0" required>
                            </th>  

                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" required>
                        </th>
                        <th style="text-align: center;">
                            <div style="display: flex; align-items: center; justify-content: center;">
                                <input type="number" name="weighted" value="10" min="0" max="100" style="width: 45%;">
                                <span style="margin-left: 5px;">%</span>
                            </div>
                        </th>
                    </tr>
                    
                    
                </tr>
                
            
            </tr>
                <!-- Student data rows -->
                <tbody id="studentData">
                    <!-- Rows will be generated here -->
                </tbody>
            </table>
        </div>
    </div>
    <script>
    function calculateWeightedScores() {
            let numRows = document.getElementById('numRows').value;
            let globalLimitAttendance = parseFloat(document.getElementById('total_attendance_aftermidterm').value) || 0;
            let globalLimitParticipation = parseFloat(document.getElementById('participationTotal').value) || 0;
            let maxWeightedScore = 10; // Maximum weighted score

            for (let i = 1; i <= numRows; i++) {
                let total_attendance_aftermidterm = parseFloat(document.getElementById(`attendance_total_${i}`).value) || 0;
                let participationTotal = parseFloat(document.getElementById(`participation_total_${i}`).value) || 0;

                let attendanceWeighted = (Math.min(total_attendance_aftermidterm, globalLimitAttendance) / globalLimitAttendance) * maxWeightedScore;
                let participationWeighted = (Math.min(participationTotal, globalLimitParticipation) / globalLimitParticipation) * maxWeightedScore;

                document.getElementById(`attendance_weighted_${i}`).value = attendanceWeighted.toFixed(2);
                document.getElementById(`participation_weighted_${i}`).value = participationWeighted.toFixed(2);
            }
        }
        function calculateTotalAttendanceAndParticipation() {
    let numRows = document.getElementById('numRows').value;
    let totalAttendance = 0;
    let totalParticipation = 0;

    for (let i = 1; i <= numRows; i++) {
        let attendanceValue = parseFloat(document.getElementsByName(`total_attendance_duringmidterm${i}`)[0].value) || 0;
        let participationValue = parseFloat(document.getElementsByName(`total_attendance_aftermidterm${i}`)[0].value) || 0;

        totalAttendance += attendanceValue;
        totalParticipation += participationValue;
    }

    return { totalAttendance, totalParticipation };
}

    function calculateWeightedScores() {
        let numRows = document.getElementById('numRows').value;
        let maxWeightedScore = 10; // Maximum weighted score

        for (let i = 1; i <= numRows; i++) {
            let totalAttendance = parseFloat(document.getElementsByName(`total_attendance_duringmidterm${i}`)[0].value) || 0;
            let totalParticipation = parseFloat(document.getElementsByName(`total_participation_duringmidterm${i}`)[0].value) || 0;

            let attendanceWeighted = (totalAttendance / 100) * maxWeightedScore;
            let participationWeighted = (totalParticipation / 100) * maxWeightedScore;

            document.getElementsByName(`weighted_${i}`)[0].value = attendanceWeighted.toFixed(2);
            document.getElementsByName(`weighted_${i}`)[1].value = participationWeighted.toFixed(2);
        }
    }

    function generateRows() {
        let numRows = document.getElementById('numRows').value;
        let rows = '';
        for (let i = 1; i <= numRows; i++) {
            rows += `
                <tr>
                    <td style="text-align: left;">${i}</td>
                    <td style="text-align: left;"><input type="text" name="student_name_${i}" placeholder="Student Name" required></td>
                    <td style="text-align: left;"><input type="number" name="student_number_${i}" min="0" placeholder="Student Number" required style="width: 92%;"></td>
                    <td style="text-align: center;"><input type="number" name="total_attendance_duringmidterm${i}" value="${attendanceTotal}" onchange="calculateWeightedScores()"></td>
                    <td style="text-align: center;"><input type="number" name="total_attendance_aftermidterm${i}" value="${attendanceTotal}" onchange="calculateWeightedScores()"></td>
                    <td style="text-align: center;"><input type="number" value="0.00" name="total_attendance${i}" readonly></td>
                    <td style="text-align: center;"><input type="number" value="0.00" name="weighted_attendance_${i}" readonly></td>
                    <td style="text-align: center;"><input type="number" name="total_participation_duringmidterm${i}" value="${participationTotal}" onchange="calculateWeightedScores()"></td>
                    <td style="text-align: center;"><input type="number" name="total_participation_aftermidterm${i}" value="${participationTotal}" onchange="calculateWeightedScores()"></td>
                    <td style="text-align: center;"><input type="number" name="total_${i}" value="${participationTotal}" onchange="calculateWeightedScores()"></td>
                    <td style="text-align: center;"><input type="number" value="0.00" name="weighted_${i}" readonly></td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="section" placeholder="Section" value="<?php echo htmlspecialchars(isset($_GET['section']) ? $_GET['section'] : ''); ?>" readonly required>
                    </td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars(isset($_GET['subject']) ? $_GET['subject'] : ''); ?>" readonly required>
                    </td>

                </tr>`;
        }
        document.getElementById('studentData').innerHTML = rows;
    }

    function addRow() {
        let numRows = document.getElementById('numRows');
        numRows.value = parseInt(numRows.value) + 1;
        generateRows();
    }

    function removeRow() {
        let numRows = document.getElementById('numRows');
        if (parseInt(numRows.value) > 1) {
            numRows.value = parseInt(numRows.value) - 1;
            generateRows();
        }
    }

    // Fetch the totals from the URL query parameters
    const urlParams = new URLSearchParams(window.location.search);
    const attendanceTotal = parseFloat(urlParams.get('attendanceTotal')) || 0;
    const participationTotal = parseFloat(urlParams.get('participationTotal')) || 0;

    generateRows(); // Generate rows with the totals when the page loads

    // Function to get URL parameters by name
function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    const regex = new RegExp(`[?&]${name}(=([^&#]*)|&|#|$)`);
    const results = url.match(regex);

    if (!results) return null;

    // Handling multiple values for the same 'i'
    const values = results[0].split('&');
    const paramValues = {};

    values.forEach(val => {
        const [key, value] = val.split('=');
        const i = key.replace(/[^\d]/g, ''); // Extract 'i' from the parameter name

        if (!paramValues[i]) {
            paramValues[i] = [];
        }

        paramValues[i].push(decodeURIComponent(value));
    });

    return paramValues;
}

let i = 1; // Replace this with the specific 'i' value you want

let parametersForI = getParameterByName(`total_attendance_duringmidterm${i}`);
console.log(`Parameters for 'i' = ${i}:`, parametersForI);

    
</script>
    <input type="submit" value="Submit" name="submit" class="custom-submit">
</form>




<form id="gradeQuizzesExams" method="post" action="process_grades.php" style="display: none;" class="hidden">
    <div style="margin: 0; padding: 0; display: flex; justify-content: flex-start;">
        <div style="width: 100%;">
            <label for="numRowsQuiz">Number of Students:</label>
            <input type="number" id="numRowsQuiz" min="1" oninput="validity.valid||(value='');" max="100" value="30">
            <button onclick="generateQuizRows()">Generate</button>
            <button onclick="addQuizRow()">+ Row</button>
            <button onclick="removeQuizRow()">- Row</button>
            <table style="font-size: 22px; width: 75.6%; margin-left: 24.4%; margin-right: auto; border-collapse: collapse;">
                <tr>
                    <td style="text-align: center; background-color: green; color: white;" colspan="50">Performance After Midterm</td>
                </tr>
                <tr>
                    <th style="text-align: center; background-color: green; color: white;width: 50%">Grade Quiz</th>
                </tr>
            </table>
            <table style="font-size: 12px; width: 100%; border-collapse: collapse;">
                <tr>
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Student Name</th>
                    <th style="text-align: center;">Student Number</th>
                    <th style="text-align: center;">Total Quizzes/Long Exams during Midterm </th>
                    <th style="text-align: center;">Quiz #1</th>
                    <th style="text-align: center;">Quiz #2</th>
                    <th style="text-align: center;">Quiz #3</th>
                    <th style="text-align: center;">Quiz #4</th>
                    <th style="text-align: center;">Quiz #5</th>
                    <th style="text-align: center;">Quiz #6</th>
                    <th style="text-align: center;">Quiz #7</th>
                    <th style="text-align: center;">Quiz #8</th>
                    <th style="text-align: center;">Quiz #9</th>
                    <th style="text-align: center;">Quiz #10</th>
                    <th style="text-align: center;">TOTAL</th>
                    <th style="text-align: center;">WEIGHTED</th>
                    <!-- Add columns for Grade Quiz data -->
                    <!-- For example: Contents 1-10, Total, Weighted -->
                </tr>
             
                <tr>
                    <tr>
                        <th colspan="3" style="text-align: center;"></th>
                        <th style="text-align: center;">
                            <input type="number" name="hpsquiz_total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="during_midterm_quiz" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="15" min="0" style="width: 80%;">%
                        </th>
                    </tr>
                    
                    
                </tr>
                <!-- Student data rows -->
                <tbody id="quizStudentData">
                    <!-- Rows will be generated here -->
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function updateQuizStudentInfo() {
            var studentName = document.getElementById('quizStudentName').value;
            var studentNumber = document.getElementById('quizStudentNumber').value;

            localStorage.setItem('quizStudentName', studentName);
            localStorage.setItem('quizStudentNumber', studentNumber);
        }

        function populateQuizStudentInfo() {
            var storedName = localStorage.getItem('quizStudentName');
            var storedNumber = localStorage.getItem('quizStudentNumber');

            if (storedName) {
                document.getElementById('quizStudentName').value = storedName;
            }
            if (storedNumber) {
                document.getElementById('quizStudentNumber').value = storedNumber;
            }
        }

        function generateQuizRows() {
            let numRowsQuiz = document.getElementById('numRowsQuiz').value;
            let rows = '';
            for (let i = 1; i <= numRowsQuiz; i++) {
                rows += `
                <tr>
                    <td style="text-align: left;">${i}</td>
                    <td style="text-align: left;"><input type="text" id="quizStudentName" name="quiz_student_name_${i}" placeholder="Student Name" required onchange="updateQuizStudentInfo()"></td>
                    <td style="text-align: left;"><input type="number" id="quizStudentNumber" name="quiz_student_number_${i}" min="0" placeholder="Student Number" required style="width: 92%;" onchange="updateQuizStudentInfo()"></td>
                    <td style="text-align: center;"><input type="number" name="total_quiz_duringmidterm${i}"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_1"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_2"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_3"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_4"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_5"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_6"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_7"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_8"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_9"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_${i}_10"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_total_${i}"></td>
                    <td style="text-align: center;"><input type="number" name="quiz_weighted_${i}" readonly></td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="section" placeholder="Section" value="<?php echo htmlspecialchars(isset($_GET['section']) ? $_GET['section'] : ''); ?>" readonly required>
                    </td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars(isset($_GET['subject']) ? $_GET['subject'] : ''); ?>" readonly required>
                    </td>

                </tr>`;
            }
            document.getElementById('quizStudentData').innerHTML = rows;
        }

        function addQuizRow() {
            let numRowsQuiz = document.getElementById('numRowsQuiz');
            numRowsQuiz.value = parseInt(numRowsQuiz.value) + 1;
            generateQuizRows();
        }

        function removeQuizRow() {
            let numRowsQuiz = document.getElementById('numRowsQuiz');
            if (parseInt(numRowsQuiz.value) > 1) {
                numRowsQuiz.value = parseInt(numRowsQuiz.value) - 1;
                generateQuizRows();
            }
        }

        populateQuizStudentInfo(); // Populate student info on page load
        generateQuizRows(); // Generate rows when the page loads
        
        // Optionally, you can call updateQuizStudentInfo() on input changes if needed
    </script>
    <input type="submit" value="Submit" name="submit" class="custom-submit">
</form>


<script>
    // Function to generate rows for Grade Quiz
    function generateQuizRows() {
        let numRows = document.getElementById('numRowsQuiz').value;
        let rows = '';
        for (let i = 1; i <= numRows; i++) {
            rows += `
                <tr>
                    <td style="text-align: left; width: 1%">${i}</td>
                    <td style="text-align: left; width: 9%"><input type="text" name="quiz_student_name_${i}" placeholder="Student Name" required></td>
                    <td style="text-align: left; width: 9.4%"><input type="number" name="quiz_student_number_${i}" min="0" placeholder="Student Number" required style="width: 95%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="total_quiz_duringmidterm${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_total_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="quiz_weighted_${i}" min="0" placeholder="" style="width: 90%;"readonly></td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="section" placeholder="Section" value="<?php echo htmlspecialchars(isset($_GET['section']) ? $_GET['section'] : ''); ?>" readonly required>
                    </td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars(isset($_GET['subject']) ? $_GET['subject'] : ''); ?>" readonly required>
                    </td>

                    <!-- Add input fields for Grade Quiz -->
                    <!-- For example: Inputs for contents 1-10, total, weighted -->
                </tr>
            `;
        }
        document.getElementById('quizStudentData').innerHTML = rows;
    }

    // Function to add a row for Grade Quiz
    function addQuizRow() {
        let numRows = document.getElementById('numRowsQuiz');
        numRows.value = parseInt(numRows.value) + 1;
        generateQuizRows();
    }

    // Function to remove a row for GradeQuiz
    function removeQuizRow() {
        let numRows = document.getElementById('numRowsQuiz');
        if (parseInt(numRows.value) > 1) {
            numRows.value = parseInt(numRows.value) - 1;
            generateQuizRows();
        }
    }
    // Automatically generate rows when the page loads
    {
        generateQuizRows();
    };
</script>


<!-- Grade Output/Portfolio Form -->
<form id="gradeOutputPortfolio" method="post" action="process_grades.php" style="display: none;" class="hidden">
    <div style="margin: 0; padding: 0; display: flex; justify-content: flex-start;">
        <div style="width: 100%;">
            <label for="numRowsOutput">Number of Students:</label>
            <input type="number" id="numRowsOutput" min="1" oninput="validity.valid||(value='');" max="100" value="30">
            <button onclick="generateOutputRows()">Generate</button>
            <button onclick="addOutputRow()">+ Row</button>
            <button onclick="removeOutputRow()">- Row</button>
            <table style="font-size: 22px; width: 75.6%; margin-left: 24.4%; margin-right: auto; border-collapse: collapse;">
                <tr>
                    <td style="text-align: center; background-color: green; color: white;" colspan="50">Performance After Midterm</td>
                </tr>
                <tr>
                    <th style="text-align: center; background-color: green; color: white;width: 50%">Grade Output/Portfolio</th>
                </tr>
            </table>
            <table style="font-size: 12px; width: 100%; border-collapse: collapse;">
                <tr>
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Student Name</th>
                    <th style="text-align: center;">Student Number</th>
                    <th style="text-align: center;">Total Output/Portfolio during Midterm</th>
                    <th style="text-align: center;">1</th>
                    <th style="text-align: center;">2</th>
                    <th style="text-align: center;">3</th>
                    <th style="text-align: center;">4</th>
                    <th style="text-align: center;">5</th>
                    <th style="text-align: center;">6</th>
                    <th style="text-align: center;">7</th>
                    <th style="text-align: center;">8</th>
                    <th style="text-align: center;">9</th>
                    <th style="text-align: center;">10</th>
                    <th style="text-align: center;">TOTAL</th>
                    <th style="text-align: center;">WEIGHTED</th>
                    <!-- Add columns for Grade Output/Portfolio data -->
                    <!-- For example: Contents 1-10, Total, Weighted -->
                </tr>
                
                <tr>
                    <tr>
                        <th colspan="3" style="text-align: center;"></th>
                        <th style="text-align: center;">
                            <input type="number" name="TotalOutput_duringMidterm" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 90%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="25" min="0" style="width: 80%;">%
                        </th>
                    </tr>
                    
                    
                </tr>
                <!-- Student data rows -->
                <tbody id="outputStudentData">
                    <!-- Rows will be generated here -->
                </tbody>
            </table>
        </div>
    </div>
    <input type="submit" value="Submit" name="submit" class="custom-submit">
</form>

<script>
    // Function to generate rows for Grade Output/Portfolio
    function generateOutputRows() {
        let numRows = document.getElementById('numRowsOutput').value;
        let rows = '';
        for (let i = 1; i <= numRows; i++) {
            rows += `
                <tr>
                    <td style="text-align: left; width: 1%">${i}</td>
                    <td style="text-align: left; width: 9%"><input type="text" name="output_student_name_${i}" placeholder="Student Name" required></td>
                    <td style="text-align: left; width: 9.4%"><input type="number" name="output_student_number_${i}" min="0" placeholder="Student Number" required style="width: 95%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="TotalOutput_during Midterm${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_number_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_total_${i}" min="0" placeholder="" style="width: 90%;"></td>
                    <td style="text-align: left; width: 5%"><input type="number" name="output_weighted_${i}" min="0" placeholder="" style="width: 90%;"readonly></td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="section" placeholder="Section" value="<?php echo htmlspecialchars(isset($_GET['section']) ? $_GET['section'] : ''); ?>" readonly required>
                    </td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars(isset($_GET['subject']) ? $_GET['subject'] : ''); ?>" readonly required>
                    </td>

                </tr>
            `;
        }
        document.getElementById('outputStudentData').innerHTML = rows;
    }

    // Function to add a row for Grade Output/Portfolio
    function addOutputRow() {
        let numRows = document.getElementById('numRowsOutput');
        numRows.value = parseInt(numRows.value) + 1;
        generateOutputRows();
    }

    // Function to remove a row for Grade Output/Portfolio
    function removeOutputRow() {
        let numRows = document.getElementById('numRowsOutput');
        if (parseInt(numRows.value) > 1) {
            numRows.value = parseInt(numRows.value) - 1;
            generateOutputRows();
        }
    }
    // Automatically generate rows when the page loads
    {
        generateOutputRows();
    };
</script>

<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@GRADE MIDTERM EXAM@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<form id="gradeMidtermExam" method="post" action="process_grades.php"  style="display: none;" class="hidden" class="hidden">
    <div style="margin: 0; padding: 0; display: flex; justify-content: flex-start;">
        <div style="width: 100%;">
            <label for="numRowsMID">Number of Students:</label>
            <input type="number" id="numRowsMID" min="1" oninput="validity.valid||(value='');" max="100" value="30">
            <button onclick="generateMIDRows()">Generate</button>
            <button onclick="addMIDRow()">+ Row</button>
            <button onclick="removeMIDRow()">- Row</button>
            <table style="font-size: 22px; width: 75.6%; margin-left: 24.4%; margin-right: auto; border-collapse: collapse;">
                <tr>
                    <td style="text-align: center; background-color: green; color: white;" colspan="50">Performance After Midterm</td>
                </tr>
                <tr>
                    <th style="text-align: center; background-color: green; color: white;width: 50%">FINAL EXAM</th>
                </tr>
            </table>
            <table style="font-size: 12px; width: 100%; border-collapse: collapse;">
                <tr>
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Student Name</th>
                    <th style="text-align: center;">Student Number</th>
                    <th style="text-align: center;">SCORE</th>
                    <th style="text-align: center;">WEIGHTED</th>
                    <!-- Add columns for Grade MID data -->
                    <!-- For example: Contents 1-10, Total, Weighted -->
                </tr>

                <tr>
                    <tr>
                        <th colspan="3" style="text-align: center;"></th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="0" min="0" style="width: 20%;">
                        </th>
                        <th style="text-align: center;">
                            <input type="number" name="total" value="20" min="0" style="width: 20%;">%
                        </th>
                        
                    </tr>
                    
                    
                </tr>
                <!-- Student data rows -->
                <tbody id="midStudentData">
                    <!-- Rows will be generated here -->
                </tbody>
            </table>
        </div>
    </div>
    <input type="submit" value="Submit" name="submit" class="custom-submit">
</form>

<script>
    // Function to generate rows for Grade 
    function generateMIDRows() {
        let numRows = document.getElementById('numRowsMID').value;
        let rows = '';
        for (let i = 1; i <= numRows; i++) {
            rows += `
                <tr>
                    <td style="text-align: left; width: 1%">${i}</td>
                    <td style="text-align: left; width: 9.3%"><input type="text" name="mid_student_name_${i}" placeholder="Student Name" required></td>
                    <td style="text-align: left; width: 7.4%"><input type="number" name="mid_student_number_${i}" min="0" placeholder="Student Number" required style="width: 95%;"></td>
                    <td style="text-align: center; width: 27.5%"><input type="number" name="mid_total_${i}" min="0" placeholder="" style="width: 20%;"></td>
                    <td style="text-align: center; width: 27.5%"><input type="number" name="mid_weighted_${i}" min="0" placeholder="" style="width: 20%; "readonly></td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="section" placeholder="Section" value="<?php echo htmlspecialchars(isset($_GET['section']) ? $_GET['section'] : ''); ?>" readonly required>
                    </td>
                    <td style="text-align: left; width: 27.5%" class="hidden">
                    <input type="text" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars(isset($_GET['subject']) ? $_GET['subject'] : ''); ?>" readonly required>
                    </td>

                </tr>
            `;
        }
        document.getElementById('midStudentData').innerHTML = rows;
    }

    // Function to add a row for Grade 
    function addMIDRow() {
        let numRows = document.getElementById('numRowsMID');
        numRows.value = parseInt(numRows.value) + 1;
        generateMIDRows();
    }

    // Function to remove a row for Grade 
    function removeMIDRow() {
        let numRows = document.getElementById('numRowsMID');
        if (parseInt(numRows.value) > 1) {
            numRows.value = parseInt(numRows.value) - 1;
            generateMIDRows();
        }
    }
    // Automatically generate rows when the page loads
    window.onload = function() {
        generateMIDRows();
    };
</script>


</div>



</body>
</html>