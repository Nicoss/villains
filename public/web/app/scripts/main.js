console.log("Congratulations ! You've mad it throught installation.");

const Foo = { 
    template: '<div>foo</div>' 
};
const Bar = { 
    template: '<div>bar</div>' 
};

const routes = [
  { path: '/foo',       component: Foo },
  { path: '/bar',       component: Bar }
];

const router = new VueRouter({
  routes // short for `routes: routes`
});

var app = new Vue({
    router,
    delimiters: ['${', '}'],
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
}).$mount('#app');