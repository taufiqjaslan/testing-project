<template>
    <div>
        <h1>List Quotes</h1>
        <ul>
            <li v-for="quote in quotes" :key="quote">{{ quote }}</li>
        </ul>
        <button @click="refreshQuotes">Refresh</button>
    </div>
</template>

<script>
export default {
    props: ["initialQuotes"],
    data() {
        return {
            quotes: this.initialQuotes,
        }
    },
    methods: {
        refreshQuotes() {
            axios.post("/list_quotes/refresh").then((response) => {
                this.quotes = response.data;
            });
        }
    }
}
</script>
