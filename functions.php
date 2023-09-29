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
    $caravan = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'home',
        'object_types' => ['page'],
        'show on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    $caravan->add_field([
        'name' => 'vantagens',
        'id' => 'vantagem',
        'type' => 'text',
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