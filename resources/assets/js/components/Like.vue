<template>
  <a class="likes" v-bind:class="{ liked: haveLiked }" href="#" @click.prevent="like(palette.id)"><i class="fa fa-heart"></i> {{likes}}</a>

</template>

<script>
  export default {

    props: ['palette'],

    data: function () {
      return {
        likes: '',
        haveLiked: false
      }
    },

    mounted() {
      // set likes value as passed prop like value.
      // using seperate data value since its not possible
      // for chid to update value of parent
      this.likes = this.palette.likes;

      // if localstorage exist set haveLiked value to true
      // this will toggle unlike state of the button
      if (localStorage.getItem('palettr-like-' + this.palette.id)) {
        this.haveLiked = true;
        console.log('storage finns');
      }
    },

    methods: {

      like: function (id) {
        if (!this.haveLiked) {
          this.increment(id);
        } else {
          this.decrement(id);
        }
      },

      /*
      * Method to like a palette
      * Sends PUT request to Laravel backend to increment like value
      *
      * @param {id} id of the palette
      */
      increment: function (id) {

        // PUT request that iterates like value
        this.$http.put('/likes/' + id + '/like').then((response) => {

              // toggle haveLiked state
              this.haveLiked = true;

              // set localStorage
              localStorage.setItem('palettr-like-' + id, true);

              // method that updates like value
             this.getNrOfLikes(id);
           }, (response) => {
             console.log('error')
           });

      },

      decrement: function (id) {
        // PUT request that iterates like value
        this.$http.put('/likes/' + id + '/unlike').then((response) => {

              // toggle haveLiked state
              this.haveLiked = false;

              // remove localStorage
              localStorage.removeItem('palettr-like-' + id);

              // method that updates like value
             this.getNrOfLikes(id);
           }, (response) => {
             console.log('error')
           });
      },

      /*
      * Method to make GET request and update like value
      *
      * @param {id} id of the palette in question
      */
      getNrOfLikes: function(id) {

        this.$http.get('/likes/' + id).then((response) => {
             this.likes = response.body.likes;
           }, (response) => {
             console.log('error')
           });

      }

    }
  }
</script>

<style lang="sass">
  @import '../../sass/1-utils/variables';

  a.likes {
    border: 1px solid $brand-danger;
    padding: 4px 10px;
    color: $brand-danger;
    border-radius: $border-radius-base;
    margin-right: 5px;
    transition: all 0.25s ease-in-out;

      &:hover {
        color: white;
        background-color: $brand-danger;
      }
  }

  a.liked {
    background-color: $brand-danger;
    color: white;
  }
</style>
