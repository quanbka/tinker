<div id="app">
    <category-box v-bind:category="category" v-for="category in categories"></category-box>
    <infinite-loading @infinite="getNext"></infinite-loading>
</div>
