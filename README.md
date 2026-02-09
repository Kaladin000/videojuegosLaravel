
 Sistema Web de Gestión de Videojuegos (Laravel)
Aplicación web desarrollada con Laravel para la gestión de videojuegos, desarrolladores y editores (API).

---

 Clonar repositorio
git clone https://github.com/Kaladin000/videojuegosLaravel.git
 DEPLOY
 Levantar contenedores
docker-compose up -d --build
 Artisan help
docker exec -it app php artisan
 Migraciones y seeders (Crear y actualizar SQL)
docker exec -it app php artisan migrate --seed
1
# Sistema Web de Gestión de Videojuegos (Laravel)
​
Aplicación web desarrollada con **Laravel** para la gestión de videojuegos, desarrolladores y editores (API).
​
---
​
### Clonar repositorio
​
```bash
10
git clone https://github.com/Kaladin000/videojuegosLaravel.git
```
​
# DEPLOY
​
### Levantar contenedores
​
```bash
docker-compose up -d --build
```
20
​
### Artisan help
​
```bash
docker exec -it app php artisan
```
​
### Migraciones y seeders (Crear y actualizar SQL)
​
```bash
30
docker exec -it app php artisan migrate --seed
```
​
