import './bootstrap'
import './components'
import Modal from './components/Modal'

new Vue({
    el: '#sho-admin-vue-app',
})

// Insert modal into a body
const ModalComp = Vue.extend(Modal)
var component = new ModalComp().$mount().$el
document.querySelector('body').appendChild(component)