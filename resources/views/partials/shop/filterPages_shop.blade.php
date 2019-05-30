
<div class="filter-pages-left">
<div class="filter">
    <i class="material-icons filter-icon">
        arrow_drop_down
        </i><h4>Filtro</h4>
</div>
<div class="filter">
    <i class="material-icons filter-icon">
        arrow_drop_down
        </i><h4>Ordenar</h4>
</div>
<div class="pages">
    <i class="material-icons pages-icon">
        arrow_back_ios
        </i>
  <ul class="numeros">
    <?php for ($i=0; $i < ceil($quantity/3) ; $i++) {
      echo '<a href="">
        <li>'. ($i+1) .'</li>
      </a>';
    } ?>

  </ul>
  <i class="material-icons pages-icon">
      arrow_forward_ios
      </i>
</div>
</div>
