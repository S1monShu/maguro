import { createStore } from 'vuex'
import axios from 'axios'
import { toRaw } from 'vue'


export default createStore({
  state: {
    products: [],
    cart: []
  },
  mutations: {
    SET_PRODUCTS_TO_VUEX: (state, products) => {
        state.products = products
    },
    SET_CART: (state, product) => {
      state.cart.push(product)
    },
    REMOVE_FROM_CART: (state, id) => {
      state.cart.splice(id, 1)
    }
  },
  actions: {
    async GET_PRODUCTS_FROM_API({commit}){
        return axios('http://127.0.0.1:8000/api/allDishes', {
            method: 'GET'
        })
        .then((response) => {
            
            commit('SET_PRODUCTS_TO_VUEX', response.data)
        })
    },
    async ADD_TO_CART({commit}, product){
      commit('SET_CART', product)
    },
    async DELETE_FROM_CART({commit}, id){
      commit('REMOVE_FROM_CART', id)
    }
  },
  getters: {
    PRODUCTS: (state) => (type) => {
        return state.products.filter(element => element.type === type)
    },
    CART(state){
      return state.cart
    }
  }
})
