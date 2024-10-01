<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; /* White background for consistency */
            font-family: 'Times New Roman', Times, serif; /* Unified font style */
        }

        .container {
            width: 100%; 
            max-width: 600px; /* Adjusted width for consistency */
            margin-top: 50px; /* Top margin to center form */
        }

        .form-container {
            padding: 50px; /* Consistent padding */
            background-color: #ded9d8; /* Light grey background matching other forms */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Consistent floating effect */
            border: 2px solid #000000; /* Black border for uniformity */
        }

        h2 {
            font-size: 24px; 
            font-style: italic; 
            color: #000000; /* Black heading to match other panels */
            text-align: center; /* Centered heading */
            margin-bottom: 30px; /* Added margin for spacing */
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px; /* Consistent spacing between fields */
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            font-size: 14px;
            padding: 10px 20px;
            background-color: #000000; /* Black button for uniform style */
            border-color: #000000; /* Black border */
        }

        .btn-primary:hover {
            background-color: #333333; /* Darker shade on hover */
            border-color: #333333; /* Darker border on hover */
        }

        .btn-container {
            display: flex;
            justify-content: space-between; /* Align buttons to left and right */
            margin-top: 20px; /* Consistent margin */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Update User</h2>
            <?php flash_alert(); ?>
            <form action="<?= site_url('user/update/' . segment(3)); ?>" method="POST">
                <div class="form-group">
                    <label for="jmr_last_name">Last Name:</label>
                    <input type="text" class="form-control" id="jmr_last_name" placeholder="Enter last name" name="jmr_last_name" value="<?= $u['jmr_last_name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jmr_first_name">First Name:</label>
                    <input type="text" class="form-control" id="jmr_first_name" placeholder="Enter first name" name="jmr_first_name" value="<?= $u['jmr_first_name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jmr_email">Email:</label>
                    <input type="email" class="form-control" id="jmr_email" placeholder="Enter email" name="jmr_email" value="<?= $u['jmr_email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jmr_gender">Gender:</label>
                    <input type="text" class="form-control" id="jmr_gender" placeholder="Enter gender" name="jmr_gender" value="<?= $u['jmr_gender']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jmr_address">Address:</label>
                    <input type="text" class="form-control" id="jmr_address" placeholder="Enter address" name="jmr_address" value="<?= $u['jmr_address']; ?>" required>
                </div>

                <div class="btn-container">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= site_url('user/display'); ?>" class="btn btn-primary">All Users</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
