<?php $galeria = get_field('galeria', $post, false);
            if($galeria):
                    preg_match('/\[gallery.*ids=.(.*).\]/', $galeria, $ids);
                    $ids_imagenes = explode(",", $ids[1]);
                // echo "<pre>";
                // var_dump($ids_imagenes);
                // echo "</pre>";                   
                ?>
            <div class="galeria">
                <h2 class="text-center text-uppercase mt-5 encabezado"><span class="text-lowercase d-block">conoce nuestras </span> instalaciones</h2>
                <div class="imagenes pt-4">
                    <?php foreach($ids_imagenes as $id): ?>
                        <a href="#" data-target="#imagen_<?php echo $id; ?>" data-toggle="modal">
                            <?php $imagen_url = wp_get_attachment_image_src($id, 'thumbnail');                          
                            // echo "<pre>";
                            // var_dump($imagen_url);
                            // echo "</pre>";                            
                            ?>
                            <img src="<?php echo $imagen_url[0]; ?>">
                        </a>


                        <div class="modal fade" id="imagen_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="imagen_<?php echo $id; ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                    <?php $imagen_url = wp_get_attachment_image_src($id, 'full');?>
                                    <img src="<?php echo $imagen_url[0]; ?>" class="img-fluid" >
                                    </div>
                                    <!--modal-body-->
                                </div>
                                <!--modal-content-->
                            </div>
                            <!--modal-dialog-->
                        </div>
                        <!--modal-->

                    <?php endforeach ?>
                </div> <!--.imagenes-->

            </div> <!--.galeria-->
            <?php endif; ?>