<?php
/*
Plugin Name: Miss Shop Brands
Plugin URI: ''
Description: Miss Shop Бренды
Version: 1.0
Author: Adilet Kamchibekov
Author URI: http://kamchibekov.esy.es
License: GPL2
*/
?>
<?php
    register_activation_hook(__FILE__,'createTable');
    add_action( 'admin_menu', 'add_admin_menu');
    add_action("delPost", "miss_delete_brand");
    add_action("insPost", "miss_add_brand");

    function add_admin_menu(){

        add_menu_page( 'Бренды', 'Бренды', 'manage_options', 'miss_shop_plugin_page', 'display_content');
    }

    function miss_delete_brand($id){
        global $wpdb;
        $wpdb->delete( "{$wpdb->prefix}brands", array( 'id' => $id ) );
    }

    function miss_add_brand($array){
		global $wpdb;
		$wpdb->insert("{$wpdb->prefix}brands",$array);
	}


    /*Подключаем CSS and JS*/
    function miss_shop_plugin_css($hook) {
        if (  $_GET["page"] == "miss_shop_plugin_page" ) {
            if ( ! did_action( 'wp_enqueue_media' ) ) {
                wp_enqueue_media();
            }

            wp_register_style( 'miss_shop_bootstrap_css', plugins_url( 'miss_brand/css/bootstrap.min.css' ) , array(), '1.0.0' );
            wp_enqueue_style( 'miss_shop_bootstrap_css');
            wp_register_style( 'miss_shop_bootstrap_theme_css', plugins_url( 'miss_brand/css/bootstrap-theme.css' ) , array(), '1.0.0' );
            wp_enqueue_style( 'miss_shop_bootstrap_theme_css');
            wp_register_style( 'miss_shop_fontawesome_theme_css', plugins_url( 'miss_brand/css/font-awesome.css' ) , array(), '1.0.0' );
            wp_enqueue_style( 'miss_shop_fontawesome_theme_css');

	        wp_register_script('miss-jquery',  plugins_url( 'miss_brand/js/jquery.js'),'','1.1', true);
	        wp_enqueue_script( 'miss-jquery');

	        wp_register_script('miss-bootstrap', plugins_url( 'miss_brand/js/bootstrap.min.js'),'','1.1', true);
	        wp_enqueue_script( 'miss-bootstrap');

	        wp_register_script('custom-js', plugins_url( 'miss_brand/js/custom.js'),'','1.1', true);
	        wp_enqueue_script( 'custom-js');
        }
    }
    add_action( 'admin_enqueue_scripts', 'miss_shop_plugin_css' );

function display_content(){

        if(isset($_GET["submit"]) and $_GET["submit"] == "del"){
            $id = $_GET["id"];
            do_action("delPost", $id);

	        $pluginPage = get_admin_url() . 'admin.php?page=miss_shop_plugin_page';

	        echo '<script> window.location = "' . $pluginPage . '"</script>';
        }

        if(isset($_GET["submit"]) and $_GET["submit"] == "ins"){

	        do_action("insPost", array('name'=>'brand1', 'img'=> '1.jpg'));

	        $pluginPage = get_admin_url() . 'admin.php?page=miss_shop_plugin_page';

	        echo '<script> window.location = "' . $pluginPage . '"</script>';

	  /*      $upload_dir = content_url() . '/uploads/brands';

	        $filename = $upload_dir .'/1.jpg';

	        $filetype = wp_check_filetype( basename( $filename ), null );

	        $wp_upload_dir = wp_upload_dir();

	        $attachment = array(
		        'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ),
		        'post_mime_type' => $filetype['type'],
		        'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
		        'post_content'   => '',
		        'post_status'    => 'inherit'
	        );

	        wp_insert_attachment( $attachment, $filename);
	  */
        }

	if(isset($_POST["miss_shop_plugin_brand_name"]) && isset($_FILES["miss_shop_plugin_brand_img"]) ){

        	if(!empty($_POST["miss_shop_plugin_brand_name"]) && empty($_FILES["miss_shop_plugin_brand_img"]['error'])){

        		$imageFile = $_FILES["miss_shop_plugin_brand_img"]['name'];

		        $file = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/brands/'. $_FILES["miss_shop_plugin_brand_img"]['name'];

		        if(!file_exists($file))
		        	if(move_uploaded_file($_FILES["miss_shop_plugin_brand_img"]['tmp_name'], $file)){

				        do_action("insPost", array('name'=>$_POST["miss_shop_plugin_brand_name"], 'img'=> basename($_FILES["miss_shop_plugin_brand_img"]['name'])));
			        }
	        }
	}

        echo '<br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Добавить Бренд </button>';


        echo '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				      </div>
				      <div class="modal-body">
				      
				      <form id="miss_shop_plugin_brand_form" action="'. get_admin_url() .'admin.php?page=miss_shop_plugin_page" method="post" enctype="multipart/form-data">
 						<label style="cursor: auto"> Название бренда </label>
				        <input type="text" name="miss_shop_plugin_brand_name" title="Название бренда" class="form-control">
				        <br>
				        <input type="file" name="miss_shop_plugin_brand_img" title="Выбрать фото"> 
				        <br>
				        <div class="text-right">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary" id="miss_shop_plugin_brand_post">Save changes</button>
						</div>
				      </form>
				         
				      </div>

				        
				    </div>
				  </div>
				</div>';


        global $wpdb;

        $sql = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}brands");

        if (empty($sql)) $out = '<h2 style="text-align: center;"> Бренды не найдены. </h2>';
        else {
            $out = '<div class="container" style="padding-right: 20px;">
                 <h2 style="text-align: center;"> Все Бренды </h2>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 50px; text-align: center;">id</th>
                            <th style="width: 80px; text-align: center">Дата</th>
                            <th style="width: 250px;">фото</th>
                            <th style="width: 250px;">Название</th>
                            <th>Удаление</th>
                        </tr>
                    </thead><tbody>
                    ';

            foreach ($sql as $item) {
                $date = date("d.m.Y", strtotime($item->create_date));

	            $upload_dir = content_url() . '/uploads/brands';

	            $img = $upload_dir .'/'.$item->img;

                $out .= '<tr>';
                $out .= '<td style="text-align: center;">' . $item->id . '</td>';
                $out .= '<td style="text-align: center;">' . $date . '</td>';
	            $out .= '<td><img src="' . $img . '" width ="100" height="50" alt=""></td>';
	            $out .= '<td>' . $item->name . '</td>';
                $out .= '<td style=" width: 50px; text-align: center;"> <div> <a class="btn btn-danger fa fa-trash" href="' . get_admin_url() . 'admin.php?page=miss_shop_plugin_page&submit=del&id=' . $item->id . '"></a> </div></td>';
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


		function createTable() {

			$upload = wp_upload_dir();
			$upload_dir = $upload['basedir'];
			$upload_dir = $upload_dir . '/brands';
			if (! is_dir($upload_dir)) {
				mkdir( $upload_dir, 0700 );
			}

				global $wpdb;
				$wpdb->query("IF NOT EXISTS {$wpdb->prefix}brands");
				$sql = "CREATE TABLE {$wpdb->prefix}brands (
		                    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
							name VARCHAR(100) NOT NULL,
							img VARCHAR(255) NOT NULL,
							create_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
							update_date DATETIME NOT NULL,
							PRIMARY KEY (id)
		                )
		                ENGINE=InnoDB AUTO_INCREMENT=1;";

				require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
				dbDelta($sql);
		}
?>