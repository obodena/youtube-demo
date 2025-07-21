<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IdeaHub - Share Your Ideas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Modern Color Palette */
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #7209b7;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --success: #4caf50;
            --danger: #f44336;
            --border-radius: 10px;
            --box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            color: var(--dark);
            min-height: 100vh;
            padding: 20px;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(67, 97, 238, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(114, 9, 183, 0.05) 0%, transparent 20%);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 1.5rem 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 2.2rem;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
        }

        .header b {
            color: var(--accent);
            font-weight: 700;
        }

        /* Navigation Bar */
        .nav-bar {
            background: linear-gradient(90deg, var(--primary-dark) 0%, var(--secondary) 100%);
            height: auto;
            padding: 0.8rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 2rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .nav-button {
            background: rgba(255, 255, 255, 0.15);
            border: none;
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-button i {
            font-size: 1rem;
        }

        .nav-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }

        .nav-button a {
            color: white;
            text-decoration: none;
        }

        /* Auth Message */
        .auth-message {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.2rem;
            box-shadow: var(--box-shadow);
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--success);
            animation: fadeIn 0.8s ease;
        }

        .auth-message::before {
            content: "✓";
            font-weight: bold;
            font-size: 1.4rem;
        }

        /* Forms */
        .form-container {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.8rem;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            margin-bottom: 2rem;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            color: var(--primary);
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-container h2 i {
            color: var(--secondary);
        }
        /* Form Elements */
        .input-group {
            margin-bottom: 1.2rem;
        }
        input, textarea {
            width: 100%;
            padding: 0.8rem 1.2rem;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }
        input:focus, textarea:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }
        /* Buttons */
        .btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }

        .btn-logout {
            background: var(--danger);
        }

        .btn-logout:hover {
            background: #d32f2f;
            box-shadow: 0 5px 15px rgba(244, 67, 54, 0.3);
        }

        /* Responsive Design */
        .auth-forms {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .auth-forms {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 3rem;
            padding: 1.5rem;
            color: var(--gray);
            font-size: 0.9rem;
            border-top: 1px solid var(--light-gray);
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer a:hover {
            color: var(--secondary);
            text-decoration: underline;
        }
        
        /* Posts Section */
        .posts-section {
            margin: 2rem 0;
            padding: 1.5rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary);
            font-size: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
        }
        
        .post-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            border-left: 4px solid var(--primary);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        
        .post-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(67, 97, 238, 0.05) 0%, transparent 100%);
            pointer-events: none;
        }
        
        .post-title {
            color: var(--primary-dark);
            margin-bottom: 1rem;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .post-title::before {
            content: '💡';
            font-size: 1.2rem;
        }
        
        .post-body {
            color: var(--dark);
            line-height: 1.7;
            font-size: 1.05rem;
            padding-left: 1.8rem;
            position: relative;
        }
        
        .post-body::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .post-meta {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.2rem;
            font-size: 0.85rem;
            color: var(--gray);
            gap: 15px;
        }
        .post-meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .empty-posts {
            text-align: center;
            padding: 2rem;
            color: var(--gray);
            font-style: italic;
            grid-column: 1 / -1;
        }
        .empty-posts i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--light-gray);
        }
        .post-card-new {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            border-top: 3px solid var(--primary);
            transition: var(--transition);
        }
        
        .post-card-new h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .post-card-new .post-content {
            color: var(--dark);
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 1.2rem;
        }
        
        .post-author {
            font-weight: 600;
            color: var(--secondary);
        }
        
        .post-date {
            color: var(--gray);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">SHARE YOUR <b>IDEAS</b> WITH US </div>
        
        <div class="nav-bar">
            <button class="nav-button"><i class="fas fa-home"></i> <a href="">Home</a></button>
            <button class="nav-button"><i class="fas fa-info-circle"></i> <a href="">About</a></button>
            <button class="nav-button"><i class="fas fa-envelope"></i> <a href="">Contact</a></button>
            <button class="nav-button"><i class="fas fa-question-circle"></i> <a href="">Help and support</a></button>
        </div>
        
        <!-- Blade Auth Section - This will be processed on the server -->
        <?php if(auth()->check()): ?>
            <div class="auth-message">
                You registered successfully
            </div>
            
            <form action="/logout" method="POST" class="form-container">
                <?php echo csrf_field(); ?>
                <button class="btn btn-logout"><i class="fas fa-sign-out-alt"></i> Log out</button>
            </form>         
            <div class="form-container">
                <h2><i class="fas fa-plus-circle"></i> Create new post</h2>
                <form action="/create-post" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="text" name="title" placeholder="Post title">
                    </div>
                    <div class="input-group">
                        <textarea name="body" placeholder="Body content..."></textarea>
                    </div>
                    <button class="btn"><i class="fas fa-save"></i> Save post</button>
                </form>
            </div>
        <?php else: ?>
            <div class="auth-forms">
                <div class="form-container">
                    <h2><i class="fas fa-user-plus"></i> Register</h2>
                    <form action="/register" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input name="name" type="text" placeholder="Name">
                        </div>
                        <div class="input-group">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <button class="btn"><i class="fas fa-user-check"></i> Register</button>
                    </form>
                </div>            
                <div class="form-container">
                    <h2><i class="fas fa-sign-in-alt"></i> Login</h2>
                    <form action="/login" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input name="loginname" type="text" placeholder="Name">
                        </div>
                        <div class="input-group">
                            <input name="loginpassword" type="password" placeholder="Password">
                        </div>
                        <button class="btn"><i class="fas fa-lock-open"></i> Login</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Posts Section -->
        <div class="posts-section">
            <h2 class="section-title">All Posts</h2>
            
            
            </div>
        
            
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="post-card-new">
                <h3><?php echo e($post['title']); ?></h3>
                <div class="post-content"><?php echo e($post['body']); ?></div>
                <div>
                    <span class="post-author"><?php echo e(auth()->user() ? auth()->user()->name : 'Anonymous'); ?></span>
                    <span class="post-date">Today</span>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <div class="footer">
            <p>&copy; 2023 IdeaHub. Share your thoughts with the world.</p>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
           
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            const inputs = document.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.02)';
                    this.style.boxShadow = '0 0 0 3px rgba(67, 97, 238, 0.2)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                    this.style.boxShadow = 'none';
                });
            });          
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const submitBtn = this.querySelector('button[type="submit"], button:not([type])');
                    if (!submitBtn) return;
                    
                    const originalText = submitBtn.innerHTML;                    
                   submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                    submitBtn.disabled = true;                   
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 1500);
                });
            });
            
            // Add animation to post cards
            const postCards = document.querySelectorAll('.post-card-new');
            postCards.forEach((card, index) => {
                card.style.animation = `fadeIn 0.5s ease ${index * 0.1}s forwards`;
                card.style.opacity = '0';
            });
        });
    </script>
</body>
</html><?php /**PATH C:\Users\hp\Desktop\youtube-demo\resources\views/home.blade.php ENDPATH**/ ?>