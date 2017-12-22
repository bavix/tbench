# tbench

### First run

```php
define('DEBUG', false);
```

```bash
rm -r compile/*; php runner.php
```

| Template | Unit  | Time (usage)      | Time (avg)          | Memory (usage) | Memory (avg) |
| :--- | :--- | :--- | :--- | :--- | :--- |
| smarty   | print | 0.031016111373901 | 0.00030604839324951 | 1996608        | 19883.6      |
| twig     | print | 0.033203840255737 | 0.00032809972763062 | 1268432        | 12601.84     |
| fenom    | print | 0.010653972625732 | 0.00010260105133057 | 839480         | 8312.32      |
| flow     | print | 0.065790176391602 | 0.00065385103225708 | 695776         | 6875.28      |

### Second run

```php
define('DEBUG', false);
```

```bash
php runner.php
```

| Template | Unit  | Time (usage)       | Time (avg)          | Memory (usage) | Memory (avg) |
| :--- | :--- | :--- | :--- | :--- | :--- |
| smarty   | print | 0.015439987182617  | 0.0001504373550415  | 216440         | 2081.92      |
| twig     | print | 0.020133018493652  | 0.00019727945327759 | 94192          | 859.44       |
| fenom    | print | 0.0057129859924316 | 5.3129196166992E-5  | 110080         | 1018.32      |
| flow     | print | 0.031866073608398  | 0.00031458616256714 | 122512         | 1142.64      |

### Third run

```php
define('DEBUG', true);
```

```bash
php runner.php
```

| Template | Unit  | Time (usage)       | Time (avg)          | Memory (usage) | Memory (avg) |
| :--- | :--- | :--- | :--- | :--- | :--- |
| smarty   | print | 0.018718957901001 | 0.00018304109573364 | 281096         | 2728.48      |
| twig     | print | 0.03351616859436  | 0.00033115386962891 | 1362248        | 13540        |
| fenom    | print | 0.1225221157074   | 0.0012207102775574  | 762232         | 7539.84      |
| flow     | print | 0.054241895675659 | 0.00053847074508667 | 707440         | 6991.92      |
