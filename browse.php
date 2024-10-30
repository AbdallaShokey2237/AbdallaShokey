
<? include 'layout/head.php' ?>



    <div class="container">
        <section>
            <h2>تصفح الملابس</h2>
            <div class="filter">
               <div class="dis age">
                <label for="filter-age">العمر:</label>
                <select id="filter-age" name="filter-age">
                    <option value="age">5 - 10</option>
                    <option value="age">10 - 17</option>
                    <option value="age">17 - 20</option>
                    <option value="age">20 - 24</option>
                    <option value="age">24 </option>
                </select>
               </div>
                
              <div class="dis category">
                <label for="filter-category">الفئة:</label>
                <select id="filter-category" name="filter-category">
                    <option value="male">ذكر</option>
                    <option value="female">أنثى</option>
                </select>
              </div>
                
                <div class="dis condition">
                    <label for="filter-condition">الحالة:</label>
                <select id="filter-condition" name="filter-condition">
                    <option value="male">مستخدم</option>
                    <option value="female">جديد</option>
                </select> 
                </div>

                <div class="dis type">
                    <label for="filter-type">الفئة:</label>
                    <select id="filter-type" name="filter-type">
                        <option value="tshirt">تيشيرت</option>
                        <option value="shirt">شميز</option>
                        <option value="trouser">بنطلون</option>
                        <option value="shoes">حذاء</option>
                        <option value="cloak">عباءة</option>
                        <option value="other">اخرى</option>
                    </select>
                  </div>
                    

            </div>
            <button type="button">فلترة</button>

            <div class="gallery">
                <img src="clothing1.jpg" alt="ملابس 1">
                <img src="clothing2.jpg" alt="ملابس 2">
                <img src="clothing3.jpg" alt="ملابس 3">
            </div>
        </section>
    </div>


<? include 'layout/footer.php' ?>