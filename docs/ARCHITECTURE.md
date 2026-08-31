# Arquitetura do CMS Estrela Nova

## Decisão

O projeto é um monólito Laravel 13 com Vue 3 e Filament 5. A aplicação pública e o painel
compartilham domínio, banco, uploads e processo de deploy. O Vue aprovado foi movido sem
redesenho para `resources/js/site`; o painel fica em `/admin` e a API pública em `/api`.

## Conteúdo gerenciável

- páginas institucionais livres, publicação, agendamento, SEO e imagem de destaque;
- menus de cabeçalho e rodapé com ordenação e links internos/externos;
- CTAs por posição, estilo e janela de exibição;
- biblioteca de mídia e documentos PDF;
- blog, projetos, equipe e grupos, trajetória, depoimentos, parceiros e configurações;
- mensagens recebidas pelo formulário de contato e inscrições na newsletter.

As telas aprovadas permanecem como templates Vue. Conteúdos estruturados já conectados à API
(blog, atuação, equipe, trajetória e transparência) podem ser atualizados sem mexer no layout.
Novas páginas usam o template editorial padrão e entram no menu pelo painel.

## Rotas

- `/`: site público Vue;
- `/admin`: autenticação e painel Filament;
- `/api/*`: leitura pública do conteúdo e envio do contato;
- `/{slug}`: página editorial criada no CMS.

## Repositório

- `master`: versão original publicada antes da retomada;
- `archive/pre-cms-2026-08-31`: snapshot do layout aprovado e do rascunho antigo do CMS;
- `feature/laravel-cms-monolith`: implementação monolítica atual.
