@extends('master')

@section('content')

<div id="components">

<?php
shuffle($spirits);
shuffle($flavors);
shuffle($categories);
?>

  <div class="component card-container row" data-type="spirits" data-nameid="<?php echo $spirits[0]['id'] ?>">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $spirits[0]['name'] ?></span>
        </div>
        <div class="card-action">
          <p>spirit</p>
        </div>
      </div>
    </div>
  </div>

  <div class="component card-container row" data-type="flavors" data-nameid="<?php echo $flavors[0]['id'] ?>">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $flavors[0]['name'] ?></span>
        </div>
        <div class="card-action">
          <p>flavor</p>
        </div>
      </div>
    </div>
  </div>

  <div class="component card-container row" data-type="categories" data-nameid="<?php echo $categories[0]['id'] ?>">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $categories[0]['name'] ?></span>
        </div>
        <div class="card-action">
          <p>mood</p>
        </div>
      </div>
    </div>
  </div>

  <div class="component card-container row">
    <div class="col">
      <div class="card blue-grey lighten-1">
        <div class="card-content white-text">
          <span class="card-title">shaking...</span>
        </div>
        <div class="card-action">
          <p>finding you something good</p>
        </div>
      </div>
    </div>
  </div>

</div>
<div id="control">
  <div class="button no">
    <a href="#" class="trigger"></a>
  </div>
  <div class="button yes">
    <a href="#" class="trigger"></a>
  </div>
</div>

@stop
