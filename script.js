// counter.js
document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, поддерживается ли localStorage
    if (typeof(Storage) !== "undefined") {
        // Получаем текущее значение счетчика или инициализируем его
        let pageViews = localStorage.getItem('pageViews');
        
        if (pageViews === null) {
            pageViews = 1;
        } else {
            pageViews = parseInt(pageViews) + 1;
        }
        
        // Сохраняем новое значение
        localStorage.setItem('pageViews', pageViews);
        
        // Отображаем счетчик
        document.getElementById('counter').textContent = 
            `Количество ваших посещений: ${pageViews}`;
    } else {
        document.getElementById('counter').textContent = 
            "Ваш браузер не поддерживает localStorage";
    }
});