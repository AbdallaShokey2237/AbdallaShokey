<? include 'layout/head.php' ?>

<div class="container">
    <section class="signup-form">
        <h2>إنشاء حساب جديد</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullname">الاسم الكامل</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">تأكيد كلمة المرور</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <button type="submit" class="submit-btn">إنشاء الحساب</button>
        </form>

        <div class="alternative-signup">
            <p>أو</p>
            <button class="google-signup">التسجيل باستخدام حساب جوجل</button>
        </div>

        <p class="login-link">لديك حساب بالفعل؟ <a href="login.php">تسجيل الدخول</a></p>
    </section>
</div>





    <? include 'layout/footer.php' ?>