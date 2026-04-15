<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-white text-center border-0 pt-4">
                    <h2 class="fw-bold text-dark">Create New Post</h2>
                    <p class="text-muted mb-0">Fill in the details below</p>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf

                        <!-- Hidden User ID -->
                        <input type="hidden" value="2" name="user_id">

                        <!-- Title -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Post Title</label>
                            <input type="text"
                                   name="title"
                                   class="form-control form-control-lg rounded-3"
                                   placeholder="Enter post title">
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description"
                                      rows="5"
                                      class="form-control rounded-3"
                                      placeholder="Write your description here..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">
                                Submit Post
                            </button>
                        </div>

                    </form>

                </div>

                <div class="card-footer bg-white border-0 text-center pb-4">
                    <small class="text-muted">Your content will be published after submission.</small>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
