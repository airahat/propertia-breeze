@extends("admin.layout.master")
@section("title", "About Us")

@section("content")


    <div class="container py-5" style="max-width: 900px;">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Contact Us</h1>
            <div class="mx-auto" style="height: 3px; width: 60px; background-color: #007bff;"></div>
            <p class="mt-3 text-muted">We'd love to hear from you! Whether you have questions, feedback, or want to list
                your property, our team is ready to help.</p>
        </div>

        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-md-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="example@email.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Property Inquiry" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5"
                                    placeholder="Write your message here..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-5">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Get in Touch</h5>
                        <p>Have questions or need assistance? Reach out to us via any of the methods below:</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><strong>Address:</strong> 123 Propertia St, Dhaka, Bangladesh</li>
                            <li class="mb-2"><strong>Email:</strong> support@propertia.com</li>
                            <li class="mb-2"><strong>Phone:</strong> +880 123 456 789</li>
                            <li class="mb-2"><strong>Office Hours:</strong> Mon-Fri, 9:00 AM - 6:00 PM</li>
                        </ul>
                        <h5 class="fw-bold mb-3">Follow Us</h5>
                        <div>
                            <a href="#" class="btn btn-outline-primary btn-sm me-2"><i class="fa-brands fs-3 fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm me-2"><i class="fa-brands  fs-3 fa-x-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa-brands fs-3 fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


@endsection