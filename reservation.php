<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1 class="logo">Railway Reservation System</h1>
    </header>
    
    <div class="content-container">
        <h2 class="section-title">Reservation Details</h2>
        <div class="reservation-details">
            <p><strong>Source:</strong> <?php echo $_POST['source']; ?></p>
            <p><strong>Destination:</strong> <?php echo $_POST['destination']; ?></p>
            <p><strong>Date:</strong> <?php echo $_POST['date']; ?></p>
            <p><strong>Class:</strong> <?php echo $_POST['class']; ?></p>
            <p><strong>Number of Adults:</strong> <?php echo $_POST['adults']; ?></p>
            <p><strong>Number of Children:</strong> <?php echo $_POST['children']; ?></p>
        </div>
        
        <!-- "Confirm" button to proceed to passenger details -->
        <button class="confirm-button" id="confirmBtn">Confirm</button>
        
        <!-- Passenger details section -->
        <div class="passenger-details" id="passengerDetails">
            <!-- Passenger input fields will be added here dynamically -->
        </div>
    </div>
    
    <footer class="footer">
        <p class="footer-text">&copy; 2023 Railway Reservation System</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const confirmBtn = document.getElementById("confirmBtn");
            const passengerDetails = document.getElementById("passengerDetails");

            confirmBtn.addEventListener("click", function () {
                const numAdults = <?php echo $_POST['adults']; ?>;
                const numChildren = <?php echo $_POST['children']; ?>;

                passengerDetails.innerHTML = ""; // Clear previous passenger details

                // Create input fields for adults
                for (let i = 1; i <= numAdults; i++) {
                    createPassengerInput("Adult " + i);
                }

                // Create input fields for children
                for (let i = 1; i <= numChildren; i++) {
                    createPassengerInput("Child " + i);
                }
            });

            function createPassengerInput(labelText) {
                const label = document.createElement("label");
                label.textContent = labelText;
                const input = document.createElement("input");
                input.type = "text";
                input.name = labelText.toLowerCase().replace(" ", "_");
                input.placeholder = labelText + " Name";
                passengerDetails.appendChild(label);
                passengerDetails.appendChild(input);
                passengerDetails.appendChild(document.createElement("br"));
            }
        });
    </script>
</body>
</html>
