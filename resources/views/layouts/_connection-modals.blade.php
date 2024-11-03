 <!--Login Modal -->
 <div class="modal fade" id="connection-modal" tabindex="-1" role="dialog" aria-labelledby="connection-modalTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <h3 class="header login-chooses">
                 <span class="selected" data-class="compte">Mon Compte</span>
                 <span data-class="shop">Ma Boutique</span>
             </h3>
             <div class="content compte">
                 <h3 class="title text-center">
                     Connexion
                 </h3>
                 <form action="{{route('login')}}" method="POST">
                    @csrf
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-envelope"></i></div>
                         <input type="tetx" name="email" placeholder="Email">
                     </div>
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-lock"></i></div>
                         <input type="password" name="password" autocomplete=false placeholder="Mote de passe">
                     </div>

                     {{-- reset password modal --}}
                     <button class="password-messing" type="button" data-toggle="modal"
                         data-target="#reset-password-modal" data-keyboard='false'>Mote de passe Oublié?</button>


                     <button type="submit" class="submit" href=""> SE CONNECTER</button>
                 </form>
                 <span class="register-link">Vous étes nouvaou? <a href="{{ route('register') }}">S'inscrire
                         gratuitement</a></span>

                 <h4>OU CONNECTER AVEC</h4>

                 <div class="facebook"><i class="fa-brands fa-facebook"></i> CONNECTER
                     AVEC FACEBOOK</div>
                 <div class="google"><i class="fa-brands fa-google"></i> CONNECTER AVEC
                     GOOGLE</div>

                 <p class="description">
                     En vous connectant, vous acceptez les termes et conditions et la
                     politique de confidentialité de admar
                 </p>
             </div>

             <div class="content shop">
                 <h3 class="title text-center">
                     <strong>Bonjour!</strong><br>
                     <p>Se Connecter à votre boutique</p>
                 </h3>
                 <form action="{{route('login')}}" method="POST">
                    @csrf
                     <label for="email">Email</label>
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-envelope"></i></div>
                         <input type="tetx" name="email" placeholder="Email de votre magasin">
                     </div>
                     <label for="password">Mote de passe</label>
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-lock"></i></div>
                         <input type="password" name="password" autocomplete=false placeholder="Mote de passe">
                     </div>

                     {{-- reset shop password modal --}}
                     <button class="shop-password-messing" type="button" data-toggle="modal"
                         data-target="#reset-shop-password-modal" data-keyboard='false'>Mote de passe Oublié?</button>
                     <button type="submit" class="submit" href="">OUVRIRE MA BOUTIQUE</button>
                 </form>
             </div>

         </div>
     </div>
 </div>


 {{-- SHOP MODAL --}}

 <div class="modal fade" id="reset-shop-password-modal" tabindex="-1" role="dialog"
     aria-labelledby="reset-shop-password-modalTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="content rese-password reset-password-shop">
                 <h3 class="title text-center">
                     Mot de passe oublié pour accéder à votre bpoutique?
                 </h3>

                 <p>Entrer votre adresse email et nous vous enverrons un lien pour réinitialiser
                     votre mot de passe de votre magasin.</p>

                 <form action="">
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-envelope"></i></div>
                         <input type="tetx" name="email" placeholder="Entrez votre adresse email">
                     </div>
                     <button type="submit" class="submit" href="">RÉINITIALISER MOT DE
                         PASSE</button>
                 </form>

                 <h6>Et ensuite</h6>
                 <ul>
                     <li>1- Vous allez rencevoir un <strong>e-mail</strong></li>
                     <li>2- Cliquez sur le <strong>lien</strong></li>
                     <li>3- Coisissez votre <strong>mote de passe</strong></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>


 {{-- COMPTE MODAL --}}
 <div class="modal fade" id="reset-password-modal" tabindex="-1" role="dialog"
     aria-labelledby="reset-password-modalTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="content rese-password">
                 <h3 class="title text-center">
                     <i class="fas fa-key"></i> Mot De Passe Oublié
                 </h3>

                 <p>Entrer votre adresse email et nous vous enverrons un lien pour réinitialiser
                     votre mot de passe.</p>

                 <form action="">
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-envelope"></i></div>
                         <input type="tetx" name="email" placeholder="Email">
                     </div>
                     <button type="submit" class="submit" href="">ENVOYER</button>
                 </form>

                 <h6>Et ensuite</h6>
                 <ul>
                     <li>1- Vous allez rencevoir un <strong>e-mail</strong></li>
                     <li>2- Cliquez sur le <strong>lien</strong></li>
                     <li>3- Coisissez votre <strong>mote de passe</strong></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>



 {{-- SHOP CONNECTION MODAL --}}
 <div class="modal fade" id="shop-connection-modal" tabindex="-1" role="dialog"
     aria-labelledby="shop-connection-modalTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="content shop-modal">
                 <h3 class="title text-center">
                     <strong>Bonjour!</strong><br>
                     <p>Se Connecter à votre boutique</p>
                 </h3>
                 <form action="">
                     <label for="email">Email</label>
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-envelope"></i></div>
                         <input type="tetx" name="email" placeholder="Email de votre magasin">
                     </div>
                     <label for="password">Mote de passe</label>
                     <div class="input">
                         <div class="prifix"><i class="fa-solid fa-lock"></i></div>
                         <input type="password" name="password" autocomplete=false placeholder="Mote de passe">
                     </div>

                     {{-- reset shop password modal --}}
                     <button class="shop-password-messing" type="button" data-toggle="modal"
                         data-target="#reset-shop-password-modal" data-keyboard='false'>Mote de passe Oublié?</button>
                     <button type="submit" class="submit" href="">OUVRIRE MA BOUTIQUE</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
