<?php
// Admin settings page
function sb_menu_page() {
    
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $facebook_url = sanitize_text_field($_POST['facebook_input']);
        $whatsapp_url = sanitize_text_field($_POST['whatsapp_input']);
        $linkedin_url = sanitize_text_field($_POST['linkedin_input']);
        $twitter_url = sanitize_text_field($_POST['twitter_input']);

        update_option('sb_facebook_url', $facebook_url);
        update_option('sb_whatsapp_url', $whatsapp_url);
        update_option('sb_linkedin_url', $linkedin_url);
        update_option('sb_twitter_url', $twitter_url);

        echo '<div class="notice notice-success is-dismissible"><p>Settings saved.</p></div>';
    }

    // HTML for settings page
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Buttons</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= SB_PLUGIN_URL . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= SB_PLUGIN_URL . 'assets/font-awesome/css/all.min.css' ?>">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6" >
                <div class="card" style="box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                    <div class="card-header text-center bg-success text-white">
                        <h3>Social Buttons</h3>
                    </div>
                    <div class="card-body">
                        <h5>Enter Your Social URL</h5>
                        <form method="POST" action="">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item font-weight-bold">
                                    <i class="fa-brands fa-facebook text-primary"></i> Facebook
                                    <input type="text" class="form-control mt-2" 
                                    name="facebook_input" 
                                    value="<?php echo get_option('sb_facebook_url'); ?>">
                                </li>
                                <li class="list-group-item">
                                    <i class="fa-brands fa-whatsapp text-success"></i> WhatsApp
                                    <input type="text" class="form-control mt-2" 
                                    name="whatsapp_input"
                                    value="<?php echo get_option('sb_whatsapp_url'); ?>">
                                </li>
                                <li class="list-group-item">
                                    <i class="fa-brands fa-linkedin text-info"></i> LinkedIn
                                    <input type="text" class="form-control mt-2" 
                                    name="linkedin_input"
                                    value="<?php echo get_option('sb_linkedin_url'); ?>">
                                </li>
                                <li class="list-group-item">
                                    <i class="fa-brands fa-twitter text-primary"></i> Twitter
                                    <input type="text" class="form-control mt-2" 
                                    name="twitter_input"
                                    value="<?php echo get_option('sb_twitter_url'); ?>">
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="<?= SB_PLUGIN_URL . 'assets/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
</body>
</html>
    <?php
}
