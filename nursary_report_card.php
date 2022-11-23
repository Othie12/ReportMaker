<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a webapp that enables you to create student's report cards without wasting time">
        <meta name="keywords" content="report, primary, school, manage, reportcard, easy, design">
        <title>Report card design</title>
        <link rel="stylesheet" href="reportcardcss.css">
        <style>

        </style>
    </head>
    <body class="reportcard">
        <main>
    <section class="title">
        <h1>GRACE NUR & PRIMARY SCHOOL</h1>
        <h2>Buligobe, Mukono Uganda</h2>
        <h2>Tel: 0702954787, 07779000535</h2>
        <div class="terminal_repo">
            <h1>TERMINAL REPORT</h1>
        </div>
    </section>
        <div class="keen">
            <label for="pupil's_name">PUPIL'S NAME:</label>
            <p name="pupil's_name">________________________________</p>

            <label for="class">CLASS:</label>
            <p name="class">___________</p>

            <label for="term">TERM:</label>
            <p name="term">_________</p>

            <label for="position">POSITION:</label>
            <p name="position">_______________</p>

            <label for="outof">OUT OF:</label>
            <p name="outof">_________________</p>

            <label for="year">YEAR:</label>
            <p name="year">___________</p>
        </div>
            <table>
                <tr>
                    <th>SUBJECT</th>
                    <th>FULL MARKS</th>
                    <th>MARKS OBTAINED</th>
                    <th>TEACHER'S REMARKS</th>
                    <th>INITIALS</th>
                </tr>
                <tr>
                    <td>MY ENVIRONMENT</td>
                    <td><p id="fm_myenv">100</p></td>
                    <td><p id="mks_myenv"></p></td>
                    <td><p id="remarks_myenv"></p></td>
                    <td><p id="initial_myenv"></p></td>
                </tr>
                <tr>
                    <td>NUMBERS</td>
                    <td><p id="fm_numbers">100</p></td>
                    <td><p id="mks_numbers"></p></td>
                    <td><p id="remarks_numbers"></p></td>
                    <td><p id="initial_numbers"></p></td>
                </tr>
                <tr>
                    <td>HEALTH HABBITS</td>
                    <td><p id="fm_hh">100</p></td>
                    <td><p id="mks_hh"></p></td>
                    <td><p id="remarks_hh"></p></td>
                    <td><p id="initial_hh"></p></td>
                </tr>
                <tr>
                    <td>SOCIAL DEVELOPMENT</td>
                    <td><p id="fm_sd">100</p></td>
                    <td><p id="mks_sd"></p></td>
                    <td><p id="remarks_sd"></p></td>
                    <td><p id="initial_sd"></p></td>
                </tr>
                <tr>
                    <td>LANGUAGE DEVELOPMENT II</td>
                    <td><p id="fm_ld">100</p></td>
                    <td><p id="mks_ld"></p></td>
                    <td><p id="remarks_ld"></p></td>
                    <td><p id="initial_ld"></p></td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td><p id="total_fm"></p>500</td>
                    <td><p id="total_mks"></p></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        <div class="keen">
            <label for="classtcomment">CLASS TEACHER'S COMMENT:</label>
            <p id="classtcomment">___________________________________________________________________________________________</p>

            <label for="signature">SIGNATURE:</label>
            <p id="classtsignature">____________________</p><br>

            <label for="htcomment">HEADTEACHER'S COMMENT:</label>
            <p id="htcomment">_________________________________________________________________________________________________</p>

            <label for="signature">SIGNATURE:</label>
            <p id="htsignature">____________________</p><br>

            <label for="sch_feesw">SCHOOL FEES (words):</label>
            <p id="schoolfeeswords">___________________________________________________________________________________________</p>

            <label for="sch_feesf">SCHOOL FEES (figures):</label>
            <p id="schoolfeesfigures">______________________</p>

            <label for="strtdate">NEXT TERM BEGINS ON:</label>
            <p id="strtdate">_______________________</p>

            <label for="zamfee">EXSMINATION FEE:</label>
            <p id="zamfee">_____________________</p>
        </div>
    </main>
        <script src="graceRepo.js"></script>
    </body>
</html>
