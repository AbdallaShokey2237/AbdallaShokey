<? include 'layout/head.php' ?>

<div class="page-wrapper">
    <main class="main-content">
        <div class="container">
            <section class="login-form">
                <h2 style="text-align: center; margin-bottom: 30px;">تسجيل الدخول</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="password">كلمة المرور</label>
                        <input type="password" id="password" name="password" class="form-input" required>
                    </div>

                    <button type="submit" class="btn">تسجيل الدخول</button>

                <div class="alternative-login">
                    <p style="text-align: center; margin: 20px 0;">أو</p>
                    <button class="google-login" style="width: 100%; padding: 12px; border-radius: 8px; background: #fff; border: 1px solid #ff624d; color: #36384d; cursor: pointer; transition: all 0.3s;">
                        <i class="fab fa-google"></i>
                        تسجيل الدخول بحساب جوجل
                    </button>
                </div>

                <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
                    <p style="margin: 0 10px;">ليس لديك حساب؟</p>
                    <a href="signup.php" style="color: #ff624d; text-decoration: none; padding: 8px 15px; border: 1px solid #ff624d; border-radius: 5px; transition: all 0.3s;">إنشاء حساب جديد</a>
                </div>
            </section>
        </div>
    </main>
</div>

<? include 'layout/footer.php' ?>