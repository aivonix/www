<template>
    <div class="boxes">
        <div class="box" v-for="box in boxes" :key="box.id" :style="'background: '+box.colour+'; border: 1px solid black;'">
            <div v-if="box.link">
                <h3><a :href="box.link" target="blank">{{ box.title }}</a></h3>
            </div>
            <div v-if="!box.link">
                <a class="add" :href="'/boxes/'+box.id+'/edit'">+</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => {
            return {
                boxes: [],
            }
        },
        mounted() {
            let api = "http://localhost/boxes/";
            this.axios.get(api).then((response) => {
                console.log(response.data);
                this.boxes = response.data;
            })
        }
    }
</script>
