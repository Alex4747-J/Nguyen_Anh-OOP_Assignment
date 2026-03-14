# Valorant Agent Hierarchy — PHP OOP Assignment

A PHP class hierarchy based on Valorant agents, demonstrating object-oriented programming concepts including inheritance, interfaces, and traits.

## Requirements Covered

| Requirement | Implementation |
|---|---|
| Parent class (root) | `Agent` — defines shared properties and methods |
| 3 child classes | `Duelist`, `Sentinel`, `Controller` — each extends `Agent` |
| 4 grandchild classes | `Jett`, `Reyna`, `Killjoy`, `Omen` — extend their respective parent |
| 3+ methods | `describe()`, `attack()`, `useAbility()` — defined on `Agent`, overridden in subclasses |
| 3+ properties | `$name`, `$role`, `$health` — defined on `Agent`, inherited by all |
| Trait | `HasSmokeTrait` — shared by `Jett` and `Omen` across different branches |
| Interface | `AgentInterface` — implemented by `Agent`, enforces method contract |
| Autoloader | `spl_autoload_register` in `index.php` loads classes by namespace |
| Type hints | All parameters and return types are type-hinted |
| PHPDoc | All classes, properties, and methods are documented |

## How to Run

Open `index.php` in a PHP-enabled web server or run from the command line:

```bash
php index.php
```

## Concepts Demonstrated

- **Inheritance**: Child classes extend parent classes and override methods
- **Interfaces**: `AgentInterface` defines a contract all agents must follow
- **Traits**: `HasSmokeTrait` shares smoke functionality between unrelated classes
- **Encapsulation**: Properties are `protected` and accessed within the class hierarchy
- **Polymorphism**: A type-hinted function accepts any `AgentInterface` object
- **Autoloading**: `spl_autoload_register` loads classes automatically by namespace