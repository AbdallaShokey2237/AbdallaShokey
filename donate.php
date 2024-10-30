<? include 'layout/head.php' ?>


    <div class="container">
        <section>
            <h2>تبرع بالملابس</h2>
            <form>
                <label for="image">الصورة:</label>
                <input type="file" id="image" name="image">
                
                <label for="name">الاسم:</label>
                <input type="text" id="name" name="name">
                
                <label for="category">الفئة:</label>
                <select id="category" name="category">
                    <option value="male">ذكر</option>
                    <option value="female">أنثى</option>
                </select>

                <label for="type">النوع:</label>
                <select id="type" name="type">
                    <option value="tshirt">تيشيرت</option>
                        <option value="shirt">شميز</option>
                        <option value="trouser">بنطلون</option>
                        <option value="shoes">حذاء</option>
                        <option value="cloak">عباءة</option>
                        <option value="other">اخرى</option>
                </select>
                
                <label for="age">العمر:</label>
                <input type="number" id="age" name="age">
                
                <label for="condition">الحالة:</label>
                <input type="text" id="condition" name="condition">
                
                <button type="submit">تبرع</button>
            </form>
        </section>
    </div>
 
  

 <? include 'layout/footer.php' ?>