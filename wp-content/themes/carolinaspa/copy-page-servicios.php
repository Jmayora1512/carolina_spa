<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?php the_title(); ?></h2>
            </div>
        </div>
</div>


<div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center"><?php the_title(); ?></h2>

                <div id="servicios" role="tablist" aria-multiselect-center="true">
                        <div class="card">
                            <div class="card-header py-2" role="tab" id="servicio1">
                                <h3 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                                        Servicio 1
                                    </button>
                                </h3>
                            </div><!--.card-header-->
                            <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                                <div class="card-body">
                                    <p>Praesent in dolor sollicitudin, faucibus justo quis, venenatis sapien. Proin eget dolor consequat, hendrerit mauris non, ultricies ligula. Donec molestie, nisl sed euismod pellentesque, odio mauris porta sem, vitae fermentum lacus arcu ac mauris. Nunc quis quam eget lectus mollis auctor sed id diam. Proin in interdum nunc. Fusce bibendum ut tellus et rutrum. Vivamus metus augue, auctor in velit at, viverra egestas mi.</p>
                                </div>
                            </div>
                        </div><!--.card-->

                        <div class="card">
                            <div class="card-header" id="servicio2">
                                <h3 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                                        Servicio 2
                                    </button>
                                </h3>
                            </div><!--.card-header-->
                            <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                                <div class="card-body">
                                    <p>Praesent in dolor sollicitudin, faucibus justo quis, venenatis sapien. Proin eget dolor consequat, hendrerit mauris non, ultricies ligula. Donec molestie, nisl sed euismod pellentesque, odio mauris porta sem, vitae fermentum lacus arcu ac mauris. Nunc quis quam eget lectus mollis auctor sed id diam. Proin in interdum nunc. Fusce bibendum ut tellus et rutrum. Vivamus metus augue, auctor in velit at, viverra egestas mi.</p>
                                </div>
                            </div>
                        </div><!--.card-->

                        <div class="card">
                            <div class="card-header" id="servicio3">
                                <h3 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                                        Servicio 3
                                    </button>
                                </h3>
                            </div><!--.card-header-->
                            <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                                <div class="card-body">
                                    <p>Praesent in dolor sollicitudin, faucibus justo quis, venenatis sapien. Proin eget dolor consequat, hendrerit mauris non, ultricies ligula. Donec molestie, nisl sed euismod pellentesque, odio mauris porta sem, vitae fermentum lacus arcu ac mauris. Nunc quis quam eget lectus mollis auctor sed id diam. Proin in interdum nunc. Fusce bibendum ut tellus et rutrum. Vivamus metus augue, auctor in velit at, viverra egestas mi.</p>
                                </div>
                            </div>
                        </div><!--.card-->
                    </div>


            </main>
        <?php get_sidebar(); ?>

        </div>
    </div>

<?php endwhile;  ?>
<?php get_footer(); ?>