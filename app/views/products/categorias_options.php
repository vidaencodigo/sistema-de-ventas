<?php
/**
 * genera etiquetas option con los valores
 * de cada categoria registrada.
 */
if ($categorias) {
    foreach($categorias as $categoria):
    ?>

    <option value="<?=$categoria->id?>"><?=$categoria->nombre?></option>
    
    <?php
    endforeach;
}
?>