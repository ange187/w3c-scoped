# Использовать style scoped и пройти тест w3c

```php
$html = Scoped::fix($html);
```

Подменяет все <style scoped> на <canvas> с javascript возвращающего всё а место. Тег canvas выбра, как самый безобидный для поисковых систем.