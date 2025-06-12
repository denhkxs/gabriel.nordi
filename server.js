const express = require('express');
const app = express();
let pageViews = 0;

app.get('/', (req, res) => {
    pageViews++;
    res.send(`<h1>Количество просмотров: ${pageViews}</h1>`);
});

app.listen(3000, () => {
    console.log('Сервер запущен на порту 3000');
});