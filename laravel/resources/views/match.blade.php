<div class="row">
  <div class="col s12 m7">
    <div class="card">
      <div class="card-image">
        <img src="/img/icon_shake.png">
      </div>
      <div class="card-content cocktail">
        <span class="card-title">{{ $cocktail->name }}</span>
        <p>{{ $cocktail->ingredients }}</p>
      </div>
      <div class="bartender">
        <img src="http://placekitten.com/g/40/40" />
        <span class="votes"><span class="num">{{ $cocktail->bartenders[0]->pivot->vote }}</span>votes</span>
        <div>
          <h2>{{ $cocktail->bartenders[0]->name }}</h2>
          <h3>{{ $cocktail->bartenders[0]->restaurant->name }}</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="center-align">
    <a class="teal lighten-2 btn" onClick="location.reload()">Try Again</a>
  </div>

</div>
