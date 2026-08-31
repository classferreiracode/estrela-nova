# Deploy em hospedagem compartilhada

## Requisitos

- PHP 8.3 ou superior, MySQL 8/MariaDB compatível e extensões `mbstring`, `intl`, `pdo_mysql`,
  `fileinfo`, `openssl` e `tokenizer`;
- domínio com document root apontando para a pasta `public` do projeto;
- HTTPS e permissão de escrita em `storage` e `bootstrap/cache`.

Nunca exponha a raiz do Laravel como document root. Se o provedor limitar o domínio a
`public_html`, mantenha a aplicação fora dela e publique em `public_html` somente o conteúdo de
`public`, ajustando os caminhos de `public/index.php` para a pasta real da aplicação.

## Primeira publicação

1. Crie o banco e copie `.env.example` para `.env` no servidor.
2. Configure `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL`, banco, e-mail e uma `APP_KEY`.
3. Informe `ADMIN_EMAIL` e `ADMIN_PASSWORD` apenas durante o primeiro seed.
4. Execute `php artisan migrate --force`, `php artisan db:seed --force` e
   `php artisan storage:link` pelo terminal do painel de hospedagem.
5. Remova `ADMIN_PASSWORD` do `.env` após criar o usuário e execute
   `php artisan optimize`.

O workflow `deploy-shared-host.yml` sempre gera um artefato pronto, já com `vendor` e o build
Vue. Para envio automático por FTPS, crie o environment `production`, os secrets `FTP_HOST`,
`FTP_USER`, `FTP_PASSWORD`, a variável `FTP_REMOTE_DIR` e defina `ENABLE_FTP_DEPLOY=true`.
O `.env`, logs e uploads não são enviados nem sobrescritos.

## Atualizações

Após cada upload, execute pelo terminal do host:

```sh
php artisan migrate --force
php artisan optimize:clear
php artisan optimize
```

Faça backup do banco e de `storage/app/public` antes de uma atualização de produção.
