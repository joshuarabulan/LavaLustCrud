<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; /* White background */
            font-family: 'Times New Roman', Times, serif; /* Use same font as Display Panel */
        }

        .form-container {
            max-width: 600px; /* Wider width to match the design */
            margin: 50px auto; /* Centering the form */
            padding: 50px; /* Larger padding for a more unified look */
            background-color: #ded9d8; /* Light grey background for form */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Floating shadow effect */
            border: 2px solid #000000; /* Black border */
        }

        h2 {
            font-size: 24px; /* Unified font size */
            color: #000000; /* Black heading */
            text-align: center; /* Centered heading */
            margin-bottom: 30px; /* Increased margin for consistency */
            font-style: italic; /* Italicized heading to match style */
            font-weight: bold;
        }

        .form-label {
            font-weight: 400;
            color: #495057;
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
            background-color: #000000; /* Black background to match the table header */
            border-color: #000000; /* Black border */
        }

        .btn-primary:hover {
            background-color: #333333; /* Darker shade on hover */
            border-color: #333333; /* Darker border on hover */
        }

        .btn-container {
            display: flex;
            justify-content: space-between; /* Buttons at either end for consistency */
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px; /* Space between form fields */
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Add New User</h2>
            
            <form action="<?= site_url('user/add'); ?>" method="POST">
                <div class="form-group">
                    <label for="jmr_last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="jmr_last_name" name="jmr_last_name" required>
                </div>
                <div class="form-group">
                    <label for="jmr_first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="jmr_first_name" name="jmr_first_name" required>
                </div>
                <div class="form-group">
                    <label for="jmr_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="jmr_email" name="jmr_email" required>
                </div>
                <div class="form-group">
                    <label for="jmr_gender" class="form-label">Gender</label>
                    <select class="form-control" id="jmr_gender" name="jmr_gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jmr_address" class="form-label">Address</label>
                    <textarea class="form-control" id="jmr_address" name="jmr_address" rows="2" required></textarea>
                </div>

                <div class="btn-container">
                    <button type="submit" class="btn btn-primary">Add User</button>
                    <a href="<?= site_url('user/display'); ?>" class="btn btn-primary">All Users</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
