import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = [ "cartCount" ]

    connect() {
        this.itemCount = 0; 
    }

    addToCart(e) {
        e.preventDefault()
        this.itemCount++;
        this.cartCountTarget.innerText  = this.itemCount || 0;
        console.log(`Produit, ${this.itemCount} ajouté au panier!`);
    }
}