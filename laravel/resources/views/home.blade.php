@extends('master')

@section('content')

<div id="components">

<?php
shuffle($spirits);
shuffle($flavors);
shuffle($categories);
?>

<div class="component row">
  <div class="col">
    <div class="card-panel blue-grey darken-1">
      <div class="component-name white-text"><?php echo $spirits[0]['name'] ?></div>
    </div>
  </div>
</div>

<div class="component row">
  <div class="col">
    <div class="card-panel blue-grey darken-1">
      <div class="component-name white-text"><?php echo $flavors[0]['name'] ?></div>
    </div>
  </div>
</div>

<div class="component row">
  <div class="col">
    <div class="card-panel blue-grey darken-1">
      <div class="component-name white-text"><?php echo $categories[0]['name'] ?></div>
    </div>
  </div>
</div>

<!--
  <div class="component card-container row">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Gin</span>
        </div>
        <div class="card-action">
          <p>I like gin. Swipe me bae.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="component card-container row">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Campari</span>
        </div>
        <div class="card-action">
          <p>You're gross</p>
        </div>
      </div>
    </div>
  </div>

  <div class="component card-container row">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">herbal</span>
        </div>
        <div class="card-action">
          <p>so earthy</p>
        </div>
      </div>
    </div>
  </div>

  <div class="component card-container row">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Scotch</span>
        </div>
        <div class="card-action">
          <p>Ew.</p>
        </div>
      </div>
    </div>
  </div> -->

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
