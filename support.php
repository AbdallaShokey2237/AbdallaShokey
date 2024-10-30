<? include 'layout/head.php' ?>



  
<div class="support-container">
    <h1 class="support-heading">فريق الدعم</h1>
    
    <div class="support-content">
        <div class="support-info">
            <h2>نحن هنا لمساعدتك</h2>
            <p>فريق الدعم لدينا متواجد على مدار الساعة للإجابة على استفساراتك ومساعدتك في أي مشكلة قد تواجهها</p>
        </div>

        <div class="support-channels">
            <div class="support-channel">
                <i class="fas fa-envelope"></i>
                <h3>البريد الإلكتروني</h3>
                <p>support@basma.com</p>
            </div>

            <div class="support-channel">
                <i class="fas fa-phone"></i>
                <h3>رقم الهاتف</h3>
                <p>+966 50 123 4567</p>
            </div>

            <div class="support-channel">
                <i class="fas fa-comments"></i>
                <h3>المحادثة المباشرة</h3>
                <p>متوفرة من 8 صباحاً - 8 مساءً</p>
            </div>
        </div>

        <div class="support-form">
            <h2>تواصل معنا</h2>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="الاسم الكامل" class="form-input">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="البريد الإلكتروني" class="form-input">
                </div>
                <div class="form-group">
                    <textarea placeholder="رسالتك" class="form-input" rows="5"></textarea>
                </div>
                <button type="submit" class="btn">إرسال</button>
            </form>
        </div>
    </div>

    </div>
<style>
.support-container {
    padding: 50px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.support-heading {
    text-align: center;
    color: #36384d;
    margin-bottom: 40px;
    font-size: 2.5em;
}

.support-content {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.support-info {
    text-align: center;
    margin-bottom: 30px;
}

.support-info h2 {
    color: #36384d;
    margin-bottom: 15px;
}

.support-info p {
    color: #666;
    font-size: 1.1em;
    line-height: 1.6;
}

.support-channels {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
    margin: 30px 0;
}

.support-channel {
    text-align: center;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    width: 250px;
}

.support-channel i {
    font-size: 2em;
    color: #ff624d;
    margin-bottom: 15px;
}

.support-channel h3 {
    color: #36384d;
    margin-bottom: 10px;
}

.support-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.support-form h2 {
    text-align: center;
    color: #36384d;
    margin-bottom: 20px;
}

.form-input {
    margin-bottom: 15px;
}

textarea.form-input {
    resize: vertical;
}
</style>

    <? include 'layout/footer.php' ?>
