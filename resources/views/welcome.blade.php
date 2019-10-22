<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>VUEJS!</title>
  </head>
  <body>
    <div id="app">
        <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <button class="btn btn-primary" v-on:click='editing=true'>Edit</button>
                <button class="btn btn-info" v-on:click='editing=false'>Cancel</button>
              <div>  
                <h5>Items</h5>
                <ul>
                    <li v-for='item in items'>
                        @{{ item }}
                        <button class="btn-btn-primary" 
                            v-if='editing' 
                            v-on:click='addToCart(item)'>Add</button>
                    </li>
                </ul>
            </div>
            <div>
                <h5>Cart</h5>
                <ul>
                    <li v-for='cart_item in cart'>
                        @{{ cart_item }}
                        <button class="btn-warning" 
                            v-if='editing'
                            v-on:click='removeFromCart(cart_item)'>Remove</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        var vm = new Vue({
                el: '#app',
                data: {
                    items: ['Shoes', 'Bags', 'Hotdog', 'Watch', 'Pants'],
                    cart: [],
                    editing: false
                },
                methods:{
                    addToCart(item){
                        this.cart.push(item);
                        var index = this.items.indexOf(item);
                        this.items.splice(index, 1);
                    },
                    removeFromCart(item){
                        var index = this.cart.indexOf(item);
                        this.cart.splice(index, 1);
                        this.items.push(item);
                    }
                }
            })
    </script>
  </body>
</html>