 <!--Choose category Modal -->
 <div class="modal fade" id="add-product-modal-1" tabindex="-1" role="dialog" aria-labelledby="add-product-modal-1Title"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content product-modal">

             <div class="close" type="button" data-dismiss="modal">X</div>
             <div class="modal-carte-content">
                 <div class="row">
                     <div class="col-6">
                         <div class="title">
                             Choisissez une catégorie
                         </div>
                         <ul class="categories parent-categories">
                             <li data-category="vehicules"><a href="#"><i class="fas fa-car"></i> vehicules</a>
                             </li>
                             <li data-category="informatique-et-multimedia"><a href="#"><i
                                         class="fa-solid fa-mobile-screen"></i>informatique et multimedia</a></li>
                             <li data-category="immobiler"><a href="#"><i
                                         class="fa-solid fa-house-chimney"></i>immobiler</a></li>
                             <li data-category="emploi-et-services"><a href="#"><i
                                         class="fa-solid fa-toolbox"></i> emploi et services</a></li>
                             <li data-category="maison-et-jardin"><a href="#"><i class="fas fa-car"></i>maison et
                                     jardin</a></li>
                             <li data-category="loisirs-et-divertissement"><a href="#"><i
                                         class="fa-solid fa-futbol"></i> loisirs et divertissement</a></li>
                             <li data-category="habillement-et-bien-etre"><a href="#"><i
                                         class="fa-solid fa-shirt"></i>habillement et bien etre</a></li>
                             <li data-category="entreprises"><a href="#"><i
                                         class="fa-solid fa-building-columns"></i>entreprises</a></li>
                             <li data-category="autres"><a href="#"><i class="fa-solid fa-box-open"></i>autres</a>
                             </li>
                         </ul>
                     </div>
                     <div class="col-6">
                         <div class="sub-categories">
                             <div class="title">
                                 Choisissez une shos-catégorie
                             </div>
                             @foreach (ParentCategories() as $PCategory)
                                 <ul class="categories sub-categpries-wrapper {{$PCategory->slug}}">
                                     @foreach (SubCatsOfCat($PCategory->id) as $Category)
                                         <li>
                                             <form action="{{ route('add-product-info') }}" method="POST">
                                                 @csrf
                                                 <input name="category_id" value="{{$Category->id}}" hidden>
                                                 <button type="submit">{{$Category->name}}</button>
                                             </form>
                                         </li>
                                     @endforeach
                                 </ul>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>
             <div class="product-modal-footer">
                 <h5>Vous étes un vendeur professionnel et recherchez des clients pour développer votre chiffre
                     d'affaires ?</h5>
                 <p>Ouvrez votre boutique PRO sur Admar !</p>
                 <a href="#">SAVOIR PLUS</a>
             </div>
         </div>
     </div>
 </div>
