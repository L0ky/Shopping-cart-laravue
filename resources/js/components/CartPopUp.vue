<template>
    <div class="border-2 border-green-500 w-full rounded-lg bg-white shadow-xl">
        <div
            v-if="cart.length <= 0"
            class="flex py-5 items-center justify-center gap-4"
        >
            <p>Le panier est vide</p>
            <i class="fa-solid fa-face-frown"></i>
        </div>
        <div v-else>
            <ul>
                <li v-for="item in cart.items" :key="item.product.id">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <!-- <img src="../assets/logo.svg" width="40" alt="" /> -->
                                <img
                                    :src="item.product.image"
                                    width="30"
                                    alt=""
                                />
                            </div>
                            <div>
                                <p>{{ item.product.name }}</p>
                            </div>
                            <div>{{ item.product.price }}€</div>
                            <div>
                                <input
                                    v-model="item.quantity"
                                    type="number"
                                    min="1"
                                    class="border border-solid border-gray-300 rounded px-3 py-1.5 w-16 h-full"
                                />
                            </div>
                            <div
                                @click="cart.remove(item.product.id)"
                                class="cursor-pointer text-[#35495e]"
                            >
                                <i class="fa-solid fa-trash fa-lg"></i>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="px-5 py-5">
                <div class="flex justify-between text-xl">
                    <p>Prix total:</p>
                    <span class="text-[#42b883]">{{ cart.totalPrice }}€</span>
                </div>
            </div>
            <div class="flex px-2 pb-2 gap-2">
                <button class="btn-cart">Acheter</button>
                <button class="btn-cart-reverse">Voir le panier</button>
            </div>
        </div>
    </div>
</template>

<script>
import { useCart } from "../stores/useCart";
export default {
    setup() {
        return { cart: useCart() };
    },
};
</script>

<style></style>
