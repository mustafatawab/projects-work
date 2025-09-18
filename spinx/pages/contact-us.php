<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preload" as="image" href="../assets/others/contact-us.webp">
    <link rel="stylesheet" href="../../styles/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php
    include('../common/header.php');

    ?>

    <!-- Hero Section -->
    <div class="position-relative">
        <div style="height: 300px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/others/contact-us.webp');" class="w-100 bg-secondary d-flex align-items-center justify-content-center">
            <h1 class="text-white display-4">Contact Us</h1>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <span class="badge bg-info text-dark mb-3">Get in Touch</span>
                <h2 class="mb-3">Join Us In<br>Revolutionising<br>Industries.</h2>
                <p class="text-muted">We're currently working to scale our operations across multiple markets. Contact us today to find out more.</p>
            </div>
            <div class="col-lg-6">
                <img src="../assets/others/contact-us1.webp" alt="Contact Image" class="img-fluid rounded" style="object-fit: cover;">
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row mt-5">
            <div class="col-lg-8">
                <form id="contactForm" class="bg-light p-4 rounded">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Your name*" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Email*" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="6" placeholder="Message*" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark px-4">Send message</button>
                    <div id="formMessage" class="mt-3"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include('../common/footer.php');
    ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('/contact-form-handle.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                const messageDiv = document.getElementById('formMessage');
                if (data.status === 'success') {
                    messageDiv.className = 'alert alert-success';
                    this.reset(); // Clear form
                } else {
                    messageDiv.className = 'alert alert-danger';
                }
                messageDiv.textContent = data.message;
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('formMessage').className = 'alert alert-danger';
                document.getElementById('formMessage').textContent = 'An error occurred. Please try again.';
            });
    });
</script>