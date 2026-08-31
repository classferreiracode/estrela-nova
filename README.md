# Estrela Nova CMS

Site institucional e CMS do Movimento Comunitário Estrela Nova. O layout público aprovado foi
preservado em Vue 3 e agora roda no mesmo projeto Laravel 13 do painel Filament.

## Desenvolvimento

Requisitos: PHP 8.3+, Composer, Node 22+ e MySQL/MariaDB (SQLite também funciona localmente).

```sh
composer install
npm install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
composer run dev
```

- site: `http://localhost:8000`
- painel: `http://localhost:8000/admin`
- testes: `php artisan test`
- build: `npm run build`

Para criar o primeiro administrador pelo seed, preencha temporariamente `ADMIN_EMAIL` e
`ADMIN_PASSWORD` no `.env`. Não existem credenciais padrão versionadas.

Consulte [arquitetura](docs/ARCHITECTURE.md) e [deploy](docs/DEPLOYMENT.md).
