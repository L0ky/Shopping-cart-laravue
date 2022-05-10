require("./bootstrap");

import { createApp } from "vue";
import { createPinia } from "pinia";
import ExampleComponent from "./components/ExampleComponent.vue";
import HeaderCart from "./components/HeaderCart.vue";
import ProductList from "./components/ProductList.vue";

const app = createApp({});

app.use(createPinia());

app.component("example-component", ExampleComponent);
app.component("product-list", ProductList);
app.component("HeaderCart", HeaderCart);

app.mount("#app");
