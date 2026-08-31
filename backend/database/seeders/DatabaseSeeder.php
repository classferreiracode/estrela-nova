<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Document;
use App\Models\Member;
use App\Models\MemberGroup;
use App\Models\Project;
use App\Models\Sponsor;
use App\Models\Testimonial;
use App\Models\TimelineEvent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@estrelanova.org.br',
            'password' => Hash::make('admin123'),
        ]);

        $this->seedBlogPosts();
        $this->seedMembers();
        $this->seedTimelineEvents();
        $this->seedProjects();
        $this->seedTestimonials();
        $this->seedDocuments();
        $this->seedSponsors();
    }

    private function seedBlogPosts(): void
    {
        $posts = [
            [
                'slug' => 'agosto-dourado',
                'title' => 'Agosto Dourado',
                'category' => 'Institucional',
                'date' => '29/08/2025',
                'excerpt' => 'Um compromisso que fortalece vinculos.',
                'image' => '6.png',
                'image_alt' => 'Educacao infantil',
                'content' => [
                    ['text' => 'O Agosto Dourado reforca a importancia do aleitamento materno e da criacao de redes de apoio.'],
                    ['text' => 'No Estrela Nova, o tema inspirou rodas de conversa, acolhimento e troca de experiencias entre familias.'],
                    ['text' => 'Seguimos fortalecendo esses vinculos para garantir cuidado, escuta e informacao para a comunidade.'],
                ],
            ],
            [
                'slug' => 'mes-da-mulher-no-estrela-nova',
                'title' => 'Mes da Mulher no Estrela Nova',
                'category' => 'Eventos',
                'date' => '03/04/2025',
                'excerpt' => 'Palestras sobre autocuidado e empoderamento marcam homenagens as mulheres.',
                'image' => '7.png',
                'image_alt' => 'Voluntariado',
                'content' => [
                    ['text' => 'Durante o Mes da Mulher, realizamos encontros com foco em autocuidado e fortalecimento pessoal.'],
                    ['text' => 'As atividades reuniram participantes de diferentes idades e reforcaram a importancia da escuta ativa.'],
                    ['text' => 'A programacao tambem celebrou as conquistas e os desafios das mulheres na comunidade.'],
                ],
            ],
            [
                'slug' => 'emocao-e-participacao-na-assembleia-geral',
                'title' => 'Emocao e participacao marcam a Assembleia Geral do Estrela Nova',
                'category' => 'Institucional',
                'date' => '10/04/2025',
                'excerpt' => 'Evento tambem apresentou novos membros da diretoria e conselhos.',
                'image' => '8.png',
                'image_alt' => 'Comunidade',
                'content' => [
                    ['text' => 'A Assembleia Geral reuniu moradores, parceiros e equipe para compartilhar resultados e metas.'],
                    ['text' => 'O encontro celebrou a participacao da comunidade e apresentou os novos membros da gestao.'],
                    ['text' => 'Seguimos juntos para fortalecer projetos que geram impacto social no territorio.'],
                ],
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }

    private function seedMembers(): void
    {
        $groups = [
            [
                'title' => 'Diretoria',
                'members' => [
                    ['name' => 'Sergio Alkmim', 'role' => 'Diretor Presidente', 'avatar' => '5.png'],
                    ['name' => 'Renata Alkmim', 'role' => 'Diretora Secretaria', 'avatar' => '5.png'],
                    ['name' => 'Salo Rapoport', 'role' => 'Diretor Tesoureiro', 'avatar' => '5.png'],
                    ['name' => 'Debora de Fatima', 'role' => 'Diretora 1a Vogal', 'avatar' => '5.png'],
                    ['name' => 'Elidia Novaes', 'role' => 'Diretora 2a Vogal', 'avatar' => '5.png'],
                    ['name' => 'Helen de Montille', 'role' => 'Diretora 3a Vogal', 'avatar' => '5.png'],
                    ['name' => 'Marcos Vono', 'role' => 'Diretora 4a Vogal', 'avatar' => '5.png'],
                    ['name' => 'Nathalia Machado', 'role' => 'Diretora 5a Vogal', 'avatar' => '5.png'],
                    ['name' => 'Rafael Otaviano', 'role' => 'Diretora 6a Vogal', 'avatar' => '5.png'],
                ],
            ],
            [
                'title' => 'Conselho Honorario',
                'members' => [
                    ['name' => 'Emi Schoenmaker', 'role' => 'Conselheira Honoraria', 'avatar' => '5.png'],
                    ['name' => 'Tessy Hantzschel', 'role' => 'Conselheira Honoraria', 'avatar' => '5.png'],
                    ['name' => 'Jose Schoenmaker', 'role' => 'Conselheiro Honorario', 'avatar' => '5.png'],
                ],
            ],
            [
                'title' => 'Conselho Consultivo',
                'members' => [
                    ['name' => 'Jose Mario Ribeiro', 'role' => 'Conselheiro Consultivo', 'avatar' => '5.png'],
                    ['name' => 'Malak Poppovic', 'role' => 'Conselheira Consultiva', 'avatar' => '5.png'],
                    ['name' => 'Renata Marques', 'role' => 'Conselheira Consultiva', 'avatar' => '5.png'],
                    ['name' => 'Rogerio Teperman', 'role' => 'Conselheiro Consultivo', 'avatar' => '5.png'],
                ],
            ],
            [
                'title' => 'Conselho Fiscal',
                'members' => [
                    ['name' => 'Mauro Penteado', 'role' => 'Presidente', 'avatar' => '5.png'],
                    ['name' => 'Lucimaro Costa', 'role' => 'Conselheiro Fiscal', 'avatar' => '5.png'],
                    ['name' => 'Luzinete Pontes', 'role' => 'Conselheira Fiscal', 'avatar' => '5.png'],
                ],
            ],
            [
                'title' => 'Conselho Comunitario',
                'members' => [
                    ['name' => 'Wendell Araujo', 'role' => 'Presidente', 'avatar' => '5.png'],
                    ['name' => 'Antonio Flavio Silva', 'role' => 'Conselheiro Comunitario', 'avatar' => '5.png'],
                    ['name' => 'Jose Felippe L. de Abreu', 'role' => 'Conselheiro Comunitario', 'avatar' => '5.png'],
                    ['name' => 'Paulo Lima', 'role' => 'Conselheiro Comunitario', 'avatar' => '5.png'],
                    ['name' => 'Renata Oliveira', 'role' => 'Conselheira Comunitaria', 'avatar' => '5.png'],
                    ['name' => 'Taina Oliveira', 'role' => 'Conselheira Comunitaria', 'avatar' => '5.png'],
                    ['name' => 'Taiane Figueredo', 'role' => 'Conselheira Comunitaria', 'avatar' => '5.png'],
                    ['name' => 'Talita Santana', 'role' => 'Conselheira Comunitaria', 'avatar' => '5.png'],
                ],
            ],
        ];

        foreach ($groups as $i => $groupData) {
            $group = MemberGroup::create(['title' => $groupData['title'], 'order' => $i]);
            foreach ($groupData['members'] as $j => $memberData) {
                Member::create([
                    'member_group_id' => $group->id,
                    'name' => $memberData['name'],
                    'role' => $memberData['role'],
                    'avatar' => $memberData['avatar'],
                    'order' => $j,
                ]);
            }
        }
    }

    private function seedTimelineEvents(): void
    {
        $events = [
            ['year' => '1970', 'text' => 'Campo Limpo era considerado um bairro dormitorio. Nao havia infraestrutura de saude, cultura, esporte, educacao e saneamento basico para atender a populacao. Seus moradores estavam insatisfeitos com as condicoes de vida e sabiam que nao poderiam esperar apenas providencias do Governo.'],
            ['year' => '1978', 'text' => 'Eme e Jos Schoenmaker (casal de origem holandesa) mudam-se para Campo Limpo, para ficarem mais proximos da realidade local. No ano seguinte, comecam a mobilizar a comunidade em busca de melhorias para o bairro, formando grupos de trabalho como costura, recreacao escolar e mutiroes para canalizacao de esgotos e vielas.'],
            ['year' => '1984', 'text' => 'E instituido formalmente o Movimento Comunitario Estrela Nova, com a construcao de sua primeira sede e inicio das atividades com criancas.'],
            ['year' => '1985', 'text' => 'Inicia-se o primeiro convenio com a Prefeitura de Sao Paulo para funcionamento do Centro de Educacao Infantil. Acontece tambem a primeira edicao da Festa Junina do Estrela Nova.'],
            ['year' => '1988', 'text' => 'E firmado o convenio para funcionamento do Centro de Juventude, hoje conhecido como Centro para Criancas e Adolescentes (CCA).'],
            ['year' => '1992', 'text' => 'E inaugurado o Ambulatorio do Estrela Nova, em parceria com a Associacao Beneficente Tobias, com as especialidades de clinica geral, odontologia, psicologia, pediatria e ginecologia.'],
            ['year' => '2000', 'text' => 'Comeca o Projeto Sampa.org, em parceria com o Instituto Florestan Fernandes. Foi um projeto piloto em Sao Paulo, que deu origem ao Programa Telecentro, em 2003. Tambem e instituido formalmente o Stichting Estrela Nova (Circulo de Amigos do Estrela Nova), na Holanda.'],
            ['year' => '2001', 'text' => 'Comeca o Projeto Jovens em Movimento, mobilizado pelo Stichting e financiado pelo Wilde Ganzen. A partir dele, foi financiada a construcao da quadra poliesportiva do Estrela Nova e uma formacao em lideranca comunitaria para jovens.'],
            ['year' => '2004', 'text' => 'Acontece a primeira edicao do evento beneficente O Prato e Seu, principal fonte de recursos livres do Estrela Nova ate hoje.'],
            ['year' => '2009', 'text' => 'E inaugurada a Unidade Basica de Saude Jardim Lidia, uma politica publica conquistada pelo Estrela Nova. Tambem acontece a comemoracao pelos 25 anos da instituicao.'],
            ['year' => '2010', 'text' => 'Inicia-se o Plantao Psicologico para atendimento das comunidades aos sabados. Uma iniciativa que se tornou referencia de atendimento na regiao.'],
            ['year' => '2012', 'text' => 'E firmado o convenio para funcionamento do Centro para Juventude, de atendimento para jovens de 15 a 18 anos. Tambem acontece a implantacao do Posto da Paz na sede do Estrela Nova.'],
            ['year' => '2014', 'text' => 'O Estrela Nova completa 30 anos de fundacao e o aniversario foi comemorado com uma semana inteira de atividades, cada dia dedicado a um nucleo de atendimento.'],
        ];

        foreach ($events as $i => $event) {
            TimelineEvent::create([
                'year' => $event['year'],
                'image' => '/src/assets/images/post_estrela_nova.png',
                'text' => $event['text'],
                'order' => $i,
            ]);
        }
    }

    private function seedProjects(): void
    {
        $projects = [
            [
                'tag' => 'CEI', 'icon' => 'book-open',
                'title' => 'Centro de Educacao Infantil',
                'description' => 'Garantia dos direitos da primeira infancia para criancas de ate 04 anos',
            ],
            [
                'tag' => 'CCA', 'icon' => 'home',
                'title' => 'Centro para Criancas e Adolescentes',
                'description' => 'Acolhimento socioeducativo a educandos de ate 14 anos',
            ],
            [
                'tag' => 'NID', 'icon' => 'monitor',
                'title' => 'Nucleo de Inclusao Digital',
                'description' => 'Oportunidade de acesso a informatica para usuarios a partir dos 07 anos',
            ],
            [
                'tag' => 'NFC', 'icon' => 'briefcase',
                'title' => 'Nucleo Familia e Comunidade',
                'description' => 'Promocao de acoes sociais e de apoio as familias atendidas',
            ],
        ];

        foreach ($projects as $i => $project) {
            Project::create(array_merge($project, ['order' => $i, 'is_active' => true]));
        }
    }

    private function seedTestimonials(): void
    {
        $testimonials = [
            [
                'name' => 'Wellington', 'role' => 'voluntario',
                'text' => 'O que mais me motiva a continuar como voluntario do Estrela Nova e o cuidado que os profissionais tem com os educandos, com suas familias, com o territorio e tambem com os proprios voluntarios.',
            ],
            [
                'name' => 'Caroline', 'role' => 'mae dos educandos Enzo e do Pietro',
                'text' => 'Por varias vezes, fui ate o Estrela Nova (CEI) para amamentar o Pietro. Isso foi muito importante para nos — para a adaptacao dele e para manter o nosso vinculo. E essa e apenas uma das muitas historias de parceria entre a familia e o CEI Estrela Nova.',
            ],
            [
                'name' => 'Anonima', 'role' => 'moradora da comunidade que utiliza o Telecentro',
                'text' => 'O Estrela Nova significa muito para mim, porque e atraves dele que consigo fazer as pesquisas para a escola (…) fazer cursos profissionalizantes online, porque eu nao tenho condicoes financeiras de pagar internet e ter um computador, e so aqui mesmo no Telecentro.',
            ],
        ];

        foreach ($testimonials as $i => $t) {
            Testimonial::create(array_merge($t, ['order' => $i, 'is_active' => true]));
        }
    }

    private function seedDocuments(): void
    {
        $documents = [
            ['title' => 'Relatorio Anual 2024', 'subtitle' => 'Download PDF', 'icon' => 'file-text'],
            ['title' => 'Relatorio Anual 2023', 'subtitle' => 'Download PDF', 'icon' => 'file-text'],
            ['title' => 'Balanco Financeiro 2024', 'subtitle' => 'Download PDF', 'icon' => 'dollar-sign'],
            ['title' => 'Balanco Financeiro 2023', 'subtitle' => 'Download PDF', 'icon' => 'dollar-sign'],
            ['title' => 'Estatuto Social', 'subtitle' => 'Download PDF', 'icon' => 'award'],
            ['title' => 'Politica de Privacidade', 'subtitle' => 'Download PDF', 'icon' => 'shield'],
        ];

        foreach ($documents as $i => $doc) {
            Document::create(array_merge($doc, ['order' => $i, 'is_active' => true]));
        }
    }

    private function seedSponsors(): void
    {
        $sponsors = [
            'Apoiador 1', 'Apoiador 2', 'Apoiador 3', 'Apoiador 4', 'Apoiador 5',
            'Apoiador 6', 'Apoiador 7', 'Apoiador 8', 'Apoiador 9',
        ];

        foreach ($sponsors as $i => $name) {
            Sponsor::create([
                'name' => $name,
                'image' => ($i + 1) . '.png',
                'order' => $i,
                'is_active' => true,
            ]);
        }
    }
}
