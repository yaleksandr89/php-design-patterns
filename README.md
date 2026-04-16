# Паттерны проектирования (PHP)

Проект с примерами реализации паттернов проектирования на PHP.

---

## Типы паттернов

### Порождающие (`Creational`)

Отвечают на вопрос: как создавать объекты.

**Паттерны:**

- Factory → [src/Creational/Factory](src/Creational/Factory)
- AbstractFactory → ...

---

### Структурные (`Structural`)

Отвечают на вопрос: как компоновать классы и объекты.

**Паттерны:**

- Adapter → ...
- Bridge → ...
- Composite → ...
- Decorator
    - [Example01 — классический декоратор с базовым декоратором](src/Structural/Decorator/Example01)
    - [Example02 — декоратор без базового декоратора](src/Structural/Decorator/Example02)

---

### Поведенческие (`Behavioral`)

Отвечают на вопрос: как объекты взаимодействуют друг с другом.

**Паттерны:**

- Strategy → [src/Behavioral/Strategy](src/Behavioral/Strategy)
- Mediator → ...
- ChainOfResponsibility → ...
- Observer → ...
- State → ...
- TemplateMethod → ...
- Visitor → ...
- Pipeline → ...

---

## Структура проекта

```text
src/
  Creational/
  Structural/
  Behavioral/
```

Каждый паттерн может содержать несколько примеров:

```text
PatternName/
  Example01/
  Example02/
```

---

## Запуск проекта

### Подготовка окружения

```bash
make docker-init
make docker-up
make composer-init
```

После запуска проект доступен по адресу:

```text
http://design-patterns.local
```

---

## Команды

Запуск контейнеров:

```bash
make docker-up
```

Остановка контейнеров:

```bash
make docker-down
```

Просмотр логов:

```bash
make docker-logs
```

Вход в контейнер PHP:

```bash
make docker-shell
```

Установка зависимостей Composer:

```bash
make composer-install
```

Оптимизация автозагрузки:

```bash
make composer-dump-autoload
```

---

## Отладка

В проекте подключены:

- `Xdebug`
- `symfony/var-dumper`

Можно ставить breakpoints в PhpStorm, использовать `dump()` и `dd()`, а также просматривать Xdebug-логи в директории:

```text
var/log/xdebug/
```

---

## Требования

- Docker
- Docker Compose
- запись в `hosts`:

```text
127.0.0.1 design-patterns.local
```