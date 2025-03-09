<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enrollment_no = $_POST['enrollment_no'];
    
    // Sample data (Replace this with actual data fetching logic)
    $students = [
        "2300266232" =>
        Name = AYUSH MISHRA
         [
            ["course_code" => "BCS031", "marks" => 72, "max_marks" => 100, "month_year" => "1224", "update_date" => "04 Mar 2025"],
            ["course_code" => "BCS041", "marks" => 52, "max_marks" => 100, "month_year" => "1224", "update_date" => "27 Feb 2025"],
            ["course_code" => "BCS042", "marks" => 68, "max_marks" => 50, "month_year" => "1224", "update_date" => "17 Feb 2025"],
            ["course_code" => "MCS014", "marks" => 75, "max_marks" => 100, "month_year" => "1224", "update_date" => "18 Feb 2025"],
            ["course_code" => "MCS021", "marks" => 51, "max_marks" => 100, "month_year" => "1224", "update_date" => "28 Jan 2025"],
            ["course_code" => "MCS023", "marks" => 40, "max_marks" => 100, "month_year" => "1224", "update_date" => "28 Jan 2025"],
            ["course_code" => "MCS024", "marks" => 86, "max_marks" => 100, "month_year" => "1224", "update_date" => "04 Mar 2025"]
        ]
    ];
    
    if (isset($students[$enrollment_no])) {
        $results = $students[$enrollment_no];
    } else {
        $results = null;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNOU Term End Exam Results</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: white; margin: 0; padding: 0; }
        .header, .footer { background-color: #0d4e95; color: white; text-align: center; padding: 15px; font-size: 20px; }
        .container { width: 80%; margin: auto; background: white; padding: 20px; }
        .result-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .result-table th, .result-table td { border: 1px solid black; padding: 10px; text-align: center; }
        .result-table th { background: #0d4e95; color: white; }
        .not-found { text-align: center; font-size: 20px; color: red; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="header">INDIRA GANDHI NATIONAL OPEN UNIVERSITY<br>TERM END EXAM RESULTS</div>
    <div class="container">
        <?php if ($results): ?>
            <h3>Term End December 2024 Exam Result</h3>
            <p><strong>Enrolment No:</strong> <?php echo htmlspecialchars($enrollment_no); ?></p>
            <table class="result-table">
                <tr>
                    <th>Course Code</th>
                    <th>Marks/Grade</th>
                    <th>Max Marks</th>
                    <th>Month Year</th>
                    <th>Date of Updation on Website</th>
                </tr>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['course_code']); ?></td>
                        <td><?php echo htmlspecialchars($row['marks']); ?></td>
                        <td><?php echo htmlspecialchars($row['max_marks']); ?></td>
                        <td><?php echo htmlspecialchars($row['month_year']); ?></td>
                        <td><?php echo htmlspecialchars($row['update_date']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p class="not-found">Result Not Found</p>
        <?php endif; ?>
    </div>
    <div class="footer">Indira Gandhi National Open University. All Rights Reserved.</div>
</body>
</html>