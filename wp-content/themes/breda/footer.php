<footer>
    <section class="section_logo_topo">
        <div class="div_logo_footer">
            <?php the_custom_logo(); ?>
        </div>
        <p>Conheça a nossa linha variada de produtos, para o seguimento de moda feminina.</p>
    </section>
    
    <?php get_template_part('template-parts/newsletter'); ?>
    
    <section class="section_navegacao_footer">
        <div class="div_navecacao_footer">
            <div class="caixa">
                
                <div class="div_info_footer">
                    <h3 class="titulo_footer">Quem Somos</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'categorias',
                            'menu_id'        => 'menu-principal-footer',
                            'menu' => 'Menu Principal',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>
                <div class="div_info_footer">
                    <h3 class="titulo_footer">Minha Conta</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'categorias',
                            'menu_id'        => 'menu-principal-footer',
                            'menu' => 'Menu Principal',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>
                <div class="div_info_footer">
                    <h3 class="titulo_footer">Contato</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'categorias',
                            'menu_id'        => 'menu-principal-footer',
                            'menu' => 'Menu Principal',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>
                <div class="div_info_footer">
                    <h3 class="titulo_footer">Políticas</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'categorias',
                            'menu_id'        => 'menu-principal-footer',
                            'menu' => 'Menu Principal',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php wp_footer(); ?>
</footer>