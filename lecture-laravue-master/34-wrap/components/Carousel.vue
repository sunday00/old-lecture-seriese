<template>
<div class="main-carousel">
  <slot></slot>
</div>
</template>

<script>
import Flickity from 'flickity';
import 'flickity/dist/flickity.min.css'

export default {
    props:{
        wrapAround: {default: true},
        autoplay: {default: true}
    },
    mounted() {
        new Flickity(this.$el, {
            wrapAround : this.wrapAround,
            autoPlay : this.autoplay,
            cellAlign: "left",
            contain: true,
        });
    }
}
</script>

<style>

</style>