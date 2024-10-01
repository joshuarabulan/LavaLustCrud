<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; /* White background */
            font-family: 'Times New Roman', Times, serif; /* Apply Times New Roman font */
        }

        .container {
            width: 80%; /* Panel container width */
            max-width: 80%; /* Prevent container overflow */
            margin-top: 50px; /* Top margin */
        }

        .form-container {
            padding: 50px; /* Reduced padding for a more compact panel */
            background-color: #ded9d8; /* Light grey background */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Floating shadow effect */
            border: 2px solid #000000; /* Black border */
        }

        h4 {
            color: #000000; /* Black heading color */
            text-align: center; /* Center heading */
            margin-bottom: 30px; /* Margin below heading */
            font-style: italic; /* Italic heading */
            font-weight: bold;
        }

        .table {
            margin-top: 20px; /* Margin above the table */
        }

        .table th, .table td {
            text-align: center; /* Center table content */
            padding: 8px; /* Cell padding */
        }

        .table th {
            background-color: #000000; /* Black header background */
            color: #ffffff; /* White text in header */
        }

        .btn-container {
            display: flex;
            justify-content: center; /* Center the buttons */
            gap: 10px; /* Space between buttons */
            margin-top: 10px; /* Margin above buttons */
        }

        .btn-primary, .btn-danger {
            margin-right: 0; /* Remove unnecessary margin */
        }

        .add-user-button {
            display: flex;
            justify-content: flex-end; /* Align Add User button to the right */
            margin-top: 20px; /* Margin above Add User button */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h4>Lavalust Framework</h4> <!-- Display panel title -->

            <?php flash_alert(); ?> <!-- Display any flash alerts -->

            <!-- Table structure to display users -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>EMAIL</th>
                        <th>GENDER</th>
                        <th>ADDRESS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $u): ?>
                    <tr>
                        <td><?= $u['id']; ?></td> <!-- Display user ID -->
                        <td><?= $u['jmr_last_name']; ?></td> <!-- Display last name -->
                        <td><?= $u['jmr_first_name']; ?></td> <!-- Display first name -->
                        <td><?= $u['jmr_email']; ?></td> <!-- Display email -->
                        <td><?= $u['jmr_gender']; ?></td> <!-- Display gender -->
                        <td><?= $u['jmr_address']; ?></td> <!-- Display address -->
                        <td>
                            <!-- Action buttons for each user -->
                            <div class="btn-container">
                                <a href="<?= site_url('user/update/' . $u['id']); ?>" class="btn btn-primary btn-sm">Update</a>
                                <a href="<?= site_url('user/delete/' . $u['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Add User button aligned to the right -->
            <div class="add-user-button">
                <a href="<?= site_url('user/add'); ?>" class="btn btn-primary">Add User</a>
            </div>
        </div>
    </div>
</body>

</html>
