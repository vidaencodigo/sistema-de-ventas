<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas | sistema de punto de venta web</title>
    <link rel="stylesheet" href="../app/assets/css/styles.css">


</head>


<body>


    <div class="app">
        <section class="side">
            <div class="side--content">

                <div class="brand">
                    Ventas
                </div>
                <div class="nav">
                    <div class="link--item">
                        <a href="#" class="item--link">Inicio</a>
                    </div>
                    <div class="link--item">
                        <a href="#" class="item--link">Productos</a>
                    </div>
                </div>
            </div>


        </section>
        <section class="main">
            <article class="main--header">
                <div>
                    <a href="#" class="btn sell">
                        Nueva venta
                    </a>
                </div>
            </article>
            <article class="main--content">

                <div class="div--form">
                    <div class="div--form--header">
                        <p>Nuevo Producto</p>
                    </div>
                    <div class="div--form--content">
                        <p>
                            Información de producto
                        </p>
                        <form class="form">
                            <div class="group--form">
                                <label for="code">Código</label>
                                <input type="text" class="input" placeholder="Código...">
                            </div>
                            <div class="group--form">
                                <label for="name">Nombre</label>
                                <input type="text" class="input" placeholder="Nombre...">
                            </div>
                            <div class="group--form">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="input" placeholder="Descripción...">
                            </div>
                            <div class="group--form">
                                <label for="categoria">Categoría</label>

                                <select name="categoria" id="categoria" class="input" class="input">
                                    <?php require_once "./app/views/products/categorias_options.php"?>
                                </select>
                            </div>

                            <div class="group--h">
                                <div class="group--form">
                                    <label for="price_u">Precio Unitario</label>
                                    <input type="number" step="any" min="0" class="input" value="0">
                                </div>
                                <div class="group--form">
                                    <label for="price_p">Precio Proveedor</label>
                                    <input type="number" step="any" min="0" class="input" value="0">
                                </div>
                            </div>



                            <div class="buttons">
                                <button class="btn">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </section>

    </div>

</body>

</html>