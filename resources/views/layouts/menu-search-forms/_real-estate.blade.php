{{-- type of article --}}

<div class="box">
    <div class="title">Type d'annonce</div>
    <form action="">
        <div class="radios-options">
            <div class="radio"><input type="radio" name="article_type" value="-2" checked><span>Tout</span></div>
            <div class="radio"><input type="radio" name="article_type" value="1"><span>Vente</span></div>
            <div class="radio"><input type="radio" name="article_type" value="2"><span>Location</span></div>
        </div>
        <br>
    </form>
</div>

{{-- the rooms --}}

<div class="box">
    <div class="title">Chambres</div>
    <form action="">
        <div class="radios-options">
            <div class="radio"><input type="radio" name="rooms" value="-2" checked><span>Tout</span></div>
            <div class="radio"><input type="radio" name="rooms" value="1"><span>Chambre</span></div>
            <div class="radio"><input type="radio" name="rooms" value="2"><span>2 Chambres</span></div>
            <div class="radio"><input type="radio" name="rooms" value="3"><span>3 Chambres</span></div>
            <div class="radio"><input type="radio" name="rooms" value="4"><span>4 Chambres</span></div>
            <div class="radio"><input type="radio" name="rooms" value="5"><span>5 Chambres</span></div>
            <div class="radio"><input type="radio" name="rooms" value="6"><span>6 Chambres</span></div>
            <div class="radio"><input type="radio" name="rooms" value="7"><span>7 Chambres</span></div>
            <div class="radio"><input type="radio" name="rooms" value="-1"><span>Plus de 7 Chambres</span></div>
        </div>
        <br>
    </form>
</div>

{{-- living_rooms --}}

<div class="box">
    <div class="title">Salons</div>
    <form action="">
        <div class="radios-options">
            <div class="radio"><input type="radio" name="living_rooms" value="-2" checked><span>Tout</span></div>
            <div class="radio"><input type="radio" name="living_rooms" value="0"><span>Salon</span></div>
            <div class="radio"><input type="radio" name="living_rooms" value="2"><span>2 Salons</span></div>
            <div class="radio"><input type="radio" name="living_rooms" value="3"><span>3 Salons</span></div>
            <div class="radio"><input type="radio" name="living_rooms" value="-1"><span>Plus de 3 Salons</span></div>
        </div>
        <br>
    </form>
</div>


{{-- the bathrooms --}}

<div class="box">
    <div class="title">Salles de bains</div>
    <form action="">
        <div class="radios-options">
            <div class="radio"><input type="radio" name="bathrooms" value="-2" checked><span>Tout</span></div>
            <div class="radio"><input type="radio" name="bathrooms" value="1"><span>Salle</span></div>
            <div class="radio"><input type="radio" name="bathrooms" value="2"><span>2 Salles</span></div>
            <div class="radio"><input type="radio" name="bathrooms" value="3"><span>3 Salles</span></div>
            <div class="radio"><input type="radio" name="bathrooms" value="-1"><span>Plus de 3 Salles</span></div>
        </div>
        <br>
    </form>
</div>

{{-- the surface --}}

<div class="box">
    <div class="title">Surface (m2)</div>
    <form action="">
        <div class="input distance-input">
            <div class="suffex">m2</div>
        <input class="distance surface-progress" type="text" value="100" name="surface" >
    </div>
        <input type="range" class="range" max="100000" min="10" name="surface-progress" data-class="surface-progress">

        <div class="actions">
            <input class="clear" type="reset" value="EFFACER">
            <input class="submit" type="submit" value="VALIDER">
        </div>
    </form>
</div>

{{-- the floors --}}

<div class="box">
    <div class="title">étage</div>
    <form action="">
        <div class="input"><input type="text" placeholder="Tapez la marque" name="prix-min" ></div>
        <div class="radios-options">
            <div class="radio"><input type="radio" name="floor" value="-2" checked><span> Tout</span></div>
            <div class="radio"><input type="radio" name="floor" value="0"><span>Rez de la chaussé</span></div>
            <div class="radio"><input type="radio" name="floor" value="7"><span>1 Étage</span></div>
            <div class="radio"><input type="radio" name="floor" value="7"><span>2 Étage</span></div>
            <div class="radio"><input type="radio" name="floor" value="7"><span>3 Étage</span></div>
            <div class="radio"><input type="radio" name="floor" value="7"><span>4 Étage</span></div>
            <div class="radio"><input type="radio" name="floor" value="7"><span>5 Étage</span></div>
            <div class="radio"><input type="radio" name="floor" value="7"><span>6 Étage</span></div>
            <div class="radio"><input type="radio" name="floor" value="7"><span>Plus de 6 Étage</span></div>
        </div>
        <br>
    </form>
</div>
