<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title><?php echo $this->fetch('title'); ?> | JoinChat</title>
        <?php
            echo $this->Html->css(array(
                'bootstrap.theme.min',
                'styles-private'
            ));
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
            <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
        <![endif]-->
        <?php echo $this->fetch('css'); ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <?php 
                    $links = array(
                        'index' => array('class' => '', 'html' => ''),
                        'newchat' => array('class' => '', 'html' => ''),
                        'chats' => array('class' => '', 'html' => ''),
                        'settings' => array('class' => '', 'html' => ''),
                    );
                    
                    $links[$activeOption]['class'] = 'active';

                    $links['index']['html'] = $this->Html->link(
                        $this->Html->tag('span', '', array('class' => 'icon glyphicon glyphicon-home btn btn-primary')) . $this->Html->tag('span', 'Inicio'),
                        '/index',
                        array('escape' => false, 'class' => $links['index']['class'])
                    );
                    $links['newchat']['html'] = $this->Html->link(
                        $this->Html->tag('span', '', array('class' => 'icon glyphicon glyphicon-plus btn btn-primary')) . $this->Html->tag('span', 'Nueva conversación'),
                        '#',
                        array('escape' => false, 'class' => $links['newchat']['class'], 'data-toggle' => 'modal', 'data-target' => '#new-chat-modal')
                    );
                    $links['chats']['html'] = $this->Html->link(
                        $this->Html->tag('span', '', array('class' => 'icon glyphicon glyphicon-comment btn btn-primary')) . $this->Html->tag('span', 'Mis conversaciones'),
                        '/index/chats',
                        array('escape' => false, 'class' => $links['chats']['class'])
                    );
                    $links['settings']['html'] = $this->Html->link(
                        $this->Html->tag('span', '', array('class' => 'icon glyphicon glyphicon-wrench btn btn-primary')) . $this->Html->tag('span', 'Configuración'),
                        '/account/settings',
                        array('escape' => false, 'class' => $links['settings']['class'])
                    );

                    echo <<<NAV
                        <ul class='sidebar-nav'>
                            <li class='sidebar-brand'>
                                <span class='brand-title'>
                                    JoinChat
                                </span>
                                <span class='helper-brand'>JC</span>
                                <a href="#" class="btn btn-default" id="menu-toggle"><span class="icon glyphicon glyphicon-menu-hamburger"></span></a>
                            </li>
                            <li>
                                {$links['index']['html']}
                            </li>
                            <li>
                                {$links['newchat']['html']}
                            </li>
                            <li>
                                {$links['chats']['html']}
                            </li>
                            <li>
                                {$links['settings']['html']}
                            </li>
                            <li>
                                {$this->Html->link(
                                    $this->Html->tag('span', '', array('class' => 'icon glyphicon glyphicon-off btn btn-primary')) . $this->Html->tag('span', 'Cerrar sesión'),
                                    array('controller' => 'Index', 'action' => 'logout'),
                                    array('escape' => false)
                                )}
                            </li>
                        </ul>
NAV;
                ?>
            </div>

            <div id="page-content-wrapper">
                <?php 
                    $flashMsg = $this->Session->flash();
                    $authMsg = $this->Session->flash('auth');

                    if ($flashMsg) :
                ?>
                <div class="alert alert-dismissible alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $flashMsg; ?>
                </div>
                <?php 
                    endif;

                    if ($authMsg) :
                ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $authMsg; ?>
                </div>
                <?php
                    endif;
                    echo $this->fetch('content');
                ?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="new-chat-modal" tabindex="-1" role="dialog" aria-labelledby="new-chat-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Contactos</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                            // echo $this->Form->create($model = 'Contact', $options = array('type' => 'get', 'url' => array('controller' => 'contacts', 'action' => 'search')));
                            echo $this->Form->input('aliasEmail', array(
                                    'type' => 'text',
                                    'label' => 'Alias / Correo',
                                    'class' => 'form-control',
                                    'div' => array('class' => 'form-group')
                                )
                            );
                            // echo $this->Form->end($options = null);
                        ?>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Contacto 1</a>
                            <a href="#" class="list-group-item">Contacto 2</a>
                            <a href="#" class="list-group-item">Contacto 3</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <ul id="chat-participants" class="list-inline pull-left">
                            <li class="contact-label">
                                <span class="contact-remove">&times;</span>
                                Default
                            </li>
                            <li class="contact-label">
                                <span class="contact-remove">&times;</span>
                                Contacto 5
                            </li>
                            <li class="contact-label">
                                <span class="contact-remove">&times;</span>
                                Default
                            </li>
                            <li class="contact-label">
                                <span class="contact-remove">&times;</span>
                                Contacto 5
                            </li>
                            <li class="contact-label">
                                <span class="contact-remove">&times;</span>
                                Default
                            </li>
                            <li class="contact-label">
                                <span class="contact-remove">&times;</span>
                                Contacto 5
                            </li>
                        </ul>
                        <button type="button" class="btn btn-primary">Empezar chat</button>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript' src='/js/jquery-1.11.2.min.js'></script>
        <script type='text/javascript' src='/js/bootstrap.min.js'></script>
        <script type='text/javascript'>
            $('#menu-toggle').click(function(e) {
                e.preventDefault();
                $('#wrapper').toggleClass('toggled');
            });
            $('.contact-remove').click(function(e) {
                $(this).parent().fadeOut(200, function() {
                    $(this).remove();
                });
            });
        </script>
        <?php echo $this->fetch('scripts'); ?>
    </body>
</html>