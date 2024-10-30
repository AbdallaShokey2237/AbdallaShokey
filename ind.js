document.addEventListener('DOMContentLoaded', (event) => {
    const toggleNightMode = document.querySelector('#toggleNightMode');
    toggleNightMode.addEventListener('click', () => {
        document.body.classList.toggle('night-mode');
    });
});

// مثال لوظيفة فلترة الملابس
document.querySelector('button[type="button"]').addEventListener('click', () => {
    const age = document.querySelector('#filter-age').value;
    const category = document.querySelector('#filter-category').value;
    const condition = document.querySelector('#filter-condition').value;

    // الكود هنا لتطبيق الفلترة على الملابس المتاحة
    console.log("فلترة حسب: العمر = ${age}, الفئة = ${category}, الحالة = ${condition}");
});