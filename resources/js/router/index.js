import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import Example from '../components/ExampleComponent'
import IndexArticle from '../components/Article/IndexComponent'

const router = new Router({
    routes:[
        {
            path: "/Dashboard",
            component: Example
        },

        {
            path: "/Article",
            component: IndexArticle
        }
    ]
})
export default router