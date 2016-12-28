<?php
/*
Plugin Name: Архив продуктов
Plugin URI: kupislona.kg
Description: Плагин выведет архив товаров в отдельную страницу для восстановления
Version: 1.0
Author: Adilet Kamchibekov
Author URI: http://kamchibekov.esy.es
License: GPL2
*/
?>
<?php
    add_action( 'admin_menu', 'add_admin_menu_product');

    function add_admin_menu_product(){

        add_menu_page( 'Архив товаров', 'Архив товаров', 'manage_options', 'kupislona_archive_product', 'display_products');
    }

    /*Подключаем CSS and JS*/
    function kupislona_archive_product_plugin_css($hook) {
        if (  $_GET["page"] == "kupislona_archive_product" ) {
            if ( ! did_action( 'wp_enqueue_media' ) ) {
                wp_enqueue_media();
            }

            wp_register_style( 'kupislona_archive_product_bootstrap_css', plugins_url( 'kupislona_product/css/bootstrap.css' ) , array(), '1.0.0' );
            wp_enqueue_style( 'kupislona_archive_product_bootstrap_css');
            wp_register_style( 'kupislona_archive_product_bootstrap_theme_css', plugins_url( 'kupislona_product/css/bootstrap-theme.css' ) , array(), '1.0.0' );
            wp_enqueue_style( 'kupislona_archive_product_bootstrap_theme_css');;
        }
    }
    add_action( 'admin_enqueue_scripts', 'kupislona_archive_product_plugin_css' );

//----------------------------------------------------------------------------------

    add_action( 'trashed_my', 'my' );

    function my($id){
        $result = wp_untrash_post($id);
        global $wpdb;
        $wpdb->update( $wpdb->posts, array('post_type' => 'product' ), array( 'ID' => $id ) );
    }

    add_action( 'trashed_post', 'my_func' ); // calling global func trashed_post();
    function my_func( $postid ){

        global $post_type;
        global $wpdb;

        if ( $post_type == 'product' ){
            $wpdb->update( $wpdb->posts, array('post_type' => 'slon_archive' ), array( 'ID' => $postid ) );
        }
    }


//------------------------------------------------------------------------------------------------------------------


    function display_products(){

        if(isset($_GET["submit"]) and $_GET["submit"] == "restore"){
            $id = $_GET["id"];
           do_action('trashed_my', $id);
        }

        if(isset($_GET["submit"]) and $_GET["submit"] == "delete"){
            global $wpdb;
            $id = $_GET["id"];
            $wpdb->delete( $wpdb->posts, array('id'=>$id));
        }



        global $wpdb;

        $sql = $wpdb->get_results("SELECT * FROM {$wpdb->posts} WHERE post_type in ('slon_archive')");

        if (empty($sql)) $out = '<h2 style="text-align: center;"> Архив товаров пуст. </h2>';
        else {
            $out = '<div class="container" style="padding-right: 20px;">
                 <h2 style="text-align: center;"> Купи слона архив товаров</h2>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center; width: 20px !important; ">ID</th>
                            <th style="text-align: center; width: 50px; ">Фото</th>
                            <th style="width: 250px;">Название товара</th>
                            <th style="width: 250px;">Категория</th>
                            <th style="text-align: center;">Восстановить/Удалить</th>

                        </tr>
                    </thead><tbody>
                    ';

            foreach ($sql as $item) {
                $item_cats ="";
                $img = get_the_post_thumbnail($item->ID, array(50,50));
                $categories =get_the_terms( $item->ID, 'product_cat' );// get_the_category_by_ID(1);

                foreach($categories as $category ){
                    $item_cats .= $category->name . ', ';
                }

                $out .= '<tr>';
                $out .= '<td style=" text-align: center">' . $item->ID . '</td>';
                $out .= '<td style=" text-align: center;">'. $img .'</td>';
                $out .= '<td style=" text-align: left;">' . $item->post_title . '</td>';
                $out .= '<td style=" text-align: left;">' .  $item_cats . '</td>';
                $out .= '<td style=" width: 50px; text-align: center;"> <div> <a class="btn btn-primary glyphicon glyphicon-repeat" href="' . get_admin_url() . 'admin.php?page=kupislona_archive_product&submit=restore&id=' . $item->ID . '"></a>'.
                ' <a class="btn btn-danger glyphicon glyphicon-trash" href="' . get_admin_url() . 'admin.php?page=kupislona_archive_product&submit=delete&id=' . $item->ID . '"></a> </div></td>';
                $out .= '</tr>';
            }
            $out .= ' </tbody>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                       ';
        }
            echo $out;

    }
?>