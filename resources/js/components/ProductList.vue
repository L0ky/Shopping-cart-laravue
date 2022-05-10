<template>
    <!-- <HeaderCart /> -->
    <div class="flex justify-center">
        <h1 class="text-4xl">Boutique</h1>
    </div>
    <div></div>
    <div class="mt-10 flex justify-center">
        <ul
            class="lg:flex lg:justify-around lg:flex-row flex flex-col items-center lg:flex-wrap lg:max-w-7xl"
        >
            <li v-for="product in shop" :key="product.id">
                <div>
                    <div class="shadow-xl my-10 p-10 rounded-xl w-96 border">
                        <div class="flex justify-center mb-10">
                            <img :src="product.image" width="150" alt="" />
                        </div>
                        <div>
                            <div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h1 class="text-xl">
                                            {{ product.name }}
                                        </h1>
                                    </div>
                                    <div>
                                        <p>ID: {{ product.id }}</p>
                                    </div>
                                </div>
                                <p class="text-[#42b883] text-xl mt-3">
                                    {{ product.price }}€
                                </p>
                            </div>
                        </div>
                        <div class="flex mt-8" @click="isActive">
                            <button
                                type="button"
                                @click="cart.add(product)"
                                class="btn-cart flex justify-around"
                            >
                                <span class="w-14"></span>
                                <span> Ajouter au panier </span>
                                <span class="ml-5 w-10 font-semibold">
                                    <i class="fa-solid fa-xmark"></i>
                                    {{ cart.getQuantity(product) }}
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
// import articles from "../../../storage/app/json/articles.json";
import { useCart } from "../stores/useCart";
import HeaderCart from "./HeaderCart.vue";

export default {
    components: { HeaderCart },
    setup() {
        return { cart: useCart() };
    },
    data() {
        return {
            // products: articles,
            shop: [],
        };
    },
    methods: {
        getProducts() {
            axios.get("/list").then((response) => {
                this.shop = response.data.shop;
            });
        },
    },
    created() {
        this.getProducts();
    },
};
</script>

<style></style>
