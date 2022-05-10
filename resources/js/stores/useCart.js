import { defineStore } from "pinia";
import productStock from "../business/productStock";

export const useCart = defineStore("useCart", {
    state: () => ({
        items: [],
    }),
    getters: {
        length() {
            return this.items.length;
        },
        totalPrice() {
            let somme = 0;
            for (let i = 0; i < this.items.length; i++) {
                const item = this.items[i];
                somme += item.product.price * item.quantity;
            }
            return somme;
        },
    },
    actions: {
        add(product) {
            const productFound = this.find(product);
            if (productFound) {
                productFound.quantity++;
                return;
            }
            const newProduct = new productStock(product, 1);
            this.items.push(newProduct);
        },

        find(product) {
            return this.items.find((item) => item.product == product);
        },

        getIndexById(productId) {
            return this.items.findIndex(
                (item) => item.product.id === productId
            );
        },

        remove(productId) {
            const productIndex = this.getIndexById(productId);
            if (productIndex == undefined) return;
            this.items.splice(productIndex, 1);
        },

        getQuantity(product) {
            const productFound = this.find(product);
            if (productFound) {
                return productFound.quantity;
            }
            return 0;
        },
    },
});
