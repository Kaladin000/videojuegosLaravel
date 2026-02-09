# Sistema Web de Gestión de Videojuegos (Laravel)

Aplicación web desarrollada con **Laravel** para la gestión de videojuegos, desarrolladores y editores (API).

---

### Clonar repositorio

```bash
git clone https://github.com/Kaladin000/videojuegosLaravel.git
```

# DEPLOY

### Levantar contenedores

```bash
docker-compose up -d --build
```

### Artisan help

```bash
docker exec -it app php artisan
```

### Migraciones y seeders (Crear y actualizar SQL)

```bash
docker exec -it app php artisan migrate --seed
```

