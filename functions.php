<?php 

function get_field($key, $page_id = 0){
    $id = $page_id !== 0 ? $page_id : get_the_ID();

    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0){
    echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'cmb2_fields_init');
function cmb2_fields_init(){
    $h1Vantagens = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Elementos da Pagina Home - Titulos Vantagens',
        'object_types' => ['page'],
        'show on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    $h1 = $h1Vantagens->add_field([
        'name' => 'Títulos Vantagens',
        'id' => 'vantagensh1',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Titulos H1 Vantagens {#}',

        ],
    ]);

    $h1Vantagens->add_group_field($h1, [
        'name' => 'Titulo',
        'id' => 'titulovantagem',
        'type' => 'text',
    ]);

    $h1Vantagens->add_group_field($h1, [
        'name' => 'Descrição Vantagens',
        'id' => 'descricaovantagem',
        'type' => 'text',
    ]);

    $h1Vantagens->add_group_field($h1, [
        'name' => 'icones',
        'id' => 'iconesvantagem',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    

}



add_action('cmb2_admin_init', 'cmb2_fields_locais');
function cmb2_fields_locais(){
    $cmb = new_cmb2_box([
        'id' => 'locais_box',
        'title' => 'Fotos',
        'object_types' => ['page'],
        'show on' => [
            'key' => 'page-template',
            'value' => 'page-locais.php'
        ],
    ]);
    $cmb->add_field([
        'name' => 'Foto Locais',
        'id' => 'foto_locais',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);
}

?>