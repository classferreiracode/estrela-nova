# Estrela Nova CMS — Documentação do Projeto

## Visão Geral

CMS completo para o **Movimento Comunitário Estrela Nova**, uma ONG que atende crianças,
adolescentes e famílias na região do Campo Limpo (SP). O sistema converte uma SPA Vue 3
estática em uma aplicação full-stack com backend Laravel, painel admin Filament e API REST.

## Stack

| Camada | Tecnologia | Versão |
|--------|-----------|--------|
| Frontend | Vue 3 (Composition API) + Vite | ^3.5 / ^7.1 |
| Estilos | Tailwind CSS 4 + DaisyUI 5 | ^4.1 / ^5.3 |
| Backend | Laravel | ^13.8 |
| Admin Panel | Filament | ^5.6 |
| Auth API | Laravel Sanctum | ^4.3 |
| Banco | MySQL | — |
| HTTP | Axios | ^1.16 |

## Estrutura de Diretórios

```
/
├── backend/                  # Aplicação Laravel
│   ├── app/
│   │   ├── Filament/
│   │   │   └── Resources/    # 10 Filament Resources (CRUD admin)
│   │   ├── Http/
│   │   │   └── Controllers/
│   │   │       └── Api/      # 9 Controllers públicos
│   │   └── Models/           # 11 Models (10 de conteúdo + User)
│   ├── database/
│   │   ├── migrations/       # 14 migrations (4 Laravel + 10 do sistema)
│   │   └── seeders/          # DatabaseSeeder com dados dos JSONs originais
│   └── routes/
│       └── api.php           # 10 rotas públicas
├── src/                      # Frontend Vue 3
│   ├── assets/               # Imagens estáticas (banners, logos, sponsors, selos)
│   ├── components/           # Componentes Vue reutilizáveis
│   ├── services/             # Axios service (api.js)
│   ├── views/                # Páginas (Home, About, Blog, BlogPost, Atuacao, Contact, ComoApoiar)
│   └── router/               # Vue Router config
└── docs/PROJECT.md           # Este arquivo
```

## Banco de Dados — MySQL

Database: `estrela_nova`

### Tabelas (10 de conteúdo + 4 Laravel)

| Tabela | Model | Descrição |
|--------|-------|-----------|
| `blog_posts` | BlogPost | Posts do blog com `slug`, `title`, `category`, `date`, `excerpt`, `image`, `image_alt`, `content` (JSON array), `is_published`, `order` |
| `member_groups` | MemberGroup | Grupos de membros (Diretoria, Conselhos). `title`, `description`, `icon`, `order` |
| `members` | Member | Membros da gestão. `member_group_id` (FK), `name`, `role`, `avatar`, `order` |
| `timeline_events` | TimelineEvent | Marcos da linha do tempo. `year`, `image`, `text`, `order` |
| `contacts` | Contact | Mensagens enviadas pelo formulário de contato. `name`, `email`, `phone`, `subject`, `message` |
| `projects` | Project | Projetos da atuação. `tag`, `icon`, `title`, `description`, `image`, `content` (HTML), `is_active`, `order` |
| `testimonials` | Testimonial | Depoimentos. `name`, `role`, `text`, `image`, `is_active`, `order` |
| `documents` | Document | Documentos de transparência. `title`, `subtitle`, `icon`, `file`, `order` |
| `sponsors` | Sponsor | Apoiadores/parceiros. `name`, `image`, `url`, `is_active`, `order` |
| `site_settings` | SiteSetting | Configurações gerais do site (chave-valor). `key`, `value` |

## API REST (pública, sem autenticação)

Base URL: `/api` (proxy Vite) ou `http://localhost:8000/api`

| Método | Endpoint | Controlador | Descrição |
|--------|----------|-------------|-----------|
| GET | `/blog-posts` | BlogPostController@index | Lista posts publicados, ordenados |
| GET | `/blog-posts/{slug}` | BlogPostController@show | Post individual por slug |
| GET | `/members` | MemberController@index | Membros agrupados por grupo |
| GET | `/timeline-events` | TimelineEventController@index | Eventos ordenados |
| POST | `/contacts` | ContactController@store | Enviar formulário de contato |
| GET | `/projects` | ProjectController@index | Projetos ativos |
| GET | `/testimonials` | TestimonialController@index | Depoimentos ativos |
| GET | `/documents` | DocumentController@index | Documentos ordenados |
| GET | `/sponsors` | SponsorController@index | Apoiadores ativos |
| GET | `/settings` | SiteSettingController@index | Configurações (array chave-valor) |

### Resposta Padrão

Todas as responses são JSON. Models com campos de imagem retornam automaticamente:

| Campo | Descrição |
|-------|-----------|
| `image` / `avatar` | Path relativo armazenado (ex: `blog/abc123.jpg`) |
| `image_url` / `avatar_url` | URL completa (ex: `http://localhost:8000/storage/blog/abc123.jpg`) |

Models com `image_url` via `$appends`: BlogPost, TimelineEvent, Project, Testimonial, Sponsor.  
Models com `avatar_url` via `$appends`: Member.

### Endpoint /members (estrutura)

```json
[
  {
    "id": 1,
    "title": "Diretoria",
    "description": "...",
    "icon": "briefcase",
    "members": [
      {
        "id": 1,
        "name": "Nome",
        "role": "Presidente",
        "avatar": "avatars/abc.jpg",
        "avatar_url": "http://localhost:8000/storage/avatars/abc.jpg",
        "order": 1
      }
    ]
  }
]
```

## Painel Admin (Filament 5)

URL: `http://localhost:8000/admin`

**Credentials padrão do seed:** admin@estrelanova.org.br / admin123

### Resources (CRUD)

| Resource | Model | Form fields |
|----------|-------|-------------|
| BlogPostResource | BlogPost | slug, title, category, date, excerpt, **image (FileUpload)**, image_alt, content (Repeater), is_published (Toggle), order |
| MemberGroupResource | MemberGroup | title, description, icon, order |
| MemberResource | Member | member_group_id (Select), name, role, **avatar (FileUpload)**, order |
| TimelineEventResource | TimelineEvent | year, **image (FileUpload)**, text, order |
| ContactResource | Contact | Apenas leitura (ViewRecord): name, email, phone, subject, message |
| ProjectResource | Project | tag, icon, title, description, **image (FileUpload)**, content (RichEditor), is_active (Toggle), order |
| TestimonialResource | Testimonial | name, role, text, **image (FileUpload)**, is_active (Toggle), order |
| DocumentResource | Document | title, subtitle, icon, file, order |
| SponsorResource | Sponsor | name, **image (FileUpload)**, url, is_active (Toggle), order |
| SiteSettingResource | SiteSetting | key, value |

### Upload de Imagens

Todos os campos de imagem usam `Forms\Components\FileUpload` com `->image()`.

| Resource | Diretório no storage |
|----------|---------------------|
| BlogPostResource | `blog/` |
| TimelineEventResource | `timeline/` |
| ProjectResource | `projects/` |
| TestimonialResource | `testimonials/` |
| SponsorResource | `sponsors/` |
| MemberResource | `avatars/` |

Storage público linkado em `public/storage → storage/app/public`.

### Filament 5 — Padrões Específicos

- Namespace de Actions: `Filament\Actions` (não `Filament\Tables\Actions`)
- `EditAction`, `DeleteAction`, `BulkActionGroup`, `DeleteBulkAction` vêm de `Filament\Actions`
- Método `form()` recebe `Schema $schema` e retorna `Schema`
- Resources seguem estrutura: `{Model}Resource.php` + Pages em `{Model}Resource/Pages/{List,Create,Edit}{Model}.php`

## Models — Appends de URL de Imagem

Todos os models com imagem implementam:

```php
protected $appends = ['image_url']; // ou 'avatar_url'

public function getImageUrlAttribute(): ?string
{
    if (!$this->image) {
        return null;
    }
    return str_starts_with($this->image, 'http')
        ? $this->image
        : url('storage/' . $this->image);
}
```

## Frontend Vue 3

### Views

| View | Rota | API consumida | Imagens |
|------|------|---------------|---------|
| HomeView | `/` | getBlogPosts (top 3) | `post.image_url` via BlogCard |
| AboutView | `/sobre` | getTimelineEvents, getMembers | `item.image_url` (timeline), `member.avatar_url` (gestão) |
| BlogView | `/blog` | getBlogPosts | `post.image_url` via BlogCard |
| BlogPostView | `/blog/:slug` | getBlogPost | `post.image_url` direto |
| AtuacaoView | `/atuacao` | (hardcoded) | Imports locais `@/assets/images/` |
| ContactView | `/contato` | submitContact (POST) | — |
| ComoApoiarView | `/como-apoiar` | (hardcoded) | Imports locais |

### Componentes

| Componente | Uso |
|------------|-----|
| BlogCard | Card de post com props: image, imageSrc, imageAlt, category, date, title, excerpt, to |
| SliderComponent | Hero slider com banners locais (Swiper) |
| TimelinePoint | Item da linha do tempo expansível |
| ModalComponent | Modal genérico |

### Serviço API (`src/services/api.js`)

```js
const api = axios.create({ baseURL: '/api' })
```

| Função | Endpoint |
|--------|----------|
| getBlogPosts() | GET /blog-posts |
| getBlogPost(slug) | GET /blog-posts/{slug} |
| getMembers() | GET /members |
| getTimelineEvents() | GET /timeline-events |
| submitContact(data) | POST /contacts |
| getProjects() | GET /projects |
| getTestimonials() | GET /testimonials |
| getDocuments() | GET /documents |
| getSponsors() | GET /sponsors |
| getSettings() | GET /settings |

## Configuração de Ambiente

### Variáveis de Ambiente (`.env`)

```
APP_URL=http://localhost:8000
APP_LOCALE=pt_BR
FRONTEND_URL=http://localhost:5173
DB_CONNECTION=mysql
DB_DATABASE=estrela_nova
```

### Vite Proxy (`vite.config.js`)

```js
server: {
  proxy: {
    '/api': {
      target: 'http://localhost:8000',
      changeOrigin: true,
    },
  },
}
```

### CORS

`config/cors.php` permite `FRONTEND_URL` (origem do Vite).

## Como Rodar

```bash
# Terminal 1 — Backend
cd backend
php artisan serve

# Terminal 2 — Frontend
npm run dev

# Admin
http://localhost:8000/admin
```

Setup completo (primeira vez):
```bash
cd backend
composer install
cp .env.example .env  # configurar MySQL
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
cd ..
npm install
```

## Padrões e Convenções

- **Nomenclatura models**: singular, PascalCase (BlogPost, MemberGroup)
- **Nomenclatura tabelas**: snake_case plural (blog_posts, member_groups)
- **Nomenclatura rotas API**: kebab-case plural (/blog-posts, /timeline-events)
- **Controllers**: cada model tem um controller em `Http/Controllers/Api/`
- **Recursos Filament**: cada model tem um resource em `Filament/Resources/`
- **Views Vue**: Composition API com `<script setup>`, imports de API via `onMounted`
- **Imagens das views estáticas**: imports locais `@/assets/images/...`
- **Imagens do admin (upload)**: `FileUpload` salva em `storage/app/public/{diretorio}/`, retorna URL via `$appends`

## Seed

`DatabaseSeeder.php` popula todas as tabelas com dados dos arquivos JSON originais
(blogPosts.json, members.json, timeline.json) + dados adicionais de projetos,
depoimentos, documentos e apoiadores.

Para resetar o banco:
```bash
php artisan migrate:fresh --seed
```
