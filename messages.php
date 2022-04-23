<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Instalação Suporte 1.4.5',
    'next' => 'Avançar',


    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title'   => 'Sistema de Suporte',
        'message' => 'Bem-vindo ao assistente de configuração.',
    ],


    /**
     *
     * Home page view translations.
     *
     */
    'homepage' => [
        'facing_problem'   => 'Esta enfrentando um problema? Tente pesquisar aqui...',
        'form_title' => '<span>Sistema Eletrônico do Serviço de Informação ao Cidadão - e-SIC</span>',
        'form_subtitle' => 'Solicite Documentos e dados relativos aos órgãos e entidades da Administração Pública de forma rápida e eficaz.',

        'placeholders' => [
            'subject'   => 'Assunto do chamado',
            'department'   => 'Que tipo de chamado você precisa?',
            'message'   => 'Digite sua mensagem aqui',
            'file'   => 'ANEXAR ARQUIVO',
        ]
    ],



    /**
     *
     * Dashboard Language translations
     *
     */
    'dashboard' => [
        'pageTitle' => 'Dashboard | ',
        'allTickets' => 'Todos os chamados',
        'newTickets' => 'Chamados novos',
        'solvedTickets' => 'Chamados resolvidos',
        'pendingTickets' => 'Chamados pendentes',
        'recentTickets' => 'Chamados recentes',
        'ticketID' => 'ID',
        'ticketTitle' => 'Título',
        'department' => 'Departamento',
        'date' => 'Data',
        'client' => 'Usuário',
        'status' => 'Status',
        'noTickets' => 'Nenhum chamados encontrado',
        'newClient' => 'Novos usuários',
        'allClient' => 'Todos os usuários',
        'noClients' => 'Nenhum usuários encontrado',
        'staffStatus' => 'Status da equipe',
        'allStaffs' => 'Todos da equipe',
        'staffName' => 'Nome',
        'department' => 'Departamento',
        'assignedTask' => 'Acompanhando',
        'solved' => 'Resolvidos',
        'noStaffs' => 'Nenhum membro encontrado',
        'statisticsTitle' => 'Estatísticas do mês',
        'company_name' => 'Nome da empresa',
    ],
    


    /**
     *
     * Tickets page language Translations
     *
     */
    
    'tickets'   => [
        'pageTitle' => 'Buscar por ',
        'title' => ' Chamado  | ',
        'tickets' => ' Chamados',
        'searchTitle' => ' Mostrando resultados da pesquisa para',
        'ticketID' => 'ID',
        'ticketTitle' => 'Título',
        'department' => 'Departamento',
        'date' => 'Data',
        'client' => 'Usuário',
        'status' => 'Status',
        'action' => 'Ação',
        'noTickets' => 'Nenhum chamado encontrado',
    ],



    /**
     *
     * Single Ticket page language Translations
     *
     */
    'singleTicket' => [
        'id' => 'ID:',
        'attachedFile' => 'Anexo:',
        'ticketID' => 'ID:',
        'client' => 'Usuário',
        'supportType' => 'Departamento:',
        'ticketStatus' => 'Status:',
        'assignedTicket' => 'Acompanhando:',
        'solvedBy' => 'Resolvido por:',
        'assignNewTicket' => 'Acompanhar',
        'assignThisTicket' => 'Acompanhar Chamado',
        'notAssignedYet' => 'Não atribuído',
        'noStaffsFound' => 'Nenhum membro encontrado',
        'updateStatus' => 'Atualizar status',
        'updateTicketStatus' => 'Atualizar status',
        'solved' => 'Resolvido',
        'pending' => 'Pendente',
    ],


    /**
     *
     * Replies language translations
     *
     */
    'replies' => [
        'label' => 'Responder chamado',
        'AttachedFIle' => 'Anexo:',
        'attachFIle' => 'Anexar arquivo',
        'sendReply' => 'Responder',
    ],


    /**
     *
     * All Clients
     *
     */
    'allClients'    => [
        'pageTitle' => 'Usuários | ',
        'title' => 'Usuários ',
        'name' => 'Nome',
        'email' => 'E-mail',
        'clientImage' => 'Avatar',
        'registeredAt' => 'Registro',
        'action' => 'Ação',
        'noClients' => 'Nenhum Usuário encontrado',
    ],


    /**
     *
     * Dashboard Add new clients language translations
     *
     */
    'addNewClient'  => [
        'title'  => 'Adicionar usuário',
        'editTitle'  => 'Editar usuário',
        'first_name'  => 'first_name',
        'last_name'  => 'last_name',
        'email'  => 'email',
        'password'  => 'password',
        'clientImage'  => 'Avatar',
        'addClientBtn'  => 'Adicionar usuário',
        'editClientBtn'  => 'Editar usuário',
        'placeholders' => [
            'firstName'   => 'João',
            'lastName'   => 'Silva',
            'email'   => 'joao@empresa.com',
            'file'   => 'Selecionar imagem&hellip;',
        ],
    ],


    /**
     *
     * Dashboard Add new Staff language translations
     *
     */
    'addNewStaff'  => [
        'title'  => 'Adicionar membro',
        'editTitle'  => 'Editar membro',
        'firstName'  => 'first_name',
        'email'  => 'email',
        'password'  => 'password',
        'department'  => 'Departamento',
        'roleName'  => 'role_name',
        'permission'  => 'permission',
        'staffImage'  => 'Avatar',
        'addStaffBtn'  => 'Adicionar membro',
        'updateStaffBtn'  => 'Salvar',
        'placeholders' => [
            'first_name'   => 'João',
            'lastName'   => 'Silva',
            'email'   => 'joao@empresa.com',
            'role_name'   => 'Ex: Analista',
            'perm_name'   => 'Permissão',
            'file'   => 'Selecionar imagem&hellip;',
        ],
    ],



    /**
     *
     * All Staffs language translations
     *
     */
    'allStaffs' => [
        'pageTitle' => 'Todos os Usuários | ',
        'title' => 'Usuário',
        'name' => 'Nome',
        'email' => 'E-mail',
        'department' => 'Departamento',
        'staffImage' => 'Avatar',
        'assignedTickets' => 'Acompanhando',
        'solvedTickets' => 'Resolvidos',
        'registeredAt' => 'Registro',
        'action' => 'Ação',
        'noStaffs' => 'Nenhum membro ',
    ],


    /**
     *
     * Settings page Languages translations
     *
     */
    'settings' => [
        'pageTitle' => 'Configurações | ',
        'title' => 'Configurações',
        'generalSettings' => 'Geral',
        'themeSettings' => 'Tema',
        'tiketSettings' => 'Chamado',
        'appSettings' => 'Notificações',
        'yourProfile' => 'Perfil',
    ],



    /**
     *
     * Sidebar view page translations
     *
     */
    'sidebar'   => [
        'mainMenu'  => 'Main Menu',
        'dashboard'  => 'Dashboard',
        'tickets'  => 'Chamados ',
        'allTickets'  => 'Todos chamados',
        'allTickets'  => 'Todos chamados',
        'newTickets'  => 'Novos',
        'pendingTickets'  => 'Pendentes',
        'solvedTickets'  => 'Resolvidos',
        'staffs' => 'Departamentos',
        'allStaffs' => 'Todos departamentos',
        'newStaffs' => 'Adicionar membro',
        'clients' => 'Usuário',
        'allclients' => 'Todos os usuário',
        'newclients' => 'Adicionar usuário',
        'settings' => 'Configurações',
        'logout' => 'Sair',
    ],



    /**
     *
     * Nav page translations
     *
     */
    'nav' => [
        'settings' => 'Configurações',
        'logout' => 'Sair',
        'notifications' => 'Notificações',
        'noNotifications' => 'Nenhuma notificação',
        'clearAll' => 'Limpar tudo',
        'placeholders' => [
            'formSearch' => 'Buscar por ID ou título do chamado'
        ],
    ],
    



    /**
     *
     * All tickets page frontend
     *
     */
    'allTickets' => [
        'pageTitle' => 'Chamados | ',
        'title' => 'Chamados ',
        'ticketID' => 'ID',
        'ticketTitle' => 'Título',
        'department' => 'Departamento',
        'date' => 'Data',
        'status' => 'Status',
        'action' => 'Ação',
        'noTickets' => 'Nada para mostrar.',
    ],



    /**
     *
     * Single ticket page frontend
     *
     */
    'allTickets' => [
        'id' => 'ID: ',
        'attachedFile' => 'ID: ',
    ],

    'errors' => [
        'siteRegistrations'  => 'Desculpe, atualmente o registro no sistema está desativado. ',
    ],



    /**
     *
     * Edit tickets page frontend
     *
     */
    'editTickets' => [
        'pageTitle' => 'Edição de chamado -  ',
        'attachFIle' => 'Anexo:',
        'file' => '<span class="browse">Procure</span> seu arquivo aqui&hellip;',
        'fileAttachWarning' => 'Ao anexar o novo arquivo, o antigo será <strong>excluído.</strong> Você não pode anexar mais de um arquivo.',
        'updateBtn' => 'Atualizar chamado',
        'placeholders' => [
            'subject' => 'assunto',
            'message' => 'Digite sua mensagem aqui',
        ],
    ],


    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Requisitos',
    ],


    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'title' => 'Permissões',
    ],


    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'title' => 'Configurações do servidor',
        'save' => 'Salvar .env',
        'success' => 'Suas configurações do arquivo .env foram salvas.',
        'errors' => 'Não é possível salvar o arquivo .env. Por favor, crie-o manualmente.',
    ],


    /**
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Finalizar',
        'finished' => 'O sistema foi instalado com sucesso.',
        'exit' => 'Clique aqui para sair',
    ],
];
