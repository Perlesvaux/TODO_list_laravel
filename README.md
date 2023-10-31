# Lista de proyectos
Proyecto laravel que implementa CRUD en una base de datos MySQL.

## Configurar base de datos:
Crear base de datos y usuario (permisos de administrador):
```sql
create database proyecto_final;
create user 'usuario_final'@'localhost' IDENTIFIED BY 'Pa$$w0rd';
GRANT CREATE, DROP, ALTER, INSERT, SELECT, UPDATE, DELETE ON proyecto_final.* to 'usuario_final'@'localhost';
```

## Añadir esta configuracion a ".env":
```markdown
DB_DATABASE=proyecto_final
DB_USERNAME=usuario_final
DB_PASSWORD=Pa$$w0rd

```

### NOTA:
```bash
#Este comando craera el directorio 'TODO_list_larave' en el directorio actual
git clone https://github.com/Perlesvaux/TODO_list_laravel.git
composer install
./artisan key:generate
./artisan serve
```
## Endpoint principal:
```bash
localhost:8000/home
```
