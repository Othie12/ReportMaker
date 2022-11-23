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
            <p name="pupil's_name">Othieno Simon</p>

            <label for="class">CLASS:</label>
            <p name="class">P.4</p>

            <label for="term">TERM:</label>
            <p name="term">Three</p>

            <label for="year">YEAR:</label>
            <p name="year">2022</p>
        </div>
            <table>
                <tr>
                    <th>SUBJECT</th>
                    <th>AGG</th>
                    <th>REMARKS</th>
                    <th>INITIALS</th>
                </tr>
                <tr>
                    <td>ENGLISH</td>
                    <td><p id="eng_agg"></p></td>
                    <td><p id="eng_comment"></p></td>
                    <td><p id="eng_initial"></p></td>
                </tr>
                <tr>
                    <td>MATHEMATICS</td>
                    <td><p id="math_agg"></p></td>
                    <td><p id="math_comment"></p></td>
                    <td><p id="math_initial"></p></td>
                </tr>
                <tr>
                    <td>SOCIAL STUDIES</td>
                    <td><p id="sst_agg"></p></td>
                    <td><p id="sst_comment"></p></td>
                    <td><p id="sst_initial"></p></td>
                </tr>
                <tr>
                    <td>INTEGRATED SCIENCE</td>
                    <td><p id="scie_agg"></p></td>
                    <td><p id="scie_comment"></p></td>
                    <td><p id="scie_initial"></p></td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td><p id="total_agg"></p></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        <div class="keen">
            <label for="classtcomment">CLASS TEACHER'S COMMENT:</label>
            <p id="classtcomment"></p>

            <label for="signature">SIGNATURE:</label>
            <p id="classtsignature"></p>

            <label for="htcomment">HEADTEACHER'S COMMENT:</label>
            <p id="htcomment"></p>

            <label for="signature">SIGNATURE:</label>
            <p id="htsignature"></p>

            <label for="sch_feesw">SCHOOL FEES (words):</label>
            <p id="schoolfeeswords"></p>

            <label for="sch_feesf">SCHOOL FEES (figures):</label>
            <p id="schoolfeesfigures"></p>

            <label for="strtdate">NEXT TERM BEGINS ON:</label>
            <p id="strtdate"></p>

            <label for="zamfee">EXSMINATION FEE:</label>
            <p id="zamfee"></p>
        </div>

            <input type="submit" value="login" class="submit">
    

        <button onclick="alert('boom')">DO NOT CLICK THIS BUTTON PLEASE</button>
    </main>
        <script src="graceRepo.js"></script>
    </body>
</html>