<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fund Management</title>
    <link rel="stylesheet" href="adminfundmanage.css">
</head>

<body>

    <div class="fund-wrapper">

        <h1 class="fund-title">Fund Management</h1>

        <form method="post">

            <div class="fund-row">
                <label>Teacher Salary Fund</label>
                <input type="text" name="teacher_fund">
                <button type="submit">Deposit</button>
            </div>

            <div class="fund-row">
                <label>Utility Fund</label>
                <input type="text" name="utility_fund">
                <button type="submit">Deposit</button>
            </div>

            <div class="fund-row">
                <label>Development Fund</label>
                <input type="text" name="development_fund">
                <button type="submit">Deposit</button>
            </div>

            <div class="fund-actions">
                <button type="submit" class="show-btn">Show Total Fund</button>
            </div>

            <div class="back-btn">
                <a href="homepage1.php" class="back-link">
                    <button type="button">Back</button>
                </a>
            </div>


        </form>

    </div>

</body>

</html>